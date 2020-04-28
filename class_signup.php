<?php

class signup{
    protected $_pseudo;
    protected $_mdp;
    protected $_email;



    public function __construct($_pseudo,$_mdp,$_email){
        $this->_pseudo = $_pseudo;
        $this->_mdp = $_mdp;
        $this->_email = $_email;
    }

    //getters
    public function getPseudo(){
        return $this->_pseudo;
    }

    public function getMdp(){
        return $this->_mdp;
    }

    public function getEmail(){
        return $this->_email;
    }


  
    //setters
    public function setPseudo($Pseudo){
        $this->_pseudo = $Pseudo;
       
    }
    public function setMdp($Mdp){
        $this->_mdp = $Mdp;
       
    }

    public function setEmail($Email){
        $this->_email = $Email;       
    }


    

    public function inscription($bdd){
        $pseudo = $this->_pseudo;
        $mdp = $this->_mdp;
        $email = $this->_email;
        $req = $bdd->prepare("INSERT INTO USER_POO (pseudo, email, mdp)
                            VALUES (:pseudo, :email, :mdp) ");
        $req->execute(array(
                    'pseudo' => $this->_pseudo,
                    'mdp' => $this->_mdp,
                    'email'=>$this->_email
                       ));

        header("location:success.php");
   }

 
   public function mailConfirmation(){
    $token = $this->_token;
    $email = $this->_email;
    $pseudo = $this->_pseudo;
    
    $destinataire = $email;
    $sujet = "Activer votre compte" ;
    $entete = "From: site poo" ;
    $message = 'Bienvenue sur VotreSite,
 
Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
ou copier/coller dans votre navigateur Internet.
 
http://karan.simplon-charleville.fr/poo%20php/validation.php?log='.urlencode($pseudo).'&token='.urlencode($token).'
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
 
 
mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail

}



}


   