<?php

namespace projectmvc\model;
use projectmvc\core\model;
class images extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM images")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM images WHERE $where =? ", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM images WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('images',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('images', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('images',$id);

        return true;
    }

}

?>