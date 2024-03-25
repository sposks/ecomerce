<?php


class about extends Controller
{
 
    // Page d'accueil
    public function index()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('clients/about/index', ['title' => 'A propos']);
    }

}
