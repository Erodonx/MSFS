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
    private $_magasin;
    private $_enfants;
    
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
    public function setMagasin($sMagasin){
        return $this->_magasin = new Magasin ($sMagasin);
       }
    public function setEnfants($sEnfants){
        return $this->_enfants = $sEnfants;
       }
       public function getMagasin() 
       {
           return $this->_magasin;
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
    public function getEnfants()
    {
        return $this-> _enfants;
    }
    public function Anciennete($embauche)
    {
    $dateActuelle= new DateTime();
    $Anciennete = date_diff($embauche,$dateActuelle);
    $texte = $Anciennete -> format("%R%Y");
    if (strpos($texte,'-')>-1)
    {
     return 'ERROR || Invalid embauche date';
    }else
    {
    if (strpos($texte,'0')>-1&&($texte[2]!='0'))
    {
    $texte = explode('0',$texte);
    $nombreAnnee = $texte[1];
    return $nombreAnnee;
    }else if (($texte[1]=='0')&&($texte[2]=='0')){
     $nombreAnnee='0';
     return $nombreAnnee;
    }else{
     $texte = explode('+',$texte);
     $nombreAnnee = $texte[1];
     return $nombreAnnee;
    }

}
}
public function transfertBanque($date)
{
   if ($date=='11-30')
   {

   $texte = 'La banque a été contacté le transfert est effectué';
   return $texte;
   }
   else
   {
    $texte = 'Nous ne sommes pas le 30 Novembre, la banque n\'a pas été contactée';
    return $texte;
   }
}
    public function Prime($salaire,$annee)
    {
     if ($annee=='ERROR || Invalid embauche date')
     {
        return 'Invalid saisie || so there will be no prime for mister';
     }else{
        $jourActuel = new DateTime();
        $jourBanque = $jourActuel-> format('m-d');

     if ($annee>0)
     {
     $coef = $annee*0.02+0.05;
     $prime=$salaire*$coef;
     $transfert = $this->transfertBanque($jourBanque);
     $concat =$prime. '€ ' . $transfert;
     return $concat;
    }else
    {
     $prime = $salaire*0.05;
     $transfert = $this->transfertBanque($jourBanque);
     $concat =$prime. '€ ' . $transfert;
     return $concat;
    }
}
}

}
class Magasin extends Employe {

    private $_nom;
    private $_adresse;
    private $_code_postal;
    private $_ville;
    private $_restaurant;

     public function setNom($sNom){
        return $this->_nom = $sNom;
       }
     public function setAdresse($sAdresse){
        return $this ->_adresse= $sAdresse;
     }
     public function setCodePostal($sCodePostal){
        return $this -> _code_postal = $sCodePostal;
     }
     public function setVille($sVille)
     {
        return $this -> _ville= $sVille;
     }
     public function setRestaurant($sRestaurant){
        if (($sRestaurant==0)||($sRestaurant==1))
        {
        return $this->_restaurant = $sRestaurant;
        }
        else
        {
         return $this->_restaurant ='Erreur de saisie!';
        }
       }
     public function getNom() 
     {
         return $this->_nom;
     }
     public function getAdresse() 
     {
         return $this->_adresse;
     }
     public function getCodePostal() 
     {
         return $this->_code_postal;
     }
     public function getVille() 
     {
         return $this->_ville;
     }
     public function getRestaurant() 
     {
         return $this->_restaurant;
     }
    public function Ticket($restaurant)
    {
        if ($restaurant==0)
        {
            return 'L\'employé bénéficie de ticket restaurant';
        }else if ($restaurant==1)
        {
            return 'L\'employé dispose d\'un restaurant d\'entreprise'; 
        }else{
            return 'Erreur de saisie, données corrompues';
        }
    }
}




















?>