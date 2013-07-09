<?php
class Protest_model extends CI_Model {

    private $table = 'protests';

    public $id   ='';
    public $name ='';
    public $local='';
    public $image='';
    public $description='';
    public $creator='';

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
        //$query = $this->db->get($this->table);
        $query = $this->db
            ->select('a.id AS id, a.name AS name, a.local AS local, a.description AS description,
                u.id AS userId, u.username AS username')
            //->from($this->table.' AS a')
            ->join('users AS u', 'u.id = a.creator')
            ->get($this->table.' AS a','Protest_model')
            ;
        return $query->result();
    }

    function protestants()
    {
        $query = $this->db
            ->select('count(*) as total')
            ->where('protestId',(int) $this->id,1)
            ->get('protestants','Protestants_model');
        return $query->result()[0];

    }

    function show()
    {
        $query = $this->db
            ->select('a.id AS id, a.name AS name, a.local AS local, a.description AS description,
                u.id AS userId, u.username AS username')
            ->from($this->table.' AS a')
            ->join('users AS u', 'u.id = a.creator')
            ->where('a.id',(int) $this->id,1)
            ->get()
            ;
        //$query->db->join('users', 'users.id ='.$this->table.'.id');
        //$query->get($this->table);
        
        $result = $query->result();
        //print_r($result);
        return $result[0];
    }
}
