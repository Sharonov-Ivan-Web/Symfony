<?php

namespace App\Controller;

use App\Manager\UserManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WorldController extends AbstractController
{
    private UserManager $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @throws JsonException
     */
    public function hello(): Response
    {
        return $this->render('user-vue.twig', ['users' => json_encode($this->userManager->getUsersListVue(), JSON_THROW_ON_ERROR)]);
    }
}