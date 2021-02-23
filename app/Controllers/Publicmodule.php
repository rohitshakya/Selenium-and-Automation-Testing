<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PublicModel;
use CodeIgniter\HTTP\IncomingRequest;
class Publicmodule extends BaseController
{
    //protected $db;
    //protected $request;
    public function __construct()
    {
        $session = \Config\Services::session();
        $this->uri = service('uri');
        $this->request = service('request');
        $this->getModel = new PublicModel($this->db);
        $getLogin = '';
        $data = [];
        $moInNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
        if (session('voltAccountkey') != '') {
            #$this->getLogin = $this->getModel->singledata('vt_useraccount', ['vc_email' => session('voltAccountkey')]);
            $getuIdbytoken = $this->getModel->singledata('vt_user_token', ['token' => session('voltAccountToken')]);
            $userId = ($getuIdbytoken) ? $getuIdbytoken->userid : 0;
            $this->getLogin = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountkey'), 'vc_id' => $userId]);
            if (empty($this->getLogin)) {
                $this->Getout();
            }
            //MONTH MODIFICATION
            $gwtUserData = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $schoolData = $this->getModel->singledata('vt_school', ['id' => $gwtUserData->vc_school]);
            $checkstartSfrom = ($schoolData) ? $schoolData->term_start : '1';
            $checkendSto = ($schoolData) ? $schoolData->term_end : '12';
             $cm = date('n'); 
             $cy = date('Y');
             $ly = date('Y')-1;
             $ny = date('Y')+1;
            
             if (preg_match("/\d{4}\-\d{2}-\d{2}/", $checkstartSfrom)) {
             $startSfrom = $checkstartSfrom;
             $endSto = $checkendSto;
             } else {
             if($cm<$checkstartSfrom){
             $fdate = $ly.'-'.$checkstartSfrom.'-01';
             $edate = $cy.'-'.$checkendSto.'-25';
             }else{
             $fdate = $cy.'-'.$checkstartSfrom.'-01';
             $edate = $ny.'-'.$checkendSto.'-25'; 
             }
             $startSfrom = $fdate;
             $endSto = $edate;
             }
             $schoolTerms = array();
             $date1 = new \DateTime($startSfrom);
             $date2 = new \DateTime($endSto);
             $month1 = new \DateTime($date1->format('Y-n'));
             while ($month1 < $date2) {
                 array_push($schoolTerms, $month1->format('Y-n'));
                $month1->modify('+1 month'); //Add one month and repeat
             }
             if (count($schoolTerms) < 12) {
                      $dif = 12 - count($schoolTerms);
                      for ($i = 1; $i <= $dif; $i++) {
                             array_push($schoolTerms, date('Y-') . '0');
                        }
                    }
              array_splice($schoolTerms, 12);
              $finalTerms = array_combine($moInNumber, $schoolTerms);
              //$this->data['finalTerms'] = $finalTerms;
              //session('finalTermsSession', $finalTerms);
              $session->set('finalTermsSession', $finalTerms);
             } else {
            
             $this->getLogin = '';
             $cm = date('n'); 
             $cy = date('Y');
             $ly = date('Y')-1;
             $ny = date('Y')+1;
             if($cm<4){
             $fdate = $ly.'-04-01';
             $edate = $cy.'-03-31';
             }else{
             $fdate = $cy.'-04-01'; 
             $edate = $ny.'-03-31'; 
             }
             
             $startSfrom = $fdate;
             $endSto = $edate;
             $schoolTerms = array();
             $date1 = new \DateTime($startSfrom);
             $date2 = new \DateTime($endSto);
             $month1 = new \DateTime($date1->format('Y-n'));
             while ($month1 < $date2) {
             array_push($schoolTerms, $month1->format('Y-n'));
             $month1->modify('+1 month'); //Add one month and repeat
             }
             if (count($schoolTerms) < 12) {
             $dif = 12 - count($schoolTerms);
             for ($i = 1; $i <= $dif; $i++) {
             array_push($schoolTerms, date('Y-') . '0');
             }
             }
             array_splice($schoolTerms, 12);
             $finalTerms = array_combine($moInNumber, $schoolTerms);  
             $session->set('finalTermsSession', $finalTerms);
            
            //Array ( [1] => 2020-4 [2] => 2020-5 [3] => 2020-6 [4] => 2020-7 [5] => 2020-8 [6] => 2020-9 [7] => 2020-10 [8] => 2020-11 [9] => 2020-12 [10] => 2021-1 [11] => 2021-2 [12] => 2021-3 )
            //$defaultYear = [];
            //$session->set('finalTermsSession', $finalTerms);
            
        }
       // print_r(session('finalTermsSession'));
        //exit();
        $this->getLogin = $this->getLogin;
        $this->data['getLogin'] = $this->getLogin;
        $this->data['modelData'] = $this->getModel;
        $this->data['uri'] = $this->uri;
        $this->data['request'] = $this->request;
        date_default_timezone_set("Asia/Kolkata");

        $this->data['type_Array'] = array('mcq', 'tnf', 'fib', 'mch', 'imgtext', 'parichay', 'notes', 'ebookUpload', 'canvas', 'audioUpload', 'mmg', 'wordsearch', 'crossword', 'dragimg', 'orderword', 'sudoku', 'picpuzzle', 'vid');
        $this->data['activitytypelist'] = [
            'mcq' => 'Multiple Choice Questions',
            'tnf' => 'True or False',
            'fib' => 'Fill in the Blanks',
            'mch' => 'Matching Questions',
            'imgtext' => 'Infographic',
            'notes' => 'Summary',
            'parichay' => 'Info',
            'ebookUpload' => 'Ebook',
            'canvas' => 'image coloring',
            //'audioUpload' => 'Listening',
            'mmg' => 'Memory Game',
            'wordsearch' => 'Word Search',
            'crossword' => 'Cross Word',
            'dragimg' => 'Drag & Drop',
            'orderword' => 'Order Word',
            'sudoku' => 'Sudoku',
            'picpuzzle' => 'Picture Puzzle',
            'vid' => 'Watch',
            /*'rearwo' => 'SEQUENCE THE SENTENCES',
            'drag' => 'Arrange Sentence',
            'drag2' => 'Arrange Word',
            'typing' => 'Typing',
            'writing' => 'Writing',
            'parichay' => 'Important Terms',
            'vid' => 'Video',
            'ImgAns' => 'Image With Answer'*/
            ];
        
        
    }

          
    public function Checkaccount()
    {
        $checkValidator = $this->validate([
            'accountid' => ['rules'=>'trim|required', 'errors'=>['required'=>'Username is required.']],
            'accountpassword' => ['rules'=>'trim|required', 'errors'=>['required'=>'Password is required.']]
        ]);
        if (!$checkValidator) {
            foreach($this->validation->getErrors() as $getErr){
            echo "<p>$getErr</p>";
        }
        exit();    
        } else {
            $getUser = $this->getModel->singledata('vt_useraccount', ['vc_status' => 'Active', 'vc_username' => strtolower($this->request->getPost('accountid')), 'vc_password' => md5($this->request->getPost('accountpassword'))]);
            if ($getUser) {
                $instituteData = $this->getModel->singledata('vt_school', ['id' => $getUser->vc_school]);
                if (@$instituteData->accstatus == 'disabled') {
                    echo "<p>Your Account Suspended.</p>";
                    exit();
                } elseif (@$instituteData->accstatus == 'enabled') {
                    $TOKEN_KEY = $this->getToken(20);
                    $this->getModel->datastorage('vt_user_token', ['userid' => $getUser->vc_id, 'token' => $TOKEN_KEY]);
                    //Token remove if greater than two loginattemped
                    $userId = $getUser->vc_id;
                    $getfirstusertoken = $this->db->query('SELECT count(userid) as loginattemped,token FROM vt_user_token where userid = ' . $userId . ' ORDER BY timemodified ASC LIMIT 1')->getRowArray();
                    if ($getfirstusertoken['loginattemped'] > 2) {
                        $this->getModel->dataremove('vt_user_token', ['token' => $getfirstusertoken['token']]);
                    }
                    $this->session->set('voltAccountkey', $getUser->vc_username);
                    $this->session->set('voltAccountUserName', $getUser->vc_username);
                    $this->session->set('voltAccountClass', $getUser->vc_class);
                    $this->session->set('voltAccountSubject', $getUser->vc_subject);
                    $this->session->set('voltAccountType', $getUser->vc_usertype);
                    $this->session->set('voltAccountName', $getUser->vc_name);
                    $this->session->set('voltSchoolId', $getUser->vc_school);
                    $this->session->set('voltAccountToken', $TOKEN_KEY);
                          echo "Veryfied";
                } else {
                    echo "<p>Something went wrong.</p>";
                }
            } else {
                echo "<p>User Id  or Password is wrong.</p>";
            }   
        }
    }
    
    //registration Module
        
