<?php

namespace projectmvc\model;
use projectmvc\core\model;
class brand extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM brand")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM brand WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM brand WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('brand',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('brand', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('brand',$id);

        return true;
    }

}

?>