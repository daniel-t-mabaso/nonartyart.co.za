<?php
    //mail page for inform web app project
    $sendTo = $_GET['users'];
    $message = $_GET['notif'];
    $subject = "INFORM - New Alert notification";
    $headers = "From: no-reply@inform.project" . "\r\n" ;
    
    if(strpos($sendTo, ',')){
        $l = count($sendTo);
        echo "Sending notification to $l users";
        $sentTo = explode(",", $sendTo);
        for($i = 0; $i < $l; $i++){
            $to = $sendTo[$i];
            mail($to,$subject,$message,$headers);
        }
    }
    else{
        echo "Sending notification to 1 users";
        $to = $sendTo;
        mail($to,$subject,$message,$headers);
    }
    
    echo '<br><br>Redirecting back to inform.<script>
            window.location = "http://inform.nonartyart.co.za";
        </script>';
    
?>