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

    function allProtestants()
    {
        $query = $this->db
            ->select('count(*) as total')
            ->where('protestId',(int) $this->protestId,1)
            ->get($this->table);
        return $query->result()[0];
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
