<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;

class HomeController extends Controller
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function index(): Response
    {

        return $this->view('home', [

            'title' => 'Bienvenue sur le MVC Starter',
            'message' => 'Voici l\'accueil de mon MVC maison'
        ]);
    }
}
