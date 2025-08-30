<?php

class HomeController {
    public function index() { // we dont need parameters here
        View::load('home' /*, $data (optional) */); 
    }
}