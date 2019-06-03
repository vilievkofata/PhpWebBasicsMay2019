<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Competitor;
use AppBundle\Form\CompetitorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CompetitorController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $competitors = $this->getDoctrine()->getRepository(Competitor::class)->findAll();
        return $this->render('competitor/index.html.twig', ['competitors' => $competitors]);
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
        $competitors = new Competitor();
        $form = $this->createForm(CompetitorType::class, $competitors);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($competitors);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('competitor/create.html.twig', ['form' => $form->createView()]);
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
        $competitor = $this->getDoctrine()->getRepository(Competitor::class)->find($id);
        if ($competitor == null) {
            return $this->redirectToRoute('homepage');
        }
        $form = $this->createForm(CompetitorType::class, $competitor);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($competitor);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('competitor/edit.html.twig', ['competitor' => $competitor, 'form' => $form->createView()]);
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
        $competitor = $this->getDoctrine()->getRepository(Competitor::class)->find($id);
        if ($competitor == null) {
            return $this->redirectToRoute('homepage');
        }
        $form = $this->createForm(CompetitorType::class, $competitor);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($competitor);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('competitor/delete.html.twig', ['competitor' => $competitor, 'form' => $form->createView()]);
    }
}
