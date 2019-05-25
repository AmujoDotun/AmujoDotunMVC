<?php
class Pages extends Controller{

    public function __construct(){
        // echo 'Pages loaded';
    }

    public function index(){
        return $this->view('Hello');
    }

    public function about(){
        echo 'about you';
    }
}
?>