<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class SchoolModel extends Model
{
	public function datastorage($table, $data)
	{
		$insertQ = $this->db->table($table);
		$insertQ->insert($data);
		if($insertQ)
			{
				return true;
			}
	}

	public function dataupdate($table, $condition, $data)
	{
		$update = $this->db->table($table)->set($data)->where($condition)->update();
		if($update)
		{
			return true;
		}
	}
	

	public function dataremove($table, $condition)
	{
		$deleteQ = $this->db->table($table)->delete($condition);
		if($deleteQ){return true;}
	}

	public function datalisting($table, $condition='', $orderby='', $limit='')
	{

		$queryQ = $this->db->table($table);
		$queryQ->where($condition);	
		return $queryQ->get()->getResult();

		if($limit!=''){$queryQ->offset($this->uri->segment(3));$queryQ->limit($limit);}
		if($orderby!=''){
			$orderdata = explode('=',$orderby);
			$queryQ->orderBy($orderdata[0], $orderdata[1]);
		}
		
			
		if(count($queryQ->get()->getResult())>0)
		{
			
				return $queryQ->get()->getResult();
		}
	}
	

	public function sumcolumn($table, $col, $condition='', $orderby='', $limit='')
	{

		$queryQ = $this->db->table($table);
		$queryQ->where($condition);	
		

		if($limit!=''){$queryQ->offset($this->uri->segment(3));$queryQ->limit($limit);}
		if($orderby!=''){
			$orderdata = explode('=',$orderby);
			$queryQ->orderBy($orderdata[0], $orderdata[1]);
		}
		return sum($queryQ->get()->getResult());
		
	}
	
	public function resultcount($table, $condition='')
	{

		$queryQ = $this->db->table($table);
		$queryQ->where($condition);	
		return count($queryQ->get()->getResult());
			
	}

	public function singledata($table, $condition='')
	{
		$query = $this->db->table($table)
		->where($condition)->get()->getResult();
		if(count($query)>0)
		{
			foreach($query as $return);
			return $return;
		}
	}
	


}

?>