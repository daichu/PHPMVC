<?php
class articleController {

    public function __construct()
    {

    }

    /**
     * phuong thuc se su dung hien thi tat ca cac bai viet
     */
    public function indexAction() {

        $name = "PHP Article";
        return view('index'//(tên forlder), 'index'(//tên file), array('name' => $name));
    }

    /**
     * phuong thuc sua bai viet
     */
    public function editAction() {

        $name = "PHP Edit";
        return view('index', 'edit', array('name' => $name));
    }

    /**
     * xoa 1 bai viet
     */
    public function deleteAction(){
        $name = "PHP Edit";
        return view('index', 'delete', array('name' => $name));
    }

    /**
     * xem 1 bai viet
     */
    public function viewAction() {

    }
}