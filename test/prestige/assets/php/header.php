<?php
    @include 'assets/php/session.php';
?>
<div id="row-header" class="primary-bg">
    <div id="header-logo" >
        <a href="index.php"><img height="20" src="assets/images/prestige-icon.png"> PRESTIGE</a>
    </div>
    <div id="header-navigation" class="alternative-txt">
        <ul id='nav-bar'>
            <div id='hamburger'>
                <img id='hamburger-img' alt="menu button" src='assets/images/menu.png'/>
            </div>
            <a href="index.php"><li class="nav-item">HOME</li></a>
            <a href="solutions.php"><li class="nav-item">SOLUTIONS</li></a>
            <a href="about.php"><li class="nav-item">ABOUT</li></a>
            <a href="contact.php"><li class="nav-item">CONTACT</li></a>
            <?php
                $color = 'success-txt';
                if ($_SESSION['logged_in']==='true'){  
                    if($_SESSION['user_type']!='regular'){
                        echo '<a href="dashboard.php"><li class="nav-item">DASHBOARD</li></a>';
                        $color = 'caution-txt';
                    }
                    echo '
                    <a href="./assets/php/logout.php"><li class="nav-item">LOGOUT</li></a>
                    <li class="nav-item '.$color.'">&#9724;'.$_SESSION['username'].'</li>';
                }else{
                    
                    echo '
                    <a href="login.php"><li class="nav-item">LOGIN</li></a>';
                }
            ?>
            
        </ul>
    </div>
</div>