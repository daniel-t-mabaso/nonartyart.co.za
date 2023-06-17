<div id="row-partners" class="alternative-bg">
        <!-- Partners -->
        <div class="col-6">
            <?php
            $partners = [];
                // $partners = ['GA_partner 1.jpg','GA_partner 2.jpg','GA_partner 3.jpg','GA_partner 4.jpg','GA_partner 5.jpg','GA_partner 6.jpg'];
                if (sizeof($partners)!=0){
                    echo "<h3 class='heading'>A few of our partners</h3>
                    <div class='partners-panel white-bg'>
                        <div class='partner-images-container div-center'>";

                    $view_limit = 6;
                    for ( $i=0; $i < sizeof($partners); $i++){
                        if ( $i < $view_limit)
                            echo "<img class='extra-small-media' src='assets/images/uploads/$partners[$i]' alt='Partner logo'/>";
                        else
                            break;
                    }
                }
            echo "
                </div>
            </div>";
            ?>

            <a href="about.php"><div class="quick-link div-center">Learn more about us &#9655;</div></a>
        </div>
    </div>
