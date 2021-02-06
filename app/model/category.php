<?php

namespace projectmvc\model;
use projectmvc\core\model;
class category extends model{

   
    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM category")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM category WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM category WHERE $where = ?", [$data])->fetch();
        return $user;

        
    }

   
  
    public  function  insert($data){

        $allusers= $this->db()->insert('category',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('category', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('category',$id);

        return true;
    }

}

?>