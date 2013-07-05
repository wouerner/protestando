<?php
class Protestant_model extends CI_Model {

    private $table = 'protestants';

    public $userId   ='';
    public $protestId ='';

    function __construct()
    {
        parent::__construct();
    }

    function insert()
    {
        $this->db->insert($this->table, $this);
    }

    function update()
    {
        $this->db->where('id', $this->id);
        $this->db->update($this->table, $this);
    }

    function all()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function show()
    {
        $query = $this->db
            ->where('id',(int) $this->id,1)
            ->get($this->table)
            ;
        $result = $query->result();
        return $result[0];
    }
}
