<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\info;
use GUMP;

class infocontroller extends controller{

        public $info;

            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->info= new info();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data=$this->info->selectall();
        $title="Information";
        $this->view('/back/info',['title'=>$title,'data'=> $data]);
    }
    function add(){

        $title="Add Information";
        $this->view('/back/addinfo',['title'=>$title]);
    }

    function insert(){
       
          
                    

                  
                 $data=[
                     'name' => $_POST['name'],
                     'text' => $_POST['text'],
                     'icone' => $_POST['icon'],
                     ];
                     $this->info->insert($data);
                   if($data){
                     helpers::redirect("infocontroller/home/Done-Create-Information");
                    }
             
        
        
     }
     function edit($id){

    
        $data=$this->info->select('id',$id);
    
            
        $title="Update Information";
        $this->view('/back/editinfo',['title'=>$title,'data'=> $data]);
    
       
    }
     function update($id){
         
       
        if(!empty($_POST['icone'])) {

            $icone = $_POST['icone'];

             
          }else{
           
                 
             $services = $this->info->select('id',$id);

             $icone = $services['icone'];
             
          }
             
 

     // -------------------------------------------------
   
  $data=[
      'name' => $_POST['name'],
      'text' => $_POST['text'],
      'icone' =>  $icone,
      ];
    
      $this->info->update($data,['id'=> $id]);
    if($data){
     helpers::redirect("infocontroller/home/Done-Upadate-Information");
    }
        
}



public function delete($id){
    $this->info->delete($id);
    helpers::redirect("infocontroller/home/Done-Delete-Inforamtion");
}
    // --------------------------------------------------------------------

  
}
    
?>