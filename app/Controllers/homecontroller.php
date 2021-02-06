<?php 
namespace projectmvc\Controllers;
use  projectmvc\core\controller;
use  projectmvc\core\model;
use  projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\model\users;
use GUMP;

    class homeController extends controller {

            public function __construct()
            {
                session::start();
            }
      
       function login($msg=''){

        if(!empty(session::get('user'))){

            helpers::redirect("maincontroller/home");
        }else{
            $title="Login";
            $this->view('/home/login',['title'=>$title,'msg'=>$msg]);
        }
    
    }
        
        function logout(){
            
            session::stop();
            helpers::redirect("homecontroller/login");
        }
        function vrefiy(){
          
            $is_valid = GUMP::is_valid(($_POST), [
                'email'       => 'required',
              
            ]);

        if( $is_valid == 1){

               
             $data=model::db()->row("SELECT * FROM users WHERE email = ? && password = ? && type =?", [$_POST['email'],$_POST['pass'],0]);
            if(!empty($data)){

               
                session::set('user',$data->name);
                session::set('id',$data->id);
                helpers::redirect("maincontroller/home");
                
            }else{
                
                helpers::redirect("homecontroller/login/Email-Or-Password-Is-in-Valid");
            }
            
            
        }
        }

        function register(){

            
                $title="Register";
                $this->view('/home/register',['title'=>$title]);
            
           
        }

        function registerdata(){

            
           $users= new users();

            $data=[
                'name'=>$_POST['name'],
                'email'=>$_POST['email'],
                'password'=>$_POST['pass'],
                'phone'=>$_POST['phone'],
                'address'=>$_POST['address'],
                'age'=>$_POST['age']

            ];
           $users->insert($data);
           if($data){
            helpers::redirect("homecontroller/login/Done-Create-Account");
           }
        }


        function update(){

            if(!empty(session::get('user'))){

                $id=session::get('id');
         
            $data=model::db()->row("SELECT * FROM users WHERE id = ?", [$id]);

                
            $title="Update Account";
            $this->view('/home/editaccount',['title'=>$title,'data'=> $data]);
        
            }else{
                $title="Login";
                $this->view('/home/login',['title'=>$title,'msg'=>'']);
            }
    }

    
    function updatedata(){
        $users= new users();
        $data=[
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'password'=>$_POST['pass'],
            'phone'=>$_POST['phone'],
            'address'=>$_POST['address'],
            'age'=>$_POST['age']

        ];
        $id=session::get('id');
       $users->update($data,['id'=> $id]);
       if($data){
        helpers::redirect("homecontroller/update/Done-Upadte-Account");
       }
        
}

    }

?>





