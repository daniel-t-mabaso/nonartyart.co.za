<?php

    if (count($errors)>0): 

?>



<div class="login-error center-txt danger-txt italic" id='login-error'>
<div class="center-txt subheading">Error</div>
    <?php

        foreach ($errors as $error):

    ?>

        <p><?php echo $error;?></p>

    <?php endforeach?>
    <a href="javascript:history.go(-1)"><div class='button center white-txt primary-bg'>Return to form</div></a>
</div>

<?php endif?>

