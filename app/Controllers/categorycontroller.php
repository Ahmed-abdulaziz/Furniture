<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\category;
use GUMP;

class categorycontroller extends controller{

        public $category;

            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->category= new category();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data=$this->category->selectall();
        $title="Category";
        $this->view('/back/category',['title'=>$title,'data'=> $data]);
    }
    function add(){

        $title="Add Category";
        $this->view('/back/addcategory',['title'=>$title]);
    }

    function insert(){
       
          
                  
                 $data=[
                     'name' => $_POST['name'],
                    
                     ];
                     $this->category->insert($data);
                   if($data){
                     helpers::redirect("categorycontroller/home/Done-Create-Category");
                    }
             
        
        
     }
     function edit($id){

    
        $data=$this->category->select('id',$id);
    
            
        $title="Update Category";
        $this->view('/back/editcategory',['title'=>$title,'data'=> $data]);
    
       
    }
     function update($id){
         
     
      
     $data=[
         'name' => $_POST['name'],
         ];
       
         $this->category->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("categorycontroller/home/Done-Upadate-Category");
       }
        
}



public function delete($id){
    $this->category->delete($id);
    helpers::redirect("categorycontroller/home/Done-Delete-Category");
}
    // --------------------------------------------------------------------

  
}
    
?>