    public function Createaccount()
    {        
        helper(['form','url']);
        $validation =  \Config\Services::validation();
       $check= $this->validate([
        'fullname' => [
            'rules' => 'required',
            'errors' => [
            'required' => ' The First name is required!'
            ]
            ],
       'lastname' => [
                'rules' => 'required',
                'errors' => [
                'required' => ' The Last name is required!'
                ]
                ],
        'contactnumber' => [
                    'rules' => 'required|regex_match[/^[0-9]{10}$/]',
                    'errors' => [
                    'required' => 'Mobile number must be 10 digit.'
                    ]
                    ],
          'subjectlist' => [
                        'rules' => 'required',
                        'errors' => [
                        'required' => 'Subject name is required'
                        ]
                        ],
            'classlist' => [
                            'rules' => 'required',
                            'errors' => [
                            'required' => 'Class name is required'
                            ]
                            ],
             'school' => [
                            'rules' => 'required',
                            'errors' => [
                            'required' => 'School name is required'
                            ]
                            ],
           'gender' => [
                            'rules' => 'required',
                            'errors' => [
                            'required' => 'Gender is required.'
                            ]
                            ],
             'emailid' => [
                                'rules' => 'required|valid_email',
                                'errors' => [
                                'required' => 'email is required.'
                                ]
                                ],
                 'city' => [
                            'rules' => 'required',
                             'errors' => [
                            'required' => 'The city name is required.'
                          ]
                         ],       
                 'state' => [
                      'rules' => 'required',
                      'errors' => [
                        'required' => 'The state name is required.'
                       ]
                       ],
       ]);
        


    if (!$check) {
        return redirect()->to(base_url() . '/registration')->withInput();

    }else{
        $numbr = 0000;
        $alpha = 'a';
        $getlastuser = $this->db->query('SELECT vc_username FROM vt_useraccount ORDER BY vc_id DESC LIMIT 1')->getRowArray();
    if (!empty($getlastuser)) {
                $snum = ltrim($getlastuser['vc_username'], $getlastuser['vc_username'][0]);
                if ($snum == 9999) {
                    $alpha++;
                    $snum = 0000;
                }
                $nDigit = str_pad($snum + 1, 4, 0, STR_PAD_LEFT);
            } else {
                $nDigit = str_pad($numbr + 1, 4, 0, STR_PAD_LEFT);
            }
     
            $userInfo = [
                'vc_name' => $this->request->getPost('fullname'),
                'vc_lastname' => $this->request->getPost('lastname'),
                'vc_username' => $alpha . $nDigit,
                'vc_contact' => $this->request->getPost('contactnumber'),
                'vc_gender' => $this->request->getPost('gender'),
                'vc_state' => $this->request->getPost('state'),
                'vc_city' => $this->request->getPost('city'),
                'vc_school' => $this->request->getPost('school'),
                'vc_email' => $this->request->getPost('emailid'),
                'vc_password' => md5($this->request->getPost('reusepassword')),
                'vc_viewpass' => encrypt_decrypt_pwd('encrypt', $this->request->getPost('reusepassword')),
                'vc_class' => $this->request->getPost('classlist'),
                'vc_subject' => $this->request->getPost('subjectlist'),
                'vc_status' => 'deactive',
                'vc_created_date' => date('Y-m-d H:i:s'),
            ];
            $storeUser = $this->getModel->datastorage('vt_useraccount', $userInfo);
            if ($storeUser) {
//email function 

             $email = \Config\Services::email();  

                $config = array(
                    'protocol'  =>'smtp',
                    'SMTPHost' => SMTP_HOST,
                    'SMTPPort' => SMTP_PORT,
                    'SMTPUser' => SMTP_USER,
                    'SMTPPass' => SMTP_PASSWORD,
                    'SMTPTimeout'  => '60',
                    'mailType'  => 'html',
                    'charset'   => 'utf-8',
                    'wordWrap'  =>  true
                );
                $msg= view('publicview/verify-email',$userInfo);
                $email->initialize($config);

                $email->setfrom('noreply@vivavolt.net', 'Viva Volt');
                $email->setto($userInfo['vc_email']);
                $email->setSubject('Registration Verification');
                $email->setMessage($msg);
                if($email->send()==false){
                    echo $email->printDebugger();
                } else{
                    session()->setFlashdata('msg','Thanks for the registration.Please Verify your email id.');
              return redirect()->to(base_url() . '/registration');
                }

            } else {
                echo "<p>Something went wrong. Try Again!</p>";
            }
        
    }
       
    }
public function registrationVerify(){

    echo view('publicview/registartionverify');

}
//registration end
    public function verifyCrmAccount()
    {
        $ids = base64_decode($this->request->getGet('u'));
        $checkAccount = $this->getModel->singledata('vt_useraccount', ['vc_email' => $ids]);
        if ($checkAccount) {
            $this->db->where(['vc_email' => $ids]);
            $update = $this->db->update('vt_useraccount', ['vc_status' => 'Active']);
        }
        echo "<script>alert('Your account has been activated!'); window.location='" . base_url() . "'</script>";
    }
    
//  forgate password 
    public function Forgotpassword()
    {
       echo view('publicview/verify-email');
       
       
      }
public function validateforgatepass(){
    helper(['form','url']);
    $validation =  \Config\Services::validation();

    $checkvalidation=$this->validate([

        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
            'required' => 'email is required.'
            ]
            ],
            'userid' => [
                'rules' => 'required',
                'errors' => [
                'required' => 'username is required.'
                ]
                ],
    ]);
    if (!$checkvalidation) {
        return redirect()->to(base_url() . '/forgot-password')->withInput();

    }else{
        $email = $this->getModel->singledata('vt_useraccount', ['vc_email' => $this->request->getPost('email')]);
       $userid = $this->getModel->singledata('vt_useraccount', ['vc_username' => $this->request->getPost('userid')]);


       if($userid){
        if ($email->vc_email== $userid->vc_email) {

            $existingremove = $this->getModel->dataremove('vt_forgotpassword', ['vc_email' => $this->request->getPost('email')]);
            $random_udigit = mt_rand(10000, 99999);
            $emailInfo = [
                'vc_email' => $this->request->getPost('email'),
                'vc_TicketNo' => 'vvolt' . $random_udigit,
                'vc_created_date' => date('Y-m-d H:i:s'),
            ];
            $storeData = $this->getModel->datastorage('vt_forgotpassword', $emailInfo);

        }else{
            echo"email not verify";
        }
       }else{
           echo"no";
       }


    }
}

