<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Animal;
use AppBundle\Form\AnimalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $animals = $this->getDoctrine()->getRepository(Animal::class)->findAll();
        return $this->render('animal/index.html.twig', ['animals' => $animals]);
    }

    /**
     * @Route("/create", name="create")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $animals = new Animal();
        $form = $this->createForm(AnimalType::class, $animals);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($animals);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('animal/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function edit($id, Request $request)
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);
        if ($animal == null) {
            return $this->redirectToRoute('homepage');
        }
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('animal/edit.html.twig', ['animal' => $animal, 'form' => $form->createView()]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     *
     * @param $id
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function delete($id, Request $request)
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);
        if ($animal == null) {
            return $this->redirectToRoute('homepage');
        }
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($animal);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('animal/delete.html.twig', ['animal' => $animal, 'form' => $form->createView()]);
    }
}
