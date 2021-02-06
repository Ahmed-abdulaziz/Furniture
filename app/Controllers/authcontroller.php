<?php 

namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\model;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\users;
use GUMP;

class authcontroller extends controller{

        public $user;

            public function __construct()
            {
                session::start();
                
                $this->user= new users();
            }
            function login($msg=''){

                if(!empty(session::get('user'))){

                    helpers::redirect("backcontroller/home");
                }else{
                    $title="Login";
                    $this->view("/back/login",['title'=>'Login','msg'=>$msg]);
                }
           
            }

              
        function logout(){
            
            session::stop();
            helpers::redirect("authcontroller/login");
        }
            function vrefiy(){
             
                 
                $data=model::db()->row("SELECT * FROM users WHERE email = ? && password = ? && type =?", [$_POST['email'],$_POST['password'],'1']);

                 if(!empty($data)){
    
                  
                    session::set('backuser',$data->name);
                    session::set('backid',$data->id);
                    helpers::redirect("backcontroller/home");
                    
                }else{
                   
                    helpers::redirect("authcontroller/login/Email-Or-Password-Is-in-InValid");
                }
                
                
            
            }
        
}
    
?>