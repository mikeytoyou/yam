<?php

namespace alex\yamBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use alex\yamBundle\Entity\Paquete;
use alex\yamBundle\Form\PaqueteType;
use alex\yamBundle\Entity\Ruta;

/**
 * Paquete controller.
 *
 */
class PaqueteController extends Controller
{
    /**
     * Lists all Paquete entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $paquetes = $em->getRepository('alexyamBundle:Paquete')->findAll();

        return $this->render('paquete/index.html.twig', array(
            'paquetes' => $paquetes,
        ));
    }
      public function listadehotelesjsonAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hoteles = $em->getRepository('alexyamBundle:Hotel')->findAll();
        $hoteleslista=array();
        foreach ($hoteles as $hotel){
            
            array_push($hoteleslista, array('nombre'=>$hotel->getNombre(),'categoria'=>$hotel->getCategoria()));
     
    }
    
       return new \Symfony\Component\HttpFoundation\Response(json_encode($hoteleslista));
    }

    /**
     * Creates a new Paquete entity.
     *
     */
    public function newAction(Request $request)
    {
        $paquete = new Paquete();
        $form = $this->createForm('alex\yamBundle\Form\PaqueteType', $paquete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paquete);
            $em->flush();

            return $this->redirectToRoute('paquete_show', array('id' => $paquete->getId()));
        }

        return $this->render('paquete/new.html.twig', array(
            'paquete' => $paquete,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Paquete entity.
     *
     */
    public function showAction(Paquete $paquete)
    {
        $deleteForm = $this->createDeleteForm($paquete);

        return $this->render('paquete/show.html.twig', array(
            'paquete' => $paquete,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Paquete entity.
     *
     */
    public function editAction(Request $request, Paquete $paquete)
    {
        $deleteForm = $this->createDeleteForm($paquete);
        $editForm = $this->createForm('alex\yamBundle\Form\PaqueteType', $paquete);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paquete);
            $em->flush();

            return $this->redirectToRoute('paquete_edit', array('id' => $paquete->getId()));
        }

        return $this->render('paquete/edit.html.twig', array(
            'paquete' => $paquete,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Paquete entity.
     *
     */
    public function deleteAction(Request $request, Paquete $paquete)
    {
        $form = $this->createDeleteForm($paquete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($paquete);
            $em->flush();
        }

        return $this->redirectToRoute('paquete_index');
    }

    /**
     * Creates a form to delete a Paquete entity.
     *
     * @param Paquete $paquete The Paquete entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Paquete $paquete)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paquete_delete', array('id' => $paquete->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
        public function paqueteconstructorAction(Request $request,$idcliente)
    {
           $em = $this->getDoctrine()->getManager(); 
     $repcli=$em->getRepository('alexyamBundle:TrCustomer');
     $cliente= $repcli->find($idcliente);

        return $this->render('paquete/constructorpaquete.html.twig',array('cliente'=>$cliente->getIdCustomer()));
    }
    
     public function paqueteconstructormayAction(Request $request,$idcliente)
    {
            
     $paquetereq= json_decode($this->getRequest()->getContent());
     $duraciones=$paquetereq->duraciones;
     $paquete = new Paquete();
    $em = $this->getDoctrine()->getManager();
    $repcli=$em->getRepository('alexyamBundle:TrCustomer');
     $cliente= $repcli->find($idcliente);
     
      $paquete->setIdCustomer( $cliente->getIdCustomer());
            $em->persist($paquete);
            $em->flush();
     foreach ($duraciones as $duracion){
       $dur =new \alex\yamBundle\Entity\duracion();
         $dur->setPaquete($paquete);
       $dur->setNumerodedias($duracion->dias);
        $dur->setNumerodenoches($duracion->noches);
        
        $inicio = new \DateTime($duracion->fechainicio);

        $dur->setFechainicio($inicio);
        
        
        $fin = new \DateTime($duracion->fechafin);
         
                 
          $dur->setFechafin($fin);
      
          $em->persist($dur);
          $em->flush();
     }
     
     $rutasreq=$paquetereq->rutas;
     
     foreach ($rutasreq as $rutareq) {
        $ruta= new Ruta();
        $lugartot='';
       foreach ($rutareq->lugares as $lugar){
           $lugartot= $lugartot.' '.$lugar->nombre;
           
       }
       $ruta->setLugares($lugartot);
        $paquete->addRuta($ruta);
        $ruta->setPaquete($paquete);
        $em->persist($ruta);
          $em->flush();
        
     }
     $estanciassreq=$paquetereq->estancias;
     
     foreach($estanciassreq as $estanciareq){
         $estancia= new \alex\yamBundle\Entity\Estancia();
         
            $estancia->setPaquete($paquete);
            
            $hotel= new \alex\yamBundle\Entity\Hotel();
            
             $hotel->setCategoria($estanciareq->hotel->categoria);
             $hotel->setNombre($estanciareq->hotel->nombre);
              $em->persist($hotel);
          $em->flush();
             
            $estancia->setIdHotel($hotel);
            $estancia->setDiasdepermanencia($estanciareq->diaspermanencia);
            $em->persist($estancia);
          $em->flush();
         
         
     }
     $incluyesreq=$paquetereq->incluyes;
     
     foreach ($incluyesreq as $incluyereq){
         $incluye= new \alex\yamBundle\Entity\Incluye();
          $incluye->setNombre($incluyereq->nombre);
          $incluye->setValor($incluyereq->valor);
          $incluye->setPaquete($paquete);
          $em->persist($incluye);
          $em->flush();
     }
     
     
     return  $this->render('paquete/guardarpaquete.html.twig',array('paquete'=>  $paquete));
     
     
    }
    
          public function listadeproveedoresjsonAction()
    {
        $em = $this->getDoctrine()->getManager();

        $proveedores = $em->getRepository('alexyamBundle:TrSupplier')->findAll();
        $proveedoreslista=array();
        foreach ($proveedores as $proveedor){
            
            array_push($proveedoreslista, array('nombre'=>$proveedor->getName(),'email'=>$proveedor->getEmailSupplier()));
     
    }
    
       return new \Symfony\Component\HttpFoundation\Response(json_encode($proveedoreslista));
    }

    
}