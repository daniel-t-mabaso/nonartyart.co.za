<?php
    require_once 'connection.php';
    $all_content;
    function fetch_page(){
        $query = "SELECT * FROM content WHERE page_name = '$page'";
        $result = mysqli_query($dbc, $query);
        if (isset($result)){
            $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
            mysqli_free_result($result);

            return $array;
        }
        else{
            return null;
        }

    }
    
    function fetch_content($heading){
        return $all_content[$heading];
    }

    $all_content = fetch_page();
?>