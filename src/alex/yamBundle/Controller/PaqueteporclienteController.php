<?php

namespace alex\yamBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use alex\yamBundle\Entity\Paqueteporcliente;
use alex\yamBundle\Form\PaqueteporclienteType;

/**
 * Paqueteporcliente controller.
 *
 */
class PaqueteporclienteController extends Controller
{
    /**
     * Lists all Paqueteporcliente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $paqueteporclientes = $em->getRepository('alexyamBundle:Paqueteporcliente')->findAll();

        return $this->render('paqueteporcliente/index.html.twig', array(
            'paqueteporclientes' => $paqueteporclientes,
        ));
    }

    /**
     * Creates a new Paqueteporcliente entity.
     *
     */
    public function newAction(Request $request)
    {
        $paqueteporcliente = new Paqueteporcliente();
        $form = $this->createForm('alex\yamBundle\Form\PaqueteporclienteType', $paqueteporcliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paqueteporcliente);
            $em->flush();

            return $this->redirectToRoute('paqueteporcliente_show', array('id' => $paqueteporcliente->getId()));
        }

        return $this->render('paqueteporcliente/new.html.twig', array(
            'paqueteporcliente' => $paqueteporcliente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Paqueteporcliente entity.
     *
     */
    public function showAction(Paqueteporcliente $paqueteporcliente)
    {
        $deleteForm = $this->createDeleteForm($paqueteporcliente);

        return $this->render('paqueteporcliente/show.html.twig', array(
            'paqueteporcliente' => $paqueteporcliente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Paqueteporcliente entity.
     *
     */
    public function editAction(Request $request, Paqueteporcliente $paqueteporcliente)
    {
        $deleteForm = $this->createDeleteForm($paqueteporcliente);
        $editForm = $this->createForm('alex\yamBundle\Form\PaqueteporclienteType', $paqueteporcliente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paqueteporcliente);
            $em->flush();

            return $this->redirectToRoute('paqueteporcliente_edit', array('id' => $paqueteporcliente->getId()));
        }

        return $this->render('paqueteporcliente/edit.html.twig', array(
            'paqueteporcliente' => $paqueteporcliente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Paqueteporcliente entity.
     *
     */
    public function deleteAction(Request $request, Paqueteporcliente $paqueteporcliente)
    {
        $form = $this->createDeleteForm($paqueteporcliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($paqueteporcliente);
            $em->flush();
        }

        return $this->redirectToRoute('paqueteporcliente_index');
    }

    /**
     * Creates a form to delete a Paqueteporcliente entity.
     *
     * @param Paqueteporcliente $paqueteporcliente The Paqueteporcliente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Paqueteporcliente $paqueteporcliente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paqueteporcliente_delete', array('id' => $paqueteporcliente->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
