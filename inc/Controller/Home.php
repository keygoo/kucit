<?php

class Home 
{
    public function index(){
        $data = [
            'title' => 'Home'
        ];
        Flight::render('app.twig', $data);
    }
}