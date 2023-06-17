<?php
    $dbc = mysqli_connect('localhost', 'digitvgq_wp', '12#uzj8LalGM', 'digitvgq_wp');
    if ($dbc -> connect_errno) {
        $error =  $mysqli -> connect_error;
        // echo "<script>alert('Failed to connect to MySQL: $error');</script>";
        exit();
      }
    //   echo "<script>alert('Connected');</script>";
?>