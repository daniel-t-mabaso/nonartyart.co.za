<!DOCTYPE html>
<html lang="en">
<head>
    <title>NAA CMS | <?php if(!isset($n)){$n = 'Template';}echo $n;?></title>
    <?php 
        include 'assets/php/dependencies.php';?>
</head>
<body class="background-colour book primary-txt">
    <?php include 'assets/php/header.php'?>
    <?php $current_page;
foreach($pages as $page){
    if($n==$page->get_title()){
        $current_page = $page;
        if ($current_user->get_type() == 'editor' || $current_user->get_type() == 'admin' || $current_user->get_type() == 'root'){
            break;}
        else  if($current_page->get_visible()=='false'){
            echo '<script>
            window.location = "index.php";
            </script>';
            break;
        }
        
    }
}?>
    <div id='html-content' class="">
        
    <?php echo $current_page->get_content();
    ?>
    </div>
<?php include 'assets/php/footer.php';
    include 'assets/php/edit_page.php';?>
<div id='editButtonHolder'>
    <?php if ($_SESSION['auth'] && (is_object($current_user) && (($current_user->get_type() =='editor') || $current_user->get_type() ==='admin' || $current_user->get_type() ==='root'))){   ?>
         <div class='edit-button inline-block center-txt white-txt extra-small-padding cursor hide neutral-bg' onclick='editSection(this.parentElement)'>Edit</div><div class='edit-button inline-block center-txt white-txt float-right extra-small-padding cursor hide danger-bg' onclick='deleteSection(this.parentElement.parentElement);'>Delete</div>
    <?php } 
    ?>
</div>
<div id='cardEditButtonHolder'>
    <?php if ($_SESSION['auth'] && (is_object($current_user) && (($current_user->get_type() =='editor') || $current_user->get_type() ==='admin' || $current_user->get_type() ==='root'))){   ?>
         <div class='edit-button inline-block center-txt white-txt extra-small-padding cursor hide neutral-bg' onclick='editCard(this.parentElement)'>Edit</div>
    <?php } 
    ?>
</div>
</body>
</html>