<?php


class Contact extends Controller
{
 
    // Page d'accueil
    public function index()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('client/contact/index', ['title' => 'Djebabla']);
    }




}
