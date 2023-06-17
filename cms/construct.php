<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php if(!isset($n)){$n = 'Go Armoured | Under Construction';}echo $n;?></title>
    <?php 
        include 'assets/php/dependencies.php';?>
</head>
<body class="book">
    <?php 
        open_blurred_row('large-padding center-txt max','images/packedbags.jpg');
        echo "<h1><br><br></h1><div class='alternative-txt'>";
        media('center medium','images/goarmoured_logo.png','Dummy image');
        subheading('Be ensured that your luggageis secured, all the time!');
        echo '<p><br>';
        title('Coming soon!');
        echo "</div>";
        book("We're working on the website<br>and will be launching soon.<br>Be on the look out!");
        echo '</p>';
        close_row();?>
</body>
</html>