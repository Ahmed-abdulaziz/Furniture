<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\brand;
use GUMP;

class brandcontroller extends controller{

        public $brand;

            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->brand= new brand();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data=$this->brand->selectall();
        $title="Brand";
        $this->view('/back/brand',['title'=>$title,'data'=> $data]);
    }
    function add(){

        $title="Add Brand";
        $this->view('/back/addbrand',['title'=>$title]);
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
                     'name' => $_POST['name'],
                     'image'=>$images,
                     ];
                     $this->brand->insert($data);
                   if($data){
                     helpers::redirect("brandcontroller/home/Done-Create-Brand");
                    }
             
        
        
     }
     function edit($id){

    
        $data=$this->brand->select('id',$id);
    
            
        $title="Update Brand";
        $this->view('/back/editbrand',['title'=>$title,'data'=> $data]);
    
       
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
         'name' => $_POST['name'],
         'image'=>$images,
         ];
       
         $this->brand->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("brandcontroller/home/Done-Upadate-Brand");
       }
        
}



public function delete($id){
    $this->brand->delete($id);
    helpers::redirect("brandcontroller/home/Done-Delete-Brand");
}
    // --------------------------------------------------------------------

  
}
    
?>