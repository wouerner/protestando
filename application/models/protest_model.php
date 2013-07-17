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
            ->from($this->table.' AS a')
            ->join('users AS u', 'u.id = a.creator')
            ->get()
            ;
        return $query->result('Protest_model');
    }

    function protestants()
    {
        $query = $this->db
            ->select('*')
            ->join('users AS u', 'u.id = a.userId')
            ->where('a.protestId', (int) $this->id, 1)
            ->get('protestants AS a');
        return $query->result('ion_auth');

    }

    function protestantsCount()
    {
        $query = $this->db
            ->select('count(*) as total')
            ->where('protestId',(int) $this->id,1)
            ->get('protestants');

        $result = $query->row();

        return $result;

    }

    function isProtestant()
    {
        $user = $this->ion_auth->user()->row();
        $query='';

        if(!empty($user)){
            $query = $this->db
                ->select('*')
                ->where('userId',(int) $user->id)
                ->where('protestId', (int) $this->id)
                ->get('protestants',1);
            return  (count($query->result()) > 0)? true  : false ;
        }
        return false;
    }

    function show()
    {
        $query = $this->db
            ->select('a.id AS id, a.name AS name, a.local AS local, a.description AS description, a.creator AS creator,
                u.id AS userId, u.username AS username')
            ->from($this->table.' AS a')
            ->join('users AS u', 'u.id = a.creator')
            ->where('a.id',(int) $this->id,1)
            ->get()
            ;
        //$query->db->join('users', 'users.id ='.$this->table.'.id');
        //$query->get($this->table);
        
        $result = $query->result('Protest_model');
        //print_r($result);
        return $result[0];
    }
}
