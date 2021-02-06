<?php

namespace projectmvc\model;
use projectmvc\core\model;
class users extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM users")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM users WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM users WHERE $where = ?", [$data])->fetch();
        return $user;
    }

    public function login($email,$password){
    $data=model::db()->row("SELECT * FROM users WHERE email = ? && password = ?", [$email,$password]);
    return  $data;
    }
    public  function  insert($data){

        $allusers= $this->db()->insert('users',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('users', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('users',$id);

        return true;
    }

}

?>