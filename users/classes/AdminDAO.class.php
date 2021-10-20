<?php
class AdminDAO {
    protected $db;
    private static $instance;
    
    public function __construct() {    
        $this->db = MyPDO::getInstance();
    }

    public function __destruct()
    {
        $this->db = null;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new AdminDAO();
        }
        return self::$instance;
    }

    public function getAuth(Admin $admin){
    $sql="select count(*) nbl from admin where login='{$admin->getLogin()}' and password='{$admin->getMdp()}' ";
    $query = $this->db->query($sql);
    $data = $query->fetch(PDO::FETCH_OBJ);
    return $data;
    }
}