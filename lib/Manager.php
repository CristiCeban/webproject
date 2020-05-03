<?php


class Manager
{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    //------------------------------User----------------------------------//
    public function addUser($login,$mdp,$role){
        $this->db->query('insert into users(login, mdp,role) value(:username, :password, :role)');
        $this->db->bind('username',$login);
        $this->db->bind('password',$mdp);
        $this->db->bind('role',$role);
        $this->db->execute();
    }
    public function updateUser($login,$mdp,$role,$uid){
        $this->db->query('update users set login=:login, mdp=:mdp, role=:role where uid =:uid ;');
        $this->db->bind('login',$login);
        $this->db->bind('mdp',$mdp);
        $this->db->bind('role',$role);
        $this->db->bind('uid',$uid);
        $this->db->execute();
    }
    public function getAllUsers(){
        $this->db->query('select * from users');
        return $this->db->resultSet();
    }
    public function getUser($uid){
        $this->db->query('select * from users where uid=:uid');
        $this->db->bind('uid',$uid);
        return $this->db->single();
    }
    public function deleteUser($uid){
        $this->db->query('delete from users where uid=:uid');
        $this->db->bind('uid',$uid);
        $this->db->execute();
    }
    //------------------------------Teacher----------------------------------//
    public function addTeacher($nom,$prenom,$email,$tel,$annee){
        $this->db->query('insert into enseignants(uid,nom, prenom, email, tel, annee,etid) value(1,:nom, :prenom, :email, :tel, :annee, 1)');
        $this->db->bind('nom',$nom);
        $this->db->bind('prenom',$prenom);
        $this->db->bind('email',$email);
        $this->db->bind('tel',$tel);
        $this->db->bind('annee',$annee);
        $this->db->execute();
    }
    public function updateTeacher($eid,$nom,$prenom,$email,$tel,$annee){
        $this->db->query('update enseignants set nom=:nom, prenom=:prenom, email=:email, tel=:tel, annee=:annee where eid =:eid');
        $this->db->bind('nom',$nom);
        $this->db->bind('prenom',$prenom);
        $this->db->bind('email',$email);
        $this->db->bind('tel',$tel);
        $this->db->bind('annee',$annee);
        $this->db->bind('eid',$eid);
        $this->db->execute();
    }
    public function getAllTeachers(){
        $this->db->query('select * from enseignants');
        return $this->db->resultSet();
    }
    public function getTeacher($eid){
        $this->db->query('select * from enseignants where eid=:eid');
        $this->db->bind('eid',$eid);
        return $this->db->single();
    }
    public function deleteTeacher($eid){
        $this->db->query('delete from enseignants where eid=:eid');
        $this->db->bind('eid',$eid);
        $this->db->execute();
    }
    //------------------------------Module----------------------------------//
    public function addModule($intitule,$code,$annee){
        //TODO s-a schimb pe 1;
        $this->db->query('insert into modules(intitule, code, eid, cid, annee) value(:intitule, :code, 2, 1, :annee)');
        $this->db->bind('intitule',$intitule);
        $this->db->bind('code',$code);
        $this->db->bind('annee',$annee);
        $this->db->execute();
    }
    public function updateModule($mid,$intitule,$code,$annee){
        $this->db->query('update modules set intitule=:intitule, code=:code, annee=:annee where mid =:mid');
        $this->db->bind('intitule',$intitule);
        $this->db->bind('code',$code);
        $this->db->bind('annee',$annee);
        $this->db->bind('mid',$mid);
        $this->db->execute();
    }
    public function getAllModules(){
        $this->db->query('select * from modules');
        return $this->db->resultSet();
    }
    public function getModule($mid){
        $this->db->query('select * from modules where mid=:mid');
        $this->db->bind('mid',$mid);
        return $this->db->single();
    }
    public function deleteModule($mid){
        $this->db->query('delete from modules where mid=:mid');
        $this->db->bind('mid',$mid);
        $this->db->execute();
    }
    //------------------------------Group----------------------------------//
    public function addGroup($nom,$annee){
        $this->db->query('insert into groupes(mid, nom, annee, gtid) value(3, :nom, :annee, 1)');
        $this->db->bind('nom',$nom);
        $this->db->bind('annee',$annee);
        $this->db->execute();
    }
    public function updateGroup($nom,$annee,$gid){
        $this->db->query('update groupes set nom=:nom, annee=:annee where gid =:gid');
        $this->db->bind('nom',$nom);
        $this->db->bind('annee',$annee);
        $this->db->bind('gid',$gid);
        $this->db->execute();
    }
    public function getAllGroups(){
        $this->db->query('select * from groupes');
        return $this->db->resultSet();
    }
    public function getGroup($gid){
        $this->db->query('select * from groupes where gid=:gid');
        $this->db->bind('gid',$gid);
        return $this->db->single();
    }
    public function deleteGroup($gid){
        $this->db->query('delete from groupes where gid=:gid');
        $this->db->bind('gid',$gid);
        $this->db->execute();
    }
    //------------------------------Gtypes----------------------------------//
    public function addGtype($nom,$nbh,$coeff){
        $this->db->query('insert into gtypes(nom, nbh, coeff) value(:nom, :nbh, :coeff)');
        $this->db->bind('nom',$nom);
        $this->db->bind('nbh',$nbh);
        $this->db->bind('coeff',$coeff);
        $this->db->execute();
    }
    public function updateGtype($nom,$nbh,$coeff,$gtid){
        $this->db->query('update gtypes set nom=:nom, nbh=:nbh, coeff=:coeff where gtid =:gtid');
        $this->db->bind('nom',$nom);
        $this->db->bind('nbh',$nbh);
        $this->db->bind('coeff',$coeff);
        $this->db->bind('gtid',$gtid);
        $this->db->execute();
    }
    public function getGtype($gtid){
        $this->db->query('select * from gtypes where gtid=:gtid');
        $this->db->bind('gtid',$gtid);
        return $this->db->single();
    }
    public function getAllGtypes(){
        $this->db->query('select * from gtypes');
        return $this->db->resultSet();
    }
    public function deleteGtype($gtid){
        $this->db->query('delete from gtypes where gtid=:gtid');
        $this->db->bind('gtid',$gtid);
        $this->db->execute();
    }
    //------------------------------Affectations----------------------------------//
    public function addAffectation($nbh){
        $this->db->query('insert into affectations(eid,gid,nbh) value (2,13,:nbh)');
        $this->db->bind('nbh',$nbh);
        $this->db->execute();
    }
    public function getAllAffectations(){
        $this->db->query('select * from affectations');
        return $this->db->resultSet();
    }



