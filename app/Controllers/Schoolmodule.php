<?php namespace App\Controllers;

use App\Models\SchoolModel;

class Schoolmodule extends BaseController
{
    public function __construct()
    {
        $this->uri = service('uri');
        $this->request = service('request');
        $this->getModel = new SchoolModel($this->db);
        $getLogin = '';
        $data = [];
        if (session('voltAccountkey') != '') {

            $getuIdbytoken = $this->getModel->singledata('vt_user_token', ['token' => session('voltAccountToken')]);
            $userId = ($getuIdbytoken) ? $getuIdbytoken->userid : 0;
            $this->getLogin = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountkey'), 'vc_id' => $userId]);
            if (empty($this->getLogin)) {
                session_destroy();
            }
        } else {
            $this->getLogin = '';
        }
        $this->getLogin = $this->getLogin;
        $this->data['getLogin'] = $this->getLogin;
        $this->data['modelData'] = $this->getModel;
        $this->data['uri'] = $this->uri;
        $this->data['request'] = $this->request;
        date_default_timezone_set("Asia/Kolkata");

    }
//school functions
//school functions

    public function index()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $teacherlist = $this->getModel->datalisting('vt_useraccount', ['vc_usertype' => "teacher", 'vc_school' => $profile->vc_school]);

            if ($teacherlist) {
                $this->data['teacherlist'] = $teacherlist;
            }

            $tcount = $this->getModel->resultcount('vt_useraccount', ['vc_usertype' => "teacher", 'vc_school' => $profile->vc_school]);
            if ($tcount) {
                $this->data['tcount'] = $tcount;
            }
            $studentlist = $this->getModel->datalisting('vt_useraccount', ['vc_usertype' => "student", 'vc_school' => $profile->vc_school]);

            if ($studentlist) {
                $this->data['studentlist'] = $studentlist;
            }
            $scount = $this->getModel->resultcount('vt_useraccount', ['vc_usertype' => "student", 'vc_school' => $profile->vc_school]);

            if ($scount) {
                $this->data['scount'] = $scount;
            }

