<?php
class Pages extends Controller{
     public function __construct()
     {

          }
     public function index(){
          $data=[
               'title' => 'SITEBIJOUX',
          ];
          $this->view('pages/index',$data);

     }
     public function about(){
          $data=[
               'title' => 'About Us'
          ];
          $this->view('pages/about',$data);
     }
     public function gallery(){
          $data=[
               'title' => 'gallery'
          ];
          $this->view('pages/gallery',$data);
     }
     public function contact(){
          $data=[
               'title' => 'contact'
          ];
          $this->view('pages/contact',$data);
     }
     public function dashbord(){
          $data=[
               'title' => 'dashbord'
          ];
          $this->view('pages/dashbord',$data);
     }
}
