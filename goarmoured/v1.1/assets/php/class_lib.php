<?php
class Content{
    var $home;
    var $services;
    var $about;
    var $contact;

    function __construct(){
        $this->home = array();
        $this->services = array();
        $this->about = array();
        $this->contact = array();
    }

    /*SETTERS*/
    function set_home($array){
        $this->home = $array;
    }
    function set_about($array){
        $this->about = $array;
    }
    function set_services($array){
        $this->services = $array;
    }
    function set_contact($array){
        $this->contact = $array;
    }

    /*GETTERS*/
    function get_home(){
        return $this->home;
    }
    function get_services(){
        return $this->services;
    }
    function get_about(){
        return $this->about;
    }
    function get_contact(){
        return $this->contact;
    }
}
?>