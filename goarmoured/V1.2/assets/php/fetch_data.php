<?php
    include './assets/php/connection.php';
    include './assets/php/session.php';
    include_once './assets/php/class_lib.php';
    
    $query = "SELECT * FROM content";
    $result = mysqli_query($dbc, $query);
    if (isset($result)){
       

        $c = array();
        $d = array();
        $e = array();
        $f = array();
        while($row = mysqli_fetch_row($result)){
            if ($row[2] == 'home'){
                array_push($c, $row[3]);
            }
            else if ($row[2] == 'services'){
                array_push($d, $row[3]);
            }
            else if ($row[2] == 'about'){
                array_push($e, $row[3]);
            }
            else if ($row[2] == 'contact'){
                array_push($f, $row[3]);
            }
            
        }
        
        mysqli_free_result($result);
        $home_content = array_values($c);
        $services_content = array_values($d);
        $about_content = array_values($e);
        $contact_content = array_values($f);
    }
    else{
    }

    $content = new Content;
    $content->set_home($home_content);
    $content->set_services($services_content);
    $content->set_about($about_content);
    $content->set_contact($contact_content);
    $_SESSION['content'] = serialize($content);
    

    $h = unserialize($_SESSION['content']);
    $s = $h->get_home();

    // for($i = 1; $i < count($s); $i++){
    //     echo "<p> $s[$i]</p>";
    //  }
?>
