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
<body id="home-page" class='dark-2 white-txt'>
    <div id="responsive" class="fixed max-width-0 max-height-0 z-100 dark-2">
        <div class="title content horizontal-padding-30 padding-top-150 green-blue-txt-gradient-1">Not Responsive yet. Please view on Desktop</div>
    </div>
    <!-- Header -->
    <?php
        include("./assets/php/header.php");
    ?>
    <!-- Row 1 -->
    <div id="row-1" class="home-bg">
        <div class='max-height-0 max-width-0 gradient-2 vertical-padding-20'>
            <div class="content uninterupted-max-height-20">
                <div id="center-home-title">
                    <div id="landing-title">CODE IS THE FUTURE.</div>
                    <div id="landing-exra-large-title" class="txt-shadow">CODE THE FUTURE.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2 -->
    <span id="get-started"></span>
    <div id="row-2" class="dark-2">
        <div class="content">
            <div class="col-1">
                <div class="heading-1 center-txt margin-top-n padding-bottom-55">GET STARTED</div>
                <div class="heading-2 center-txt padding-bottom-40">FEATURED COURSES</div>
            </div>
            <div id="get-started-cards-holder" class="col-1 max-width-0 height-285">
                <div class="col-12 third-width-0 float-left height-250">
                    <div class="course-card-container width-260 uninterupted-max-height-20 float-right margin-right-15">
                        <div class="course-image iOS-bg">
                            <div class="course-details-panel">
                                <div class="course-details-top">
                                    <div class="heading-4 bold">Coding iOS Apps</div>
                                    <div class="body-4 footer-heading">An introduction to Apple's swift language.</div>
                                </div>
                                <div class="course-details-bottom">
                                    <div class="float-left logo-width primary-txt margin-right-15"><div class="heading-5">12+</div><span class="body-5">AGES</span></div>
                                    <div class="float-right margin-top-5 height-20 line-height-20 body-5 footer-heading"><img class="size-9" src="assets/media/images/gray-location-icon.png" alt="Grey location icon"> SANDTON</div>
                                    <div class=""><div class="heading-5">Saturday,</div><span class="body-5 footer-heading">July 20</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 third-width-0 float-left height-250">
                    <div class="course-card-container center">
                        <div class="course-image python-bg">
                            <div class="course-details-panel">
                                <div class="course-details-top">
                                    <div class="size-40 margin-top-n5 float-right"><img class="max-height-0" src="assets/media/images/herzlia.png" alt="Herzlia School Logo"></div>
                                    <div class="heading-4 bold">Python</div>
                                    <div class="body-4 footer-heading">From what it is to how it works.</div>
                                </div>
                                <div class="course-details-bottom">
                                    <div class="float-left logo-width primary-txt margin-right-15"><div class="heading-5">12+</div><span class="body-5">AGES</span></div>
                                    <div class="float-right margin-top-5 height-20 line-height-20 body-5 footer-heading"><img class="size-9" src="assets/media/images/gray-location-icon.png" alt="Grey location icon"> SANDTON</div>
                                    <div class=""><div class="heading-5">Saturday,</div><span class="body-5 footer-heading">July 6</span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 third-width-0 float-left height-250">
                    <div class="course-card-container float-left margin-left-15">
                        <div class="course-image minecraft-bg">
                            <div class="course-details-panel">
                                <div class="course-details-top">
                                    <div class="heading-4 bold">Minecraft</div>
                                    <div class="body-4 footer-heading">Enjoy and play an all day competition.</div>
                                </div>
                                <div class="course-details-bottom">
                                    <div class="float-left logo-width primary-txt margin-right-15"><div class="heading-5">12-18</div><span class="body-5">AGES</span></div>
                                    <div class="float-right margin-top-5 height-20 line-height-20 body-5 footer-heading"><img class="size-9" src="assets/media/images/gray-location-icon.png" alt="Grey location icon"> SANDTON</div>
                                    <div class=""><div class="heading-5">Friday,</div><span class="body-5 footer-heading">July 5</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 margin-top-5">
                <div class="button width-205 height-45 pointer line-height-25 center body-3 white-txt center-txt orange-button-hover rounded-30">
                    <div class="orange-txt-gradient-2 rounded-30 vertical-padding-10 no-select">BOOK A COURSE</div> 
                </div>
            </div>
        </div>
    </div>
    <!-- Row 3 -->
    <div id="row-3" class="dark-3">
        <div class="content">
            <div class="col-1 padding-bottom-75">
                <div class="heading-2 center-txt">DIFFERENT COURSES FOR DIFFERENT NEEDS</div>
            </div>
            <div id="course-types-container" class="col-1 max-width-0 height-250">

                <div class="col-12 course-type-panel">
                    <div class="course-type">
                        <div class="heading-3">HOLIDAY CAMPS</div>
                        <div class="body-3 vertical-margin-10 line-height-15 height-130 margin-bottom-40">
                            Holiday camp classes take place during the school holidays, where students can sign up for a range of exciting courses to explore technology and have fun over the holidays.
                        </div>
                        <div class="button clicked-blue-box-gradient-2 hover-blue-box-gradient-2 hover-blue-box pointer width-200 height-35 line-height-35 center heading-5 center-txt rounded-50 border-gray margin-top-10 margin-bottom-40 vertical-padding-5">
                            <span class="blue-txt-gradient-2 no-select"> View Holiday Camps &nbsp;&nbsp; &rarr;</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 course-type-panel">
                    <div class="course-type">
                        <div class="heading-3">EXTRAMURAL COURSES</div>
                        <div class="body-3 vertical-margin-10 line-height-15 height-130 margin-bottom-40">
                            Extramural courses take place in the afternoon after a school day or during the weekend. Lessons are set throughout the year, and are open to students within and outside of the school they're taking place at.
                        </div>
                        <div class="button clicked-blue-box-gradient-2 hover-blue-box-gradient-2 hover-blue-box pointer width-200 height-35 line-height-35 center heading-5 center-txt rounded-50 border-gray margin-top-10 margin-bottom-40 vertical-padding-5">
                            <span class="blue-txt-gradient-2 no-select"> Extramural Courses &nbsp;&nbsp; &rarr;</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 course-type-panel">
                    <div class="course-type">
                        <div class="heading-3">1 ON 1 COURSES</div>
                        <div class="body-3 vertical-margin-10 line-height-15 height-130 margin-bottom-40">
                            Private lessons at your convenience. We can schedule lessons according to the days that suit you, and offer the individual attention required for students who want to take their skills to the next level. We offer classes online and in-person.
                        </div>
                        <div class="button clicked-blue-box-gradient-2 hover-blue-box-gradient-2 hover-blue-box pointer width-200 height-35 line-height-35 center heading-5 center-txt border-gray rounded-50 border-gray margin-top-10 margin-bottom-40 vertical-padding-5">
                            <span class="blue-txt-gradient-2 no-select"> View 1 on 1 Courses &nbsp;&nbsp; &rarr;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 4 -->
    <span id="why-code"></span>
    <div id="row-4" class="gradient-1-a">
        <div class="content text-gradient-1 max-height-0">
                <div class="heading-1 center-txt padding-top-15 white-txt padding-bottom-30">
                    WHY LEARN TO CODE?
                </div>
                <div class="mobile-margin-50">
                <div class="floating-symbol height-150 vertical-margin-20">
                    <div class="max-width-0 left-0 center absolute z-5">
                        <div class="content">
                            <p class="floating-symbol huge right-txt vertical-padding-40 margin-right-65 float-right float-3 blue-pink-txt-gradient-1">=</p>
                        </div>
                    </div>
                    <p class="floating-symbol huge right-txt vertical-padding-40 margin-right-65 float-right text-float-3">=</p>
                    <div class="floating-symbol max-width-0 left-0 center absolute z-5">
                        <div class="content">
                            <p class="huge margin-left-65 float-2 blue-pink-txt-gradient-1">{</p>
                        </div>
                    </div>
                    <p class="floating-symbol huge margin-left-65 text-float-2">{</p>
                </div>
                <div class="mobile-margin-50">
                    <div class="col-6 why-code-panel margin-top-30 margin-left-70">
                        <div class="title padding-top-30 blue-pink-txt-gradient-1">
                            THE FOURTH INDUSTRIAL<br>REVOLUTION IS REAL
                        </div>
                        <div class="floating-symbol max-width-0 left-0 center absolute z-5">
                            <div class="content">
                                <p class="huge right-txt margin-right-165 margin-top-90 float-right float-4 blue-pink-txt-gradient-1">&amp;</p>
                            </div>
                        </div>
                        <p class="floating-symbol huge right-txt margin-right-165 margin-top-90 float-right text-float-4">&amp;</p>
                        <div class="why-code-panel body-2 width-670 white-txt padding-top-10">
                                Globalization and rapid technological change has led to major shifts in the nature of work. Students who emerge from the education system with technological skills are more likely to be able to enter those professions (high-skilled, high-paying) that are gaining from technology. 
                        </div>
                    </div>
                </div>
            </div>
                <div class="mobile-margin-50">
                    <div class="floating-symbol height-150 horizontal-padding-50 margin-top-30">
                        <div class="floating-symbol max-width-0 left-0 center absolute z-5">
                            <div class="content">
                                <p class="huge horizontal-margin-50 margin-left-230 float-3 blue-pink-txt-gradient-1">&gt;</p>
                            </div>
                        </div>
                        <p class="floating-symbol huge horizontal-margin-50 margin-left-180 text-float-3">&gt;</p>
                    </div>
                    
                    <div class="why-code-panel horizontal-padding-155">
                        <p class="floating-symbol huge float-left left-txt text-float-5 margin-top-140 green-txt">&ldquo;</p>
                        <div class="why-code-panel margin-left-40 margin-top-110 padding-left-50 padding-bottom-30">
                            <div class="title  green-blue-txt-gradient-1">
                                CODING IS BEST<br>LEARNT YOUNG
                            </div>
                            <div class="why-code-panel body-2 white-txt">
                                    Learning to code is similar to learning a second language. The earlier that children are exposed to fundamental topics like sequencing, loops, and conditionals, the more deeply they absorb these concepts.
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="floating-symbol height-150 horizontal-padding-50">
                    <div class="floating-symbol max-width-0 left-0 center absolute z-5 margin-right-50">
                        <div class="content">
                            <p class="huge right-txt horizontal-margin-50 float-right float-4 yellow-green-1">#</p>
                        </div>
                    </div>
                    <p class="floating-symbol huge right-txt horizontal-margin-0 float-right text-float-4">#</p>
                </div>
                <div class="why-code-panel horizontal-padding-30">
                    <div class="floating-symbol max-width-0 left-0 center absolute z-5 margin-right-50">
                        <div class="content">
                            <p class="huge margin-top-85 float-left width-20 margin-left-150 left-txt float-2 green-txt">(</p>
                        </div>
                    </div>
                    <p class="floating-symbol huge margin-top-85 float-left width-20 margin-left-120 left-txt text-float-2">(</p>
                    
                    <div class="mobile-margin-50">
                        <div class="why-code-panel margin-left-305 margin-top-50 padding-50 vertical-padding-50">
                            <div class="why-code-panel title yellow-green-1">
                                BUILDS CONFIDENCE
                            </div>
                            <div class="why-code-panel body-2 white-txt">
                                    It is incredibly empowering for children to be able to create projects and show them off to family and friends
                            </div>
                        </div>
                    </div>
                </div>
                <div class="floating-symbol height-250 horizontal-padding-50 margin-top-20">
                    <div class="float-right">
                        <div class="floating-symbol max-width-0 left-0 center absolute z-5 margin-right-50">
                            <div class="content">
                                <div class="huge width-70 right-txt horizontal-margin-0 float-right padding-right-50 float-5 red-yellow-txt-gradient-2">/</div>
                            </div>
                        </div>
                        <div class="floating-symbol huge right-txt horizontal-margin-0 float-right text-float-5">/</div>
                    </div>
                    <div class=" margin-left-275 margin-top-30 float-left">
                        <div class="floating-symbol max-width-0 left-0 center absolute z-5 margin-right-50">
                            <div class="content">
                                <div class="margin-left-490 width-100">
                                    <div class="huge right-txt height-170 horizontal-margin-50 float-right red-yellow-txt-gradient-3 float-3 ">;</div>
                                </div>
                            </div>
                        </div>
                        <div class="floating-symbol huge right-txt height-170 horizontal-margin-50 float-right text-float-3">;</div>
                    </div>
                    <div class=" width-500 float-left height-100 center-txt">
                        <div class="floating-symbol max-width-0 left-0 center absolute z-5 margin-right-50">
                            <div class="content left-txt">
                                <div class="huge-2 height-150 margin-left-275 float-4 red-green-gradient-1">*</div>
                            </div>
                        </div>
                        <div class="floating-symbol huge-2 height-150 margin-left-50 text-float-4">*</div>
                    </div>
                </div>

                
                <div class="mobile-margin-50">
                    <div class="why-code-panel  height-100 margin-left-175">
                        <div class="why-code-panel width-550 float-right padding-right-35 margin-top-0">
                            <div class="title red-yellow-txt-gradient-1">
                                TRANSLATES TO<br>SUCCESS
                            </div>
                            <div class="why-code-panel body-2 white-txt">
                                    Learning to program supports learning in other areas, like math, reading, and science.
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <span id="the-next-generation"></span>
    <!-- Row 5 -->
    <div id="row-5" class="black-bg">
        <div class="content">
                <div class="heading-1 center-txt margin-top-35 padding-bottom-15">INSPIRING THE NEXT GENERATION</div>
                <div class="body-1 center-txt quote-author-txt bolder">The future is in technology. At digitank, our goal is to inspire and give<br>the next generation the skills they need to get things done.</div>
        </div>
    </div>

    <!-- Row 6 -->
    <div id="row-6" class="black-bg">
        <div class="content">
            
                <div id="quote-txt" class="quote blue-txt-gradient-2">
                    
                    </div>
                <div id="quote-author"class="heading-5 center-txt quote-author-txt margin-top-20 margin-bottom-25">
                        
                    </div>
                    <div class="col-6" onload="changeQuote(0);">
                            <div id="left-2-quote-image" onclick="changeQuote(-2);" class="float-left">
                            </div>
                            <div id="left-1-quote-image" onclick="changeQuote(-1);" class="float-left">
                            </div>
                            <div id="right-2-quote-image" onclick="changeQuote(2);" class="float-right">
                            </div>
                            <div id="right-1-quote-image" onclick="changeQuote(1);" class="float-right">
                            </div>
                            
                            <div id="center-quote-image" class="card height-420 width-280 center">
                            </div>
                            <div id="quote-buttons">
                                <div class="absolute width-50 left-20 heading-1 blue-txt-gradient-2 opacity-60" onclick="changeQuote(-1);"> &#11164;</div>
                                <div class="absolute width-50 right-0 heading-1 blue-txt-gradient-2 opacity-60" onclick="changeQuote(1);"> &#11166;</div>
                            </div>
                        </div>
        </div>
    </div>

    <!-- Row 7 -->
    <div id="row-7" class="dark-1">
        <div class="content">
            <div class="heading-1 center-txt margin-top-35 padding-bottom-30">SOME OF OUR PARTNERS</div>
            <div class="partner-logo-panel">
                <div class="half-width-0 float-left">
                    <div class="school-logo"><img class="max-height-0" src="assets/media/images/herzlia.png" alt="Herzlia School Logo"></div>
                </div>
                <div class="half-width-0 float-left">
                    <div class="school-logo"><img class="max-height-0" src="assets/media/images/CT French School.png" alt="CT French School Logo"></div>
                </div>
            </div>
            <div class="partner-logo-panel">
                <div class="half-width-0 float-left">
                    <div class="school-logo"><img class="max-height-0" src="assets/media/images/Sunlands Primary.png" alt="Sunlands Primary School Logo"></div>
                </div>
                <div class="half-width-0 float-left">
                    <div class="school-logo hide-overflow"><img class="max-height-0" src="assets/media/images/Bryandale.jpg" alt="Bryandale School Logo"></div>
                </div>
            </div>
            
            <div class="partner-button-panel">
                <div class="button pointer width-175 clicked-blue-box-gradient-2 hover-blue-box height-35 line-height-35 margin-right-15 heading-5 float-right center-txt rounded-50 border-gray vertical-margin-40 vertical-padding-5">
                    <span class="blue-txt-gradient-2 no-select"> View all Partners &nbsp;&nbsp; &rarr;</span>
                </div>
            </div>
            <div class="partner-button-panel">
                <div class="button pointer width-175 clicked-blue-box-gradient-2 hover-blue-box height-35 line-height-35 margin-left-10 heading-5 center-txt rounded-50 border-gray vertical-margin-40 vertical-padding-5">
                    <span class="blue-txt-gradient-2 no-select"> Become a Partner &nbsp;&nbsp; &rarr;</span>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Row 8 -->
    <div id="row-8" class="dark-3">
        <div class="content">
            <div class="col-6">
                <div class="heading-2 center-txt margin-top-20  padding-bottom-10">
                    WANT TO KNOW MORE?
                </div>
                <div class="body-6 quote-author-txt bolder center-txt">
                    We'll email you about our courses<br>relevant to you.
                </div>
                <div class="width-220 center margin-top-30">
                    <form action="" method="post">
                        <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 margin-top-10 margin-bottom-5 input-1" type="text" name="name" id="name" placeholder="Name">
                        <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 vertical-margin-10 input-1" type="email" name="email" id="email" placeholder="Email">
                        <input type="hidden" id="user-type" name="user-type" value="teacher">
                        <div class="max-width-0 dark-1 height-35 line-height-35 primary-txt rounded-10">
                            <div onclick="changeUserType(this);" class="user-type third-width-0 center-txt pointer rounded-10 float-left input-2 border-2 max-height-2 line-height-30 "> 
                                TEACHER
                            </div>
                            <div onclick="changeUserType(this);" class="user-type third-width-0 center-txt pointer rounded-10 float-right input-2"> 
                                STUDENT
                            </div>
                            <div onclick="changeUserType(this);" class="user-type third-width-0 center-txt pointer rounded-10 center vertical-margin-5 input-2"> 
                                PARENT
                            </div>
                        </div>
                        
                        <div class="form-button body-3 orange-button-hover">
                                <input type="submit" class="orange-txt-gradient-2 rounded-30 no-select" value="Let me know!" name="submit-contact"/>
                            </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>

    <!-- Footer -->
  <?php
    include('./assets/php/footer.php');
  ?>
    
</body>
</html>