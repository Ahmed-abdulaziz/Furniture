<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\blog;
use GUMP;

class blogcontroller extends controller{

        public $blog;
  
            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->blog= new blog();
               
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data=$this->blog->selectall();
        $title="Blogs";
        $this->view('/back/blog',['title'=>$title,'data'=> $data]);
    }
    function add(){
        
        $title="Add Blog";
        $this->view('/back/addblog',['title'=>$title]);
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
                     'employee' => $_POST['employee'],
                     'subject' => $_POST['subject'],
                     'date' => $_POST['date'],
                     'text' => $_POST['text'],
                     'image'=>$images,
                     ];
                     $this->blog->insert($data);
                   if($data){
                     helpers::redirect("blogcontroller/home/Done-Create-Blog");
                    }
             
        
        
     }
     function edit($id){

        $data=$this->blog->select('id',$id);
      
            
        $title="Update Blog";
        $this->view('/back/editblog',['title'=>$title,'data'=> $data]);
    
       
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
             if(empty($_POST['date'])){
                 $data = $_POST['olddate'];
               
             }else{
                $data = $_POST['date'];
             }
                
    

        // -------------------------------------------------
      
     $data=[
         'subject' => $_POST['subject'],
         'employee' => $_POST['employee'],
         'text' => $_POST['text'],
         'date' =>$data,
         'image'=>$images,
         ];
       
         $this->blog->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("blogcontroller/home/Done-Upadate-Blog");
       }
        
}



public function delete($id){
    $this->blog->delete($id);
    helpers::redirect("blogcontroller/home/Done-Delete-Blog");
}
    // --------------------------------------------------------------------

    function insertcomment(){
       
          
        
      
     $data=[
         'comment' => $_POST['comment'],
         'userid' => $_POST['userid'],
         'blogid' => $_POST['blogid'],
         'date' => date("Y-m-d h:i:s"),
     
         ];
         $this->blog->insertcomment($data);
         $blogid=$_POST['blogid'];
       if($data){
         helpers::redirect("maincontroller/blogdetelis/$blogid");
        }
 


}
}
    
?>