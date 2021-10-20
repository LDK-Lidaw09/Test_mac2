<?php 
class Admin {
    private $id_admin;
    private $login;
    private $mdp;

    public function __construct(int $id = null) {
        $this->id_admin = $id;
    }
    
    public function getId(): int{ return  $this->id_admin;}
    public function getLogin(): string{ return  $this->login;}
    public function setLogin(string $login){$this->login  = $login;}
    public function getMdp(): string {return  $this->mdp;}
    public function setMdp(string $mdp){$this->mdp  = $mdp;}

    public function hydrate(array $data){ 
        if(isset($data['login'])){
         $this->setLogin($data['login']) ;
         }
         if(isset($data['mdp'])){
         $this->setMdp($data['mdp']) ;
         }
       }   
}