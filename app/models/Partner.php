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
        $this->db->query('SELECT *,
                                partners.name as partner_name,
                                activity.name as partner_activity
                                FROM partners 
                                INNER JOIN activity ON partners.activity = activity.id');
        $result = $this->db->getAll();
        return $result;
    }
}