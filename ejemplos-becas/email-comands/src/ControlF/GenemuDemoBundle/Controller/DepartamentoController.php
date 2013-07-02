<?php

namespace ControlF\GenemuDemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ControlF\GenemuDemoBundle\Entity\Departamento;
use ControlF\GenemuDemoBundle\Form\DepartamentoType;

/**
 * Departamento controller.
 *
 * @Route("/departamento")
 */
class DepartamentoController extends Controller
{
    /**
     * Lists all Departamento entities.
     *
     * @Route("/", name="departamento")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ControlFGenemuDemoBundle:Departamento')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Departamento entity.
     *
     * @Route("/", name="departamento_create")
     * @Method("POST")
     * @Template("ControlFGenemuDemoBundle:Departamento:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Departamento();
        $form = $this->createForm(new DepartamentoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('departamento_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Departamento entity.
     *
     * @Route("/new", name="departamento_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Departamento();
        $form   = $this->createForm(new DepartamentoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Departamento entity.
     *
     * @Route("/{id}", name="departamento_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ControlFGenemuDemoBundle:Departamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Departamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Departamento entity.
     *
     * @Route("/{id}/edit", name="departamento_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ControlFGenemuDemoBundle:Departamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Departamento entity.');
        }

        $editForm = $this->createForm(new DepartamentoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Departamento entity.
     *
     * @Route("/{id}", name="departamento_update")
     * @Method("PUT")
     * @Template("ControlFGenemuDemoBundle:Departamento:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ControlFGenemuDemoBundle:Departamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Departamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DepartamentoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('departamento_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Departamento entity.
     *
     * @Route("/{id}", name="departamento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ControlFGenemuDemoBundle:Departamento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Departamento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('departamento'));
    }

    /**
     * Creates a form to delete a Departamento entity by id.
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
