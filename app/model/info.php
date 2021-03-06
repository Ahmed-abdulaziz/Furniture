<?php

namespace projectmvc\model;
use projectmvc\core\model;
class info extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM info")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM info WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM info WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('info',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('info', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('info',$id);

        return true;
    }

}

?>