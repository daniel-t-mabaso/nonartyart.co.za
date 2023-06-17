<?php
    @include 'assets/php/session.php';
?>
<div id="row-header" class="primary-bg">
    <div id="header-logo" >
        <a href="index.php"><img alt='company logo' class="extra-small-image" src='assets/images/logo.png'/></a>
    </div>
    <div id="header-navigation" class="alternative-txt">
        <ul id='nav-bar'>
            <div id='hamburger'>
                <img id='hamburger-img' alt="menu button" src='assets/images/menu.png'/>
            </div>
            <a href="index.php"><li class="nav-item">Home</li></a>
            <a href="about.php"><li class="nav-item">About</li></a>
            <a href="contact.php"><li class="nav-item">Contact</li></a>
            <?php
                $color = 'success-txt';
                if ($_SESSION['logged_in']==='true'){  
                    if($_SESSION['user_type']!='regular'){
                        echo '<a href="dashboard.php"><li class="nav-item">Dashboard</li></a>';
                        $color = 'caution-txt';
                    }
                    echo '
                    <a href="./assets/php/logout.php"><li class="nav-item">Logout</li></a>
                    <li class="nav-item '.$color.'">&#9724;'.$_SESSION['username'].'</li>';
                }else{
                    
                    echo '
                    <a href="login.php"><li class="nav-item">Login</li></a>';
                }
            ?>
            
        </ul>
    </div>
</div>