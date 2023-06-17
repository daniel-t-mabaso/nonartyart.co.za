<?php
    include 'assets/php/session.php';
if ($_SESSION['auth'] && (is_object($current_user) && (($current_user->get_type() =='editor') || $current_user->get_type() ==='admin' || $current_user->get_type() ==='root'))){
    include 'assets/php/section.php';
?>

<div id='edit-page-panel' class='max-width fixed bottom-0 hide z-10 small-padding'>
    <div class='content center-txt'>
        <?php
        echo "<div class='edit-icon' onclick=\"cms('new-section');\"><img class='logo-width' src='assets/images/new-section-icon.png'><div>New Section</div></div>";
            //utton('New Section','\' onclick="return false;"','success-bg\' onclick="cms(\'new-section\');"');?>
        
        <div class='edit-icon'></div>
        <?php
            if ($current_page->get_visible() == 'true'){
                echo "<div class='edit-icon' onclick=\"request('hide-page','$n');\"><img class='logo-width' src='assets/images/hide-page-icon.png'><div>Hide Page</div></div>";
            //button('Hide Page','\' onclick="return false;"','caution-bg primary-txt\' onclick="request(\'hide-page\',\''.$n.'\');"');
        }
            else{
                //button('Show Page','\' onclick="return false;"','caution-bg primary-txt\' onclick="request(\'show-page\',\''.$n.'\');"');
                echo "<div class='edit-icon' onclick=\"request('show-page','$n');\"><img class='logo-width' src='assets/images/show-page-icon.png'><div>Show Page</div></div>";
            }
            //button('Delete Page','\' onclick="return false;"','danger-bg\' onclick="request(\'delete-page\',\''.$n.'\');"');
            echo "<div class='edit-icon' onclick=\"request('delete-page','$n');\"><img class='logo-width' src='assets/images/delete-page-icon.png'><div>Delete Page</div></div>";
        ?>
        <div class='edit-icon'></div>
            <div class='edit-icon' <?php  echo 'onclick="request(\'publish-page\',\''.$n.'\');"';?>><img class='logo-width' src='assets/images/publish-icon.png'><div>Publish</div></div>
        <div class='edit-icon' <?php  echo 'onclick="location.reload()"';?>><img class='logo-width' src='assets/images/discard-icon.png'><div>Discard</div></div>
<!--         
        <?php
            button('Publish','\' onclick="return false;"','success-bg primary-txt\' onclick="request(\'publish-page\',\''.$n.'\');"');
            button('Discard','\' onclick="return false;"','caution-bg\' onclick="location.reload();"');
        ?> -->
    </div>
</div>
<div id='edit-page-button' class='extra-small-width fixed left-0 z-10 medium-padding bottom-0 center-txt white-txt cursor' onclick='toggleEditPanel();'><div class='edit-icon'><img class='logo-width' src='assets/images/edit-page-icon.png'><div>Edit Page</div></div></div>
<?php
}
?>