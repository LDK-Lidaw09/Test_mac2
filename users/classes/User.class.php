<?php
class User
{

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $addr;
    private $code_postal;
    private $ville;
    private $comment;

    public function __construct(int $id = null)
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return  $this->id;
    }
    public function getNom(): string
    {
        return  $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom  = $nom;
    }
    public function getPrenom(): string
    {
        return  $this->prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom  = $prenom;
    }
    public function getEmail(): string
    {
        return  $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email  = $email;
    }
    public function getTelephone(): string
    {
        return  $this->telephone;
    }
    public function setTelephone(string $telephone)
    {
        $this->telephone  = $telephone;
    }
    public function getAdresse(): string
    {
        return  $this->addr;
    }
    public function setAdresse(string $addr)
    {
        $this->addr  = $addr;
    }
    public function getCodePostal(): string
    {
        return  $this->code_postal;
    }
    public function setCodePostal(string $code_postal)
    {
        $this->code_postal  = $code_postal;
    }
    public function getVille(): string
    {
        return  $this->ville;
    }
    public function setVille(string $ville)
    {
        $this->ville  = $ville;
    }
    public function getComment(): string
    {
        return  $this->comment;
    }
    public function setComment(string $comment)
    {
        $this->comment  = $comment;
    }
    public function hydrate(array $data)
    {
        if (isset($data['name'])) {
            $this->setNom($data['name']);
        }
        if (isset($data['firstname'])) {
            $this->setPrenom($data['firstname']);
        }
        if (isset($data['email'])) {
            $this->setEmail($data['email']);
        }
        if (isset($data['phone'])) {
            $this->setTelephone($data['phone']);
        }
        if (isset($data['add'])) {
            $this->setAdresse($data['add']);
        }
        if (isset($data['code'])) {
            $this->setCodePostal($data['code']);
        }
        if (isset($data['ville'])) {
            $this->setVille($data['ville']);
        }
        if (isset($data['comment'])) {
            $this->setComment($data['comment']);
        }
    }
}
