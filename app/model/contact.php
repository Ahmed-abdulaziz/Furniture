<?php

namespace projectmvc\model;
use projectmvc\core\model;
class contact extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM contact")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM contact WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM contact WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('contact',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('contact', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('contact',$id);

        return true;
    }

}

?>