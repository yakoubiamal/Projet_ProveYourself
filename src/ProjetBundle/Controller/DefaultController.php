<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function contactAction()
    {
        return $this->render('ProjetBundle:Default:contact.html.twig');
    }

    public function erreurAction()
    {
        return $this->render('ProjetBundle:Default:erreur.html.twig');
    }

    public function ProfileBasicAction()
    {
        return $this->render('ProjetBundle:Default:ProfileBasic.html.twig');
    }

    public function ProfileInterestsAction()
    {
        return $this->render('ProjetBundle:Default:ProfileInterests.html.twig');
    }

    public function editProfilePasswordAction()
    {
        return $this->render('ProjetBundle:Default:edit-profile-password.html.twig');
    }

    public function editProfileSettingsAction()
    {
        return $this->render('ProjetBundle:Default:edit-profile-settings.html.twig');
    }

    public function editProfileWorkEduAction()
    {
        return $this->render('ProjetBundle:Default:edit-profile-work-edu.html.twig');
    }


    public function faqAction()
    {
        return $this->render('ProjetBundle:Default:faq.html.twig');
    }

    public function indexAction()
    {
        return $this->render('ProjetBundle:Default:index.html.twig');
    }

    public function indexRegisterAction()
    {
        return $this->render('ProjetBundle:Default:index-register.html.twig');
    }

    public function newsfeedAction()
    {
        return $this->render('ProjetBundle:Default:newsfeed.html.twig');
    }

    public function newsfeedFriendsAction()
    {
        return $this->render('ProjetBundle:Default:newsfeed-friends.html.twig');
    }

    public function newsfeedImagesAction()
    {
        return $this->render('ProjetBundle:Default:newsfeed-images.html.twig');
    }


    public function newsfeedMessagesAction()
    {
        return $this->render('ProjetBundle:Default:newsfeed-messages.html.twig');
    }





}
