<?php

namespace projectmvc\model;
use projectmvc\core\model;
class skills extends model{

   

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM skills WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM skills WHERE $where = ?", [$data])->fetch();
        return $user;

        
    }

   
  
    public  function  insert($data){

        $allusers= $this->db()->insert('skills',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('skills', $data, $where);

        return true;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('skills',$id);

        return true;
    }

}

?>