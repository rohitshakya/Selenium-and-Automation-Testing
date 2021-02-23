<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PublicModel;
use CodeIgniter\HTTP\IncomingRequest;

class Subscription extends BaseController
{
    public function __construct()
    {
        //\Config\Services::session();
        $validation = \Config\Services::validation();
        $this->uri = service('uri');
        $this->request = service('request');
        $this->getModel = new PublicModel($this->db);
        $getLogin = '';
        $data = [];
        if (session('voltAccountkey') != '') {
            $getuIdbytoken = $this->getModel->singledata('vt_user_token', ['token' => session('voltAccountToken')]);
            $userId = ($getuIdbytoken) ? $getuIdbytoken->userid : 0;
            $this->getLogin = $this->getModel->singledata('vt_useraccount', ['vc_username' => session('voltAccountkey'), 'vc_id' => $userId]);
            if (empty($this->getLogin)) {
                return redirect()->to(base_url('/subscription'));
            }
        } else {
            $this->getLogin = '';
        }
        $this->data['getLogin'] = $this->getLogin;
        $this->data['modelData'] = $this->getModel;
        $this->data['uri'] = $this->uri;
        $this->data['request'] = $this->request;
        date_default_timezone_set("Asia/Kolkata");
        /*
            [voltAccountkey] => a0002
            [voltAccountUserName] => a0002
            [voltAccountClass] => 1
            [voltAccountSubject] => 9
            [voltAccountType] => admin
            [voltAccountName] => Test
            [voltSchoolId] => 1
            [voltAccountToken] => OuHF23pSQjFaCLXlq3LJ
         */

    }

