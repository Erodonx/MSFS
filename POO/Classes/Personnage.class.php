<?php

class Personnage
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;
    private $_capaciteSpeciale;
    public function setNom($sNom){
        return $this->_nom = $sNom;
       }
       
       public function setPrenom($sPrenom)
       {
           return $this->_prenom = $sPrenom;
           
       }
       public function setSexe($sSexe)
       {
           return $this->_sexe = $sSexe;
          
       }
       public function setAge($sAge)
       {
           return $this->_age = $sAge;
       }
       public function setCapaciteSpeciale($scapaciteSpeciale)
       {
        return $this->_capaciteSpeciale = $scapaciteSpeciale;
       }
       public function getNom() 
{
    return $this->_nom;
}
public function getPrenom() 
{
    return $this->_prenom;
}
public function getAge() 
{
    return $this->_age;
}
public function getSexe() 
{
    return $this->_sexe;
}
public function getCapaciteSpeciale()
{
    return $this->_capaciteSpeciale;
}


}

class Employe {

    private $_nom;
    private $_prenom;
    private $_date_embauche;
    private $_fonction;
    private $_salaire;
    private $_service;

    public function setNom($sNom){
        return $this->_nom = $sNom;
       }
       
    public function setPrenom($sPrenom)
       {
           return $this->_prenom = $sPrenom;
           
       }
    public function setDate($sDate_Embauche)
    {
        return $this -> _date_embauche = new dateTimeImmutable($sDate_Embauche);
    }
    public function setFonction($sFonction)
    {
        return $this -> _fonction = $sFonction;
    }
    public function setSalaire($sSalaire)
    {
        return $this -> _salaire= $sSalaire;
    }
    public function setService($sService)
    {
        return $this -> _service = $sService;
    }
    public function getNom() 
    {
        return $this->_nom;
    }
    public function getPrenom() 
    {
        return $this->_prenom;
    }
    public function getDate()
    {
     return $this->_date_embauche;
    }
    public function getFonction()
    {
        return $this -> _fonction;
    }
    public function getSalaire()
    {
        return $this -> _salaire;
    }
    public function getService()
    {
        return $this -> _service;
    }
    public function Anciennete($embauche)
    {
    $dateActuelle= new DateTime();
    $Anciennete = date_diff($embauche,$dateActuelle);
    $texte = $Anciennete -> format("%R%Y");
    if (strpos($texte,'-')>-1)
    {
     return 'Il y a une erreur dans la saisie de l\'employe ! DUCON';
    }else
    {

    if (strpos($texte,'0')>-1&&(strpos($texte,'0'))<2)
    {
    $texte = explode('0',$texte);
    $nombreAnnee = $texte[1];
    return $nombreAnnee;
    }else{
     $texte = explode('+',$texte);
     $nombreAnnee = $texte[1];
     return $nombreAnnee;
    }
}
}
}






















?>