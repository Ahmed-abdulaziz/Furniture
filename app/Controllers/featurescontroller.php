<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\features;
use GUMP;

class featurescontroller extends controller{

        public $features;
        public $category;
            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->features= new features();
             
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home($msg=''){

        $data=$this->features->selectall();
      
        $title="Features";
        $this->view('/back/features',['title'=>$title,'data'=> $data,'msg'=>$msg]);
    }
    function add(){
        
        $title="Add Features";
        $this->view('/back/addfeatures',['title'=>$title]);
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
                     'subject' => $_POST['subject'],
                     'type' => $_POST['type'],
                     'text' => $_POST['text'],
                     'image'=>$images,
                     ];
                     $this->features->insert($data);
                   if($data){
                     helpers::redirect("featurescontroller/home/Done-Create-Features");
                    }
             
        
        
     }
     function edit($id){

        $data=$this->features->select('id',$id);
 
            
        $title="Update Features";
        $this->view('/back/editfeatures',['title'=>$title,'data'=> $data]);
    
       
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
         'subject' => $_POST['subject'],
         'type' => $_POST['type'],
         'text' => $_POST['text'],
         'image'=>$images,
         ];
       
         $this->features->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("featurescontroller/home/Done-Upadate-Features");
       }
        
}



public function delete($id){
    $this->features->delete($id);
    helpers::redirect("featurescontroller/home/Done-Delete-Features");
}
    // --------------------------------------------------------------------

  
}
    
?>