<?php

$articles_edit = $data['$articles'];
//
//echo "<pre>";echo "<pre>";
////print_r($_REQUEST['id']);
////echo "</pre>";
//print_r($articles_edit);
//echo "</pre>";
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//echo "<pre>";
//print_r($data['$articles']['id']);
//echo "</pre>";
//var_dump(ADMIN_CONTROLLER_PATH.'/'.'articleController.php');
?>
<?php require ADMIN_VIEW_PATH.'/partial/header.php';?>

<div class="container" style="width: 60%;">
    <form name="frmedit" method="post"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?controller=article&action=edit&id='.trim($_REQUEST['id'])); ?>">
        <div class="form-group">
            <label>Id</label>
            <input class="form-control" type="text" name ="id" readonly
                   value="<?php if(isset($_GET['id'])){echo $_GET['id']; } ?>">
        </div>
        <div class="form-group">
            <label>tiêu đề</label>
            <input type="text" class="form-control" placeholder="nhập tiêu đề" name="title"
                   value="<?php if(isset($articles_edit['title'])){ echo $articles_edit['title'];} ?>">
        </div>
        <div class="form-group">
            <label>nội dung</label>
            <textarea rows="10" class="form-control"  placeholder="nhập nội dung" name="article_content"><?php if(isset($articles_edit['article_content'])){ echo $articles_edit['article_content'];} ?>
        </textarea>
        </div>
        <button type="submit" class="btn-info btn-primary btn-danger">Sửa</button>
        <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?controller=article&action=index'); ?>" class="btn-primary btn-info">Quay Lại</a>
    </form>
</div>

<?php require ADMIN_VIEW_PATH.'/partial/sidebar.php';?>
<?php require ADMIN_VIEW_PATH.'/partial/footer.php';?>
<?php
//$abc = new articleController();
//$abc->update();

?>
