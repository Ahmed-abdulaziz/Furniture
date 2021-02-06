<?php

namespace projectmvc\Controllers;
use projectmvc\core\controller;
use projectmvc\model\users;
use projectmvc\model\images;
use projectmvc\core\session;
use projectmvc\core\helpers;
use projectmvc\core\model;
use projectmvc\model\blog;
use projectmvc\model\brand;
use projectmvc\model\category;
use projectmvc\model\features;
use projectmvc\model\portfolio;
use projectmvc\model\services;
use projectmvc\model\team;
use projectmvc\model\testimonials;

class maincontroller extends controller{
          
        function __construct()
        {
            session::start();
            $user=session::get('user');
           
        
            if(empty($user)){

                helpers::redirect("homecontroller/login/Please-Login-First");
            }
        }
    function home(){

        $user = new users();
        $brand=new brand();
        $b=$brand->selectall();

        $services=new services();
        $serv=$services->selectall();

        $cat=new category();
        $c=$cat->selectall();

        $data = $user->selectall();
        $sliders= model::db()->run("SELECT * FROM images WHERE place = ? && type =?", ['home','slider']);
       
        $this->view("/home/index",['title'=>'Home',
                                                    'data'=>$data,
                                                    'sliders'=>$sliders,
                                                    'brand'=>$b,
                                                    'services'=>$serv,
                                                    'category'=>$c
        ]);
     
      
    }
    function about(){

       $team=new team();
        $t=$team->selectall();
        $this->view("/home/about",['title'=>'About','team'=>$t]);
     
      
    }
    function team(){

        $team=new team();
        $t=$team->selectall();
        $this->view("/home/team",['title'=>'Team','team'=>$t]);
     
      
    }
    function testimonials(){
        $testimonials=new testimonials();
        $testi=$testimonials->selectall();
        $this->view("/home/testimonials",['title'=>'Testimonials','testimonial'=>$testi]);

    }
    
    function services(){
        
        $services=new services();
        $serv=$services->selectall();

        $features=new features();
        $fea=$features->selectall();

        $this->view("/home/services",['title'=>'Services','services'=>$serv,'features'=>$fea]);

    }
    function portfolio(){
        $cat=new category();
        $c=$cat->selectall();
        $this->view("/home/portfolio",['title'=>'Portfolio','category'=>$c]);

    }


    function portfoliodetails($id){
        $portfolio=new portfolio();
        $p=$portfolio->select('categoryid',$id);

        $cat=new category();
        $c=$cat->select('id',$id);
        $this->view("/home/portfolio-details",['title'=>'Portfolio Details','data'=>$p,'cat'=>$c]);

    }
    
    function pricing(){
        $this->view("/home/pricing",['title'=>'Pricing']);

    }
    function blog(){
        $blog=new blog();
        $data=$blog->selectall();
        $this->view("/home/blog",['title'=>'Blog','data'=>$data]);

    }
    function blogdetelis($id){
        $blog=new blog();
        $data=$blog->select('id',$id);
        $count=$blog->count('blog_comments','blogid',$id);
        $comments=$blog->comments($id);
        $this->view("/home/blog-details",['title'=>'Blog Detalis','data'=>$data,'count'=>$count,'comments'=>$comments]);

    }

    function contact($msg=''){
        $this->view("/home/contact",['title'=>'Contact','msg'=>$msg]);

    }
    
}
?>