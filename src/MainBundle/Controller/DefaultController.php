<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Joueurs;
use MainBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository('MainBundle:Joueurs')->findAll();
        $voix = $em->getRepository('MainBundle:VoteOliech')->findAll();

        $user = $this->getUser();


        return $this->render('MainBundle:Default:index.html.twig', array(
            'joueurs'=>$joueurs,
            'user'=>$user,
            'voix'=>$voix
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

        if ( $User->getJoueur() == null ) {
            //On le set
            $User->setJoueur($joueurs);
            $joueurs->setVoix($joueurs->getVoix() + 1);

            $em->persist($User, $joueurs);
            $em->flush();


            return $this->render('@Main/Default/redirect.html.twig', array(
                'joueur' => $joueurs
            ));

        }

        else {
            return $this->render('@Main/Default/redirectError.html.twig', array(
                'user' => $User
            ));
        }
    }

    public function oliechAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $User = $this->getUser();

        $voix = $em->getRepository('MainBundle:VoteOliech')->findOneById($id);

        if ($User->getVoteOliech() == null ) {

            $User->setVoteOliech($voix);
            $voix->setNb($voix->getNb() + 1);

            $em->persist($User, $voix);
            $em->flush();

            return $this->render('@Main/Default/redirectVote.html.twig', array(
                'voix' => $voix
            ));
        }

        else {
            return $this->render('@Main/Default/redirectError.html.twig', array(
                'user' => $User
            ));
        }


    }

}
