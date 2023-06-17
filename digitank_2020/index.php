<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("./assets/php/dependencies.php");
    ?>
</head>
<body id="home-page">
    <?php include_once("assets/php/header.php");?>
    <div id="row-1">
        <div class="content">
            <div id="side-navigation-bar">
				<div class="tag-line">
                    NEVER TOO YOUNG
				</div>
				<div class="social-media-panel">
					<div class="icon"><img src="assets/media/images/email icon- black-03.png"/></div>
					<div class="icon"><img src="assets/media/images/instagram icon-black-03.png"/></div>
					<div class="icon"><img src="assets/media/images/facebook icon-black-03.png"/></div>
				</div>
            </div>
                <div id="girl-on-computer"><img src="assets/media/images/Girl behind computer-05.png" alt="Girl behind computer"></div>
            <div id="learn-to-code">
                <div class="curly-bracket">
                    }
                </div>
                <div class="slash">
                    /
                </div>
                <h1 class="title">learn to <span><</span>code<span>></span>.</h1>
                <h3 class="heading">Quality tech education for young students.</h3>
                <a href="#"><div class="button">COURSES ONLINE & ON-SITE</div></a>
            </div>
        </div>
    </div>
    
    <div id="row-2">
        <div class="content">
            <div class="sub-row-1">
                <div class="half-width">
                    <h2 class="title">THE<br>FORTH INDUSTRIAL REVOLUTION IS REAL.</h2>
                    <p class="text">Globalization and rapid technological change has led to major shifts
                        in the nature of work, where a capacity to learn from the implementation of new
                        innovations is vital.</p>
                    <h2 class="title">LEARNING TO CODE IS BENEFICIAL.</h2>
                    <p class="text">
                        Individuals who enter the workforce with better technological
                        skills will see benefits, where around the world, the rise of information 
                        technology is increasing the demand for high-skilled graduates who can use 
                        that technology effectively. Ultimately, those who emerge from the education 
                        system with technological skills are more likely to be able to enter those 
                        professions (high-skilled, high-paying) that are gaining from technology.
                    </p>
                </div>
                <div class="half-width">
                    <h2 class="heading">anticipate and prepare for the &lt;future&gt;.</h2>
                    <hr>
                    <h2 class="title">CODING IS BEST LEARNT YOUNG.</h2>
                    <p class="text">Because learning is cumulative and skills beget skills, 
                        skills developmental advances that emerge at young ages improve over time.</p>
                    <h2 class="title">START LEARNING</h2>
                    <p class="text">Welcome to digitank, where we empower young learners to 
                        explore, gain confidence and build competence in technological skills.</p>
                </div>
            </div>
            <div class="sub-row-2">
                <div class="third-width"><img src="assets/media/images/_google-.jpg" alt="Google logo"></div>
                <div class="third-width"><img src="assets/media/images/_microsoft-.jpg" alt="Microsoft logo"></div>
                <div class="third-width"><img src="assets/media/images/_aws-.jpg" alt="AWS logo"></div>
            </div>
        </div>
    </div>

    <div id="row-3">
        <div class="content">
            <h1 class="title">&lt;divisions&gt;.</h1>
            <div class="image-panel">
                <div class="slash">
                    /
                </div>
                <img src="assets/media/images/Guy behind computer image-04.png" alt="Guy behind computer">
            </div>
            <div class="card-panel">
                <?php
                    $color = "purple";
                    $content = "Extramural courses take place in the afternoon after a school day or during the week end. 
                                Lessons are set throughout the year, and are open to students within and outside of the 
                                school they are taking place at.";
                    echo prepare_division_card(1,"&lt;/&gt;", "&lt;Extramural Courses/&gt;", $content, 1, $color);
                    $color = "blue";
                    $content = "Private lessons at your convenience. We can schedule lessons according to the days that suit you, 
                    and offer the individual attention required for students who want to take their skills to the next level. 
                    We offer classes online and in-person.
                    ";
                    echo prepare_division_card(2,"/...", "One on One/...", $content, 2, $color);
                ?>
            </div>
        </div>
    </div>
    <div id="row-4">
        <div class="content">
            <div class="half-width">
                <h2>specializing in &lt;Python&gt;.</h2>
                <h1>PYTHON CODING</h1>
                <hr>
                <p>Ask any programmer about the language of the future, and the odds are that their answer will be:
                Python. Python is a popular language with both beginners and seasoned developers. At digitank, 
                we specialize in Python, where we set our young learners on an early learning trajectory to master
                this powerful language. As a fun and easy language to learn, it’s a great way for young students 
                to immerse themselves in the world of programming.</p>
                <b>FAMOUS COMPANIES BUILT USING PYTHON:</b>
                <div class="button">VIEW PYTHON COURSE</div>
            </div>
            <div class="half-width">
                <div class="company-containter">
                    <img src="assets/media/images/fb logo-03.png" alt="Facebook icon">
                    <h4>Facebook</h4>
                </div>
                <div class="company-containter">
                    <img src="assets/media/images/uber icon-03.png" alt="Uber icon">
                    <h4>Uber</h4>
                </div>
                <div class="company-containter">
                    <img src="assets/media/images/spotify icon-03.png" alt="Spotify icon">
                    <h4>Spotify</h4>
                </div>
                <div class="company-containter">
                    <img src="assets/media/images/google icon-03.png" alt="Google icon">
                    <h4>Google</h4>
                </div>
                <div class="company-containter">
                    <img src="assets/media/images/instagram icon-03.png" alt="Instagram icon">
                    <h4>Instagram</h4>
                </div>
                <div class="company-containter">
                    <img src="assets/media/images/netflix icon-03.png" alt="Netflix icon">
                    <h4>Netflix</h4>
                </div>
            </div>
        </div>
    </div>
    <div id="row-5">
        <div class="content">
			<div class="sub-row-1">
				<div class="half-width">
					<h2>&lt;inspiring&gt;. the next<br> generation.</h2>
					<div class="curly-bracket">
						}
					</div>
					<div class="reviewer-panel">
						<div class="reviewer-picture"><img src="assets/media/images/aden.jpg" alt="Picture of Aden"></div>
						<div class="name-panel selected"> Aden, 2019</div>
					</div>
					<div class="reviewer-panel">
						<div class="reviewer-picture"><img src="assets/media/images/olivia.jpg" alt="Picture of Olivia"></div>
						<div class="name-panel"> Olivia, 2019</div>
					</div>
					<div class="reviewer-panel">
						<div class="reviewer-picture"><img src="assets/media/images/remy.jpg" alt="Picture of Remy"></div>
						<div class="name-panel"> Remy, 2019</div>
					</div>
				</div>
				<div class="half-width">
					<div class="review-panel shadow">
						<div class="header">
							<div>
								<img src="assets/media/images/aden.jpg" alt="Picture of selected reviewer">
							</div>
						</div>
						<div class="body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eligendi maxime accusamus dolores voluptatem non, suscipit rerum animi iste ipsa aspernatur, incidunt voluptas ipsam? Porro facilis aperiam repellendus vero. Fugiat.
						</div>
						<div class="footer">
							ADEN, DIGITANK. 2019
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>
	<div id="row-6">
		<div class="content">
			<h2>what sets us<br>&lt;apart&gt;.</h2>
			<div id="playful-panel">
				<div class="col-1">
					<div class="color-div">70+ schools represented in our digitank community.</div>
					<div class="shadow color-div shake-on-hover">
						<h3>MENTOR DRIVER:</h3>
						<p>All of digitank's courses - whether online or in-person - are driven by 
							best-in-class expert mentor support. Leverage on their knowledge, make 
							connections, and ask them questions about further study options and future career opportunities.
						</p>
						<div class="number">04.</div>
					</div>
					<div class="color-div"></div>
				</div>
				<div class="col-2">
					<div class="color-div"></div>
					<div class="shadow color-div shake-on-hover">
						<h3>ADVANCING OPPORTUNITIES</h3>
						<p>
							Every digitank course offers a continuation trajectory for 
							eager and interested students to continue their learning.
						</p>
						<div class="number">01.</div>
					</div>
					<div class="shadow color-div shake-on-hover">
						<h3>ENGAGING CONTENT:</h3>
						<p>Students enjoy learning in class through interactive 
							content like quizzes, videos and hands-on programming.
						</p>
						<div class="number">05.</div>
					</div>
				</div>
				<div class="col-3">
					<div>
						<h2>4000+</h2>
						<span>students have completed a digitank program at one of our global locations</span>
					</div>
					<div class="shadow color-div shake-on-hover">
						<h3>AFFORDABLE:</h3>
						<p>
							We keep our prices relatively low to ensure all learners have access to the 21st
							century learning opportunities they need and deserve to thrive as tomorrow's leaders,
							workers, and citizens.
						</p>
						<div class="number">02.</div>
					</div>
					<div class="color-div">
						Focus on<br>early-childhood development.
					</div>
				</div>
				<div class="col-4">
					<div class="color-div"></div>
					<div class="shadow color-div shake-on-hover">
						<h3>HIGH QUALITY CURRICULUM:</h3>
						<p>
							Students touch on actual projects and robust curriculum that places them atanthe forefront of their peers in terms of technology.<br><br>
							Enjoy access to up-to-date, relevant and industry-aligned course content that is updated regularly not just once every few years.
						</p>
						<div class="number">03.</div>
					</div>
					<div>digitank.</div>
				</div>
			</div>
		</div>
	</div>
	<div id="row-7">
		<div class="content">
			<h3>THE FUTURE IS IN TECHNOLOGY. AT DIGITANK, OUR GOAL IS TO INSPIRE 
				AND GIVE THE NEXT GENERATION THE SKILLS THEY NEED TO GET THINGS DONE.</h3>
			<h2>selected &lt;partners&gt;.</h2>
			<div id="partners-container">
				<div class="partner-panel">
					<div><img src="assets/media/images/school logos/CT French School.png" alt="Cape Town French School logo"></div>
					<hr>
					<p>Cape Town French School</p>
				</div>
				<div class="partner-panel middle-item">
					<div><img src="assets/media/images/school logos/Waterfall College logo.png" alt="Waterfall College logo"></div>
					<hr>
					<p>Waterfall College</p>
				</div>
				<div class="partner-panel">
					<div><img src="assets/media/images/school logos/Bryandale.png" alt="Bryandale Primary logo"></div>
					<hr>
					<p>Bryandale Primary</p>
				</div>
				<div class="partner-panel">
					<div><img src="assets/media/images/school logos/Herzlia New.png" alt="Herzlia logo"></div>
					<hr>
					<p>Herzlia</p>
				</div>
				<div class="partner-panel middle-item">
					<div><img src="assets/media/images/school logos/Fatima.png" alt="Lady of Fatima logo"></div>
					<hr>
					<p>Lady of Fatima</p>
				</div>
				<div class="partner-panel">
					<div><img src="assets/media/images/school logos/Kempies.png" alt="Hoerskool Kempton Park logo"></div>
					<hr>
					<p>Hoerskool Kempton Park</p>
				</div>
			</div>
			<div class="button center">BECOME A PARTNER</div>
		</div>
	</div>

