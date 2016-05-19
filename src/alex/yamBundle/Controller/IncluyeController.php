<?php

namespace alex\yamBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use alex\yamBundle\Entity\Incluye;
use alex\yamBundle\Form\IncluyeType;

/**
 * Incluye controller.
 *
 */
class IncluyeController extends Controller
{
    /**
     * Lists all Incluye entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $incluyes = $em->getRepository('alexyamBundle:Incluye')->findAll();

        return $this->render('incluye/index.html.twig', array(
            'incluyes' => $incluyes,
        ));
    }

    /**
     * Creates a new Incluye entity.
     *
     */
    public function newAction(Request $request)
    {
        $incluye = new Incluye();
        $form = $this->createForm('alex\yamBundle\Form\IncluyeType', $incluye);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($incluye);
            $em->flush();

            return $this->redirectToRoute('incluye_show', array('id' => $incluye->getId()));
        }

        return $this->render('incluye/new.html.twig', array(
            'incluye' => $incluye,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Incluye entity.
     *
     */
    public function showAction(Incluye $incluye)
    {
        $deleteForm = $this->createDeleteForm($incluye);

        return $this->render('incluye/show.html.twig', array(
            'incluye' => $incluye,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Incluye entity.
     *
     */
    public function editAction(Request $request, Incluye $incluye)
    {
        $deleteForm = $this->createDeleteForm($incluye);
        $editForm = $this->createForm('alex\yamBundle\Form\IncluyeType', $incluye);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($incluye);
            $em->flush();

            return $this->redirectToRoute('incluye_edit', array('id' => $incluye->getId()));
        }

        return $this->render('incluye/edit.html.twig', array(
            'incluye' => $incluye,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Incluye entity.
     *
     */
    public function deleteAction(Request $request, Incluye $incluye)
    {
        $form = $this->createDeleteForm($incluye);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($incluye);
            $em->flush();
        }

        return $this->redirectToRoute('incluye_index');
    }

    /**
     * Creates a form to delete a Incluye entity.
     *
     * @param Incluye $incluye The Incluye entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Incluye $incluye)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('incluye_delete', array('id' => $incluye->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