// forgate password end
    public function Resetpassword()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['password'] = 'Change password Set';
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() === false) {
            $url = $_GET['vcode'];
            $vidget = $_GET['vid'];
            $vid = base64_decode($vidget);
            $TicketNo = $this->getModel->singledata('vt_forgotpassword', ['vc_TicketNo' => $vid]);
            if ($TicketNo) {
                $created = $TicketNo->vc_created_date;
                $expire_date = date('Y-m-d H:i', strtotime('+59 minutes', strtotime($created)));
                $now = date("Y-m-d H:i:s");
                if ($now > $expire_date) { //if current time is greater then created time
                    $existingremove = $this->getModel->dataremove('vt_forgotpassword', ['vc_email' => base64_decode($url)]);
                    echo view('publicview/invalid-link');
                } else //still has a time
                {
                    $email = base64_decode($url);
                    $this->data['requestemail'] = trim($email);
                    echo view('publicview/reset-password', $data);
                }

            } else {
                echo view('publicview/invalid-link');
            }
        } else {
            if ($this->request->getPost('password') == $this->request->getPost('re_password')) {
                print_r($this->request->getPost('password'));
                die();
            } else {
                return redirect()->to(base_url());
            }
        }
    }

    public function Resetmypassword()
    {
        if ($this->request->getPost('email')) {
            $this->form_validation->set_rules('verifypassword', 'Varify password', 'required');
            $this->form_validation->set_rules('password', 'New Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            if ($this->form_validation->run() == true) {
                $this->data['title'] = 'Change Password';
                $Vemail = base64_decode($this->request->getPost('email'));
                $query = $this->getModel->singledata('vt_useraccount', ['vc_email' => $Vemail]);
                if ($query) {
                    $updateData = [
                        'vc_password' => md5($this->request->getPost('password')),
                        'vc_viewpass' => encrypt_decrypt_pwd('encrypt', $this->request->getPost('password')),
                    ];
                    $updateUser = $this->getModel->dataupdate('vt_useraccount', ['vc_email' => $Vemail], $updateData);
                    $existingremove = $this->getModel->dataremove('vt_forgotpassword', ['vc_email' => $Vemail]);
                    $logout = $this->getModel->dataremove('vt_user_token', ['uid' => $query->vc_id]);
                    if ($updateUser) {
                        echo 'Success';
                    } else {
                        echo 'Failed';
                    }
                } else {
                    echo 'Failed';
                }
            }
        } else {
            echo 'Failed';
        }
    }

   

 
    public function index()
    {
        
            $subjectList = $this->db->query("SELECT * FROM `mastar_subject` ORDER BY `sub_sorting` ASC LIMIT 4")->getResultArray(); 
            //$subjectList = $this->db->query("SELECT * FROM `mastar_subject` WHERE `sub_coming`=1  ORDER BY `sub_sorting` ASC LIMIT 5")->getResultArray(); 
            //$upcomingSubjectlist = $this->db->query("SELECT * FROM `mastar_subject` WHERE `sub_coming`=0  ORDER BY `sub_sorting` ASC LIMIT 5")->getResultArray(); 
            if ($subjectList) {
            $this->data['subject'] = $subjectList;
           // $this->data['upcomingSubjectlist'] = $upcomingSubjectlist;    
            }
            echo view('publicview/front', $this->data);
    }
        
    public function Business()
    {
        echo view('publicview/business');
    }
    

    
    public function Businessregistration()
    {
        echo view('publicview/business-registration');
    }
    
    
       
    public function Accountlogin()
    {
    if(session('voltAccountUserName')){
          
    return redirect()->to(base_url('/account') );

    }else{
         echo view('publicview/login');   
    }
    }
    
    
    public function Accountregistration()
    {
        echo view('publicview/registration');
    }
    
    
    public function Testimonials()
    {
        echo view('publicview/testimonials');
    }
    
    
    public function Gallery()
    {
        echo view('publicview/gallery');
    }
    
    
    public function Team()
    {
        echo view('publicview/team');
    }
    
    
    public function Instructors()
    {
        echo view('publicview/instructors');
    }
    
    
    
    public function Userdashborad()
    {
        echo view('publicview/user_dashboard');
    }
    
    

    public function Ebooks()
    {
        echo view('publicview/ebooks');
    }
    
     public function Bookademo()
    {
        echo view('publicview/bookademo');
    }
    
    
   
    public function Subjectlist()
    { 
          // $subjectList = $this->db->query("SELECT * FROM `mastar_subject` WHERE `sub_coming`=1  ORDER BY `sub_sorting` ASC")->getResultArray();
           $subjectList = $this->db->query("SELECT * FROM `mastar_subject` ORDER BY `sub_sorting` ASC LIMIT 4")->getResultArray(); 
            if ($subjectList) {
            $this->data['subject'] = $subjectList;
            }
            echo view('publicview/subjectlist', $this->data);
    }
    
    
     
    public function Classlist()
    { 
        $slug = $this->uri->getSegment(2);  
        $checkSubject = $this->getModel->singledata('mastar_subject', ['slug' => $slug]); 
        if($checkSubject){
        $sid =$checkSubject->sub_id;   
        $classList = $this->db->query(" SELECT * FROM `master_module` WHERE `subject_id`=$sid  GROUP BY `class_id` ORDER BY `class_id` ASC ")->getResultArray();  
        if ($classList) {
         $this->data['allclass'] = $classList;
        } else {
        $this->data['allclass'] = '';
        }
        $cy = date('Y'); 
        $cm = date('n');
        $this->data['cmonths'] = base64_encode($cy.'-'.$cm) ; 
        $this->data['geturlsubject'] = $checkSubject;
        echo view('publicview/classes', $this->data);    
        }else{
            echo view('publicview/error-404', $this->data); 
        }  
     }
    
    
    
      
     public function Monthlist()
    {   
         
           $cyr = date('Y');
           $subjectslug = $this->uri->getSegment(2); 
           $classslug = substr($this->uri->getSegment(3),5); 
           $checkSubject = $this->getModel->singledata('mastar_subject', ['slug' => $subjectslug]);
           $checkClass = $this->getModel->singledata('mastar_class', ['class_id ' => $classslug]);  
            if ($checkSubject && $checkClass) {
            if(session('voltAccountUserName')){
            $gwtUserData = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $schoolData = $this->getModel->singledata('vt_school', ['id' => $gwtUserData->vc_school]);
             $this->data['schoolDataMonthStatus'] =  $schoolData->mnthstatus; 
            }else{
             $this->data['schoolDataMonthStatus']='';   
            }     
                $sid = $checkSubject->sub_id;
                $cid = $checkClass->class_id;
                $this->data['geturlsubject'] = $checkSubject;
                $this->data['geturlclass'] = $checkClass;
                $monthList = $this->db->query(" SELECT * FROM `question` WHERE `class`=$cid AND `subject`=$sid AND `month`>0 AND `module`>0 GROUP BY `month` ORDER BY `month` ASC ")->getResultArray();
                if ($monthList) {
                    $this->data['listofmonth'] = $monthList;
                } else {
                    $this->data['listofmonth'] = '';
                    

                    //return redirect()->to("subjects/" . $this->uri->getSegment(2));
                }
            echo view('publicview/monthlist', $this->data);
            } else {
                echo view('publicview/error-404');
            }
   
    }
    
    
   
     public function Moduleslist()
     {
        
            $cyr = date('Y');
            $cid = substr($this->uri->getSegment(3),5);
            $slug = $this->uri->getSegment(2);
            $months = $this->uri->getSegment(4);
            $SubjectData = $this->getModel->singledata('mastar_subject', ['slug' => $slug]);
            $checkClass = $this->getModel->singledata('mastar_class', ['class_id ' => $cid]); 
            $this->data['geturlsubject'] = $SubjectData;
            $this->data['geturlclass'] = $checkClass;
            $sid = $SubjectData->sub_id;
            $this->data['sdata'] = $SubjectData;
            $this->data['vmonths'] = $SubjectData->sub_month;  
            if($SubjectData && $checkClass){
            if ($SubjectData->sub_month==1) {
            if(session('voltAccountUserName')){
                
            $gwtUserData = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $schoolData = $this->getModel->singledata('vt_school', ['id' => $gwtUserData->vc_school]);  
            $this->data['schoolData'] = $schoolData;
            $checkmonth = array_search(base64_decode($this->uri->getSegment(4)), session('finalTermsSession'));  
            $this->data['sa'] = $schoolData->mnthstatus;    
            /** score report */
            $reportAPI = API_connector(base_url("api/scorereport?uid=" . $this->getLogin->vc_id));
            if ($reportAPI->status == 1) {
            $this->data['activity'] = $reportAPI->data;
            } else {
            $this->data['activity'] = "";
            }    
            }else{
            $this->data['sa'] = 'enabled';
            $checkmonth = array_search(base64_decode($this->uri->getSegment(4)), session('finalTermsSession'));    
            /** score report */
            $this->data['activity'] = "";    
            }   
                
            /** Months */
            $mid = $checkmonth;
            $this->data['month'] = base64_decode($this->uri->getSegment(4));
            
            $monthList = $this->db->query(" SELECT * FROM `question` WHERE `class`=$cid AND `subject`=$sid AND `month`>0 AND `module`>0 GROUP BY `month` ORDER BY `month` ASC ")->getResultArray();
            if ($monthList) {
            $this->data['listofmonth'] = $monthList;
            }
            $moduleList = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `module`>0  AND master_module.m_url = '' GROUP BY `module` ORDER BY master_module.m_num ASC ")->getResultArray();

            $seriesList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id=question.series WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `series`>0  GROUP BY `series` ORDER BY mastar_series.series_num ASC")->getResultArray();

            $chapList = $this->db->query("SELECT * FROM `question` Left join chaptername ON chaptername.id=question.chapterTitle WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `chapter`>0  GROUP BY `chapter` ORDER BY chaptername.id ASC")->getResultArray();
                
            $bloglist = $this->db->query("SELECT * FROM  master_module WHERE `class_id`=$cid AND `subject_id`=$sid AND master_module.m_url <> '' AND master_module.m_url IS NOT NULL")->getResultArray();

   
            } else {
            $this->data['month'] = '';
                
            $moduleList = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$sid AND `module`>0  AND master_module.m_url = '' GROUP BY `module` ORDER BY master_module.m_num ASC ")->getResultArray();

            $seriesList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id=question.series WHERE `class`=$cid AND `subject`=$sid AND `series`>0  GROUP BY `series` ORDER BY mastar_series.series_num ASC")->getResultArray();
               
            $chapList = $this->db->query("SELECT * FROM `question` Left join chaptername ON chaptername.id=question.chapterTitle WHERE `class`=$cid AND `subject`=$sid AND `chapter`>0  GROUP BY `chapter` ORDER BY chaptername.id ASC")->getResultArray();
         
            }
            $bloglist = $this->db->query("SELECT * FROM  master_module WHERE `class_id`=$cid AND `subject_id`=$sid AND master_module.m_url <> '' AND master_module.m_url IS NOT NULL")->getResultArray();

          
           if ($moduleList) {
            $this->data['listview'] = $moduleList;
                            $this->data['vdata'] = 'moduals';
                            $this->data['bloglist'] = $bloglist;
           } else if ($seriesList) {
                            $this->data['listview'] = $seriesList;
                            $this->data['vdata'] = 'series';
                            $this->data['bloglist'] = '';
           } else if ($chapList) {
                            $this->data['listview'] = $chapList;
                            $this->data['vdata'] = 'chapter';
                            $this->data['bloglist'] = '';
          } else {
                            $this->data['bloglist'] = $bloglist;
                            $this->data['listview'] = '';
                            $this->data['vdata'] = '';
           }
              
           if(session('voltAccountUserName')){
           if ($SubjectData->sub_month==1) {
           $this->data['totalQ'] = count($this->db->query("select * from list where set_id in(select id from question where status='active' and class=$cid and subject=$sid and month=$checkmonth ) and type in ('mcq','tnf','fib')")->getResultArray());

           $this->data['totalM'] = $this->db->query("SELECT SUM(`total_attempt`) AS `allattempt`, SUM(`wrng_attempt`) AS `wrongattempt`, SUM(`right_attempt`) AS `rightattempt`, SUM(`total_time`) AS `spendtime` FROM `reports` join question as q on reports.setId = q.id WHERE `userid`='" . $this->getLogin->vc_id . "' and act_type in ('mcq','tnf','fib') and q.month = $checkmonth GROUP BY `userid`")->getRow();

           $this->data['totalN'] = $this->db->query("select q.id , q.module , count(l.id) as tot from question as q join list as l on q.id=l.set_id join master_module as m on q.module = m.m_id where q.status='active' and q.class=$cid and q.subject=$sid and l.type in ('mcq','tnf','fib') and q.month = $checkmonth  GROUP by q.month , q.module HAVING q.month")->getResultArray();

           $this->data['totalU'] = $this->db->query("SELECT qu.module ,qu.id, sum(r.total_attempt) as tot FROM reports as r join question as qu on r.setId = qu.id WHERE r.userid = '" . $this->getLogin->vc_id . "' and qu.status='active' and qu.class=$cid and qu.subject=$sid and r.act_type in ('mcq','tnf','fib') and qu.month = $checkmonth  GROUP by qu.month , qu.module HAVING qu.month")->getResultArray();
           }else{
           $this->data['totalQ'] = count($this->db->query("select * from list where set_id in(select id from question where status='active' and class=$cid and subject=$sid ) and type in ('mcq','tnf','fib')")->getResultArray());

           $this->data['totalM'] = $this->db->query("SELECT SUM(`total_attempt`) AS `allattempt`, SUM(`wrng_attempt`) AS `wrongattempt`, SUM(`right_attempt`) AS `rightattempt`, SUM(`total_time`) AS `spendtime` FROM `reports` join question as q on reports.setId = q.id WHERE `userid`='" . $this->getLogin->vc_id . "' and act_type in ('mcq','tnf','fib') GROUP BY `userid`")->getRow();

           $this->data['totalN'] = $this->db->query("select q.id , q.module , count(l.id) as tot from question as q join list as l on q.id=l.set_id join master_module as m on q.module = m.m_id where q.status='active' and q.class=$cid and q.subject=$sid and l.type in ('mcq','tnf','fib')  GROUP by q.month , q.module HAVING q.month")->getResultArray();

           $this->data['totalU'] = $this->db->query("SELECT qu.module ,qu.id, sum(r.total_attempt) as tot FROM reports as r join question as qu on r.setId = qu.id WHERE r.userid = '" . $this->getLogin->vc_id . "' and qu.status='active' and qu.class=$cid and qu.subject=$sid and r.act_type in ('mcq','tnf','fib')  GROUP by qu.month , qu.module HAVING qu.month")->getResultArray();    
           }
           }
           $subjectlistelse = $this->db->query("SELECT * FROM `question` Left join mastar_subject ON mastar_subject.sub_id=question.subject WHERE `class`=$cid AND  NOT `subject`=$sid AND mastar_subject.sub_coming = '1' GROUP BY `subject` ORDER BY mastar_subject.sub_sorting ASC ")->getResultArray(); 
           $this->data['subjectlistelse'] = $subjectlistelse; 
                
           echo view('publicview/modules', $this->data);
          
           } else {
           echo view('publicview/error-404'); 
           } 
           
           
       
    }
    
    
     public function Themelist()
     { 

        $subjectslug = $this->uri->getSegment(2); 
        $classslug = substr($this->uri->getSegment(3),5); 
        $modulessluglast = $this->uri->getSegment(5); 
        if(!empty($modulessluglast)){
        $modulesslug = $this->uri->getSegment(5); 
        $months = base64_decode($this->uri->getSegment(4)); 
        $checkmonth = array_search(base64_decode($this->uri->getSegment(4)), session('finalTermsSession')); 
        $mid = $checkmonth;
        }else{
        $modulesslug = $this->uri->getSegment(4); 
        }
        $checkSubject = $this->getModel->singledata('mastar_subject', ['slug' => $subjectslug]);
        $checkClass = $this->getModel->singledata('mastar_class', ['class_id ' => $classslug]);
        $checkModules = $this->getModel->singledata('master_module', ['slug ' => $modulesslug]);  
         $cid = $checkClass->class_id;
         $sid = $checkSubject->sub_id;
        if($checkSubject && $checkClass){ 
        if(session('voltAccountUserName')){ 
        $gwtUserData = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
        $schoolData = $this->getModel->singledata('vt_school', ['id' => $gwtUserData->vc_school]);
        $this->data['finalTerms'] = $_SESSION['finalTermsSession'];
        $sa = $schoolData->mnthstatus;
        }else{ 
        $sa = 'enabled';  
        $this->data['finalTerms'] = $_SESSION['finalTermsSession']; 
        }
        
            
              
            
        if($checkSubject->sub_month){
        $this->data['month'] = base64_decode($this->uri->getSegment(4)); 
            
            
        $themelist = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id=question.series WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `module`=$checkModules->m_id GROUP BY `series` ORDER BY mastar_series.series_num ASC ")->getResultArray();
 
           
        $ModuleListElse = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `module`>0  AND master_module.m_url = '' AND NOT `module`=$checkModules->m_id  GROUP BY `module` ORDER BY master_module.m_num ASC ")->getResultArray();
         
       
        //$ModuleListElse = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id=question.series WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `module`=$checkModules->m_id GROUP BY `series` ORDER BY mastar_series.series_num ASC ")->getResultArray();
 
               
     
        } else{
        $this->data['month'] = '';  
            
        $themelist = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id=question.series WHERE `class`=$cid AND `subject`=$sid  AND `module`=$checkModules->m_id GROUP BY `series` ORDER BY mastar_series.series_num ASC ")->getResultArray();
 
            
        $ModuleListElse = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$sid AND `module`>0  AND master_module.m_url = '' AND NOT `module`=$checkModules->m_id  GROUP BY `module` ORDER BY master_module.m_num ASC ")->getResultArray();    
            
        //$themelist = $this->db->query("SELECT * FROM `mastar_series` WHERE `class_id`=$checkClass->class_id AND `subject_id`=$checkSubject->sub_id  ORDER BY mastar_series.series_id ASC")->getResultArray();
        //$ModuleListElse = $this->db->query("SELECT * FROM `master_module` WHERE `class_id`=$checkClass->class_id AND `subject_id`=$checkSubject->sub_id  ORDER BY master_module.m_num ASC ")->getResultArray();  
        }  
            
        $this->data['geturlsubject'] = $checkSubject;
        $this->data['geturlclass'] = $checkClass;
        $this->data['getmodules'] = $checkModules;
        $this->data['modulelistelse'] = $ModuleListElse;     
        $this->data['themeList'] = $themelist;
        echo view('publicview/themes', $this->data);
        }else{
        echo view('publicview/error-404', $this->data);     
        }  
       
     }

       

    
    
    
       public function Chapterlist()
     { 
        $subjectslug = $this->uri->getSegment(2); 
        $checkSubject = $this->getModel->singledata('mastar_subject', ['slug' => $subjectslug]);  
        $classslug = substr($this->uri->getSegment(3),5);  
        $checkClass = $this->getModel->singledata('mastar_class', ['class_id ' => $classslug]);
           
           
        if($checkSubject->sub_month==1){
        $checkmonth = array_search(base64_decode($this->uri->getSegment(4)), session('finalTermsSession'));   
        $mid = $checkmonth;
        $this->data['month'] = base64_decode($this->uri->getSegment(4));   
        $modulesslug = $this->uri->getSegment(5); 
        $themeslug = $this->uri->getSegment(6);     
        $checkthemecheck = $this->getModel->singledata('mastar_series', ['slug ' => $themeslug]);
        $checkModules = $this->getModel->singledata('master_module', ['slug ' => $modulesslug]);  
        if(!empty($checkSubject && $checkClass && $checkModules)){    
        $theme = ''; 
        $themeListElse = '';
        if($checkthemecheck){   
        $theme = ' AND `series_id`= '.$checkthemecheck->series_id.''; 
         $series_n =   ' AND `series`= '.$checkthemecheck->series_id.''; 
            
        $themeListElse = $this->db->query("SELECT * FROM `mastar_series` WHERE `class_id`=$checkClass->class_id AND `subject_id`=$checkSubject->sub_id AND `module_id`=$checkModules->m_id $theme ORDER BY mastar_series.series_num ASC ")->getResultArray(); 
                
            
        $chapterlist = $this->db->query("SELECT * FROM `question` Left join chaptername ON chaptername.id=question.chapterTitle WHERE `class`=$checkClass->class_id AND `subject`=$checkSubject->sub_id  AND `month`=$mid AND `module`=$checkModules->m_id $series_n  GROUP BY `chapterTitle` ORDER BY chaptername.id ASC ")->getResultArray();    
             
        }else{
            
        $chapterlist = $this->db->query("SELECT * FROM `question` Left join chaptername ON chaptername.id=question.chapterTitle WHERE `class`=$checkClass->class_id AND `subject`=$checkSubject->sub_id  AND `month`=$mid AND `module`=$checkModules->m_id GROUP BY `chapterTitle` ORDER BY chaptername.id ASC ")->getResultArray();    
            
        }
        
        
            
         
        $this->data['geturlsubject'] = $checkSubject;
        $this->data['geturlclass'] = $checkClass;
        $this->data['getmodules'] = $checkModules;
        $this->data['gettheme'] = $checkthemecheck;    
        $this->data['themelistelse'] = $themeListElse;     
        $this->data['chapterlist'] = $chapterlist;     
        echo view('publicview/chapters', $this->data);
        }else{
        echo view('publicview/error-404', $this->data);     
        }  
            
            
        }else{
            
            
        $this->data['month']='';
        $modulesslug = $this->uri->getSegment(4); 
        $themeslug = $this->uri->getSegment(5); 
        $checkthemecheck = $this->getModel->singledata('mastar_series', ['slug ' => $themeslug]);
        $checkModules = $this->getModel->singledata('master_module', ['slug ' => $modulesslug]);  
        if(!empty($checkSubject && $checkClass && $checkModules)){    
        $theme = ''; 
        $themeListElse = '';
        if($checkthemecheck){   
        $theme = ' AND `series_id`= '.$checkthemecheck->series_id.' '; 
            
            
        $themeListElse = $this->db->query("SELECT * FROM `mastar_series` WHERE `class_id`=$checkClass->class_id AND `subject_id`=$checkSubject->sub_id AND `module_id`=$checkModules->m_id $theme ORDER BY mastar_series.series_num ASC ")->getResultArray(); 
        }
       
        $chapterlist = $this->db->query("SELECT * FROM `question` Left join chaptername ON chaptername.id=question.chapterTitle WHERE `class`=$checkClass->class_id AND `subject`=$checkSubject->sub_id  AND  `module`=$checkModules->m_id GROUP BY `chapterTitle` ORDER BY chaptername.id ASC ")->getResultArray();    
               
            
            
        $this->data['geturlsubject'] = $checkSubject;
        $this->data['geturlclass'] = $checkClass;
        $this->data['getmodules'] = $checkModules;
        $this->data['gettheme'] = $checkthemecheck;    
        $this->data['themelistelse'] = $themeListElse;     
        $this->data['chapterlist'] = $chapterlist;     
        echo view('publicview/chapters', $this->data);
            
           
        }else{
        echo view('publicview/error-404', $this->data);     
        }  
        } 
        }
    
    
    
    
    
    
        public function Categorylist()
        {


            $subjectslug = $this->uri->getSegment(2); 
            $classslug = substr($this->uri->getSegment(3),5); 
            $modulesslug = $this->uri->getSegment(4); 
            $themeslug = $this->uri->getSegment(5); 
            $chapterslug = $this->uri->getSegment(6);
            $monthslug = 1;
        
                
            print_r($chapterslug);
        
            die();
        
        
            //$moid = $this->uri->getSegment(2);
            $checkmonth = 1;
            $this->data['months'] = $checkmonth;
            if ($checkmonth) {
                //$ymdt = explode('-', base64_decode($this->uri->getSegment(3)));
                //$mid = $ymdt[1];
                //$this->data['month'] = base64_decode($this->uri->getSegment(3));
                $chapData = $this->getModel->singledata('chaptername', ['slug' => $chapterslug]);
                if(!empty($chapData) && $chapData->class_id == $classslug) {
                   $monthVar = "";
                   if ($monthslug != "") {
                        $monthVar = " and month =" . $monthslug;
                   }  
                   $checkCats = API_connector(base_url("api/Gettopcategory?class=" . $classslug . "&subject=" . $chapData->subject_id . "&series=" . $chapData->series_id . "&chapter=" . $chapData->id . "&month=" . $checkmonth));
                    // echo $this->db->getLastQuery();
                    // echo "<pre>";
                    // print_r($checkCats);
                    // exit();
                    $this->data['geturlclass'] = $this->getModel->singledata('mastar_class', ['class_id' => $classslug]);
                    $this->data['geturlsubject'] = $this->getModel->singledata('mastar_subject', ['sub_id' => $chapData->subject_id]);
                    $this->data['gettheme'] = $this->getModel->singledata('mastar_series', ['series_id' => $chapData->series_id]);
                    $this->data['getmodules'] = $this->getModel->singledata('master_module', ['m_id' => $chapData->module_id]);
                    $this->data['chapter'] = $this->getModel->singledata('chaptername', ['id' => $chapData->id]);
                    //$this->data['ChapterList'] = $this->db->query("SELECT * FROM `chaptername` WHERE `class_id`=$cid AND `series_id`=$chapData->series_id AND id != $chapData->id  ORDER BY chaptername.id ASC ")->getResultArray();
                    $this->data['ChapterList'] = $this->db->query("SELECT * FROM `chaptername` WHERE id in(SELECT `chapterTitle` FROM `question` where `class`='$classslug' AND `module`=$chapData->module_id AND series = $chapData->series_id  AND `month`=$checkmonth and chapterTitle != $chapData->id) ORDER BY chaptername.id ASC ")->getResultArray();
                   
                    $chapterlistelse = $this->db->query("SELECT * FROM `chaptername` WHERE `class_id`=$classslug AND `subject_id`=$chapData->subject_id AND `module_id`=$chapData->module_id AND `series_id`=$chapData->series_id AND id != $chapData->id  ORDER BY chaptername.id ASC")->getResultArray();
                    
                    $this->data['chapterlistelse'] = $chapterlistelse;  
                    if ($checkCats->status == 1) {
                        $getCategories = $checkCats->catData;
                    } else {
                        $getCategories = [];
                    }
                    $this->data['allcategories'] = $getCategories;
                    echo view('publicview/category-list', $this->data);
                    }else{
                    echo view('publicview/error-404');
                    }
            } else {
                echo view('publicview/error-404');
            }
    }
    
    
    
    
    
    
    
    
        public function Searistopicslist()
        {

        if (session('Loginredirecturl')) {
            if(!$this->getLogin->vc_id){
            return redirect('/');
        }
            $regdate = date("Y-m-d", strtotime($this->getLogin->vc_created_date));
            $toddate = date("Y-m-d");
            $date1 = date_create("$regdate");
            $date2 = date_create("$toddate");
            $diff = date_diff($date1, $date2);
            $this->data['days'] = $diff->format("%a");
            $cid = session('voltAccountClass');
            $moid = $this->uri->getSegment(2);
            $checkmonth = array_search(base64_decode($this->uri->getSegment(3)), session('finalTermsSession'));

            if ($checkmonth) {
                $mid = $checkmonth;
				$this->data['mid'] = $checkmonth;
                $ymdt = explode('-', base64_decode($this->uri->getSegment(3)));
                $this->data['month'] = base64_decode($this->uri->getSegment(3));
                $ex = explode("!!", base64_decode($moid));
                if ($ex[0] == 'segment34544') {
                    $moduleData = $this->getModel->singledata('master_module', ['m_id' => $ex[1]]);
                    $this->data['moduleData'] = $moduleData;
                    $subject_id = $moduleData->subject_id;
                    //$chapList = $this->db->query("SELECT * FROM `chaptername` WHERE `class_id`=$cid AND `series_id`=0 and module_id = $ex[1] and subject_id = $subject_id  ORDER BY chaptername.id ASC ")->getResultArray();
                    $chapList = $this->db->query("SELECT * FROM `chaptername` WHERE id in(SELECT chapterTitle FROM `question` where `class`=$cid AND `module`=$moduleData->m_id AND series = 0  AND `month`=$checkmonth and subject=$subject_id ) ORDER BY chaptername.id ASC ")->getResultArray();
                    $moduleList = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$subject_id  AND `month`= $mid AND `module`>0  AND master_module.m_id != $ex[1] AND `month`=$checkmonth GROUP BY `module` ORDER BY master_module.m_num ASC ")->getResultArray();
                    $this->data['bloglist'] = $this->db->query("SELECT * FROM  master_module WHERE `class_id`=$cid AND `subject_id`=$subject_id AND master_module.m_url <> '' AND master_module.m_url IS NOT NULL")->getResultArray();
                    $this->data['chapData'] = $chapList;
                    $this->data['moduleList'] = $moduleList;
                    echo view('publicview/series-skip', $this->data);
                    //echo view('publicview/series-list', $this->data);
                } else {
                    $seriesData = $this->getModel->singledata('mastar_series', ['slug' => base64_decode($moid)]);
                    if (!empty($seriesData)) {
                        $this->data['seriesData'] = $seriesData;
                        $moduleData = $this->getModel->singledata('master_module', ['m_id' => $seriesData->module_id]);
                        $this->data['moduleData'] = $moduleData;
                        //$chapList = $this->db->query("SELECT * FROM `chaptername` WHERE `class_id`=$cid AND `series_id`=$seriesData->series_id ORDER BY chaptername.id ASC ")->getResultArray();
                        //$themeList = $this->db->query("SELECT * FROM `mastar_series` WHERE `class_id`=$cid AND mastar_series.module_id=$moduleData->m_id   AND mastar_series.series_id  != $seriesData->series_id  ORDER BY mastar_series.series_num ASC ")->getResultArray();
                        $chapList = $this->db->query("SELECT * FROM `chaptername` WHERE id in(SELECT chapterTitle FROM `question` where `class`=$cid AND `module`=$moduleData->m_id AND series = $seriesData->series_id  AND `month`=$checkmonth ) ORDER BY chaptername.id ASC ")->getResultArray();
                        $themeList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id =question.series WHERE `class`=$cid AND `module`=$moduleData->m_id AND mastar_series.series_id  != $seriesData->series_id  AND `month`=$checkmonth  GROUP BY `series` ORDER BY mastar_series.series_num ASC ")->getResultArray();
                        $this->data['themeList'] = $themeList;
                        $this->data['chapData'] = $chapList;
                        echo view('publicview/series-list', $this->data);
                    } else {
                        echo view('publicview/error-404');
                    }
                }

            } else {
                echo view('publicview/error-404');
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    
    
    
    
    
    
  
    
 
    
    
    
    


    
    
    /*** OLD METHODS ***/
    

    public function Monthslist()
    {
        if (session('Loginredirecturl')) {
            $cyr = date('Y');
            $cid = session('voltAccountClass');
            $slug = $this->uri->getSegment(2);
            $SubjectData = $this->getModel->singledata('mastar_subject', ['slug' => $slug]);
            $gwtUserData = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $this->data['schoolData'] = $this->getModel->singledata('vt_school', ['id' => $gwtUserData->vc_school]);
            //print_r($this->data['schoolData']);
            //die();
            if ($SubjectData) {
                $sid = $SubjectData->sub_id;
                $this->data['sdata'] = $SubjectData;
                $monthList = $this->db->query(" SELECT * FROM `question` WHERE `class`=$cid AND `subject`=$sid AND `month`>0 AND `module`>0 GROUP BY `month` ORDER BY `month` ASC ")->getResultArray();
                if ($monthList) {
                    $this->data['listofmonth'] = $monthList;
                } else {
                    $this->data['listofmonth'] = '';
                    //return redirect()->to("subjects/" . $this->uri->getSegment(2));
                }
                echo view('publicview/month-list', $this->data);
            } else {
                echo view('publicview/error-404');
            }
        } else {
            return redirect()->to(base_url());
        }
    }
    
    

    public function Expired()
    {
        if (session('Loginredirecturl')) {
            $cyr = date('Y');
            $cid = session('voltAccountClass');
            echo view('publicview/expired-list', $this->data);
        } else {
            echo view('publicview/error-404');
        }
    }

    public function Temporarily()
    {
        if (session('Loginredirecturl')) {
            $cyr = date('Y');
            $cid = session('voltAccountClass');
            echo view('publicview/theme-temporarilyunavailable', $this->data);
        } else {
            return redirect()->to(base_url());
        }
    }

    public function Subjectlist1()
    {

        if (session('Loginredirecturl')) {
            $cid = session('voltAccountClass');
            $sid = session('voltAccountSubject');
            $moid = $this->uri->getSegment(2);
            $checkmonth = array_search(base64_decode($this->uri->getSegment(3)), session('finalTermsSession'));
            if ($checkmonth) {
                $ymdt = explode('-', base64_decode($this->uri->getSegment(3)));
                $mid = $checkmonth;
                $this->data['month'] = base64_decode($this->uri->getSegment(3));
                $moduleData = $this->getModel->singledata('master_module', ['slug' => $moid]);

                if (!empty($moduleData) && $moduleData->class_id == $cid) {
                    $this->data['moduleData'] = $moduleData;
                    // $themeList = $this->db->query("SELECT * FROM `mastar_series` WHERE `class_id`=$cid AND `module_id`=$moduleData->m_id ORDER BY mastar_series.series_num ASC ")->getResultArray();

                    //$themeList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id =question.series WHERE `class`=$cid AND `module`=$moduleData->m_id  AND `month`=$checkmonth  GROUP BY `series` ORDER BY mastar_series.series_num ASC ")->getResultArray();

                    $themeList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id =question.series WHERE `class`=$cid AND `module`=$moduleData->m_id  AND `month`=$checkmonth AND mastar_series.series_id !='' GROUP BY `series` ORDER BY mastar_series.series_num ASC ")->getResultArray();

                    $moduleList = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `module`>0  AND master_module.m_id != $moduleData->m_id GROUP BY `module` ORDER BY master_module.m_num ASC ")->getResultArray();

                    $this->data['bloglist'] = $this->db->query("SELECT * FROM  master_module WHERE `class_id`=$cid AND `subject_id`=$sid AND master_module.m_url <> '' AND master_module.m_url IS NOT NULL")->getResultArray();
                    $this->data['themeData'] = $themeList;
                    $this->data['moduleList'] = $moduleList;
                    echo view('publicview/subject-list-cat', $this->data);
                } else {
                    echo view('publicview/error-404');
                }
            } else {
                echo view('publicview/error-404');
            }
        } else {
            return redirect()->to(base_url());
        }

    }

   
    public function Topicscategorylist()
    {
        if (session('Loginredirecturl')) {
            $cid = session('voltAccountClass');
            $moid = $this->uri->getSegment(2);

            $checkmonth = array_search(base64_decode($this->uri->getSegment(3)), session('finalTermsSession'));
            $this->data['months'] = $checkmonth;
            if ($checkmonth) {
                $ymdt = explode('-', base64_decode($this->uri->getSegment(3)));
                $mid = $ymdt[1];
                $this->data['month'] = base64_decode($this->uri->getSegment(3));
                $chapData = $this->getModel->singledata('chaptername', ['id' => base64_decode($moid)]);
                if (!empty($chapData) && $chapData->class_id == $cid) {
                    $checkCats = API_connector(base_url("api/Gettopcategory?class=" . $cid . "&subject=" . $chapData->subject_id . "&series=" . $chapData->series_id . "&chapter=" . base64_decode($moid) . "&month=" . $checkmonth));

                    $this->data['class'] = $this->getModel->singledata('mastar_class', ['class_id' => $cid]);
                    $this->data['subject'] = $this->getModel->singledata('mastar_subject', ['sub_id' => $chapData->subject_id]);
                    $this->data['series'] = $this->getModel->singledata('mastar_series', ['series_id' => $chapData->series_id]);
                    $this->data['module'] = $this->getModel->singledata('master_module', ['m_id' => $chapData->module_id]);
                    $this->data['chapter'] = $this->getModel->singledata('chaptername', ['id' => $chapData->id]);

                    //$this->data['ChapterList'] = $this->db->query("SELECT * FROM `chaptername` WHERE `class_id`=$cid AND `series_id`=$chapData->series_id AND id != $chapData->id  ORDER BY chaptername.id ASC ")->getResultArray();
                    $this->data['ChapterList'] = $this->db->query("SELECT * FROM `chaptername` WHERE id in(SELECT chapterTitle FROM `question` where `class`=$cid AND `module`=$chapData->module_id AND series = $chapData->series_id  AND `month`=$checkmonth and chapterTitle != $chapData->id) ORDER BY chaptername.id ASC ")->getResultArray();
                    if ($checkCats->status == 1) {
                        $getCategories = $checkCats->catData;
                    } else {
                        $getCategories = [];
                    }
                    $this->data['allcategories'] = $getCategories;
                  
                    echo view('publicview/category-list', $this->data);

                } else {
                    echo view('publicview/error-404');
                }
            } else {
                echo view('publicview/error-404');
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    
    
    
    public function Typesofactivity()
    {
        $getActivityType = API_connector(base_url("api/getqdata/?setId=" . $this->request->getPost('topicid')));
        $http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $media_url = $http . "://vivavolt.vivadigitalindia.net/master/";
        $video_url = base_url('assets/video/videoplay.mp4');
        $listLi = '';
        if ($getActivityType && $getActivityType->status == 1) {
            if (in_array('vid', $getActivityType->type)) {
                $videolist = API_connector(base_url("api/getdecodeqns/?setId=" . $this->request->getPost('topicid') . "&type=vid"));
                if ($videolist->status == 1) {
                    $getvideo = $videolist->data;
                    $video_url = $media_url . $getvideo[0]->url;
                    $video_poster = $getvideo[0]->image;
                }
                $listLi .= "<li class='show1'><a data-video-url='" . $video_url . "' classid='" . $this->request->getPost('class') . "' class='playvideo'><img class='imgicon' src='" . base_url('assets/publicassets/activity/img/video.png') . "'/></a></li>";
            }

            if ($getActivityType->type) {
                //foreach ($getActivityType->type as $getList) {
                if (array_key_exists($getActivityType->type[0], $this->data['activitytypelist'])) {
                    $pageurl = '';
                    #$pageurl = '&subid='.$this->request->getPost('subid').'&catid='.$this->request->getPost('catid').'&sub='.$this->request->getPost('subject').'&cat='.$this->request->getPost('category');
                    if (in_array('mcq', $getActivityType->type)) {
                        $assesment_activity = anchor('assesment/' . $this->request->getPost('topicid') . '/' . $getActivityType->type[0] . '?c=' . $this->request->getPost('class') . $pageurl, '<img class="imgicon" src="' . base_url('assets/publicassets/activity/img/learn.png') . '" />');
                        $listLi .= "<li class='show2'>" . $assesment_activity . "</li>";
                    }
                    $practice_activity = anchor('practice/' . $this->request->getPost('topicid') . '/' . $getActivityType->type[0] . '?c=' . $this->request->getPost('class') . $pageurl, '<img class="imgicon" src="' . base_url('assets/publicassets/activity/img/plan.png') . '" />');
                    $listLi .= "<li class='show3'>" . $practice_activity . "</li>";
                }
                //}
            }
            echo $listLi;
        }
    }
    
    
    

    public function gen_report()
    {

        $userid = $this->getLogin->vc_id;

        $setId = explode('-', $this->request->getPost('setId'))[0];

        $getMain = $this->getModel->singledata('question', ['id' => $setId]);

        $starttime = $this->request->getPost('starttime');

        $endtime = date('Y-m-d H:i:s');

        $dteStart = new DateTime($starttime);

        $dteEnd = new DateTime($endtime);

        $totaltime = $dteStart->diff($dteEnd);

        $reportdata = array(

            'class' => $getMain->class,

            'subject' => $getMain->subject,

            'course' => $getMain->series,

            'topic' => $getMain->chapter,

            'start_time' => $starttime,

            'end_time' => $endtime,

            'total_time' => $totaltime->format("%H:%I:%S"),

            'userid' => $userid,
            'setId' => $setId,

            'act_type' => $this->request->getPost('type'),

            'total_attempt' => $this->request->getPost('total_qns'),

            'wrng_attempt' => $this->request->getPost('wrng_qns'),

            'right_attempt' => $this->request->getPost('right_qns'),

        );

        $this->getModel->dataremove('reports', ['class' => $getMain->class, 'subject' => $getMain->subject, 'course' => $getMain->series, 'topic' => $getMain->chapter, 'userid' => $userid, 'act_type' => $this->request->getPost('type'), 'setId' => $setId]);

        #print_r($reportdata);

        $this->getModel->datastorage('reports', $reportdata);

    }

    public function Userdashboard()
    {
        if(!$this->getLogin->vc_id){
            return redirect('/');
        }
        $reportAPI = API_connector(base_url("api/scorereport?uid=".$this->getLogin->vc_id));
        if ($reportAPI->status == 1) {
            $this->data['activity'] = $reportAPI->data;
        } else {
            $this->data['activity'] = "";
        }
        echo view('publicview/user-dashboard', $this->data);
    }

    public function Userprofile()
    {
        if(!$this->getLogin->vc_id){
            return redirect('/');
        }
        echo view('publicview/user-profile', $this->data);
    }

    public function Profileupdate()
    {

        if ($this->form_validation->run('userDetail')) {
            $updateData = [
                'vc_name' => $this->request->getPost('fullname'),
                'vc_lastname' => $this->request->getPost('lastname'),
                'vc_gender' => $this->request->getPost('gender'),
                'vc_class' => $this->request->getPost('classid'),
                'vc_subject' => $this->request->getPost('subjectid'),
                'vc_email' => $this->request->getPost('emailid'),
                'vc_contact' => $this->request->getPost('contactnumber'),
            ];
            if ($this->request->getPost('confirmpassword') != '') {
                $updateData['vc_password'] = md5($this->request->getPost('confirmpassword'));
                $updateData['vc_viewpass'] = encrypt_decrypt_pwd('encrypt', $this->request->getPost('confirmpassword'));
            }
            $updateUser = $this->getModel->dataupdate('vt_useraccount', ['vc_id' => $this->request->getPost('userid')], $updateData);
            if ($updateUser) {
                $getUser = $this->getModel->singledata('vt_useraccount', ['vc_id' => $this->request->getPost('userid')]);
                $getSub = $this->getModel->singledata('mastar_subject', ['sub_id' => $this->request->getPost('subjectid')]);
                if ($getUser) {
                    $userDetail = [
                        'token_id' => $getUser->vc_token,
                        'user_id' => $getUser->vc_id,
                        'full_name' => $getUser->vc_name,
                        'email_id' => $getUser->vc_email,
                        'contact_number' => $getUser->vc_contact,
                        'class_id' => $getUser->vc_class,
                        'subject_id' => $getUser->vc_subject,
                        'subject_name' => $getSub->sub_name,
                    ];
                    $json['userinfo'] = $userDetail;
                }
                $json['status'] = 1;
                $json['msg'] = 'Account Updated';
            } else {
                $json['status'] = 0;
                $json['msg'] = 'Something went wrong.';
            }
        } else {
            $json['status'] = 0;
            $json['msg'] = validation_errors();
        }
        echo json_encode($json);
    }

    public function Userreport()
    { 
        if(!$this->getLogin->vc_id){
            return redirect('/');
        }
        $reportAPI = API_connector(base_url("api/scorereport?uid=" . $this->getLogin->vc_id . "&rtype=all"));
        if ($reportAPI->status == 1) {
            $this->data['activity'] = $reportAPI->data;
        } else {
            $this->data['activity'] = "";
        }
        echo view('publicview/user-report', $this->data);
    }

    public function CheckUserAccount()
    {
        if (!$this->getLogin) {
           return redirect()->route('/');
            exit();
        }
    }

    public function Getout()
    {   
        if(!empty(session('voltAccountkey'))){
           // $this->session->remove(['voltAccountkey', 'Loginredirecturl', 'voltAccountUserName', 'voltAccountClass', 'voltAccountSubject', 'voltAccountToken']); 
            session_destroy();
        }
   
        return redirect()->to(base_url());
    }

    ////////////LOGIN SIGNUP API.....

    public function Registerapi()
    {

        header('Content-type: application/form-data');
        header('Content-type: application/json');

        $json = [];

        if ($this->input->method() == 'post') {

            if ($this->form_validation->run('apiRegistration')) {

                $token = date('siHYmds');
                $username = $this->usernamestr($this->request->getPost('fullname'));
                $random_udigit = mt_rand(1000, 9999);
                $userInfo = [
                    'vc_name' => $this->request->getPost('fullname'),
                    'vc_username' => $username . $random_udigit,
                    'vc_contact' => $this->request->getPost('contactnumber'),
                    'vc_email' => $this->request->getPost('emailid'),
                    'vc_password' => md5($this->request->getPost('confirmpassword')),
                    'vc_viewpass' => encrypt_decrypt_pwd('encrypt', $this->request->getPost('confirmpassword')),
                    'vc_class' => $this->request->getPost('classid'),
                    'vc_subject' => $this->request->getPost('subjectid'),
                    'vc_status' => 'Active',
                    'vc_created_date' => date('Y-m-d H:i:s'),
                    'vc_device' => $this->request->getPost('devicetype'),
                    'vc_token' => $token,
                ];

                $storeUser = $this->getModel->datastorage('vt_useraccount', $userInfo);

                if ($storeUser) {

                    $getUser = $this->getModel->singledata('vt_useraccount', ['vc_status' => 'Active', 'vc_email' => $this->request->getPost('emailid'), 'vc_password' => md5($this->request->getPost('confirmpassword'))]);

                    $userDetail = [

                        'token_id' => $token,
                        'user_id' => $getUser->vc_id,
                        'full_name' => $getUser->vc_name,
                        'email_id' => $getUser->vc_email,
                        'contact_number' => $getUser->vc_contact,
                        'class_id' => $getUser->vc_class,
                        'subject_id' => $getUser->vc_subject,
                    ];

                    $json['userinfo'] = $userDetail;
                    $json['status'] = 1;
                    $json['msg'] = "Account has been created.";

                } else {

                    $json['status'] = 0;
                    $json['msg'] = "Something went wrong. Try Again!";

                }

            } else {

                $json['status'] = 0;

                $json['msg'] = strip_tags(validation_errors());

            }

        } else {

            $json['status'] = 0;

            $json['msg'] = "Data not in valid method.";

        }

        echo json_encode($json);

    }

    public function Loginapi()
    {

        header('Content-type: application/form-data');
        header('Content-type: application/json');
        $json = [];

        if ($this->input->method() == 'post') {

            if ($this->form_validation->run('apiloginAccount')) {

                $getUser = $this->getModel->singledata('vt_useraccount', ['vc_status' => 'Active', 'vc_email' => $this->request->getPost('accountid'), 'vc_password' => md5($this->request->getPost('accountpassword'))]);

                if ($getUser) {

                    $token = date('siHYmd') . $getUser->vc_id;
                    $this->getModel->dataupdate('vt_useraccount', ['vc_id' => $getUser->vc_id, 'vc_email' => $this->request->getPost('accountid')], ['vc_token' => $token, 'vc_device' => $this->request->getPost('devicetype')]);

                    $json['status'] = 1;
                    $json['msg'] = "Account verified.";

                    $userDetail = [
                        'token_id' => $token,
                        'user_id' => $getUser->vc_id,
                        'full_name' => $getUser->vc_name,
                        'email_id' => $getUser->vc_email,
                        'contact_number' => $getUser->vc_contact,
                        'class_id' => $getUser->vc_class,
                        'subject_id' => $getUser->vc_subject,
                    ];
                    $json['userinfo'] = $userDetail;
                } else {

                    $json['status'] = 0;
                    $json['msg'] = "Username or Password is wrong.";

                }

            } else {

                $json['status'] = 0;
                $json['msg'] = strip_tags(validation_errors());

            }

        } else {

            $json['status'] = 0;
            $json['msg'] = "Data not in valid method.";

        }

        echo json_encode($json);

    }

    public function Otploginapi()
    {

        header('Content-type: application/form-data');

        header('Content-type: application/json');

        $json = [];

        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('contactnumber', 'Number', 'required|trim|exact_length[10]|numeric');

            $this->form_validation->set_rules('devicetype', 'Device Type', 'required|trim');

            if ($this->form_validation->run()) {

                $numberis = $this->request->getPost('contactnumber');

                $device = $this->request->getPost('devicetype');

                //OTP SENDER

                $otpis = rand(1000, 9999);

                $mobile = $numberis;

                $msg = "Thank you for registering with us. Your volt otp is : $otpis ";

                $authKey = '278946Ah5kJCIhR5e566304P1';

                $senderId = 'VIVAED';

                $MsgUrl = "https://api.msg91.com/api/sendhttp.php?mobiles=" . $mobile . "&authkey=" . $authKey . "&route=4&sender=" . $senderId . "&message=" . $msg . "&country=91";

                $curl = curl_init();

                curl_setopt_array($curl, array(

                    CURLOPT_URL => $MsgUrl,

                    CURLOPT_RETURNTRANSFER => true,

                    CURLOPT_ENCODING => "",

                    CURLOPT_MAXREDIRS => 10,

                    CURLOPT_TIMEOUT => 30,

                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

                    CURLOPT_CUSTOMREQUEST => "GET",

                    CURLOPT_SSL_VERIFYHOST => 0,

                    CURLOPT_SSL_VERIFYPEER => 0,

                ));

                $response = curl_exec($curl);

                $err = curl_error($curl);

                curl_close($curl);

                //OTP

                $getUser = $this->getModel->singledata('vt_useraccount', ['vc_contact' => $numberis]);

                if ($getUser) {

                    $token = date('siHYmd') . $getUser->vc_id;

                    $this->getModel->dataupdate('vt_useraccount', ['vc_contact' => $numberis], ['vc_token' => $token, 'vc_device' => $device, 'vc_otp' => $otpis]);

                    $getSub = $this->getModel->singledata('mastar_subject', ['sub_id' => $getUser->vc_subject]);

                    $json['status'] = 1;

                    $json['msg'] = "Account verified.";

                    $json['otpis'] = $otpis;

                    $userDetail = [
                        'token_id' => $token,
                        'user_id' => $getUser->vc_id,
                        'full_name' => $getUser->vc_name,
                        'email_id' => $getUser->vc_email,
                        'contact_number' => $getUser->vc_contact,
                        'class_id' => $getUser->vc_class,
                        'subject_id' => $getUser->vc_subject,
                        'subject_name' => $getSub->sub_name,
                    ];

                    $json['userinfo'] = $userDetail;

                } else {

                    $userInfo = [
                        'vc_contact' => $this->request->getPost('contactnumber'),
                        'vc_otp' => $otpis,
                        'vc_status' => 'Inactive',
                        'vc_created_date' => date('Y-m-d H:i:s'),
                        'vc_device' => $this->request->getPost('devicetype'),
                    ];

                    $this->getModel->datastorage('vt_useraccount', $userInfo);
                    $json['status'] = 2;
                    $json['msg'] = "Account Created.";
                    $json['otpis'] = $otpis;
                    $json['userinfo'] = '';
                }

            } else {
                $json['status'] = 0;
                $json['msg'] = strip_tags(validation_errors());
            }

        } else {
            $json['status'] = 0;
            $json['msg'] = "Data not in valid method.";
        }
        echo json_encode($json);

    }

    public function Completeaccount()
    {
        $token = date('siHYmd');
        $updateData = [
            'vc_name' => $this->request->getPost('fullname'),
            'vc_email' => $this->request->getPost('emailid'),
            'vc_class' => $this->request->getPost('classid'),
            'vc_subject' => $this->request->getPost('subjectid'),
            'vc_token' => $token,
        ];

        $updateUser = $this->getModel->dataupdate('vt_useraccount', ['vc_contact' => $this->request->getPost('contactnumber'), 'vc_otp' => $this->request->getPost('otpis')], $updateData);

        if ($updateUser) {
            $getUser = $this->getModel->singledata('vt_useraccount', ['vc_contact' => $this->request->getPost('contactnumber')]);
            if ($getUser) {

                $userDetail = [
                    'token_id' => $getUser->vc_token,
                    'user_id' => $getUser->vc_id,
                    'full_name' => $getUser->vc_name,
                    'email_id' => $getUser->vc_email,
                    'contact_number' => $getUser->vc_contact,
                    'class_id' => $getUser->vc_class,
                    'subject_id' => $getUser->vc_subject,
                ];

                $json['status'] = 1;
                $json['msg'] = 'Account Updated';
                $json['userinfo'] = $userDetail;
            } else {
                $json['status'] = 0;
                $json['msg'] = 'Data not found';
            }

        } else {

            $json['status'] = 0;

            $json['msg'] = 'Something went wrong.';

        }

        echo json_encode($json);

    }

    public function Userscorereport()
    {
        error_reporting(0);
        header('Content-type: application/form-data');
        header('Content-type: application/json');
        $json = array();
        $json['status'] = 0;
        $json['msg'] = "Data not found";
        $uid = ($this->request->getPostGet('uid'))?trim($this->request->getPostGet('uid')):0;
        $rtype = ($this->request->getPostGet('rtype'))?trim($this->request->getPostGet('rtype')):'';
        if ($rtype !="" && $rtype == 'all') {
            
            $reportis = $this->db->query("SELECT `id`,`topic`,`act_type`,SUM(`total_attempt`) AS `total_attempt`,SUM(`wrng_attempt`) AS `wrng_attempt`,SUM(`right_attempt`) AS `right_attempt`,`total_time`,`userid`, `s`.`sub_name` AS `subject`, `c`.`class_name` AS `class`, `sr`.`series_name` AS `course` FROM `reports` JOIN `mastar_subject` AS `s` ON `s`.`sub_id`=`subject` JOIN `mastar_class` AS `c` ON `c`.`class_id`=`class` JOIN `mastar_series` AS `sr` ON `sr`.`series_id`=`course` WHERE `userid`=$uid ")->getResult();

        } else {
            $reportis = $this->db->query("SELECT SUM(`total_attempt`) AS `allattempt`, SUM(`wrng_attempt`) AS `wrongattempt`, SUM(`right_attempt`) AS `rightattempt`, SUM(`total_time`) AS `spendtime` FROM `reports` WHERE `userid`=$uid ")->getRow();
        }

        if ($reportis) {
            $json['status'] = 1;
            $json['msg'] = "List of report";
            $json['data'] = $reportis;
        }
        echo json_encode($json);
    }

    public function Accessadmin()
    {

        if (session('voltAdminKey') != '') {
            return redirect()->to('dashboard');
        }

        echo view('publicview/adminlogin');

    }

    public function Checkadmin()
    {
        if ($this->form_validation->run('loginAccount')) {
            $checkAdmin = $this->getModel->singledata('vt_adminaccount', ['vc_status' => 'Active', 'vc_email' => $this->request->getPost('accountid'), 'vc_password' => md5($this->request->getPost('accountpassword'))]);
            if ($checkAdmin) {
                $this->session->set('voltAdminKey', $this->request->getPost('accountid'));
                echo 'verified';
            } else {
                echo "Username or Password is wrong.";
            }
        } else {
            echo validation_errors();
        }
    }

    // New Activity Design
    
    
      public function newactivity()
    {
        
        if(!$this->getLogin->vc_id){
            return redirect('/');
        }
        //error_reporting(0);
        $qtdata = array();
        $currentUrl = explode("~", $this->request->getGetPost('c'));
        if (!empty($currentUrl)) {
            $qtdata['clid'] = @explode('clsis', $currentUrl[0])[1];
            $qtdata['suid'] = @explode('subis', $currentUrl[1])[1];
            $qtdata['seid'] = @explode('seris', $currentUrl[2])[1];
            $qtdata['chid'] = @explode('topsis', $currentUrl[3])[1];
            $qtdata['acid'] = @explode('activity', $currentUrl[4])[1];
            // check array value in get params
            $qSetArr = array_keys($qtdata);
            $qFilter = array_keys(array_filter($qtdata));
            $result_page = array_diff($qSetArr, $qFilter); 
        } else {
            return redirect()->to(base_url());
            exit();
        }
        $qtdata['backurl'] = $this->request->getGetPost('c');
        //$qtdata['time'] = array_search(base64_decode($currentUrl[5]), session('finalTermsSession'));
        //$qtdata['month'] = $currentUrl[5];
        $qtdata['chapter'] = $this->getModel->singledata('chaptername', ['id' => $qtdata['chid']]);
        $qtdata['class'] = $this->getModel->singledata('mastar_class', ['class_id' => $qtdata['clid']]);
        $qtdata['subject'] = $this->getModel->singledata('mastar_subject', ['sub_id' => $qtdata['suid']]);
        $qtdata['series'] = $this->getModel->singledata('mastar_series', ['series_id' => $qtdata['seid']]);
     
         $qtdata['module'] = $this->getModel->singledata('master_module', ['m_id' => $qtdata['series']->module_id]);

        $qtdata['catactivity'] = $this->getModel->singledata('category_type', ['cat_id' => $qtdata['acid']]);
        $checkCats = API_connector(base_url("api/Gettopcategory?class=" . $qtdata['clid'] . "&subject=" . $qtdata['suid'] . "&series=" . $qtdata['seid'] . "&chapter=" . $qtdata['chid']));
        $qtdata['qns_data_tnf'] = $qtdata['qns_data_mcq'] = $qtdata['qns_data_mch'] = $qtdata['qns_data_fib'] = $qtdata['qns_data_parichay'] = $qtdata['Download_and_Practise'] = $qtdata['qns_data_typing'] = $qtdata['qns_data_infographics'] = $qtdata['qns_data_ImgAns'] = array();
        $setId = $this->uri->getSegment(2);
        $qType = $this->uri->getSegment(3);
        $qlist = API_connector(base_url("api/getdecodeqns?setId=" . $setId . "&type=" . $qType));

        $qtypelist = API_connector(base_url("api/getqdata?setId=" . $setId));
        if ($qlist->status == 1) {
            $getQns = $qlist->data;
            $getQnsArray = json_decode(json_encode($qlist->data), true);
        } else {
            $getQns = [];
            $getQnsArray = [];
        }
        if ($qType == 'tnf') {
            //True & False qns data
            $qtdata['qns_data_tnf'] = $getQnsArray;
        } elseif ($qType == 'mcq') {
            //Multiple Choice qns data
            $qtdata['qns_data_mcq'] = $getQnsArray;
        } elseif ($qType == 'mch') {
            //Matching qns data
            $qtdata['qns_data_mch'] = $getQnsArray;
        } elseif ($qType == 'fib') {
            //Fill in the blank qns data
            $qtdata['qns_data_fib'] = $getQnsArray;
        } elseif ($qType == 'imgtext') {
            //Infographics
            $qtdata['qns_data_infographics'] = $getQnsArray;
        } elseif ($qType == 'notes') {
            //Infographics
            $qtdata['qns_data_infographics'] = $getQnsArray;
        } elseif ($qType == 'parichay') {
            //infographics qns data
            $qtdata['qns_data_infographics'] = $getQnsArray;
        } elseif ($qType == 'ebookUpload') {
            //Ebook data
            $qtdata['qns_data_ebook'] = $getQnsArray;
        } elseif ($qType == 'canvas') {
            //canvas data
            $qtdata['qns_data_canvas'] = $getQnsArray;
        } elseif ($qType == 'audioUpload') {
            //audio data
            $qtdata['qns_data_audio'] = $getQnsArray;
        } elseif ($qType == 'mmg') {
            //canvas data
            $qtdata['qns_data_mmg'] = $getQnsArray;
        } elseif ($qType == 'wordsearch') {
            //wordsearch data
            //print_r($getQnsArray); exit;
            $qtdata['qns_data_wordsearch'] = $getQnsArray;
        } elseif ($qType == 'crossword') {
            //crossword data
            $qtdata['qns_data_crossword'] = $getQnsArray;
        } elseif ($qType == 'dragimg') {
            //crossword data
            $qtdata['qns_data_dragimg'] = $getQnsArray;
        } elseif ($qType == 'orderword') {
            $qtdata['qns_data_orderword'] = $getQnsArray;
        } elseif ($qType == 'sudoku') {
            //sudoku data
            $qtdata['qns_data_sudoku'] = $getQnsArray;
        } elseif ($qType == 'picpuzzle') {
            //sudoku data
            $qtdata['qns_data_pic_puzzle'] = $getQnsArray;
        } elseif ($qType == 'vid') {
            //sudoku data
            $qtdata['qns_data_vid'] = $getQnsArray;
        }
        $type_list = API_connector(base_url("api/getqdata?setId=" . $setId));
        if ($type_list->status == 1) {
            $act_values = $type_list->type;
        } else {
            $act_values = [];
        }
        $topic_data = API_connector(base_url("api/gettopic?setId=" . $setId));
        if ($topic_data->status == 1) {
            $topic_name = $topic_data->data->chapT_name;
        } else {
            $topic_name = 'Topic';
        }
        $qtdata['allqns'] = $getQns;
        $qtdata['act_value'] = array_values(array_intersect($this->data['type_Array'], $act_values));
        $qtdata['Type_Array'] = $this->data['type_Array'];
        $qtdata['curr_type'] = $qType;
        $qtdata['ass_curr_type'] = $qtypelist->type[0];
        $qtdata['set_Ids'] = $setId;
        $qtdata['Type_Value'] = $this->data['activitytypelist'];
        $qtdata['cat_data_type_label'] = $this->data['activitytypelist'];
        $qtdata['topic_name'] = $topic_name;
        if (@$checkCats->status == 1) {
            $getCategories = $checkCats->catData;
        } else {
            $getCategories = [];
        }
        $qtdata['allcategories'] = $getCategories;
        //print_r($result_page); die;
        $checkAudio = count($this->db->query("select * from list where set_id=$setId and audio_id >0")->getResultArray());
        if ($qtdata['seid'] == "" and empty($qtdata['series']) and ($checkAudio > 0 or $qType == 'imgtext') and ($qType == 'tnf' or $qType == 'mcq' or $qType == 'mch' or $qType == 'fib' or $qType == 'imgtext')) {
            $result_page = array_diff($result_page, array('seid'));
            if (!empty($result_page)) {
                echo view('publicview/error-404');
            } else {
                echo view('publicview/header', $this->data);
                echo view('publicview/intractive/newactivity-listen', $qtdata);
                echo view('publicview/footer', $this->data);
            }
        } else {
            $result_page = array_diff($result_page, array('seid'));
            if (!empty($result_page)) {
                echo view('publicview/error-404');
            } else {
                echo view('publicview/header', $this->data);
                echo view('publicview/intractive/newactivity', $qtdata);
                echo view('publicview/footer', $this->data);
            }
        }

    }
    
    


    // Play Game

    public function playgame()
    {
        $gamedata = array();
        $setId = $this->uri->getSegment(2);
        $qType = $this->uri->getSegment(3);
        $gatGameJson = API_connector(base_url("api/getGamedata/?setId=" . $setId . "&type=" . $qType));
        if ($gatGameJson->status == 0) {
            $gamedata['gameData'] = json_decode(json_encode($gatGameJson), true);
        } else {
            $gamedata['gameData'] = [];
        }
        echo view('publicview/playgame', $gamedata);
    }

    public function listen()
    {
        $qtdata['audpageurl'] = $this->uri->getSegment(3) . '?c=' . $this->request->getGet('c');
        $setId = $this->uri->getSegment(2);
        #print_r($currentUrl); die;
        $qlist = API_connector(base_url("api/getdecodeqns/?setId=" . $setId . "&type=audioUpload"));
        if ($qlist->status == 1) {
            $getQnsArray = json_decode(json_encode($qlist->data), true);
        } else {
            $getQnsArray = [];
        }
        $qtdata['qns_data_audio'] = $getQnsArray;
        echo view('publicview/header', $this->data);
        echo view('publicview/listening', $qtdata);
        echo view('publicview/footer', $this->data);
    }

    public function Voltpackage()
    {
        echo view('publicview/package');
    }

    public function Privacypolicy()
    {
        echo view('publicview/privacypolicy');
    }

    public function Termsofservice()
    {
        echo view('publicview/termsofservice');
    }

    public function Refundpolicy()
    {
        echo view('publicview/refundpolicy');
    }

    public function Aboutus()
    {
        echo view('publicview/aboutus');
    }
    public function Contactus()
    {
        echo view('publicview/contactus');
    }

    public function usernamestr($strname)
    {
        $uname = explode(' ', trim($strname));
        if (count($uname) >= 1) {
            return strtolower($uname[0] . $uname[1]);
        } else {
            return strtolower($uname[0]);
        }
    }

    public function UserRedirect()
    {
        if (!empty(session('Loginredirecturl'))) {
            return redirect()->to(base_url(session('Loginredirecturl')));
        } else {
            return redirect()->to(base_url("account"));
        }
    }

    // Generate token
    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet);
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[rand(0, $max - 1)];
        }
        return $token;
    }

    public function valid_password($password = '')
    {
        $password = trim($password);
        $regex_lowercase = '/[a-z]/';
        $regex_uppercase = '/[A-Z]/';
        $regex_number = '/[0-9]/';
        $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
        if (empty($password)) {
            #$this->form_validation->set_message('valid_password', 'The {field} field is required.');
            return true;
        }
        if (preg_match_all($regex_lowercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
            return false;
        }
        if (preg_match_all($regex_uppercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
            return false;
        }
        if (preg_match_all($regex_number, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
            return false;
        }
        if (preg_match_all($regex_special, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
            return false;
        }
        if (strlen($password) > 32) {
            $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
            return false;
        }
        return true;
    }

    // Notification Area
    public function UserNotification()
    {
        $this->load->library("pagination");
        $schoolId = $this->getLogin->vc_school;
        $ucreated_date = $this->getLogin->vc_created_date;

        $classId = $this->getLogin->vc_class;
        $totalnotify = $this->db->query("SELECT * FROM `notify_push` WHERE level = 'all'  AND DATE_FORMAT(created_on,'%Y-%m-%d %h:%m:%s') > '" . $ucreated_date . "' or school = $schoolId  AND (class=0 or class=$classId) ORDER BY id DESC")->result();
        $config = array();
        $config["base_url"] = base_url() . "user-notification";
        $config["total_rows"] = count($totalnotify);
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        /* BootStrap 3 Pagination style */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->getSegment(2)) ? $this->uri->getSegment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $getNotification = $this->db->query("SELECT * FROM `notify_push` WHERE level = 'all'  AND DATE_FORMAT(created_on,'%Y-%m-%d %h:%m:%s') > '" . $ucreated_date . "' or school = $schoolId  AND (class=0 or class=$classId) ORDER BY id DESC limit " . $page . ',' . $config["per_page"])->result();
        $data['getNotification'] = $getNotification;
        echo view('publicview/notify-list', $data);
    }

    public function fetch_notification()
    {
        $view = $_REQUEST['view'];
        if (isset($view)) {
            $output = '';
            $mark_read = '';
            $schoolId = $this->getLogin->vc_school;
            $classId = $this->getLogin->vc_class;
            $ucreated_date = $this->getLogin->vc_created_date;
            $getNotification = $this->db->query("SELECT * FROM `notify_push` WHERE level = 'all'  AND DATE_FORMAT(created_on,'%Y-%m-%d %h:%m:%s') > '" . $ucreated_date . "' or school = $schoolId  AND (class=0 or class=$classId) ORDER BY id DESC limit 0,10")->result();

            if (!empty($getNotification)) {
                foreach ($getNotification as $nData) {
                    $notifyLogs = $this->getModel->singledata('notify_logs', ['userid' => $this->getLogin->vc_id, 'pushid' => $nData->id, 'view' => '1']);
                    if (!empty($notifyLogs)) {$mark_read = "list-group-item-light";} else { $mark_read = "list-group-item-info";}
                    $output .= "<li class='list-group-item " . $mark_read . "' id='" . $nData->id . "'><a href='javascript:void(0);' onclick='gotourl(" . $nData->id . ");' id=" . $nData->notifyid . "><h4 style='font-size: 15px;'>" . $nData->notify_title . " <span class='label label-primary' style='float: right;'>" . date('d M Y', strtotime($nData->created_on)) . "</span></h4><span>" . substr($nData->notify_desc, 0, 512) . "</span></a></li>";
                }
                $output .= '<li class="list-group-item text-center"><a href="' . base_url('user-notification') . '">View all</a></li>';
            } else {
                $output .= '<li class="list-group-item"><a href="#" class="text-italic">No Notification Found</a></li>';
            }
            $status_query = $getNotification;
            $count = count($status_query);
            $userLogs = $this->getModel->datalisting('notify_logs', ['view' => '1', 'userid' => $this->getLogin->vc_id]);
            $userreadcount = @count($userLogs);
            if ($userreadcount > 0) {$count = count($status_query) - $userreadcount;}
            $data = array(
                'notification' => $output,
                'unseen_notification' => $count,
            );
            echo json_encode($data);
        }
    }

    public function update_notification()
    {
        $view = $_REQUEST['view'];
        $oldcount = $_REQUEST['count'];
        $uId = $this->getLogin->vc_id;
        $notifyPush = $this->getModel->singledata('notify_push', ['id' => $view]);
        $notify = $this->getModel->singledata('notify', ['id' => $notifyPush->notifyid]);
        $notifyLogs = $this->getModel->singledata('notify_logs', ['userid' => $uId, 'pushid' => $view, 'view' => '1']);
        if (empty($notifyLogs)) {
            $this->getModel->datastorage('notify_logs', ['userid' => $uId, 'pushid' => $view, 'view' => '1']);
        }
        $data = array(
            'redirect' => ($notify->link) ? $notify->link : base_url('user-notification'), 'unseen_notification' => $oldcount);
        echo json_encode($data);
    }

    public function update_all_notification()
    {
        $view = $_REQUEST['view'];
        $uId = $this->getLogin->vc_id;
        if (!empty($view)) {
            $nIds = explode('-', $view);
            foreach ($nIds as $nid) {
                $notifyLogs = $this->getModel->singledata('notify_logs', ['userid' => $uId, 'pushid' => $nid, 'view' => '1']);
                if (empty($notifyLogs)) {
                    $this->getModel->datastorage('notify_logs', ['userid' => $uId, 'pushid' => $nid, 'view' => '1']);
                }
            }
        }
        $data = array('redirect' => base_url('user-notification'));
        echo json_encode($data);
    }

    // registration function


}