            echo view('school/school_sidebar');
            echo view('school/index', $this->data);
            echo view('school/footer');
            
        } else {
            return redirect()->to(base_url());
        }

    }

    public function teacherlist()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            
            $teacherlist = $this->getModel->datalisting('vt_useraccount', ['vc_usertype' => "teacher", 'vc_school' => $profile->vc_school]);
            if ($teacherlist) {
                $this->data['teacherlist'] = $teacherlist;
            }

            echo view('school/school_sidebar');
            echo view('school/user_list_teacher', $this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }
    public function studentlist()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $studentlist = $this->getModel->datalisting('vt_useraccount', ['vc_usertype' => "student", 'vc_school' => $profile->vc_school]);

           
            if ($studentlist) {
                $this->data['studentlist'] = $studentlist;
            }
            
            echo view('school/school_sidebar');
            echo view('school/user_list_student', $this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }
    public function adminlist()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $adminlist = $this->getModel->datalisting('vt_useraccount', ['vc_usertype' => "admin", 'vc_school' => $profile->vc_school]);
            
            if ($adminlist) {
                $this->data['adminlist'] = $adminlist;
            }

            echo view('school/school_sidebar');
            echo view('school/user_list_admin', $this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }
    public function classlist()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {

            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $period = $this->getModel->datalisting('period', ['school_id' => $profile->vc_school]);

            if ($period) {
                $this->data['period'] = $period;
            }

            echo view('school/school_sidebar');
            echo view('school/class_list', $this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }

    public function instituteinfo()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {

            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $schoolInfo = $this->getModel->singledata('vt_school', ['id' => $profile->vc_school]);
            $studentcount = $this->getModel->resultcount('vt_useraccount', ['vc_usertype' => "student", 'vc_school' => $profile->vc_school]);
            $packageInfo = $this->getModel->datalisting(' vt_premium_package_order', ['vc_user' => $profile->vc_id]);
            if ($packageInfo) {
                $this->data['packageInfo'] = $packageInfo;
            }

            if ($schoolInfo) {
                $this->data['schoolInfo'] = $schoolInfo;
            }

            if ($studentcount) {
                $this->data['studentcount'] = $studentcount;
            }
            echo view('school/school_sidebar');
            echo view('school/institution_info', $this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }


    public function addclass()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $teacherlist = $this->getModel->datalisting('vt_useraccount', ['vc_usertype' => "teacher", 'vc_school' => $profile->vc_school]);
            if ($teacherlist) {
                $this->data['teacherlist'] = $teacherlist;
            }
            echo view('school/school_sidebar');
            echo view('school/add_class',$this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }

    public function addstudent()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
            echo view('school/school_sidebar');
            echo view('school/add_student');
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }
    public function addteacher()
    {

        if (session('voltAccountUserName') && (session('voltAccountType')=="admin" || session('voltAccountType')=="teacher")) {
            echo view('school/school_sidebar');
            echo view('school/add_teacher');
            echo view('school/footer');

        } else {
            return redirect()->to(base_url());
        }
    }

    public function addadmin()
    {

        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
            echo view('school/school_sidebar');
            echo view('school/add_admin');
            echo view('school/footer');

        } else {
            return redirect()->to(base_url());
        }
    }

     public function addnewuser()
    {
        if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $admincount=$this->getModel->resultcount('vt_useraccount', ['vc_usertype' => "admin",'vc_school'=>$profile->vc_school]);
            $number = 0000;
            $alpha = 'a';
            $querylastuser = $this->db->query('SELECT vc_username FROM vt_useraccount ORDER BY vc_id DESC LIMIT 1');
            $getlastuser = $querylastuser->getResult();

            if (!empty($getlastuser[0]->vc_username)) {
                $snum = (int) ltrim($getlastuser[0]->vc_username, $alpha);

                if ($snum == 9999) {
                    $alpha++;
                    $snum = 0000;
                }
                $nDigit = str_pad($snum + 1, 4, 0, STR_PAD_LEFT);

            } else {
                $nDigit = str_pad($number + 1, 4, 0, STR_PAD_LEFT);
            }
            $addUdata = [
                'vc_name' => $this->request->getPost('fname'),
                'vc_lastname' => $this->request->getPost('lname'),
                'vc_gender' => $this->request->getPost('gender'),
                'vc_dob' => $this->request->getPost('dob'),
                'vc_username' => $alpha . $nDigit,
                'vc_contact' => $this->request->getPost('mobile'),
                'vc_state' => $this->request->getPost('state'),
                'vc_school' => $profile->vc_school,
                'vc_email' => $this->request->getPost('email'),
                'vc_usertype' => $this->request->getPost('accounttype'),
                'vc_paymentinfo' => 1,
                'vc_status' => 'Active',
                'vc_created_date' => date('Y-m-d H:i:s'),
            ];

        //if ($this->input->post('confirmpassword') != '') {
            $addUdata['vc_password'] = md5($this->request->getPost('password'));
            $addUdata['vc_viewpass'] = encrypt_decrypt_pwd('encrypt', $this->request->getPost('password'));
        //}
            $edata['userdata'] = $addUdata;
        #$added='Verified';
            if ($this->request->getPost('accounttype') == "admin") {
                if($admincount<2)
                {
                    $added = $this->getModel->datastorage('vt_useraccount', $addUdata);
                    echo ($added) ? 'Verified' : 'Something went wrong.';
                }
            }
            else
            {
                $added = $this->getModel->datastorage('vt_useraccount', $addUdata); 
                echo ($added) ? 'Verified' : 'Something went wrong.';   
            }

            if ($this->request->getPost('accounttype') == "teacher") {
                return redirect()->to(base_url('/school/teacher/list'));
            } else if ($this->request->getPost('accounttype') == "student") {
            return redirect()->to(base_url('/school/student/list')); # code...
        }else if ($this->request->getPost('accounttype') == "admin") {
            return redirect()->to(base_url('/school/admin/list')); 
        }
        else
        {
            return redirect()->to(base_url());
        }
    }
    else {
        return redirect()->to(base_url('/school'));
    }
}
public function addnewclass()
{
    if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
        $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
        $addPdata = [
            'user_id' => $this->request->getPost('user_id'),
            'school_id' => $profile->vc_school,
            'class' => $this->request->getPost('class'),
            'section' => 'A',
            'subject_id' => $this->request->getPost('subject'),
            'timing' => $this->request->getPost('timing'),
        ];

        $added = $this->getModel->datastorage('period', $addPdata);
        echo ($added) ? 'Verified' : 'Something went wrong.';
        return redirect()->to(base_url('/school/class/info'));

    }
    else
    {
     return redirect()->to(base_url());
 }
}



