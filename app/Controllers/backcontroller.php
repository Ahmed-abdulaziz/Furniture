<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\model;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\users;
use projectmvc\model\testimonials;
use GUMP;

class backcontroller extends controller{

        public $user;
        public $testimonials;

            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->user= new users();
                $this->testimonials=new testimonials();
            }
         
           
           
        function home(){
            $this->view("/back/index",['title'=>'Home']);
        }

        function users($type,$msg=''){
           
            if($type == 'admin'){
                $t='Admins';
                $d=1;
                $data = $this->user->selectwhere('type',$d);
            }elseif($type == 'user'){
                $t='Users';
                $d=0;
                $data = $this->user->selectwhere('type',$d);
            }elseif($type == 'all'){
                $t='All';
                $data = $this->user->selectall();
            }
           
          
            $this->view("/back/users",['title'=>'Users','t'=>$t,'data'=> $data,'msg'=>$msg]);
        }
        
        function adduser($msg=''){
            $this->view("/back/adduser",['title'=>'Add User','msg'=>$msg]);
        }
        function insertuser(){
           $validateemail = $this->user->select('email',$_POST['email']);
                if(!empty($validateemail)){
                    helpers::redirect("backcontroller/adduser/Email-Used-Before");
                }else{
                    $data=[
                        'name' => $_POST['name'],
                        'email' => $_POST['email'],
                        'password' => $_POST['password'],
                        'address' => $_POST['address'],
                        'phone' => $_POST['phone'],
                        'age' => $_POST['age'],
                        'type' => $_POST['type'],
        
                    ];
                    $this->user->insert($data);
                    if($data){
                        helpers::redirect("backcontroller/users/all/Done-Create-User");
                       }
                }
           
           
        }

        function deleteuser($id){
            $this->user->delete($id);
            helpers::redirect("backcontroller/users/all/Done-Delete-User");
        }

        function updateuser($id){
         
            $data=[
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'age' => $_POST['age'],
                'type' => $_POST['type'],
    
            ];
           
            $this->user->update($data,['id'=> $id]);
           if($data){
            helpers::redirect("backcontroller/users/all/Done-Upadate-User");
           }
            
    }

    function edituser($id){

    
        $data=$this->user->select('id',$id);

            
        $title="Update Account";
        $this->view('/back/edituser',['title'=>$title,'data'=> $data]);
    
       
}
// ----------------------Start testimonials----------------------------------

    function testimonials(){

        $data=$this->testimonials->selectall();
        $title="Testimonials";
        $this->view('/back/testimonials',['title'=>$title,'data'=> $data]);
    }
    function addtestimonials(){

        $title="Add Testimonials";
        $this->view('/back/addtestimonials',['title'=>$title]);
    }

    function inserttestimonials(){
       
          
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
                     'text' => $_POST['description'],
                     'image'=>$images,
                     ];
                     $this->testimonials->insert($data);
                   if($data){
                     helpers::redirect("backcontroller/testimonials/Done-Create-Testimonials");
                    }
             
        
        
     }

     function updatetestimonials($id){
         
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
                $data =  $this->testimonials->selectwhere('id',$id);
                    
                $images = $data->image;
             }
                
    

        // -------------------------------------------------
      
     $data=[
         'name' => $_POST['name'],
         'job' => $_POST['job'],
         'text' => $_POST['description'],
         'image'=>$images,
         ];
       
         $this->testimonials->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("backcontroller/testimonials/all/Done-Upadate-Testimonials");
       }
        
}

function edittestimonials($id){

    
    $data=$this->testimonials->select('id',$id);

        
    $title="Update Testimonials";
    $this->view('/back/edittestimonials',['title'=>$title,'data'=> $data]);

   
}

public function deletetestimonials($id){
    $this->testimonials->delete($id);
    helpers::redirect("backcontroller/testimonials/Done-Delete-Testimonials");
}
    // --------------------------------------------------------------------

  
}
    
?>