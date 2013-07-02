<?php

namespace ControlF\GenemuDemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ControlF\GenemuDemoBundle\Entity\Provincia;
use ControlF\GenemuDemoBundle\Form\ProvinciaType;

/**
 * Provincia controller.
 *
 * @Route("/provincia")
 */
class ProvinciaController extends Controller
{
    /**
     * Lists all Provincia entities.
     *
     * @Route("/", name="provincia")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ControlFGenemuDemoBundle:Provincia')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Provincia entity.
     *
     * @Route("/", name="provincia_create")
     * @Method("POST")
     * @Template("ControlFGenemuDemoBundle:Provincia:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Provincia();
        $form = $this->createForm(new ProvinciaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('provincia_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Provincia entity.
     *
     * @Route("/new", name="provincia_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Provincia();
        $form   = $this->createForm(new ProvinciaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Provincia entity.
     *
     * @Route("/{id}", name="provincia_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ControlFGenemuDemoBundle:Provincia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Provincia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Provincia entity.
     *
     * @Route("/{id}/edit", name="provincia_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ControlFGenemuDemoBundle:Provincia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Provincia entity.');
        }

        $editForm = $this->createForm(new ProvinciaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Provincia entity.
     *
     * @Route("/{id}", name="provincia_update")
     * @Method("PUT")
     * @Template("ControlFGenemuDemoBundle:Provincia:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ControlFGenemuDemoBundle:Provincia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Provincia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProvinciaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('provincia_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Provincia entity.
     *
     * @Route("/{id}", name="provincia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ControlFGenemuDemoBundle:Provincia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Provincia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('provincia'));
    }

    /**
     * Creates a form to delete a Provincia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
