<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ApiModel extends Model
{
	protected $db;

	public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
/*
    public function classlist() {
    	$query = $this->db->table('mastar_class')
                ->where(array('deleteflag'=>'0'));
        return  $query->get()->getResult();
    }*/

    /**
	 * This function is used to select data form table  
	 */
	function get_data_by($tableName = '', $value = '', $colum = '', $condition = '', $select = '*')
	{
		$query = $this->db->table($tableName);
		$query->select($select);
		
		if ((!empty($value)) && (!empty($colum))) {
			$query->where($colum, $value);
		}
		if (!empty($condition)) {
			$query->where($condition);
		}
		return $query->get()->getResult();
	}

	/**
	 * This function is used to Update record in table  
	 */
	public function updateRow($table, $col, $colVal, $data, $condition = '')
	{
		$query = $this->db->table($tableName);
		if (!empty($condition)) {
			$query->where($condition);
		}

		$query->where($col, $colVal);
		$query->update($data);
		return true;
	}

	/**
	 * This function is used to Insert record in table  
	 */
	public function insertRow($table, $data)
	{
		$query = $this->db->table($table);
		$query->insert($data);
		return  $query->insertID();
	}

	/**
	 * This Function is used for Subject List
	 */
	public function classlist()
	{	
		$query = $this->db->table('mastar_class')
		->select('class_id as classId,class_name')
		->where(array('deleteflag'=>'0'));
        return  $query->get()->getResult();
	}

	/**
	 * This Function is used for Subject List
	 */
	public function sublist()
	{
		$query = $this->db->table('question')
		->select('subject as subjectId, sub_name as subject_name, sub_cover as subject_image')
		->join('mastar_subject', 'mastar_subject.sub_id = question.subject', 'left')
		->where('mastar_subject.deleteflag', 0)
		->orderBy("mastar_subject.sub_id", "ASC");
		return $query->get()->getResultArray();
	}

	/**
	 * This Function is used for Topics List
	 */
	public function topiclist($class = '', $sub = '', $series = '')
	{	
		$query = $this->db->table('question AS qns')
		->select('mchap.chap_id as topicId,chp.chapT_name as topic_name')
		->join('chaptername chp', 'qns.chapterTitle = chp.id', 'INNER')
		->join('mastar_chapter mchap', 'qns.chapter = mchap.chap_id', 'INNER')
		->join('list d', 'qns.id = d.set_id', 'INNER')
		->where("qns.class='$class' and qns.subject='$sub' and qns.series='$series'")
		->orderBy("mchap.chap_id", "ASC");
		return $query->get()->getResultArray();
	}

	/**
	 * This Function is used for Set INFO List
	 */
	public function setinfo($class = '', $sub = '', $series = '', $chapterId = '')
	{
		$where_con = array('class' => $class, 'subject' => $sub);
		$query = $this->db->table('question');
		$query->where($where_con);
		if (!empty($series)) {
			$query->where('series', $series);
		}
		if (!empty($chapterId)) {
			$query->where('chapter', $chapterId);
		}
		$query->orderBy("chapter", "ASC");
		return $query->get()->getResultArray();
	}
	
	public function setcatinfo($class = '', $sub = '', $series = '', $chapterId = '', $categoryId = '', $month = '' )
	{
		$where_con = array('class' => $class, 'subject' => $sub, 'series' => $series, 'chapterTitle' => $chapterId, 'category' => $categoryId );
		$query = $this->db->table('question')
		->where($where_con);
		if(isset($month)&& !empty($month)){
			$query->where('month',$month);
		}
		$query->orderBy("chapter", "ASC");
		return $query->get()->getResultArray();
	}

	/**
	 * This Function is used for SET list
	 */
	public function setlist($class = '', $sub = '', $series = '')
	{
		$checkNumlist = $this->db->query("SELECT * FROM `question` WHERE `class`= '$class' AND `subject`= '$sub' GROUP BY `chapter` ")->getResult();
		$getNumlist = ($checkNumlist)?count($checkNumlist):'0';
		$query = $this->db->table('question')
		->select('series,mastar_series.series_name, '.$getNumlist.' as allcount ')
		->where("class='$class' and subject='$sub'")
		->join('mastar_series', 'mastar_series.series_id = question.series AND deleteflag=0 ', 'left')
		->orderBy("mastar_series.series_num", "ASC");
		return $query->get()->getResultArray();
	}

	/**
	 * This Function is used for Qns list
	 */
	public function getqdata($type = '', $setId = '')
	{
		$query = $this->db->table('list')
		->where('flag',0);
		if (!empty($type)) {
			$query->where('type', $type);
		}
		if (!empty($setId)) {
			$setIds = explode('-', $setId);
			$query->whereIn('set_id', $setIds);
		}
		$query->orderBy("id", "ASC");
		return $query->get()->getResultArray();
	}

	/**
	 * This Function is used for all type list
	 */
	public function getalltype($setId = '')
	{
		$query = $this->db->table('list')
		->select('type')
		->where('flag',0);
		if (!empty($setId)) {
			$setIds = explode('-', $setId);
			$query->whereIn('set_id', $setIds);
		}
		$query->orderBy("id", "asc");
		return $query->get()->getResult();
	}

	/**
	 * This Function is used for Category list
	 */
	public function categorylist($class = '', $sub = '', $series = '', $chpId = '')
	{
		
		$where_con = array('class' => $class, 'subject' => $sub, 'series' => $series);
		$query = $this->db->table('question')
		->select('category as catId,category_type.cat_name')
		->where($where_con);
		if (!empty($chpId)) {
			$query->where('chapter', $chpId);
		}
		$query->join('category_type', 'category_type.cat_id = question.category', 'left');
		$query->orderBy("category_type.cat_id", "ASC");
		return $query->get()->getResultArray();
	}
}