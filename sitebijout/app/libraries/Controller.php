<?php
/* 
 * Controleur de base
 * loads  models ans views
*/
class Controller{
   //load model
   public function model($model){
    // Require model file 
    require_once ('../app/models/' . $model . '.php');
    // instatiate model 
    return new $model();
   } 

     
    //  load view
    public function view($view, $data = []){
        // check for the view file
        if (file_exists('../app/views/' . $view . '.php'))
       {
         // require view file
        require_once '../app/views/' . $view . '.php'; 
    }else{
            // view does not exist 
            die ('View does not exist');
        }
    } 
}