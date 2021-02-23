<?php namespace App\Controllers;
	use App\Models\MasterModel; 
	use App\Models\PublicModel;
use CodeIgniter\HTTP\IncomingRequest;

class JrMaster extends BaseController
{
	
	public function __construct()
    {
	$this->data['session'] = session(); 
	$this->masterModel = new MasterModel();
	$this->getModel = new PublicModel($this->db);
	$this->defineBooks = array("12","13","13");
    }
	
    public function index()
    {
		$data['classes'] = $this->db->query("select * from mastar_class where class_id in('12','13','14') and deleteflag=0")->getResultArray();
        echo view('jvolt/home',$data);
    }
	
	 public function modules()
    {

		$uri = $this->request->uri;
		$data['class_segment'] = decrypt($uri->getSegment(3));
		if(in_array($data['class_segment'], $this->defineBooks)){
		$data['module']  = $this->db->query("select * from master_module where deleteflag=0 and class_id = ".$data['class_segment']." and subject_id =".SUBJECTID)->getResultArray();
		$data['class']  = $this->db->query("select * from mastar_class where deleteflag=0 and class_id = ".$data['class_segment']."")->getRowArray();
		if($data['module']){
        echo view('jvolt/module',$data);
		}else{
        $this->error404($data);     
        } } else{
		$this->error404($data);     	
		}
    }
	
	public function activities()
    {
		
		$uri = $this->request->uri;
		$data['classID'] = decrypt($uri->getSegment(3));
		$data['modID'] = decrypt($uri->getSegment(4));
		$data['moduleName'] = $this->masterModel->getSingleRow("master_module", array("m_id"=>$data['modID']));
		$data['module']  = $this->db->query("select * from master_module as m join question as q on m.m_id= q.module where q.flag=0 and m.m_id != '".$data['modID']."' and q.class ='".$data['classID']."' and q.subject = '".SUBJECTID."' group by m.m_id")->getResultArray();
		$data['activity'] = $this->db->query("select c.*,l.type from question as q join chaptername as c on q.chapterTitle= c.id join list as l on q.id=l.set_id where c.deleteflag=0 and q.flag=0 and class='".$data['classID']."' and subject = '".SUBJECTID."' and module = '".$data['modID']."' GROUP by c.id")->getResultArray();
		
		if($data['activity']){
        echo view('jvolt/activities',$data);
		} else{
        $this->error404($data);      
        } 
    }
	

	public function play()
    {
		$uri = $this->request->uri;
		$data['type'] = decrypt($uri->getSegment(3));
		$data['url']  = explode('&', decrypt($uri->getSegment(4)));
		$data['classId'] = @explode('classId', $data['url'][0])[1];
        $data['modId'] = @explode('moId', $data['url'][1])[1];
        $cId = @explode('cId', $data['url'][2])[1];
		$data['res'] = $this->masterModel->getJoin(array("question","list"),array("id","set_id"), "list.*,question.chapterTitle", "class='".$data['classId']."' and list.flag=0 and subject = '".SUBJECTID."' and module = '".$data['modId']."'  and chapterTitle='$cId'");
		$data['chapter'] = $this->masterModel->getSingleRow("chaptername", array("id"=>$cId));
		$data['activity'] = $this->db->query("select c.*,l.type from question as q join chaptername as c on q.chapterTitle= c.id join list as l on q.id=l.set_id where class='".$data['classId']."' and subject = '".SUBJECTID."' and module = '".$data['modId']."' GROUP by c.id")->getResultArray();
		if($data['res']){
        echo view('jvolt/play',$data);
		} else{
        $this->error404($data);     
        } 
    }	
	
	public function GetViewModel()
	{
		$data['qid'] = $this->request->getPost('qid');
		$list = $this->db->query("select * from list where flag=0 and type='mcq' and set_id=".$data['qid'])->getResultArray();
		$responce = array();
		foreach($list as $re){
		$ex= preg_split('/(<img[^>]+\>)/i', $re['question'], -1, PREG_SPLIT_DELIM_CAPTURE);
			$ar = 	array_filter(array_map("decode", json_decode($re['mcq'])));
			shuffle($ar);
			$str="'imgurl'=>";
			if(!empty($ex[1])){
			$str = "'imgurl'=>".$ex[1];
			}
			$responce[] = array('id'=>$re['id'],'type'=>$re['type'],'label'=>$re['label'],'question'=>strip_tags(str_replace('&lt;/br&gt;','<br>',$ex[0]),"<br><span>"), $str,'url'=>$re['url'],'image'=>$re['image'],'multichoice'=>$ar,'answer'=>array_map("decode", json_decode($re['mcq'])) [$re['answer']]);
			
		}	
		$data['list'] = $responce;
		if(!empty($data['list'])){
		echo view('jvolt/mcq',$data);
		} else {
        $this->dataNotFound();     
        } 
	}
	
	public function GetViewModelVideo()
	{	
		$this->data['qid'] = $this->request->getPost('qid');
		$this->data['key'] = $this->request->getPost('key');	
		$video = $this->db->query("select * from list where flag=0 and type='vid' and label ='".$this->data['key']."' and set_id='".$this->data['qid']."'")->getRowArray();
		$this->data['video'] = $video;
		echo view('jvolt/videoStartEnd',$this->data);
		
	}
	
	public function GetViewModelVideoLetter()
	{	
		$this->data['qid'] = $this->request->getPost('qid');
		$this->data['key'] = $this->request->getPost('key');	
		$video = $this->db->query("select * from list where flag=0 and type='vid' and label in ('Capital','Small') and set_id='".$this->data['qid']."'")->getResultArray();
		$this->data['video'] = $video;
		if(!empty($this->data['video'])){
		echo view('jvolt/video-letter',$this->data);
		} else {
        $this->dataNotFound();     
        } 
	}
	
	
	public function GetViewModelCard()
	{	
		$data['qid'] = $this->request->getPost('qid');
		$data['card'] = $this->db->query("select * from list where flag=0 and type='textImgAud' and set_id=".$data['qid'])->getResultArray();
		if(!empty($data['card'])){
		echo view('jvolt/card',$data);
		} else {
        $this->dataNotFound();     
        } 
	}
 
  public function error404($data){
	echo view('jvolt/error-404', $data);	
  }
  
  public function dataNotFound(){
	echo view('jvolt/dataNotFound');	
  }
	
	public function checkAccountStatus(){
		if (session('voltAccountkey') != '') {
            $getuIdbytoken = $this->getModel->singledata('vt_user_token', ['token' => session('voltAccountToken')]);
            $userId = ($getuIdbytoken) ? $getuIdbytoken->userid : 0;
            return $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountkey'), 'vc_id' => $userId]);
            
        } else {
			return redirect('/');
		}
	} 

}
