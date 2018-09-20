<?php
class Pages extends Controller {
    public function __construct(){
        
    }

    public function index(){ // default method
        $data = [
            'title' => 'NawalMVC',
        ];
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us'
        ];
        $this->view('pages/about', $data);
    }
}