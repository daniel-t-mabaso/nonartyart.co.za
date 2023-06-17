<div id="row-footer" class="primary-bg alternative-txt">
    <div id="quick-links-panel">
        <div class="quick-links">
            <ul>Company Name
                <a href="index.php"><li>Home</li></a>
                <a href="solutions.php"><li>Solutions</li></a>
                <a href="about.php"><li>About</li></a>
                <a href="contact.php"><li>Contact</li></a>
                <?php
                if ($_SESSION['logged_in']==='true'){  
                    if($_SESSION['user_type']!='regular'){
                        echo '<a href="dashboard.php"><li>Dashboard</li></a>';
                    }
                }
                ?>
            </ul>
        </div>
        <div class="quick-links">
            <ul>Legal
                <a href="legal.php#terms"><li>Terms & Conditions</li></a>
                <a href="legal.php#privacy"><li>Privacy Policy</li></a>
                <a href="legal.php#cookies"><li>Cookie Policy</li></a>
            </ul>
        </div>
        <div class="quick-links">
            <ul>Social Media
                <a href="http://www.facebook.com/"><li>Facebook</li></a>
                <a href="http://www.twitter.com/"><li>Twitter</li></a>
                <a href="http://www.linkedin.com/"><li>LinkedIn</li></a>
                <a href="http://www.youtube.com/"><li>YouTube</li></a>
            </ul>
        </div>
    </div>
    <div id="developer-panel">
        <a href="https://www.nonartyart.co.za" target="_blank">Non-Artistic Art Developers</a>
    </div>
</div>