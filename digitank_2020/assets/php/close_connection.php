<?php
    if(isset($dbc)){
        $dbc -> close();
        // echo "<script>console.log('Connection closed');</script>";
    }
?>