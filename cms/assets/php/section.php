<div class="card small-padding section-edit white-bg large-width primary-txt medium-height hide overflow-hidden" id="section-edit">

    <div id="close-pop-up" class="danger-txt float-right subheading cursor" onclick="editSection(null);">✕</div><br>

    <p id="pop-up-msg" class="subheading center-txt small-padding center">Editor</p>

    <br>
        <div class="max-width center">

        <div id='edit-text-content'></div><div id='edit-section-content'>
            <div class="medium-width center">

                Select action: <select id="section-edit-action" class="form-input extra-small-padding border rounded" onchange="changeSectionEditorActionPanel();">

                <option disabled selected value> -- select an action -- </option>

                <option value='clear' hidden></option>

                <option value='style'>Edit section style</option>

                <option value='text'>Add text</option>

                <option value='button'>Add button</option>

                <option value='circle'>Add profile circle</option>

                <option value='list'>add list</option>

                <option value='card'>Add card</option>

                <option value='image'>Add image</option>

                <option value='video'>Add video</option>

                <option value='form'>Add form</option>

                </select>

            </div>

            <br>

            <div class='small-height max-width scroll'>

                <div class="medium-width center">

            <?php

            loadTools();

            ?>

            </div>

            </div>

        </div>

    <div class="max-width float-left">

    <div class="button center neutral-bg white-txt" onclick="previewSection(null);">Preview</div>

    <div class="button center tertiary-bg white-txt" onclick="document.getElementById('section-edit-action').value = 'clear';previewSection(null);">Clear all</div>

    </div>

</div>
</div>



<?php

function font_style_options(){

    echo "<div id='font-style-tool' class='section-tool hide'>Select font style: <select id='font-style-value' class='form-input extra-small-padding border rounded' onchange='changeSectionEditorActionPanel();'>

                <option disabled selected value> -- select font style -- </option>

                <option value='title'>Title</option>

                <option value='heading'>Heading</option>

                <option value='subheading'>Subheading</option>

                <option value='book'>Normal</option>

                <option value='bold'>Bold</option>

                <option value='italic'>Italic</option>

                </select>

            </div>";

}

function list_type_options(){

    

    echo "<div id='list-type-tool' class='section-tool hide'>Select list type: <select id='list-type-value' class='form-input extra-small-padding border rounded' onchange='updateListFields()'>

                <option disabled selected value='ul'> -- select list type -- </option>

                <option value='ul'>Unordered list</option>

                <option value='ull'>Unordered list (with links)</option>

                <option value='ol'>Ordered list</option>

                <option value='oll'>Ordered list (with links)</option>

                </select>

            <div id='list-input-panel'>

            <input class='form-input text-box extra-small-padding block border rounded' type='text' placeholder='List item text' name='list-item-text'/>

            <input class='form-input text-box extra-small-padding block border rounded tertiary-bg hide' type='text' placeholder='List item link' name='list-item-link'/>

            </div>

            <div class='right-txt cursor' onclick='addListItems(this.parentElement)'>Add list item</div>

            </div>

            ";

}

function form_options(){

    

    echo "<div id='form-tool' class='section-tool hide'>Select form type: <select id='form-type-value' class='form-input extra-small-padding border rounded' onchange='updateFormFields()'>

                <option disabled selected value='ul'> -- select form type -- </option>

                <option value='contact'>Contact form</option>

                <option value='custom'>Custom form</option>

                </select>

            

            <input id='form-email' class='form-input text-box hide extra-small-padding block border rounded' type='email' placeholder='Submit form to?' name='form-item-text'/>

            

            <div id='form-input-panel' class='hide'>

            <input class='form-input text-box extra-small-padding block border rounded' type='text' placeholder='What is the title?' name='form-heading' id='form-heading'/>

            <input class='form-input text-box extra-small-padding block border rounded' type='text' placeholder='What is on the submit button?' name='submit-text' id='submit-text'/>

            <div id='form-input-fields'><br>

            

            </div>

            <div id='add-short' class='right-txt cursor' onclick='addFormItems(this)'>Add short input field</div>

            <br>

            <div id='add-long' class='right-txt cursor' onclick='addFormItems(this)'>Add long input field</div>

            </div></div>

            ";

}

