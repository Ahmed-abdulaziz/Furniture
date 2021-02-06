<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\services;
use GUMP;

class servicescontroller extends controller{

        public $services;

            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->services= new services();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data=$this->services->selectall();
        $title="Services";
        $this->view('/back/services',['title'=>$title,'data'=> $data]);
    }
    function add(){

        $title="Add Services";
        $this->view('/back/addservices',['title'=>$title]);
    }

    function insert(){
       
          
                  
                 $data=[
                     'name' => $_POST['name'],
                     'text' => $_POST['text'],
                     'icone' => $_POST['icon'],
                    
                     ];
                     $this->services->insert($data);
                   if($data){
                     helpers::redirect("servicescontroller/home/Done-Create-services");
                    }
             
        
        
     }
     function edit($id){

    
        $data=$this->services->select('id',$id);
    
            
        $title="Update Services";
        $this->view('/back/editservices',['title'=>$title,'data'=> $data]);
    
       
    }
     function update($id){
         
        //  Image Uplode 
        
             if(!empty($_POST['icone'])) {

               $icone = $_POST['icone'];

                
             }else{
              
                    
                $services = $this->services->select('id',$id);

                $icone = $services['icone'];
                
             }
                
    

        // -------------------------------------------------
      
     $data=[
         'name' => $_POST['name'],
         'text' => $_POST['text'],
         'icone' =>  $icone,
         ];
       
         $this->services->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("servicescontroller/home/Done-Upadate-Services");
       }
        
}



public function delete($id){
    $this->services->delete($id);
    helpers::redirect("servicescontroller/home/Done-Delete-services");
}
    // --------------------------------------------------------------------

  
}
    
?>