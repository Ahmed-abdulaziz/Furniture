<?php

namespace projectmvc\model;
use projectmvc\core\model;
class portfolio extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM portfolio")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM portfolio WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM portfolio WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('portfolio',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('portfolio', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('portfolio',$id);

        return true;
    }

}

?>