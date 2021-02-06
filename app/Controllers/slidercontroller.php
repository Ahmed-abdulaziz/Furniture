<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\images;
use  projectmvc\core\model;
use GUMP;

class slidercontroller extends controller{

        public $slider;
            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->slider= new images();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data= model::db()->run("SELECT * FROM images WHERE place = ? && type =?", ['home','slider']);
        $title="Slider";
        $this->view('/back/webslider',['title'=>$title,'data'=> $data]);
    }
    function add(){
        $title="Add Slider";
        $this->view('/back/addslider',['title'=>$title]);
    }

    function insert(){
       
          
                    //  Image Uplode 
                     
                
                    $imageName = $_FILES['image']['name']; 
                    $imageSize = $_FILES['image']['size'];
                    $imageTmp  = $_FILES['image']['tmp_name'];
                    $imageType = $_FILES['image']['type'];
                    $exp = explode('.' , $imageName);
                    $imageExtension = strtolower(end($exp));
                    $image = rand(0,100000) . '_' .$imageName;
                     // remove space in image name
                     $images = str_replace(' ', '_', $image);
                     $images = str_replace('#', '_', $image);
                     // -----------
                     
                    move_uploaded_file($imageTmp , "back/uplode//" . $images);

        // -------------------------------------------------
                  
                 $data=[
                     'place' => $_POST['place'],
                     'type' => $_POST['type'],
                     'image'=>$images,
                     ];
                     $this->slider->insert($data);
                   if($data){
                     helpers::redirect("slidercontroller/home/Done-Create-Slider");
                    }
             
        
        
     }
     function edit(){

        $data= model::db()->run("SELECT * FROM images WHERE place = ? && type =?", ['home','slider']);
            
        $title="Update Slider";
        $this->view('/back/editslider',['title'=>$title,'data'=> $data]);
    
       
    }
     function update($id){
         
        //  Image Uplode 
        
              
             if(!empty($_FILES['image']['name'])) {

                $imageName = $_FILES['image']['name']; 
                $imageSize = $_FILES['image']['size'];
                $imageTmp  = $_FILES['image']['tmp_name'];
                $imageType = $_FILES['image']['type'];
                $exp = explode('.' , $imageName);
                $imageExtension = strtolower(end($exp));
                $image = rand(0,100000) . '_' .$imageName;
                 // remove space in image name
                 $images = str_replace(' ', '_', $image);
                 $images = str_replace('#', '_', $image);
                 // -----------
                 
                move_uploaded_file($imageTmp , "back/uplode//" . $images);

                
             }else{
              
                    
                $images = $_POST['oldimage'];

                
             }
            
    

        // -------------------------------------------------
      
     $data=[
         'image'=>$images,
         ];
       
         $this->slider->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("slidercontroller/edit/Done-Upadate-Slider");
       }
        
}



public function delete($id){
    $this->slider->delete($id);
    helpers::redirect("slidercontroller/edit/Done-Delete-Slider");
}
    // --------------------------------------------------------------------

  
}
    
?>