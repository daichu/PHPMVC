<?php
class errorController {

    public function __construct()
    {
    }

    public function indexAction() {

        $name = "404";
        return view('index', 'index', array('name' => $name));
    }
}