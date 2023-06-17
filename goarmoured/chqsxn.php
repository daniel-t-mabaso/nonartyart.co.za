<?php
    session_start();
    if(isset($_SESSION)){
        echo 'session started!';
    }
    else{
        echo '<h1>ERROR: Unable to start session.</h1>
            <h2>session not started :(</h2>';

    }
    
    ?>