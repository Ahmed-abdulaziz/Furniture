<?php

namespace projectmvc\model;
use projectmvc\core\model;
class testimonials extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM testimonials")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM testimonials WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM testimonials WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('testimonials',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('testimonials', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('testimonials',$id);

        return true;
    }

}

?>