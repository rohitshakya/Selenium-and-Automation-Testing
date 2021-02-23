<?php namespace App\Models;

use CodeIgniter\Model;

class MasterModel extends Model
{
    public function __construct()
    {
        $this->request = \Config\Services::request();
        $this->db = \Config\Database::connect();
    }

    public function insertRow($table, $data)
    {
        $table = $this->db->table($table);
        $table->insert($data);
        return $this->db->insertID();
    }

    public function updateRow($table, $whereAssoc, $data)
    {
        $table = $this->db->table($table);
        $table->where($whereAssoc);
        $result = $table->update($data);
        return $result;
    }

    public function deleteRows($table, $whereAssoc)
    {
        $table = $this->db->table($table);       
        return $table->delete($whereAssoc);
    }

    public function getSingleRow($table, $whereAssoc)
    {
        $table = $this->db->table($table);
        $table->where($whereAssoc);
        $query = $table->get()->getRowArray();
        return $query;
    }
    public function getSingleRowObj($table, $whereAssoc)
    {
        $table = $this->db->table($table);
        $table->where($whereAssoc);
        $query = $table->get()->getRow();
        return $query;
    }

    public function getRows($table, $whereAssoc)
    {
        $table = $this->db->table($table);
        $table->where($whereAssoc);
        $query = $table->get()->getResultArray();
        return $query;
    }
	
	public function getJoinGroupBY($table,$joinId, $select, $whereAssoc, $group)
    {
		 $builder = $this->db->query('select ' .$select.' from '.$table[0].' join '. $table[1].' on '.$table[0].'.'.$joinId[0].' = '.$table[1].'.'.$joinId[1].' where '.$whereAssoc.' group by '.$group, false);
		  return $builder->getResultArray();
    }
	
	public function getJoin($table,$joinId, $select, $whereAssoc)
    {
		 $builder = $this->db->query('select ' .$select.' from '.$table[0].' join '. $table[1].' on '.$table[0].'.'.$joinId[0].' = '.$table[1].'.'.$joinId[1].' where '.$whereAssoc, false);
		  return $builder->getResultArray();
    }

}
