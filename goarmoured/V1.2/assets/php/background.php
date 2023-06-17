<div class="background-blur"></div>
<div class="cover-media">
    <img class="bg-img" src=<?php 
     $url = "assets/images/";
    if (isset($_GET['src']))
        $url .= $_GET['src'];
    else
        $url .= "default-bg";
    $url .= ".jpg";

    echo "\"$url\"";?>
    
    alt= 
    <?php echo '"'. $_GET['src'].' picture">';?>
</div>