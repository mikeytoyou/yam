<?php

namespace alex\yamBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use alex\yamBundle\Entity\Estancia;
use alex\yamBundle\Form\EstanciaType;

/**
 * Estancia controller.
 *
 */
class EstanciaController extends Controller
{
    /**
     * Lists all Estancia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estancias = $em->getRepository('alexyamBundle:Estancia')->findAll();

        return $this->render('estancia/index.html.twig', array(
            'estancias' => $estancias,
        ));
    }

    /**
     * Creates a new Estancia entity.
     *
     */
    public function newAction(Request $request)
    {
        $estancium = new Estancia();
        $form = $this->createForm('alex\yamBundle\Form\EstanciaType', $estancium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estancium);
            $em->flush();

            return $this->redirectToRoute('estancia_show', array('id' => $estancium->getId()));
        }

        return $this->render('estancia/new.html.twig', array(
            'estancium' => $estancium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Estancia entity.
     *
     */
    public function showAction(Estancia $estancium)
    {
        $deleteForm = $this->createDeleteForm($estancium);

        return $this->render('estancia/show.html.twig', array(
            'estancium' => $estancium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Estancia entity.
     *
     */
    public function editAction(Request $request, Estancia $estancium)
    {
        $deleteForm = $this->createDeleteForm($estancium);
        $editForm = $this->createForm('alex\yamBundle\Form\EstanciaType', $estancium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estancium);
            $em->flush();

            return $this->redirectToRoute('estancia_edit', array('id' => $estancium->getId()));
        }

        return $this->render('estancia/edit.html.twig', array(
            'estancium' => $estancium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Estancia entity.
     *
     */
    public function deleteAction(Request $request, Estancia $estancium)
    {
        $form = $this->createDeleteForm($estancium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estancium);
            $em->flush();
        }

        return $this->redirectToRoute('estancia_index');
    }

    /**
     * Creates a form to delete a Estancia entity.
     *
     * @param Estancia $estancium The Estancia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Estancia $estancium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estancia_delete', array('id' => $estancium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