<?php include_once("assets/php/contact-me.php")?>
<?php include_once("assets/php/footer.php")?>
</body>
</html>

<?php

    function prepare_division_card($count, $symbol, $title, $content, $id, $color){
        if($count < 10){
            $count = "0".$count;
        }
        return "<div class='division-panel'>
                    <h2>$count.</h2>
                    <div class='division-card'>
                        <div class='header txt-background-$color'>
                            <div class='background-$color'></div>
                            $symbol
                            <p class='mini-symbol dark-background-$color'>$symbol</p>
                        </div>
                        <div class='content'>
                            <h3 class='txt-color-$color'>$title</h3>
                            <hr>
                            <p>$content</p>
                        </div>
                        <a href='divisions.php?id=$id'><div class='button'>
                            VIEW COURSE
                        </div></a>
                    </div>
                </div>";
    }
    function loadCategories(){
        include("assets/php/connection.php");
        $sql = "SELECT * FROM categories ORDER BY category_order ASC";
        $result = mysqli_query($dbc, $sql);
        //need name surname email and type
        $count = 0;
        while($category_row = mysqli_fetch_row($result)){
            $category_row_array = $category_row;

            $category_id = $category_row_array[0];
            $category_name = $category_row_array[1];
            $category_description = $category_row_array[2];
            $title = strtoupper($category_name);
                
            
            echo "<div class='col-12 course-type-panel'>
                    <div class='course-type'>
                        <div class='heading-3'>$title</div>
                        <div class='body-3 vertical-margin-10 line-height-15 height-130 margin-bottom-40'>
                            $category_description
                        </div>
                        <a href='course_categories.php?type=$category_id'><div class='button clicked-blue-box-gradient-2 hover-blue-box-gradient-2 hover-blue-box pointer width-200 height-35 line-height-35 center heading-5 center-txt rounded-50 border-gray margin-top-10 margin-bottom-40 vertical-padding-5'>
                            <span class='blue-txt-gradient-2 no-select'> $category_name &nbsp;&nbsp; &rarr;</span>
                        </div></a>
                    </div>
                </div>";

                $count++;
                if($count>= 3){
                break;
                }
    }
}
function loadFeaturedCourses(){
    include("assets/php/connection.php");
    $sql = "SELECT * FROM courses WHERE featured = true";
    $result = mysqli_query($dbc, $sql);
    //need name surname email and type
    $count = 0;

    while($row = mysqli_fetch_row($result)){
        $array = $row;

        $id = $array[0];
        $creator = $array[1];
        $location = $array[4];
        
        $location_image = '';
        $city = 'No location';
        if(count(explode(',', $location)) > 1){
        $city = 'Multiple locations';
        }else if(is_numeric($location)){
            
            $loc_id = (int)$location ;
            $sql = "SELECT * FROM locations WHERE location_id = $loc_id";
            $result2 = mysqli_query($dbc, $sql);
            $cArray = mysqli_fetch_array($result2, MYSQLI_ASSOC);

            $name = strtoupper($cArray['name']);

            $city = strtoupper($cArray['city']);
            
            $loc_image = $cArray['image_url'];
            $location_image = "<div class='size-40 margin-top-n5 float-right'><img class='max-height-0' src='$loc_image' alt='$name Logo'></div>";
        }
        $shortDescription = $array[5];
        $title = $array[7];
        $age = $array[8];
        $price = $array[9];
        $time = $array[10];
        $image = $array[14];

        $description = $array[2];

        echo "
        
        <div class='col-12 third-width-0 float-left height-250'>
        <a href='booking.php?id=$id'><div class='course-card-container center'>
            <div class='course-image course-appear' style='background-image:url(\"$image\");background-size: cover;'>
                <div class='course-details-panel'>
                    <div class='course-details-top'>
                        $location_image
                        <div class='heading-4 bold'>$title</div>
                        <div class='body-4 footer-heading'>$shortDescription</div>
                    </div>
                    <div class='course-details-bottom'>
                        <div class='float-left logo-width primary-txt margin-right-15'><div class='heading-5'>$age</div><span class='body-5'>AGES</span></div>
                        <div class='float-right margin-top-5 height-20 line-height-20 body-5 footer-heading'><img class='size-9' src='assets/media/images/gray-location-icon.png' alt='Grey location icon'> $city</div>
                        <div class=''><div class='heading-5'>Time</div><span class='body-5 footer-heading'>$time</span></div>
                    </div>
                </div>
            </div>
        </a>
        </div>
    </div>
        ";

        $count++;
        if($count>= 3){
        break;
        }
    }
}

?>