<?php


class user
{
    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    private function findUser(string $userName)  {
        $this->db->query('select * from users where login = :username');

        $this->db->bind('username',$userName);
        return $this->db->resultSet();
    }

    private function tryLogin(string $username,string $password){
        $this->db->query('select * from users where login = :username and mdp = :password');
        $this->db->bind('username',$username);
        $this->db->bind('password',$password);
        $result = $this->db->resultSet();
        foreach($result as $row){
            return false;
        }
        return true;
    }

    public function login(string $userName,string $password){
        if(!$this->findUser($userName)){
            return USER_NOT_FOUND;
        }
        elseif ($this->tryLogin($userName,$password)){
            return PASSWORD_WRONG;
        }
        else return LOGIN_OK;
    }

    public function isAdmin(string $username){
        $this->db->query('select * from users where login = :username and role = "admin"');
        $this->db->bind('username',$username);
        if(!$this->db->resultSet())
            return false;
        return true;
    }

    private function createUserUtil(string $username,string $password){
        $this->db->query('insert into users(login, mdp,role) value(:username, :password, "user")');
        //insert into users(login, mdp,role) value('temp','temp1','user');
        $this->db->bind('username',$username);
        $this->db->bind('password',$password);
        $this->db->execute();
    }
    public function createUser(string $username,string $password) : string{
        if ($this->findUser($username)){
            $msg='?new_user_message=1';
        }
        else {
            $this->createUserUtil($username,$password);
            $msg='?new_user_message=4';
        }
        return $msg;
    }
}