    public function index()
    {
        //CheckOtherTermsCart
        if(!empty(session('voltAccountkey')) && session('voltAccountType')==SCHOOL){
            $getSchoolTerms = $this->getModel->singledata('vt_school', ['id' => session('voltSchoolId')]);
            if($getSchoolTerms){
                if($getSchoolTerms->term_start>0 && $getSchoolTerms->term_end>0){
                    $numIs =  ($getSchoolTerms->term_start<10)?'0'.ltrim($getSchoolTerms->term_start,0):$getSchoolTerms->term_start;
                    $startMlike = '-'.$numIs.'-';
                    $checkOtherTerms = $this->db->query("SELECT * FROM `vt_live_cart` WHERE `vc_session`='".session_id()."' AND `vc_pack_start` NOT LIKE '%$startMlike%' ")->getResult();
                    if($checkOtherTerms){
                        foreach($checkOtherTerms as $getOtherTermsDt){
                            $breakStart = explode('-',$getOtherTermsDt->vc_pack_start);
                            $breakEnd = explode('-',$getOtherTermsDt->vc_pack_end);
                            $newStart = $breakStart[0].'-'.$getSchoolTerms->term_start.'-'.$breakStart[2];
                            $newEnd = $breakEnd[0].'-'.$getSchoolTerms->term_end.'-'.$breakEnd[2];
                            $this->getModel->dataupdate('vt_live_cart', ['vc_id'=>$getOtherTermsDt->vc_id], ['vc_pack_start'=>$newStart, 'vc_pack_end'=>$newEnd]);
                        }
                    }
                }
            }
        }

        $removeData = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));
        $cardHistory = $this->db->query("SELECT * FROM `vt_live_cart` WHERE `vc_user`=0 AND  cast(`vc_date` as date)<='" . $removeData . "'")->getResult();
        if ($cardHistory) {
            $this->db->query("DELETE FROM `vt_live_cart` WHERE `vc_user`=0 AND cast(`vc_date` as date)<='" . $removeData . "'");
        }
        if (!empty(session('voltAccountkey'))) {
            if(session('voltAccountType')==SCHOOL){
                $plan = 'school';
                $msg = "You are a school, But added product for student that's why removed some product.";
            }
            else{
                $plan = 'student';
                $msg = "You are a student, But added product for school that's why removed some product.";
                if($this->db->table('vt_live_cart')->where(['vc_session' => session_id(), 'product_class!=' => session('voltAccountClass')])->get()->getRow()){
                    $this->getModel->dataremove('vt_live_cart', ['vc_session' => session_id(), 'product_class!=' => session('voltAccountClass')]);
                }
            }
            $checkCart = $this->db->table('vt_live_cart')->where(['vc_session' => session_id(), 'vc_plan!=' => $plan])->get()->getRow();
            if ($checkCart) {
                $this->getModel->dataremove('vt_live_cart', ['vc_session' => session_id(), 'vc_plan!=' => $plan]);
                $this->session->set('removecarterror', $msg);
            }
            $this->getModel->dataupdate('vt_live_cart', ['vc_session' => session_id()], ['vc_user' => $this->getLogin->vc_id]);
        }
        
        $this->data['packages'] = $this->getModel->datalisting('vt_package', ['vc_status' => 'Active']);
        $this->data['classdropdown'] = $this->db->table('mastar_class')->get()->getResult();
        $this->data['subjectdropdown'] = $this->db->table('mastar_subject')->get()->getResult();
        $currentMonth = date('m');
        if ($currentMonth <= 6) {
            $thisYear = date('Y', strtotime('-1 years'));
        } else {
            $thisYear = date('Y');
        }
        $this->data['termsdropdown'] = $this->db->table('vt_term_year')->where(['status' => 'active', 'start_year>=' => $thisYear])->orderBy('start_year', 'ASC')->get()->getResult();

        return view('publicview/subscription/subscription', $this->data);
    }

    public function packagefilter()
    {
        $plan = $this->request->getPost('plan');
        $classis = $this->request->getPost('classis');
        $subjectis = $this->request->getPost('subjectis');
        $packid = array();
        $likesub = '"';
        $packages = [];
        $status = ['status' => 'active'];
        if ($classis > 0) {
            $status['classid'] = $classis;
        }
        if ($subjectis > 0) {
            $likesub = '"' . $subjectis . '"';
        }
        $packInfoQuery = $this->db->table('vt_package_info')->select('packageid')->where($status)->like('sublist', $likesub)->get()->getResult();
        foreach ($packInfoQuery as $packIds) {
            array_push($packid, $packIds->packageid);
        }
        if (count($packid) > 0) {
            $packages = $this->db->table('vt_package')->where(['vc_status' => 'Active'])->whereIn('vc_id', $packid)->get()->getResult();
        }
        $this->data['packages'] = $packages;
        $this->data['plan'] = $this->request->getPost('plan');
        $currentMonth = date('m');
        if ($currentMonth <= 6) {
            $thisYear = date('Y', strtotime('-1 years'));
        } else {
            $thisYear = date('Y');
        }
        $this->data['termsdropdown'] = $this->db->table('vt_term_year')->where(['status' => 'active', 'start_year>=' => $thisYear])->orderBy('start_year', 'ASC')->get()->getResult();
        return view('publicview/subscription/productlist', $this->data);
    }
    /*
    public function productaddincart(){
        $plan       = $this->request->getPost('plan');
        $qtyis      = $this->request->getPost('qtyis');
        $productis = $this->request->getPost('productis');
        $user = ($this->getLogin)?$this->getLogin->vc_id:0;
        $sessionid = session_id();
        $this->session->remove('removecarterror');
        $this->getModel->dataremove('vt_live_cart', ['vc_session'=>$sessionid,'vc_plan!='=>$plan]);
        if($user>0){
            $this->getModel->dataremove('vt_live_cart', ['vc_user'=>$user,'vc_plan'=>'student']);
        }
        $checkProductInCart = $this->getModel->singledata('vt_live_cart', ['vc_session'=>$sessionid,'vc_product'=>$productis]);
        if($checkProductInCart){
            $nQty = $checkProductInCart->vc_qty+$qtyis;
            $condition = ['vc_session'=>$sessionid,'vc_product'=>$productis];
            $uCartData = ['vc_qty'=>$nQty,];
            $addCart = $this->getModel->dataupdate('vt_live_cart', $condition, $uCartData);
            exit();
        }
        else{
            $cartData = [
            'vc_session'        =>  $sessionid,
            'vc_plan'           =>  $plan,
            'vc_product'        =>  $productis,
            'vc_qty'            =>  $qtyis,
            'vc_user'           =>  $user
        ];
            $addCart = $this->getModel->datastorage('vt_live_cart', $cartData);
            exit();
        }
    }*/

    public function couponvalidation()
    {
        $code = $this->request->getPost('code');
        $plan = ($this->request->getPost('plan')=='student')?'retail':$this->request->getPost('plan');
        if (!empty($code)) {
            $couponData = $this->getModel->singledata('vt_coupon_management', ['vc_coupon_code' => $code, 'vc_coupon_status' => 'Active']);
            if ($couponData) {
                if($plan == $couponData->vc_acc_type || $couponData->vc_acc_type=='all' ){
                    $today = date('Y-m-d');
                    $couponStart = $couponData->vc_coupon_start;
                    $couponEnd = $couponData->vc_coupon_end;
                    if ($today >= $couponStart && $today <= $couponEnd) {
                        $this->session->set('coupon', $couponData->vc_id);
                        exit('validate');
                    } else {
                        exit("Your coupon code is expired.");
                    }
                }
                else{
                    exit('Coupon is not valid for selected plan.');
                }
            } else {
                exit("Your coupon code is invalid.");
            }
        } else {
            exit("Please check you coupon code");
        }
    }

    public function removecoupon()
    {
        $this->session->remove('coupon');
    }

    public function productaddincart()
    {
        $plan       = $this->request->getPost('plan');
        $qtyis      = $this->request->getPost('qtyis');
        $productis = $this->request->getPost('productis');
        $terms = $this->request->getPost('terms');
        if ($terms > 0) {
            $getTerms = $this->getModel->singledata('vt_term_year', ['id' => $terms]);
            if ($getTerms) {
                $sm = 04; $em = 03;
                if(!empty(session('voltAccountkey')) && session('voltAccountType')==SCHOOL){
                    $getSchoolTerms = $this->getModel->singledata('vt_school', ['id' => session('voltSchoolId')]);
                    if($getSchoolTerms){
                        $sm = ($getSchoolTerms->term_start)?$getSchoolTerms->term_start:'04';
                        $em = ($getSchoolTerms->term_end>0)?$getSchoolTerms->term_end:'03';
                    }
                }
                $startPack = $getTerms->start_year . '-'.$sm.'-01';
                $endPack = $getTerms->end_year . '-'.$em.'-31';;
            } else {
                $startPack = date('Y-m-d');
                $endPack = date('Y-m-d', strtotime('+365 days'));
            }
        } else {
            if($plan=='school'){
                exit('Terms');
            }
            else{
                $startPack = date('Y-m-d');
                $endPack = date('Y-m-d', strtotime('+365 days'));
            }
        }


        $user = ($this->getLogin) ? $this->getLogin->vc_id : 0;
        $sessionid = session_id();
        $proinfoData = $this->getModel->singledata('vt_package_info', ['packageid' => $productis]);
        $this->session->remove('removecarterror');
        $this->getModel->dataremove('vt_live_cart', ['vc_session' => $sessionid, 'vc_plan!=' => $plan]);
        if ($plan == 'student') {
            $subjectis = ($proinfoData) ? json_decode($proinfoData->sublist) : '';
            if ($subjectis) {
                foreach ($subjectis as $subI) {
                    $subid = '"' . $subI . '"';
                    $this->db->table('vt_live_cart')->where('product_class', $proinfoData->classid)->like('product_sub', $subid)->delete();
                }
            }
        }
        if ($user > 0) {
            //$this->getModel->dataremove('vt_live_cart', ['vc_user'=>$user,'vc_plan'=>'student']);
        }
        $checkProductInCart = $this->getModel->singledata('vt_live_cart', ['vc_session' => $sessionid, 'vc_product' => $productis,'vc_pack_start'=>$startPack,'vc_pack_end'=>$endPack]);
        if ($checkProductInCart) {
            $nQty = $checkProductInCart->vc_qty + $qtyis;
            $condition = ['vc_session' => $sessionid, 'vc_product' => $productis];
            $uCartData = ['vc_qty'=>$nQty,'vc_pack_start'=>$startPack,'vc_pack_end'=>$endPack];
            $addCart = $this->getModel->dataupdate('vt_live_cart', $condition, $uCartData);
            exit();
        } else {
            $cartData = [
                'vc_session'        =>  $sessionid,
                'vc_plan'           =>  $plan,
                'vc_product'        =>  $productis,
                'vc_qty'            =>  $qtyis,
                'vc_user'           =>  $user,
                'product_class' => ($proinfoData) ? $proinfoData->classid : '',
                'product_sub'   => ($proinfoData) ? $proinfoData->sublist : '',
                'vc_pack_start' =>  $startPack,
                'vc_pack_end'   =>  $endPack,
            ];
            $addCart = $this->getModel->datastorage('vt_live_cart', $cartData);
            exit();
        }
    }


    public function updatecart()
    {
        $plan       = $this->request->getPost('plan');
        $qtyis      = $this->request->getPost('qtyis');
        $productis = $this->request->getPost('productis');
        $sessionid = session_id();
        $condition = ['vc_session' => $sessionid, 'vc_product' => $productis];
        $uCartData = ['vc_qty' => $qtyis];
        $addCart = $this->getModel->dataupdate('vt_live_cart', $condition, $uCartData);
        exit();
    }
    public function cartdatalist()
    {
        $this->data['allcartlist'] = $this->db->table('vt_live_cart')->where(['vc_session' => session_id()])->get()->getResult();
        if(!$this->data['allcartlist']){
            $this->session->remove('coupon');
        }
        //$this->getModel->datalisting('vt_live_cart', ['vc_session' => session_id()]);
        return view('publicview/subscription/cartlist', $this->data);
    }
    public function removecart()
    {
        $id = $this->request->getPost('id');
        if ($id > 0) {
            $this->getModel->dataremove('vt_live_cart', ['vc_id' => $id]);
        }
    }
    public function clearotherplan()
    {
        $plan = $this->request->getPost('plan');
        if ($plan!="") {
            $this->getModel->dataremove('vt_live_cart', ['vc_plan!='=>$plan, 'vc_session' => session_id()]);
        }
    }
    public function checkout()
    {
        $allcartlist = $this->db->table('vt_live_cart')->where(['vc_session' => session_id()])->get()->getResult();
        if ((empty(session('voltAccountkey'))) || empty($allcartlist)) {
            return redirect()->to(base_url('/subscription'));
        }
        $this->data['return_url'] = base_url('subscription/paymentverifying'); //.'razorpay/callback';
        $this->data['surl'] = base_url('subscription/paymentsuccess'); //.'razorpay/success';
        $this->data['furl'] = base_url('subscription/paymentfailed'); //.'razorpay/failed';
        $this->data['statelist'] = $this->db->table('states')->orderBy('name', 'ASC')->get()->getResult();
        $this->data['allcartlist'] = $allcartlist;
        $this->data['session'] = $this->session;
        $this->data['city'] = $this->getModel->singledata('cities', ['id' => $this->getLogin->vc_city]);
        return view('publicview/subscription/checkout', $this->data);
    }

    public function billinginformation()
    {
        // $validation = \Config\Services::validation();
        if ($this->validation->run($this->request->getPost(), 'validatbillinginfo') == true) {
            echo "success";
            $statenm = $this->getModel->singledata('states', ['id' => $this->request->getPost('state')]);
            $billinDetail = [
                'fname'      => $this->request->getPost('fname'),
                'lname'      => $this->request->getPost('lname'),
                'contact'    => $this->request->getPost('contact'),
                'email'      => $this->request->getPost('email'),
                'state'      => ucwords(strtolower($statenm->name)),
                'city'       => $this->request->getPost('city'),
                'pincode'    => $this->request->getPost('pincode'),
                'address'    => $this->request->getPost('address')
            ];
            $this->getModel->dataupdate('vt_live_cart', ['vc_session' => session_id()], ['vc_billinginfo' => serialize($billinDetail)]);
        } else {
            foreach ($this->validation->getErrors() as $errors) {
                echo "<p>$errors</p>";
            }
        }
    }

    public function confirmpackageorder()
    {
        $curl = \Config\Services::curlrequest();

        $returnJson = ['status' => 0, 'message' => 'error', 'data' => ''];
        $recaptchaResponse = trim($this->request->getPost('recaptcha'));
        $secret = '6Lc8aFAaAAAAAH0GMgbo8ma3hZlr2WE4RXqmroqs';
        $userIp = $this->request->getIPAddress();

        $fname     = $this->request->getPost('fname');
        $lname     = $this->request->getPost('lname');
        $contact   = $this->request->getPost('contact');
        $email     = $this->request->getPost('email');

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;
        $captchaResponse = $curl->request('GET', $url);
        $verifyCaptcha = json_decode($captchaResponse->getBody());
        if ($verifyCaptcha->success) {

            if ($this->validation->run($this->request->getPost(), 'validatbillinginfo') == true) {
                $returnJson['status'] = 1;
                $returnJson['message'] = "success";
                $allcartlist = $this->db->table('vt_live_cart')->where(['vc_session' => session_id()])->get()->getResult();
                $totalPrice = 0;
                $proinfo = '';
                $nowTime = date('Y-m-d H:i:s');
                $orderid = 'V-' . $this->getLogin->vc_id . date('YmdHis');
                $this->getModel->dataupdate('vt_live_cart', ['vc_session' => session_id()], ['vc_merchentorder'=>$orderid]);
                foreach ($allcartlist as $getCartList) {

                    $totalPrice = $totalPrice + $getCartList->vc_payable;
                    $proinfo = $proinfo . ' ' . $getCartList->product_name . ' | ';

                }
                $data = [
                    'amount'         =>  $totalPrice * 100,
                    'mtotal'         =>  base64_encode($totalPrice * 100),
                    'mamount'        =>  base64_encode($totalPrice),
                    'txnid'         =>  substr(hash('sha256', mt_rand() . microtime()), 0, 20),
                    'productinfo'   =>  trim($proinfo, '| '),
                    'orderid'       =>  $orderid,
                    'name'          =>  $fname . ' ' . $lname,
                    'email'         =>  $email,
                    'phone'         => $contact
                ];
                $returnJson['data'] = $data;
            } else {
                $error = '';
                foreach ($this->validation->getErrors() as $errors) {
                    $error = $error . "<p>$errors</p>";
                }
                $returnJson['status'] = 0;
                $returnJson['message'] = $error;
            }
        } else {
            $returnJson['status'] = 0;
            $returnJson['message'] = "<p>Please verify captcha.</p>";
        }
        return json_encode($returnJson);
    }
    public function paymentverifying()
    {
        if (empty(session('voltAccountkey'))) {
            return redirect()->to(base_url('/subscription'));
        }
        $curl = \Config\Services::curlrequest();
        if (!empty($this->request->getPost('razorpay_payment_id')) && !empty($this->request->getPost('merchant_order_id'))) {
            $razorpay_payment_id = $this->request->getPost('razorpay_payment_id');
            $merchant_order_id = $this->request->getPost('merchant_order_id');
            $merchant_trans_id = $this->request->getPost('merchant_trans_id');
            $currency_code = 'INR';
            $amount = base64_decode($this->request->getPost('merchant_total'));
            $success = false;
            $error = '';
            try {
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);
                //execute post
                $result = curl_exec($ch);

                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: ' . curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
                    // echo "<pre>";print_r($response_array);exit;
                    //Check success response
                    if ($http_status === 200 and isset($response_array['error']) === false) {
                        $success = true;
                    } else {
                        $success = false;
                        if (!empty($response_array['error']['code'])) {
                            $error = $response_array['error']['code'] . ':' . $response_array['error']['description'];
                        } else {
                            $error = 'RAZORPAY_ERROR:Invalid Response <br/>' . $result;
                        }
                    }
                }
                //close connection
                curl_close($ch);
            } catch (Exception $e) {

                $success = false;
                $error = 'OPENCART_ERROR:Request to Razorpay Failed';
            }

            if ($success === true) {
                $this->save_order($merchant_order_id, $razorpay_payment_id);
                return redirect()->to($this->request->getPost('merchant_surl_id'));
            } else {
                return redirect()->to($this->request->getPost('merchant_furl_id'));
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    }
    private function get_curl_handle($payment_id, $amount)
    {
        $url = 'https://api.razorpay.com/v1/payments/' . $payment_id . '/capture';
        $key_id = RAZOR_KEY_ID;
        $key_secret = RAZOR_KEY_SECRET;
        $fields_string = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id . ':' . $key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        // curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/ca-bundle.crt');
        return $ch;
    }
    public function paymentsuccess()
    {
        if (empty(session('voltAccountkey'))) {
            return redirect()->to(base_url('/subscription'));
        }
        return view('publicview/subscription/paymentsuccess', $this->data);
    }
    public function paymentfailed()
    {
        if (empty(session('voltAccountkey'))) {
            return redirect()->to(base_url('/subscription'));
        }
        return view('publicview/subscription/paymentfailed', $this->data);
    }

    public function save_order($merchant_order_id, $merchant_trans_id)
    {

        if (!empty(session('voltAccountkey'))) {
            //store user information in database.
            $student_id = $this->getLogin->vc_id;
            $paymode = 'RAZORPAY';
            $ccode = '';
            $orderid = $merchant_order_id;
            $lastOrd = $this->db->table('vt_premium_package_order')->where(['vc_paymentstatus' => 'Paid'])->orderBy('vc_id', 'DESC')->get()->getRow();
            $orderstatus = 'Paid';
            $allcartlist = $this->db->table('vt_live_cart')->where(['vc_session' => session_id(), 'vc_merchentorder' => $orderid])->get()->getResult();
            $totalPrice = 0;
            $datetime = date('Y-m-d H:i:s');
            $customNo = $lastOrd->vc_orderno + 1;

            foreach ($allcartlist as $getCartList) {
                $totalPrice = $getCartList->vc_qty * $getCartList->product_price;

                $premiumData = [
                    'vc_orderno'            =>  $customNo,
                    'vc_merchent_order_no'  =>  $orderid,
                    'vc_txnid'              =>  $merchant_trans_id,
                    'vc_paymentstatus'      =>  $orderstatus,
                    'vc_mode'               =>  $paymode,
                    'vc_plan'               =>  $getCartList->vc_plan,
                    'vc_product'            =>  $getCartList->vc_product,
                    'vc_qty'                =>  $getCartList->vc_qty,
                    'product_price'         =>  $getCartList->product_price,
                    'total_price'           =>  $totalPrice,
                    'vc_user'               =>  $this->getLogin->vc_id,
                    'product_name'          =>  $getCartList->product_name,
                    'product_desc'          =>  $getCartList->product_desc,
                    'product_class'         =>  $getCartList->product_class,
                    'product_sub'           =>  $getCartList->product_sub,
                    'vc_billinginfo'        =>  $getCartList->vc_billinginfo,
                    'vc_coupon_id'          =>  $getCartList->vc_coupon_id,
                    'vc_coupon_code'        =>  $getCartList->vc_coupon_code,
                    'vc_coupon_type'        =>  $getCartList->vc_coupon_type,
                    'vc_coupon_amount'      =>  $getCartList->vc_coupon_amount,
                    'vc_gst'                =>  $getCartList->vc_gst,
                    'vc_discount'           =>  $getCartList->vc_discount,
                    'vc_payable'            =>  $getCartList->vc_payable,
                    'vc_pack_start'         =>  $getCartList->vc_pack_start,
                    'vc_pack_end'           =>  $getCartList->vc_pack_end,
                    'vc_date'               =>  $datetime
                ];
                $this->getModel->datastorage('vt_premium_package_order', $premiumData);
                $totalPrice = 0;
            }
            //MAILING SYSTEM
                $this->generateattachment('101003');
            //MAILING SYSTEM

            $this->session->set('orderid', $customNo);
            $this->session->set('txnid', $merchant_trans_id);
            $this->session->set('merchantid', $orderid);
            $this->session->remove('coupon');
            $this->session->remove('gst');
            $this->session->remove('coupamount');
            $this->session->remove('payamount');
            $this->getModel->dataremove('vt_live_cart', ['vc_session' => session_id()]);
        }
    }


    public function myorder()
    {
        if (empty(session('voltAccountkey'))) {
            return redirect()->to(base_url('/subscription'));
        }
        $oid = (!empty($this->request->getGet('oid'))) ? $this->request->getGet('oid') : '';
        if ($oid != '') {
            $singleOrd = $this->db->table('vt_premium_package_order')->where(['vc_user' => $this->getLogin->vc_id, 'vc_orderno' => $oid])->get()->getResult();
            if ($singleOrd) {
                $this->data['invoiceorder'] = $singleOrd;
                $this->data['billto'] = $this->db->table('vt_premium_package_order')->select('vc_orderno, vc_date, vc_billinginfo')->where(['vc_user' => $this->getLogin->vc_id, 'vc_orderno' => $oid])->get()->getRow();
                $this->data['orderlist'] = $this->db->table('vt_premium_package_order')->where(['vc_user' => $this->getLogin->vc_id])->groupBy('vc_orderno')->get()->getResult();
                return view('publicview/subscription/myorderinvoice', $this->data);
                exit();
            } else {
                return redirect()->to(base_url('/subscription/myorder'));
            }
        }
        $this->data['orderlist'] = $this->db->table('vt_premium_package_order')->where(['vc_user' => $this->getLogin->vc_id])->groupBy('vc_orderno')->get()->getResult();
        return view('publicview/subscription/myorder', $this->data);
    }

    public function downloadinvoice()
    {
        $oid = (!empty($this->request->getGet('oid'))) ? $this->request->getGet('oid') : '';
        if ($oid != '') {
            $singleOrd = $this->db->table('vt_premium_package_order')->where(['vc_orderno' => $oid])->get()->getResult();
            if ($singleOrd) {

                $this->data['invoiceorder'] = $singleOrd;
                $this->data['billto'] = $this->db->table('vt_premium_package_order')->select('vc_orderno, vc_date, vc_billinginfo, vc_gst, vc_discount, vc_payable')->where(['vc_orderno' => $oid])->get()->getRow();
                $dompdf = new \Dompdf\Dompdf();  // invoiceatachmaster invoiceatach
                $dompdf->loadHtml(view('publicview/subscription/invoiceatach', $this->data));
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream(ORD_PREFIX . $oid . '.pdf');
                exit();
            } else {
                return redirect()->to('myorder');
            }
        } else {
            return redirect()->to('myorder');
        }
    }

    public function attach(){
        //return view('publicview/subscription/ordermail', $this->data);
        $this->generateattachment('101003');
    }

    public function generateattachment($oid='')
    {
        //$oid = (!empty($this->request->getGet('oid'))) ? $this->request->getGet('oid') : '';
        if ($oid != '') {
            $singleOrd = $this->db->table('vt_premium_package_order')->where(['vc_orderno' => $oid])->get()->getResult();
            if ($singleOrd) {
                $this->data['invoiceorder'] = $singleOrd;
                $this->data['billto'] = $this->db->table('vt_premium_package_order')->select('vc_orderno, vc_date, vc_billinginfo, vc_gst, vc_discount, vc_payable')->where(['vc_orderno' => $oid])->get()->getRow();
                $dompdf = new \Dompdf\Dompdf();  // invoiceatachmaster invoiceatach
                $dompdf->loadHtml(view('publicview/subscription/invoiceatach', $this->data));
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                //$dompdf->stream();
                $billnameis = ORD_PREFIX . $this->data['billto']->vc_orderno . '.pdf';
                $output = $dompdf->output();
                file_put_contents(ROOTPATH . '/temporarydata/' . $billnameis, $output);
                $detailIs = unserialize($this->data['billto']->vc_billinginfo);
                $Order_Mail=[
                    'billno'=> ORD_PREFIX . $this->data['billto']->vc_orderno,
                    'orderdate'=> $this->data['billto']->vc_date,
                    'details'=> $detailIs,
                ];
                $body = view('publicview/subscription/ordermail', $Order_Mail);
                //EMAIL SYSTEM
                $email = \Config\Services::email();

                $config = array(
                    'protocol'  => 'smtp',
                    'SMTPCrypto'=>'tls',
                    'SMTPKeepAlive'=>true,
                    'SMTPHost' => SMTP_HOST,
                    'SMTPPort' => SMTP_PORT,
                    'SMTPUser' => SMTP_USER,
                    'SMTPPass' => SMTP_PASSWORD,
                    'SMTPTimeout'  => '5',
                    'mailType'  => 'html',
                    'newline'   =>  '\r\n',
                    'charset'   => 'utf-8',
                    'wordWrap'  =>  true
                );
                
                $email->initialize($config);

                $email->setFrom('noreply@vivavolt.net', 'Viva Volt Order Confirmation');
                $email->setTo('rahulsingh4ut@gmail.com');
                $email->setSubject('VOLT Order Confirm');
                $email->setMessage($body);
                $email->attach('temporarydata/'.$billnameis, 'attachment', "$billnameis");
                if($email->send()==false){
                    echo $email->printDebugger();
                } else{
                    echo "Sucess";
                }
            //EMAIL SYSTEM
            unlink(ROOTPATH . '/temporarydata/' . $billnameis);
                exit();
            } else {
                //echo "Invalide Invoice";
            }
        }
    }
}
