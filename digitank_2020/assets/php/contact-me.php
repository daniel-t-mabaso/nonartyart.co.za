<div id="row-contact-me">
    <div class="content">
        <div class="heading">
            want to know more.
        </div>
        <div class="contact-form-panel">
            <div class="text">
                WE'LL EMAIL YOU ABOUT OUR COURSES RELEVANT TO YOU.
            </div>
            <form action="" method="post">
                <input class="input" type="text" name="name" id="name" placeholder="Name">
                <input class="input" type="email" name="email" id="email" placeholder="Email">
                <input type="hidden" id="user-type" name="user-type" value="teacher">
                <div class="input">
                    <div onclick="changeUserType(this);" class="user-type border-bottom-2"> 
                        Teacher
                    </div>
                    <div onclick="changeUserType(this);" class="user-type"> 
                        Student
                    </div>
                    <div onclick="changeUserType(this);" class="user-type"> 
                        Parent
                    </div>
                </div>
                
                <div class="button input shadow" onclick="forwardRequest('submit-know-more-form', this)">
                    <input type="button" value="Let me know!" name="submit-contact"/>
                </div>
            </form>
        </div>
        <div class="anticipate">
        THOSE WHO CAN ANTICIPATE AND PREPARE FOR FUTURE SKILLS REQUIREMENTS WILL EMERGE AS LEADERS OVER THE NEXT DECADES.
        </div>
        <div class="let-us-know">
        LET US KNOW!
        </div>
    </div>
</div>