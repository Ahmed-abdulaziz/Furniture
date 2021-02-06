<?php

namespace projectmvc\model;
use projectmvc\core\model;
class blog extends model{

    function selectall(){

        $allusers= $this->db()->run("SELECT * FROM blog")->fetchall();

        return $allusers;
    }

    function selectwhere($where,$data){

        $users= $this->db()->run("SELECT * FROM blog WHERE $where = ?", [$data]);
        return $users;
    }
    function select($where,$data){

        $user= $this->db()->run("SELECT * FROM blog WHERE $where = ?", [$data])->fetch();
        return $user;
    }
    function comments($id){

        $comments= $this->db()->run("SELECT * FROM blog_comments WHERE blogid = ?", [$id]);

        return $comments;
    }

  
    public  function  insert($data){

        $allusers= $this->db()->insert('blog',$data);

        return true;
    }
    public  function  insertcomment($data){

        $allusers= $this->db()->insert('blog_comments',$data);

        return true;
    }

    public  function  update($data,$where){

        $allusers= $this->db()->update('blog', $data, $where);

        return true;
    }

    public  function  count($from,$where,$data){

        $count= $this->db()->count("SELECT id FROM $from WHERE $where = ?", [$data]);

        return $count;
    }
    public  function  delete($id){

        $allusers= $this->db()->deleteById('blog',$id);

        return true;
    }

}

?>