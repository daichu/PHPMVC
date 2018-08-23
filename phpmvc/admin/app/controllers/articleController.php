<?php
class articleController {

    public function __construct()
    {

    }

    /**
     * phuong thuc se su dung hien thi tat ca cac bai viet
     */
    public function indexAction() {

        $articleModel = new articleModel();
        $articles = $articleModel->getRows();
        return view('article', 'index', array('articles' => $articles));
    }

    /**
     * phuong thuc sua bai viet
     */
    public function editAction() {
       $articleModel = new articleModel();

        if (isset($_REQUEST['id']) !== null) {
            $articless = $articleModel->getRow($_REQUEST['id']);
        }

        if (isset($_POST)!== null) {
//            echo "abcdfg";
            $articless = $articleModel->store($_POST);
            //return view('article', 'edit', array('$articles' => $articless));
        }
        return view('article', 'edit', array('$articles' => $articless));

    }

    /**
     * update 1 bai viet
//     */
//    public function update()
//    {
//
//        $articleModel = new articleModel();
//        $article = $articleModel->store($_POST);
//        self::editAction();
////        echo "abc dfsds";
////        echo "<pre>";
////        print_r($_POST);
////        echo "</pre>";
//        return view('article','edit',array($article->$article));
//    }
    /**
     * xoa 1 bai viet
     */
    public function deleteAction(){
        $articleModel = new articleModel();
        $article_delete = $articleModel->remove($_REQUEST['id']);
        return view( 'article', 'delete', array('$article_delete' => $article_delete));
    }

    /**
     * xem 1 bai viet
     */
    public function viewAction() {

    }
}