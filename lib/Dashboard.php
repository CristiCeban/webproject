<?php


class dashboard{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllYears(){
        $this->db->query('select distinct annee from enseignants;');
        return $this->db->resultSet();
    }

    public function getAllTeachers(){
        $this->db->query('select distinct nom,prenom from enseignants');
        return $this->db->resultSet();
    }

    public function getAllTeachersByYear($year){
        $this->db->query('select distinct nom,prenom from enseignants where anno=:year');
        $this->db->bind('year',$year);
        return $this->db->resultSet();
    }

    public function getAllModules(){
        $this->db->query('select distinct * from modules');
        return $this->db->resultSet();
    }

    public function getAllModulesByYear($year){
        $this->db->query('select distinct * from modules where anno=:year');
        $this->db->bind('year',$year);
        return $this->db->resultSet();
    }

    public function getAllGroupsDistinct(){
        $this->db->query('select distinct nom from groupes');
        return $this->db->resultSet();
    }

    public function getAllGroupsByYear($year){
        $this->db->query('select distinct * from groupes where anno=:year');
        $this->db->bind('year',$year);
        return $this->db->resultSet();
    }

    public function getAllModulesOfTeacher($teacher,$year) {
        $this->db->query('select * from modules where annee=:year and eid = (select eid from enseignants where nom = :teacher_nom and prenom = :teacher_prenom and annee=:year) ;');
        $nom = explode(" ",$teacher);
        $this->db->bind('year',$year);
        $this->db->bind('teacher_nom',$nom[0]);
        $this->db->bind('teacher_prenom', $nom[1]);
        return $this->db->resultSet();

    }

    public function getAllCategoriesOfTeacherByModule($teacher,$year){
        $this->db->query('select * from categories where cid in (select cid from modules where annee=:year and eid = 
                    (select eid from enseignants where nom = :teacher_nom and prenom = :teacher_prenom and annee=:year) )');
        $nom = explode(" ",$teacher);
        $this->db->bind('year',$year);
        $this->db->bind('teacher_nom',$nom[0]);
        $this->db->bind('teacher_prenom', $nom[1]);
        return $this->db->resultSet();
    }
    public function getAllModulesByCategory($cid,$teacher,$year){
        $this->db->query('select distinct * from modules where cid =:cid and eid=
                            (select eid from enseignants where nom = :teacher_nom and prenom = :teacher_prenom and annee=:year)');
        $this->db->bind('cid',$cid);
        $nom = explode(" ",$teacher);
        $this->db->bind('year',$year);
        $this->db->bind('teacher_nom',$nom[0]);
        $this->db->bind('teacher_prenom', $nom[1]);
        return $this->db->resultSet();
    }

    public function getAllGroupsByModule($mid,$teacher,$year){
        $this->db->query('select distinct * from groupes where annee=:year and mid=:mid and gid in (select gid from affectations where eid in(
                                (select eid from enseignants where nom = :teacher_nom and prenom = :teacher_prenom and annee=:year)))');
        $nom = explode(" ",$teacher);
        $this->db->bind('year',$year);
        $this->db->bind('mid',$mid);
        $this->db->bind('teacher_nom',$nom[0]);
        $this->db->bind('teacher_prenom', $nom[1]);
        return $this->db->resultSet();
    }
    public function getAllAffectationsGroupes($gid,$teacher,$year){
        $this->db->query('select * from affectations where gid=:gid and eid = (select eid from enseignants where nom = :teacher_nom and prenom = :teacher_prenom and annee=:year)');
        $nom = explode(" ",$teacher);
        $this->db->bind('year',$year);
        $this->db->bind('gid',$gid);
        $this->db->bind('teacher_nom',$nom[0]);
        $this->db->bind('teacher_prenom', $nom[1]);
        return $this->db->single();
    }
    public function getNbhTeacher($teacher,$year){
        $nom = explode(" ",$teacher);
        $this->db->query('select nbh from etypes where etid = (select etid from enseignants where nom = :teacher_nom and prenom = :teacher_prenom and annee=:year) limit 1');
        $this->db->bind('year',$year);
        $this->db->bind('teacher_nom',$nom[0]);
        $this->db->bind('teacher_prenom', $nom[1]);
        return $this->db->single();
    }
    public function getScheduleTeacher($teacher,$year){
        $this->db->query('select g.nom, m.intitule, a.nbh from groupes g, affectations a, modules m where g.gid = a.gid and g.mid=m.mid and a.eid in (select eid from enseignants where nom = :teacher_nom and prenom = :teacher_prenom and annee=:year)');
        $nom = explode(" ",$teacher);
        $this->db->bind('year',$year);
        $this->db->bind('teacher_nom',$nom[0]);
        $this->db->bind('teacher_prenom', $nom[1]);
        return $this->db->resultSet();
    }
}