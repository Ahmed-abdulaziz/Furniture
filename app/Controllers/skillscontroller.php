<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\skills;
use GUMP;

class skillscontroller extends controller{

        public $skills;

            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->skills= new skills();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home($id){

        $data=$this->skills->selectwhere('teamid',$id);
        $title="Skills";
        $this->view('/back/skills',['title'=>$title,'data'=> $data,'teamid'=>$id]);
    }
    function add($id){

        $title="Add Skills";
    
        $this->view('/back/addskills',['title'=>$title,'id'=>$id]);
    }

    function insert(){
       
          
                  
                 $data=[
                     'name' => $_POST['name'],
                     'percentage' => $_POST['percentage'],
                     'teamid' => $_POST['teamid'],
                     ];
                     $this->skills->insert($data);
                   if($data){
                     helpers::redirect("skillscontroller/home/".$_POST['teamid']."Done-Create-Team");
                    }
             
        
        
     }
     
    



public function delete($id,$teamid){
    $this->skills->delete($id);
    helpers::redirect("skillscontroller/home/".$teamid."Done-Delete-Skills");
}
    // --------------------------------------------------------------------

  
}
    
?>