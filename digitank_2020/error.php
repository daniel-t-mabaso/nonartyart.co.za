<?php
    if (isset($errors) && count($errors)>0): 
?>

<div class="login-error center-txt footer-heading input-1 italic margin-top-20" id='login-error'>
    <ul>
    <?php
        foreach ($errors as $error):
    ?>
        <li class="vertical-margin-5"><?php echo  $error;?></li>
    <?php endforeach?>
        </ul>
</div>
<?php endif?>