    //----------------------------Assign---------------------------------//

    public function assignUserTeacher($user,$teacher){
        $this->db->query('update enseignants set uid = (select uid from users where login =:login limit 1) where nom = :teacher_nom and prenom = :teacher_prenom');
        $nom = explode(" ",$teacher);
        $this->db->bind('teacher_nom',$nom[0]);
        $this->db->bind('teacher_prenom', $nom[1]);
        $this->db->bind('login',$user);
        $this->db->execute();
    }

    public function assignGroupModule($group,$module){
        $this->db->query('update groupes set mid=:mid where gid=:gid');
        $groupExplode = explode('-',$group);
        $moduleExplode = explode('-',$module);
        $this->db->bind('mid',$moduleExplode[0]);
        $this->db->bind('gid',$groupExplode[0]);
        $this->db->execute();
    }
    public function assignGroupTeacher($group,$teacher,$nbh){
        $this->db->query('REPLACE into affectations (eid, gid, nbh) values(:eid, :gid, :nbh)');
        $teacherExplode = explode('-',$teacher);
        $groupExplode = explode('-',$group);
        $this->db->bind('gid',$groupExplode[0]);
        $this->db->bind('eid',$teacherExplode[0]);
        $this->db->bind('nbh',$nbh);
        $this->db->execute();
    }
}