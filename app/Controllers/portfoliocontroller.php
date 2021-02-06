<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\portfolio;
use projectmvc\model\category;
use GUMP;

class portfoliocontroller extends controller{

        public $portfolio;
        public $category;
            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->portfolio= new portfolio();
                $this->category= new category();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data=$this->portfolio->selectall();
      
        $title="Portfolio";
        $this->view('/back/portfolio',['title'=>$title,'data'=> $data]);
    }
    function add(){
        $category=$this->category->selectall();
        $title="Add Team";
        $this->view('/back/addportfolio',['title'=>$title,'category'=>$category]);
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
                     'categoryid' => $_POST['category'],
                     'client' => $_POST['client'],
                     'date' => $_POST['date'],
                     'url' => $_POST['url'],
                     'details' => $_POST['details'],
                     'image'=>$images,
                     ];
                     $this->portfolio->insert($data);
                   if($data){
                     helpers::redirect("portfoliocontroller/home/Done-Create-Portfolio");
                    }
             
        
        
     }
     function edit($id){

        $data=$this->portfolio->select('id',$id);
        $cat=new category();
        $allcat=$cat->selectall();
            
        $title="Update Team";
        $this->view('/back/editportfolio',['title'=>$title,'data'=> $data,'allcat'=> $allcat]);
    
       
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
         'categoryid' => $_POST['category'],
         'client' => $_POST['client'],
         'details' => $_POST['details'],
         'date' =>$data,
         'url' => $_POST['url'],
         'image'=>$images,
         ];
       
         $this->portfolio->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("portfoliocontroller/home/Done-Upadate-portfolio");
       }
        
}



public function delete($id){
    $this->portfolio->delete($id);
    helpers::redirect("portfoliocontroller/home/Done-Delete-Portfolio");
}
    // --------------------------------------------------------------------

  
}
    
?>