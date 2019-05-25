<?php
 
 class Core{

    /*
    *App Core Class
    * Create Url & loads core  controller
    *URL FORMAT - /controller/method/params

    */

    protected $currentController ='Pages'; //if no other controller this controller will load. along with the current method both chnages as the url chanages
    protected $currentMethod = 'index';
    protected $params = [];  

    public function __construct(){
        // print_r($this->getUrl());
        $url = $this->getUrl();
        
        //Look i controllers for first value, ucword is to capitalize the url
        if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
            //if file exist, set as a controller
            $this->currentController = ucwords($url[0]);
            
            //unset 0 index
            unset($url[0]);

        }

        //requrie controller
       require_once '../app/controllers/'. $this->currentController . '.php';
    
       
        //instantiate controller class
        $this->currentController = new $this->currentController;

        //check for second part of url
        if(isset($url[1])){
            //check to see if method exists in the controller
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                //unset 1 index
                unset($url[1]);
            }
        }
        //echo the current method
        // echo $this->currentMethod;

        //Get params
        $this->params = $url ? array_values($url) : [];

        //Call a callback with array of params
        call_user_func_array([$this->currentController, 
        $this->currentMethod],
         $this->params); 
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/'); //to get rid of the slash
            $url =filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url; 
        }
    }
 }


