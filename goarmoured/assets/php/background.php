<div class="background-blur"></div>
<div class="cover-media">
    <?php 
    if($_GET['src']=="blurredvideo"){
        echo '<video class="bg-img" style="width: 100%;" playsinline autoplay muted loop src="assets/videos/blurred_crowd.mp4"></video>';
    } else{?>
    <img class="bg-img" src=<?php 
     $url = "assets/images/";
    if (isset($_GET['src']))
        $url .= $_GET['src'];
    else
        $url .= "default-bg";
    $url .= ".jpg";

    echo "\"$url\"";?>
    
    alt= 
    <?php echo '"'. $_GET['src'].' picture">';
     }?>
</div>