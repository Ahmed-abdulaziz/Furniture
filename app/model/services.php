<?php

namespace projectmvc\model;
use projectmvc\core\model;
class services extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM services")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM services WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM services WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('services',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('services', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('services',$id);

        return true;
    }

}

?>