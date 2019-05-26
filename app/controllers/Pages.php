<?php
class Pages extends Controller{

    public function __construct(){
        // echo 'Pages loaded';
    }

    public function index(){

        $data = [
            'title' => 'Welcome'
        ];
         $this->view('/Pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us'
        ];
        $this->view('/Pages/about', $data);
    }
}
?>