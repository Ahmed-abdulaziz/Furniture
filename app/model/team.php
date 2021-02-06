<?php

namespace projectmvc\model;
use projectmvc\core\model;
class team extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM team")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM team WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM team WHERE $where = ?", [$data])->fetch();
        return $user;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('team',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('team', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('team',$id);

        return true;
    }

}

?>