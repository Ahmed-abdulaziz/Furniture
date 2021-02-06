<?php

namespace projectmvc\model;
use projectmvc\core\model;
class features extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM features")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM features WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM features WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('features',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('features', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('features',$id);

        return true;
    }

}

?>