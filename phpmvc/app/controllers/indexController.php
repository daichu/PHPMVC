<?php
class indexController {

    public function __construct()
    {
    }

    public function indexAction() {


        $articleModel = new articleModel();
        $record = $articleModel->getRows();
        $record1 = $articleModel->getRow(1);

        echo "<pre>";
        print_r($articleModel);
        echo "</pre>";

        echo "<pre>";
        print_r($record1);
        echo "</pre>";
        //$userModel::getUsers();
        //$userModel::getSingleUser();

echo __METHOD__;
exit;

        $name = "PHP MVC";
        return view('index', 'index', array('name' => $name));
    }
}