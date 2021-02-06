<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\contact;
use GUMP;

class contactcontroller extends controller{

        public $contact;

            public function __construct()
            {
                session::start();
                $user=session::get('backuser');
               
            
                if(empty($user)){
    
                    helpers::redirect("authcontroller/login/Please-Login-First");
                }
                $this->contact= new contact();
                
            }
         
           
    
// ----------------------Start testimonials----------------------------------

    function home(){

        $data=$this->contact->selectall();
        $title="Contact";
        $this->view('/back/contact',['title'=>$title,'data'=> $data]);
    }
   

    function insert(){
       

                 $data=[
                     'userid' => $_POST['userid'],
                     'subject' => $_POST['subject'],
                     'msg' => $_POST['msg'],
                     ];
                     $this->contact->insert($data);
                   if($data){
                     helpers::redirect("maincontroller/contact/Done-Send-Your-Message");
                    }
             
        
        
     }
    



public function delete($id){
    $this->contact->delete($id);
    helpers::redirect("contactcontroller/home/Done-Delete-Message");
}
    // --------------------------------------------------------------------

  
}
    
?>