<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;




class AuthController extends Controller
{

    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {

      $errors = $authUtils->getLastAuthenticationError();
//  последний авторизованный пользователь
      $lastUsername = $authUtils->getLastUsername();

//      возвращаем форму регистрации
        return $this->render('AppBundle:Auth:login.html.twig', array(
          'last_username' => $lastUsername,
          'errors' => $errors
        ));
    }

    public function logoutAction(){

    }

}
