<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Joueurs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository('MainBundle:Joueurs')->findAll();

        return $this->render('MainBundle:Default:index.html.twig', array(
            'joueurs'=>$joueurs
        ));
    }

    public function voteAction($id)
    {
        //Conexxion BDD
        $em = $this->getDoctrine()->getManager();
        // On récupère l'utilisateur connécté
        $User = $this->getUser();

        //On récupère l'objet du joueur
        $joueurs = $em->getRepository('MainBundle:Joueurs')->findOneById($id);
        //On le set
        $User->setJoueur($joueurs);

        $em->persist($User);
        $em->flush();

        return $this->render('@Main/Default/redirect.html.twig');
    }

}
