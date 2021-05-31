<?php
namespace App\Controller;

use Twig\Environment;
use App\Entity\Uzeno;
use App\Form\UzenoUrlapType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class UzenoKontrol extends AbstractController

{
    /**
     * @Route("/uzeno")
     */
    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager)
{
    $uzeno = new Uzeno();

    $form = $this->createForm(UzenoUrlapType::class, $uzeno);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()){

        $entityManager->persist($uzeno);
        $entityManager->flush();

        return new Response('Köszönjük szépen a kérdésedet. Válaszunkkal hamarosan keresünk a megadott e-mail címen.');
    }

    return new Response($twig->render('contact_form/show.html.twig', [
        'uzeno_urlap' => $form->createView()
    ]));
}
}


?>