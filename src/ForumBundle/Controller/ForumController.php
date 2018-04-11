<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Forum;
use ForumBundle\Entity\Reactionforum;
use ForumBundle\Form\AjoutForumType;
use ForumBundle\Form\ModifForumType;
use ForumBundle\Form\RechercheForumType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ForumBundle\Entity\Categorieforum;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ForumController extends Controller
{
    public function indexForumAction(Request $request)
    {
        $ajoutforum = new Forum();
        $rechercheforum = new Forum();
        $formajout = $this->createForm(AjoutForumType::class, $ajoutforum);
        $formrecherche=$this->createForm(RechercheForumType::class,$rechercheforum);
        $formajout->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $All_Cat = $em->getRepository(Categorieforum::class)->findAll();
        $All_Forums = $em->getRepository(Forum::class)->findAll();
        $mostviewed = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('vue'=>'desc'));
        $recentpost = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('date'=>'desc'));
        $query = $em->getRepository(Forum::class)->find1();
        $paginator = $this->get('knp_paginator');
        $forums = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        if ($formajout->isSubmitted() && $formajout->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $categorie = $em->getRepository(Categorieforum::class)->findOneBy(
                array('nom' => $formajout->get('idCategorie')->getData()->getNom()));
            $ajoutforum->setIdCategorie($categorie);
            $ajoutforum->setEtat("Non Résolu");
            $ajoutforum->setJaimepas(0);
            $ajoutforum->setNbrjaime(0);
            $ajoutforum->setVue(0);
            $ajoutforum->setNbrsignalisation(0);
            $ajoutforum->setIdUser($this->get('security.token_storage')->getToken()->getUser());
            $em->persist($ajoutforum);
            $em->flush();
            return $this->redirectToRoute('index_forum');
        }
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'){
            $em = $this->getDoctrine()->getManager();
            $dql = " select F.id as idFor,F.titre as titre,F.vue as vue,F.date as dateForum,F.contenue as contenue,
          F.jaimepas as jaimepas,F.etat as etat,F.nbrjaime as nbrjaime, F.picture as picture,u.picture as pic,  F.tags as tags, u.username as name,u.id as userid,
          (select COUNT(c.id) from ForumBundle:Commentaireforum c where c.idForum = F.id) as nb
          from ForumBundle:Forum F join F.idUser u WHERE F.titre like :titre GROUP BY F.id ORDER BY F.date DESC ";
            $query = $em->createQuery($dql)->setParameter('titre', '%'.$request->get('rech').'%');
            $paginator  = $this->get('knp_paginator');
            $forums = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                5/*limit per page*/
            );
            $data = $this->render('@Forum/Forum/RechercheResult.html.twig', array(
                'forum' => $forums));
            $html = $data->getContent();
            $jsonArray = array('data' => $html);
            $response = new Response(json_encode($jsonArray));
            $response->headers->set('Content-Type', 'application/json; charset=utf-8');
            return $response;
        }

        return $this->render('ForumBundle:Forum:index_forum.html.twig', array(
            'forma' => $formajout->createView(),
            'rechforme'=>$formrecherche->createView(),
            'view' =>$mostviewed,
            'post' => $recentpost,
            'all_cat' => $All_Cat,
            'forum' => $forums,
            'all_forums' => $All_Forums
        ));
    }



    public function showAction(Request $request, $id)
    {
        $ajoutforum = new Forum();
        $formajout = $this->createForm(AjoutForumType::class, $ajoutforum);
        $formajout->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $All_Cat = $em->getRepository(Categorieforum::class)->findAll();
        $forums = $em->getRepository(Forum::class)->find3($id);
        $forum = $em->getRepository('ForumBundle:Forum')->find($id);
        $forum->setVue($forum->getVue()+1);
        $mostviewed = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('vue'=>'desc'));
        $recentpost = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('date'=>'desc'));
        $commentaires = $em->getRepository('ForumBundle:Commentaireforum')->findBy(array('idForum'=>$forum),array('date'=>'asc'));
        $Reaction =  $em->getRepository('ForumBundle:Reactionforum')->
        findOneBy(array('idForum'=>$forum,'idUser'=>$this->get('security.token_storage')->getToken()->getUser()));
        if($Reaction == null)
        {
            $Reaction = new Reactionforum();
            $Reaction->setJaimepas(0);
            $Reaction->setJaime(0);
            $Reaction->setIdForum($forum);
        }
        $em->persist($forum);
        $em->flush();
        return $this->render('ForumBundle:Forum:Forum_info.html.twig',
            array(
                'com' => $commentaires,
                'view' =>$mostviewed,
                'post' => $recentpost,
                'Reaction'=>$Reaction,
                'forma' => $formajout->createView(),
                'all_cat' => $All_Cat,
                'forum' => $forums));
    }

    public function updateforumAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $forum = $em->getRepository('ForumBundle:Forum')->find($id);
        $All_Cat = $em->getRepository(Categorieforum::class)->findAll();
        $formmodifForum=$this->createForm(ModifForumType::class,$forum);
        $mostviewed = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('vue'=>'desc'));
        $recentpost = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('date'=>'desc'));
        $commentaires = $em->getRepository('ForumBundle:Commentaireforum')->findBy(array('idForum'=>$forum),array('date'=>'asc'));
        if ($request->isMethod('POST')) {
            $formmodifForum->handleRequest($request);
            if ($formmodifForum->isSubmitted() && $formmodifForum->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($forum);
                $em->flush();
                return $this->redirectToRoute('show', array('id' =>$id));
            }

        }
        return $this->render('ForumBundle:Forum:updateforum.html.twig',
            array('forum' => $forum,
                'all_cat' => $All_Cat,
                'post' => $recentpost,
                'com' => $commentaires,
                'view' =>$mostviewed,
                'modifforum'=>$formmodifForum->createView(),
            ));
    }

    public function mesForumAction(Request $request)
    {
        $ajoutforum = new Forum();
        $formajout = $this->createForm(AjoutForumType::class, $ajoutforum);
        $formajout->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $All_Cat = $em->getRepository(Categorieforum::class)->findAll();
        $mostviewed = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('vue'=>'desc'));
        $recentpost = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('date'=>'desc'));
        $user =$this->getUser();
        $query = $em->getRepository(Forum::class)->nbrCommentaireByForumMesForum($user);
        $paginator = $this->get('knp_paginator');
        $forums = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        return $this->render('ForumBundle:Forum:mesforums.html.twig',
            array(
                'forma' => $formajout->createView(),
                'view' =>$mostviewed,
                'post' => $recentpost,
                'all_cat' => $All_Cat,
                'forum' => $forums));
    }


    public function deleteforumAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $id = $request->get('input');
            $em = $this->getDoctrine()->getManager();
            $forum = $em->getRepository(Forum::class)->find($id);
            $em->remove($forum);
            $em->flush();
            return new JsonResponse();
        }
    }

    public function dislikeforumAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $id = $request->get('input');
            $em = $this->getDoctrine()->getManager();
            $forum = $em->getRepository(Forum::class)->find($id);
            $nb= $forum->getJaimepas();
            $nb= $nb + 1;
            $forum->setJaimepas($nb);
            $em->persist($forum);
            $em->flush();
            return new JsonResponse($nb);
        }
    }
    public function likeforumAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $id = $request->get('input');
            $em = $this->getDoctrine()->getManager();
            $forum = $em->getRepository(Forum::class)->find($id);
            $nb= $forum->getNbrjaime();
            $nb= $nb + 1;
            $forum->setNbrjaime($nb);
            $em->persist($forum);
            $em->flush();
            return new JsonResponse($nb);
        }
    }
    public function RechercheCategorieAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository(Categorieforum::class)->findcat($id);
        $All_Cat = $em->getRepository(Categorieforum::class)->findAll();
        $paginator = $this->get('knp_paginator');
        $forum = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        $mostviewed = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('vue'=>'desc'));
        $recentpost = $em->getRepository('ForumBundle:Forum')->findBy(array(),array('date'=>'desc'));
        return $this->render('ForumBundle:Forum:Categorieforum.html.twig',
            array(
                'all_cat' => $All_Cat,
                'post' => $recentpost,
                'view' =>$mostviewed,
                'forum' => $forum,
            )
        );


    }

    public function accessAction()
    {
        return $this->render('ForumBundle:Forum:err.html.twig');
    }
}
