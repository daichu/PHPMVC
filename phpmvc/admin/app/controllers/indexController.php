<?php
class indexController {

    public function __construct()
    {
    }

    public function indexAction() {


        $articleModel = new articleModel();
        $record = $articleModel->getRows();

        $name = "PHP MVC 1";
        return view('index', 'index', array('$record' => $record));
    }
}