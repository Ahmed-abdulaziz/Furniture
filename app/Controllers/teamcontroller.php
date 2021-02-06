<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\team;
use GUMP;

class teamcontroller extends controller{

        public $team;

            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->team= new team();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data=$this->team->selectall();
        $title="Testimonials";
        $this->view('/back/team',['title'=>$title,'data'=> $data]);
    }
    function add(){

        $title="Add Team";
        $this->view('/back/addteam',['title'=>$title]);
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
                     'job' => $_POST['job'],
                     'details' => $_POST['description'],
                     'image'=>$images,
                     ];
                     $this->team->insert($data);
                   if($data){
                     helpers::redirect("teamcontroller/home/Done-Create-Team");
                    }
             
        
        
     }
     function edit($id){

    
        $data=$this->team->select('id',$id);
    
            
        $title="Update Team";
        $this->view('/back/editteam',['title'=>$title,'data'=> $data]);
    
       
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
         'job' => $_POST['job'],
         'details' => $_POST['description'],
         'image'=>$images,
         ];
       
         $this->team->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("teamcontroller/home/Done-Upadate-Team");
       }
        
}



public function delete($id){
    $this->team->delete($id);
    helpers::redirect("teamcontroller/home/Done-Delete-Testimonials");
}
    // --------------------------------------------------------------------

  
}
    
?>