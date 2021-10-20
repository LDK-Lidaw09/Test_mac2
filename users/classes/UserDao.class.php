<?php
class UserDAO
{
    protected $db;
    private static $instance;

    public function __construct()
    {
        $this->db = MyPDO::getInstance();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new UserDAO();
        }
        return self::$instance;
    }
    public function insert(User $user)
    {
        $sql = "insert into User values(null,'{$user->getNom()}','{$user->getPrenom()}','{$user->getEmail()}','{$user->getTelephone()}','{$user->getAdresse()}','{$user->getCodePostal()}','{$user->getVille()}','{$user->getComment()}')";
        return $this->db->exec($sql);
    }
    public function read(User $user)
    {
        $sql = "select * from user where id={$user->getId()}";
        $query = $this->db->query($sql);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $user->hydrate($data);
        return $user;
    }

    public function update(User $user)
    {
        $sql = "update user set 
        name = '{$user->getNom()}',
        firstname='{$user->getPrenom()}',
        email='{$user->getEmail()}',
        phone='{$user->getTelephone()}',
        add='{$user->getAdresse()}',
        code_postal='{$user->getCodePostal()}',
        ville='{$user->getVille()}',
        comment='{$user->getComment()}',
        where id='{$user->getId()}' ";
        return $this->db->exec($sql);
    }
    public function delete(User $user)
    {
        $sql = "delete from user where id='{$user->getId()}'";
        return $this->db->exec($sql);
    }
    public function getList()
    {
        $sql = "select * from user";
        $query = $this->db->query($sql);
        $resultat = [];
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $data['id'];
            $user = new User($id);
            $user->hydrate($data);
            $resultat[] = $user;
        }
        return $resultat;
    }
}
