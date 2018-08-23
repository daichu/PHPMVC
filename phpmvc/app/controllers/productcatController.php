<?php
class productcatController {

    public function __construct()
    {
    }

    public function indexAction() {

        $name = "PHP Article";
        return view('index', 'index', array('name' => $name));
    }

    public function editAction() {

        $name = "PHP Edit";
        return view('index', 'edit', array('name' => $name));
    }
}