function position_options(){

    echo "<div id='position-tool' class='section-tool hide'>

    Select position:<br><br>

    <input type='radio' name='position' value='default' checked/> Default &nbsp; &nbsp;

    <input type='radio' name='position' value='left'/> Left &nbsp; &nbsp;

    <input type='radio' name='position' value='center'/> Center &nbsp; &nbsp;

    <input type='radio' name='position' value='right'/> Right<br><br></div>";

}

function text_alignment_options(){

    echo "<div id='text-alignment-tool' class='section-tool hide'>

    Select text alignment:<br><br>

    <input type='radio' name='alignment' value='left' checked/> Left &nbsp; &nbsp; &nbsp;

    <input type='radio' name='alignment' value='center'/> Center &nbsp; &nbsp; &nbsp;

    <input type='radio' name='alignment' value='right'/> Right<br><br></div>";

}

function width_options(){

    echo "<div id='width-tool' class='section-tool hide'>

    Select width:<br><br>

    <input type='radio' name='width' value='auto' checked/> Auto &nbsp; &nbsp;

    <input type='radio' name='width' value='extra-small'/> XS &nbsp; &nbsp;

    <input type='radio' name='width' value='small'/> Small &nbsp; &nbsp;

    <input type='radio' name='width' value='medium'/> Medium &nbsp; &nbsp;

    <input type='radio' name='width' value='large'/>Large &nbsp; &nbsp;

    <input type='radio' name='width' value='half'/> 50% &nbsp; &nbsp;

    <input type='radio' name='width' value='max'/> 100%<br><br></div>";

}

function height_options(){

    echo "<div id='height-tool' class='section-tool hide'>

    Select height:<br><br>

    <input type='radio' name='height' value='auto' checked/> Auto &nbsp; &nbsp;

    <input type='radio' name='height' value='extra-small'/> XS &nbsp; &nbsp;

    <input type='radio' name='height' value='small'/> Small &nbsp; &nbsp;

    <input type='radio' name='height' value='medium'/> Medium &nbsp; &nbsp;

    <input type='radio' name='height' value='large'/>Large &nbsp; &nbsp;

    <input type='radio' name='height' value='half'/> 50% &nbsp; &nbsp;

    <input type='radio' name='height' value='max'/> 100%<br><br></div>";

}

function size_options(){

    echo "<div id='size-tool' class='section-tool hide'>

    Select size:  <br><br>

    <input type='radio' name='size' value='auto'/> Auto &nbsp; &nbsp;

    <input type='radio' name='size' value='extra-small'/> XS &nbsp; &nbsp;

    <input type='radio' name='size' value='small'/> Small &nbsp; &nbsp;

    <input type='radio' name='size' value='medium'/> Medium &nbsp; &nbsp;

    <input type='radio' name='size' value='large'/>Large<br><br></div>";

}



function short_text_box($str){

    echo"<div id='short-text-tool' class='section-tool hide'><input class='form-input text-box extra-small-padding block border rounded' id='edit-short-text-input' type='text' placeholder='$str' name='section-add-text'/></div>";

}



function link_text_box($str){

    echo"<div id='link-text-tool' class='section-tool hide'><input class='form-input text-box extra-small-padding block border rounded' id='edit-link-text-input' type='text' placeholder='$str' name='section-add-text'/></div>";

}

function long_text_box($str){

    echo"<div id='long-text-tool' class='section-tool hide'><textarea class='form-input text-box extra-small-padding block border rounded' id='edit-long-text-input' rows='5' cols='30' placeholder='$str' name='section-add-text'></textarea></div>";

}