//teacher functions

    public function teacher_index()
    {

        if (session('voltAccountUserName') && (session('voltAccountType')=="admin" || session('voltAccountType')=="teacher")) {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $ccount = $this->getModel->resultcount('period', ['user_id' => $profile->vc_id]);
            $period = $this->getModel->datalisting('period', ['user_id' => $profile->vc_id]);


            if (!empty($period)) {

                $studentlistarray = array();

                foreach ($period as $key) {
                    $studentlist = $this->getModel->datalisting('vt_useraccount', ['vc_usertype' => "student", 'vc_school' => $profile->vc_school, 'vc_class' => $key->class, 'vc_sectionclass' => $key->section, 'vc_subject' => $key->subject_id]);
                    array_push($studentlistarray, $studentlist);

                }
            

            if ($ccount) {
                $this->data['ccount'] = $ccount;
            }
            if ($studentlistarray) {
                $this->data['studentlistarray'] = $studentlistarray;
            }
            $assignmentcount = $this->getModel->resultcount('assignment', ['user_id' => $profile->vc_id]);
            if ($assignmentcount) {
                $this->data['assignmentcount'] = $assignmentcount;
                    # code...
            }
            $assignment = $this->getModel->datalisting('assignment', ['user_id' => $profile->vc_id]);
            if ($assignment) {
                $this->data['assignment'] = $assignment;
            }

        }

            echo view('school/teacher_sidebar');
            echo view('school/teacher_index', $this->data);
            echo view('school/footer');
    }

        else {
            return redirect()->to(base_url());
        }
    }

    public function teacher_profile()
    {

        if (session('voltAccountUserName') && (session('voltAccountType')=="admin" || session('voltAccountType')=="teacher")) {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);

            if ($profile) {
                $this->data['profile'] = $profile;
            }
            $packageInfo = $this->getModel->datalisting(' vt_premium_package_order', ['vc_user' => $profile->vc_id]);
            if ($packageInfo) {
                $this->data['packageInfo'] = $packageInfo;
            }

            echo view('school/teacher_sidebar');
            echo view('school/teacher_profile', $this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }

    public function teacherclasslist()
    {

        if (session('voltAccountUserName') && (session('voltAccountType')=="admin" || session('voltAccountType')=="teacher")) {

            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $period = $this->getModel->datalisting('period', ['user_id' => $profile->vc_id]);

            if ($period) {
                $this->data['period'] = $period;
            }
            if (!empty($period)) {

                $studentlistarray = array();
                $studentcount = 0;
                foreach ($period as $key) {
                    $studentlist = $this->getModel->datalisting('vt_useraccount', ['vc_usertype' => "student", 'vc_school' => $profile->vc_school, 'vc_class' => $key->class, 'vc_sectionclass' => $key->section, 'vc_subject' => $key->subject_id]);
                    array_push($studentlistarray, $studentlist);
                }

                if ($studentlistarray) {
                    $this->data['studentlistarray'] = $studentlistarray;
                }

            }
            
                echo view('school/teacher_sidebar');
                echo view('school/teacher_classlist', $this->data);
                echo view('school/footer');
        }
         else {
                return redirect()->to(base_url());
            }
    }

    public function createassignment()
    {

        if (session('voltAccountUserName') && (session('voltAccountType')=="admin" || session('voltAccountType')=="teacher")) {
            $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
            $assignment = $this->getModel->datalisting('assignment', ['user_id' => $profile->vc_id]);
            if ($assignment) {
                $this->data['assignment'] = $assignment;
            }
            echo view('school/teacher_sidebar');
            echo view('school/create_assignment', $this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }

public function addnewassignment()
{
    if (session('voltAccountUserName') && session('voltAccountType')=="admin") {
        $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
        $period = $this->getModel->singledata('period', ['user_id' => $profile->vc_id]);

        $addASSIGdata = [
            'period_id' => $period->period_id,
            'assignment_details' => $this->request->getPost('name'),
            'school_id' => $profile->vc_school,
            'question_set_id' => 1,
            'user_id' => $profile->vc_id,

        ];

        $added = $this->getModel->datastorage('assignment', $addASSIGdata);
        echo ($added) ? 'Verified' : 'Something went wrong.';
        return redirect()->to(base_url('/teacher/assignment'));

    }
    else
    {
        return redirect()->to(base_url());
    }
}

    
   

/* student functions*/
public function student_index()
{

    if (session('voltAccountUserName') && session('voltAccountType')=="student") {
        $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
        $period = $this->getModel->datalisting('period', ['school_id' => $profile->vc_school,'class' => $profile->vc_class,'section' => $profile->vc_sectionclass,'subject_id' => $profile->vc_subject]);

        $activityreport = $this->getModel->datalisting('reports', ['userid' => $profile->vc_id]); 
        if ($activityreport) {
                $this->data['activityreport'] = $activityreport;
            }
            $sum = $this->getModel->datalisting('reports', ['userid' => $profile->vc_id]); 
        if ($activityreport) {
                $this->data['activityreport'] = $activityreport;
            }
        if (!empty($period)) {
            $this->data['period'] = $period;

            $notificationarray = array();
            foreach ($period as $key) {
                $notification = $this->getModel->datalisting('assignment', ['period_id' => $key->period_id]);
                array_push($notificationarray, $notification);
            }

            if ($notificationarray) {
                $this->data['notificationarray'] = $notificationarray;
            }

        }

            echo view('school/student_sidebar');
            echo view('school/student_index',$this->data);
            echo view('school/footer');
        
    }

    else{
        return redirect()->to(base_url());
    }
}
public function student_profile()
{

    if (session('voltAccountUserName') && session('voltAccountType')=="student"){
        $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);

        if ($profile) {
            $this->data['profile'] = $profile;
        }
        echo view('school/student_sidebar');
        echo view('school/student_profile', $this->data);
        echo view('school/footer');
    } else {
        return redirect()->to(base_url());
    }
}


public function studentclasslist()
{

    if (session('voltAccountUserName') && session('voltAccountType')=="student") {

        $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
        $period = $this->getModel->datalisting('period', ['school_id' => $profile->vc_school,'class' => $profile->vc_class,'section' => $profile->vc_sectionclass,'subject_id' => $profile->vc_subject]);

        if ($period) {
            $this->data['period'] = $period;
        }
        echo view('school/student_sidebar');
        echo view('school/student_classlist', $this->data);
        echo view('school/footer');
    } else {
        return redirect()->to(base_url());
    }
}

public function studentsubscription()
{

    if (session('voltAccountUserName') && session('voltAccountType')=="student") {

        $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
        $packageInfo = $this->getModel->datalisting(' vt_premium_package_order', ['vc_user' => $profile->vc_id]);
        if ($packageInfo) {
            $this->data['packageInfo'] = $packageInfo;
        }
        echo view('school/student_sidebar');
        echo view('school/student_package_info', $this->data);
        echo view('school/footer');
    } else {
        return redirect()->to(base_url());
    }
}
public function studentnotification()
{

    if (session('voltAccountUserName') && session('voltAccountType')=="student") {

        $profile = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountUserName')]);
        $period = $this->getModel->datalisting('period', ['school_id' => $profile->vc_school,'class' => $profile->vc_class,'section' => $profile->vc_sectionclass,'subject_id' => $profile->vc_subject]);

        if (!empty($period)) {

            $notificationarray = array();
            foreach ($period as $key) {
                $notification = $this->getModel->datalisting('assignment', ['period_id' => $key->period_id]);
                array_push($notificationarray, $notification);
            }

            if ($notificationarray) {
                $this->data['notificationarray'] = $notificationarray;
            }
            echo view('school/student_sidebar');
            echo view('school/student_notification', $this->data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }
}


/** Upload user into database using CSV File */
    public function import()
    {
        if (session('voltAccountUserName')) {
            if (isset($_POST["import"])) {
                $this->userFrmCsv();
                $user_type = $this->request->getPost('user_type');
                return redirect()->to(base_url('/school/import/' . $user_type));
            }
            $data = array();
            $data["session"] = session();
            $data["usertype"] = $this->uri->getSegment(3);
            $data["schoolIs"] = $this->getModel->singledata('vt_school', ['id' => session('voltSchoolId')]);
            echo view('school/school_sidebar', $data);
            echo view('school/import_list', $data);
            echo view('school/footer');
        } else {
            return redirect()->to(base_url());
        }
    }

    public function userFrmCsv()
    {
        if (isset($_POST["import"])) {
            $csvDup = '';
            $fileName = $_FILES["file"]["tmp_name"];
            $this->seesion = session();
            if ($_FILES["file"]["size"] > 0) {
                $file = fopen($fileName, "r");
                $csvrow = 0;
                while (($column = fgetcsv($file, 10000, ",")) !== false) {
                    #$random_PassWord = mt_rand(100000, 999999);
                    $random_PassWord = $this->get_rand_pass();
                    // Username rules: cnnnn
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
                    $school_id = $this->request->getPost('school_id');
                    $school_state = $this->request->getPost('school_state');
                    $school_city = $this->request->getPost('school_city');
                    $school_id = $this->request->getPost('school_id');
                    $user_type = $this->request->getPost('user_type');
                    if ($csvrow == 0) {
                        // $CSV_HEADER_ARRAY = array($user_type.' Id','First Name','Last Name','Grade','Section','Mobile No','Email Id','Gender','Date of Birth');
                        if (count($column) == 9) {
                            $userId = array_search($user_type . ' Id', $column);
                            $fname = array_search('First Name', $column);
                            $lname = array_search('Last Name', $column);
                            $grade = array_search('Grade', $column);
                            $gender = array_search('Gender', $column);
                            $dob = array_search('Date of Birth', $column);
                            $section = array_search('Section', $column);
                            $mobileno = array_search('Mobile No', $column);
                            $emailid = array_search('Email Id', $column);
                        } else {
                            $this->session->setFlashdata('message_csv', 'Missing column headers. Problem in Importing CSV Data.');
                            $this->session->setFlashdata('err_type', 'alert-danger');
                            break;
                        }
                    }

                    $addCsvUser = [
                        'vc_studentid' => $column[$userId],
                        'vc_name' => $column[$fname],
                        'vc_lastname' => $column[$lname],
                        'vc_class' => $column[$grade],
                        'vc_sectionclass' => $column[$section],
                        'vc_contact' => $column[$mobileno],
                        'vc_email' => $column[$emailid],
                        'vc_gender' => strtolower($column[$gender]),
                        'vc_dob' => $column[$dob],
                        'vc_username' => $alpha . $nDigit,
                        'vc_state' => $school_state,
                        'vc_city' => $school_city,
                        'vc_school' => $school_id,
                        'vc_subject' => 0,
                        'vc_viewpass' => encrypt_decrypt_pwd('encrypt', $random_PassWord),
                        'vc_password' => md5($random_PassWord),
                        'vc_status' => 'Active',
                        'vc_usertype' => $user_type,
                        'vc_created_date' => date('Y-m-d H:i:s'),
                    ];

                    $userTbl = $this->db->table('vt_useraccount');
                    /** Validation For teacher mobile no & email id
                    $userTbl->where(['vc_email' => $column[$emailid]]);
                    $checkUser = $userTbl->orWhere(['vc_contact' => $column[$mobileno]])->get()->getRow();
                    if (!empty($checkUser) && $user_type == 'teacher') {
                    $csvDup = "<p class='alert alert-danger'>Email : <b>" . $column[$emailid] . "</b> or Mobile : <b>" . $column[$mobileno] . "</b> already exist.<br></p>";
                    } else {
                    if ($csvrow > 0) {
                    $insertId = $userTbl->insert($addCsvUser);
                    }
                    }
                     */
                    if ($csvrow > 0) {
                        $insertId = $userTbl->insert($addCsvUser);
                    }

                    if (!empty($insertId)) {
                        $this->session->setFlashdata('message_csv', 'CSV Data Imported into the Database');
                        $this->session->setFlashdata('err_type', 'alert-success');
                    } else {
                        $this->session->setFlashdata('message_csv', 'Problem in Importing CSV Data');
                        $this->session->setFlashdata('err_type', 'alert-danger');
                    }
                    $csvrow++;
                }
                $this->session->setFlashdata('duplicate_csv', $csvDup);
            }
        }
    }

    public function get_rand_pass()
    {
        $lowerStr = 'abcdefghijklmnopqrstuvwxyz';
        $Upperstr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $integer = '0123456789';
        $specialChar = '!@#$%^&*()_+';
        $strength = 3;
        $random_lowerstring = substr(str_shuffle($lowerStr), 0, $strength);
        $random_upperstring = substr(str_shuffle($Upperstr), 0, $strength);
        $random_special_char = substr(str_shuffle($specialChar), 0, $strength);
        $random_integerstring = substr(str_shuffle($integer), 0, $strength);
        return str_shuffle($random_lowerstring . $random_upperstring . $random_integerstring . $random_special_char);
    }

    public function usercsvsample()
    {
        // data array
        $UserType = ucfirst($this->request->getGet('ut')) . " Id";
        $headrow = array($UserType, 'First Name', 'Last Name', 'Grade', 'Section', 'Mobile No', 'Email Id', 'Gender', 'Date of Birth');
        $demorow = array('AS0001', 'Rohit', 'Kumar', '1', 'A', '9905475456', 'rohit@demo.net', 'male', '02-03-2001');
        // filename
        $filename = 'user_upload_sample.csv';
        // write to csv file
        $fp = fopen($filename, 'w');
        fputcsv($fp, $headrow);
        fputcsv($fp, $demorow);
        fclose($fp);
        // download file
        header('Content-type: text/csv');
        header('Content-disposition:attachment; filename="' . $filename . '"');
        readfile($filename);
    }

    public function utoken()
    {    
            $data = array();
            $data['userId'] = $this->request->getGet('user');
            $hashKey =  $this->request->getGet('hashkey');
            $CheckAdminUser = $this->getModel->singledata('user', ['auth_token' => $hashKey]);
            if(!empty($CheckAdminUser)){
                $data['uPass'] = encrypt_decrypt_pwd('decrypt', $CheckAdminUser->auth_token);  
                $this->getModel->dataupdate('user',['id'=>$CheckAdminUser->id],['auth_token' => '']);             
            }else{
                $data['uPass'] ='error404pass';
            }    
            echo view('school/schoolautologin', $data);  
    }
}