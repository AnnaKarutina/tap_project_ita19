<?php


class Partner
{
    private $db;

    /**
     * Partner constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPatners(){
        $this->db->query('SELECT * FROM partners');
        $result = $this->db->getAll();
        return $result;
    }
}