function font_colour_options(){

    echo "<div id='font-colour-tool' class='section-tool hide'><div id='color-panel' class='max-width'>

    Font Colour:<br><br>

        <input name='font-colour' type='hidden' value='none' id='font-colour'>

        <div class='tiny-square cursor inline-block small-margin white-bg border rounded' onclick='document.getElementById(\"font-colour\").value=\"none\";'></div>

        <div class='tiny-square cursor inline-block small-margin black-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"black\";'></div>

        <div class='tiny-square cursor inline-block small-margin white-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"white\";'></div>

        <div class='tiny-square cursor inline-block small-margin primary-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"primary\";'></div>

        <div class='tiny-square cursor inline-block small-margin secondary-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"secondary\";'></div>

        <div class='tiny-square cursor inline-block small-margin tertiary-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"tertiary\";'></div>

        <div class='tiny-square cursor inline-block small-margin alternative-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"alternative\";'></div>

        <div class='tiny-square cursor inline-block small-margin neutral-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"neutral\";'></div>

        <div class='tiny-square cursor inline-block small-margin success-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"success\";'></div>

        <div class='tiny-square cursor inline-block small-margin caution-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"caution\";'></div>

        <div class='tiny-square cursor inline-block small-margin danger-bg shadow rounded' onclick='document.getElementById(\"font-colour\").value=\"danger\";'></div>

    </div></div>";

}

function bg_colour_options(){

    echo "<div id='background-colour-tool' class='section-tool hide'><div id='color-panel' class='max-width'>

    Background Colour:<br><br>

        <input name='bg-colour' type='hidden' value='none' id='bg-colour'>

        <div class='tiny-square cursor inline-block small-margin white-bg border rounded' onclick='document.getElementById(\"bg-colour\").value=\"none\";'></div>

        <div class='tiny-square cursor inline-block small-margin black-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"black\";'></div>

        <div class='tiny-square cursor inline-block small-margin white-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"white\";'></div>

        <div class='tiny-square cursor inline-block small-margin primary-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"primary\";'></div>

        <div class='tiny-square cursor inline-block small-margin secondary-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"secondary\";'></div>

        <div class='tiny-square cursor inline-block small-margin tertiary-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"tertiary\";'></div>

        <div class='tiny-square cursor inline-block small-margin alternative-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"alternative\";'></div>

        <div class='tiny-square cursor inline-block small-margin neutral-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"neutral\";'></div>

        <div class='tiny-square cursor inline-block small-margin success-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"success\";'></div>

        <div class='tiny-square cursor inline-block small-margin caution-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"caution\";'></div>

        <div class='tiny-square cursor inline-block small-margin danger-bg shadow rounded' onclick='document.getElementById(\"bg-colour\").value=\"danger\";'></div>

    </div></div>";

}

function media_url(){

    echo"<div id='media-url-tool' class='section-tool hide'><input type='checkbox' id='media-background-check' onchange='updateMediaUrlInput(this);'>Insert media<span id='media-background-container' class='hide'><select class='form-input text-box extra-small-padding block border rounded' id='media-url' name='media-url'><option disabled selected value> -- select file -- </option>";
    $files = scandir('assets/media/images/');
    foreach($files as $f){
        if($f == '.' || $f == '..'){}
            else{
        echo "<option value='$f'>$f</option>";}
    }
    $files = scandir('assets/media/videos/');
    foreach($files as $f){
        if($f == '.' || $f == '..'){}
            else{
        echo "<option value='$f'>$f</option>";}
    }
    echo "</select><div class='button center primary-bg white-txt' onclick='alert(\"You're being redirected to the dashboard in order to complete the upload.\");window.location.href = \"dashboard.php\";'>Upload new file</div></span></div><br>";

}

function loadTools(){

    font_style_options();

    short_text_box('What text should appear?');

    list_type_options();

    form_options();

    long_text_box('What text should appear?');

    link_text_box('What is the link?');

    media_url();

    font_colour_options();

    bg_colour_options();

    text_alignment_options();

    size_options();

    width_options();

    height_options();

    position_options();

}

?>

