<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ApiModel;

class Api extends BaseController
{ 
    protected $db;
    protected $request;
    public function __construct()
    {
        $this->db =& $db;
        helper(['url', 'html', 'form', 'file', 'custom']);
        $this->db = \Config\Database::connect();
        $this->ApiMethod = new ApiModel($this->db);
        $this->data = '';
        $this->ClassData();
        //header('Content-type: application/form-data');
        //header('Content-type: application/json');
        date_default_timezone_set("Asia/Kolkata");
        error_reporting(0);
    }

    public function index()
    {
        //$this->load->view('index');
    }

    /**
     * This Function is used for get all class List
     */
    public function getAllClass()
    {
        $class_list = $this->ApiMethod->classlist();
        if (!empty($class_list)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $class_list,
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Class are not available.",
            );
        }

        echo "<pre>". json_encode($json);
    }

    /**
     * This Function is used for get subject List
     * Parameter : class,subject
     */
    public function getSubject()
    {
        //$subject_list = array();
        $subject_list = $this->ApiMethod->sublist();

        foreach ($subject_list as $subId) {
            $series_list = $this->ApiMethod->setlist($this->data['class'], $subId['subjectId']);
            $sub = $subId['subjectId'];
            $cls = $this->data['class'];
            $checkNumlist = $this->db->query("SELECT * FROM `question` WHERE `class`= '$cls' AND `subject`= '$sub' GROUP BY `chapter` ")->getResult();
            $getNumlist = ($checkNumlist) ? count($checkNumlist) : '';
            $sub_data[] = array('subjectId' => $subId['subjectId'], 'subject_name' => $subId['subject_name'], 'subject_image' => $subId['subject_image'], 'topics_num' => $getNumlist, 'series_list' => $series_list);
        }

        if (!empty($sub_data)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $sub_data,
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Subject are not available.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for get topic List
     * Parameter : class,subject,series
     */
    public function getTopic()
    {
        $setId = explode('-', $this->request->getPostGet('setId'))[0];
        if (empty($setId)) {
            $chapter_list = $this->ApiMethod->topiclist($this->data['class'], $this->data['subject'], $this->data['series']);
        } else {
            $topic_name = $this->ApiMethod->get_data_by('question', $setId, 'id')[0];
            $chapter_list = $this->ApiMethod->get_data_by('chaptername', $topic_name->chapterTitle, 'id')[0];
        }

        if (!empty($chapter_list)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $chapter_list,
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Topics are not available.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for get set List
     * Parameter : class,subject,series,chapter
     */
    public function getSet()
    {
        $chapterId = $this->request->getPostGet('chapter');
        if (!empty($this->data['class']) && !empty($this->data['subject']) && !empty($this->data['series'])) {
            $set_info = $this->ApiMethod->setinfo($this->data['class'], $this->data['subject'], $this->data['series'], $chapterId);

            if (!empty($set_info)) {
                $seriesTitle = $this->ApiMethod->get_data_by('mastar_series', $this->data['series'], 'series_id')[0];
                $set_data = array("series_title" => $seriesTitle->series_name);
                foreach ($set_info as $chpData) {
                    if ($chpData['chapterTitle'] != "") {
                        $chpIds[] = $chpData['chapterTitle'];
                    }
                }
                $chapIds = array_values(array_unique($chpIds));
                foreach ($chapIds as $cData) {
                    $chapterTitle = $this->ApiMethod->get_data_by('chaptername', $cData, 'id')[0];
                    $setIdsData = $this->ApiMethod->get_data_by('question', $cData, 'chapterTitle', '', 'id');
                    $ids = [];
                    foreach ($setIdsData as $gids) {
                        array_push($ids, $gids->id);
                    }
                    $setIds = implode('-', $ids);
                    $pics = ($chapterTitle->chap_image) ? $chapterTitle->chap_image : 'noimage.jpg';
                    $setArray[] = array(
                        "chapId" => $chapterTitle->id,
                        "chapter_title" => $chapterTitle->chapT_name,
                        "chapter_img" => base_url('master/uploads/chapterbanner/' . $pics),
                        "chapter_desc" => $chapterTitle->chap_content,
                        "setIds" => $setIds,
                    );
                }
                $setArray = array_merge($set_data, array('setData' => $setArray));
                if (!empty($setArray)) {
                    $json = array(
                        "status" => 1,
                        "msg" => "Data success.",
                        "data" => $setArray,
                    );
                } else {
                    $json = array(
                        "status" => 0,
                        "msg" => "Question set are not available.",
                    );
                }
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Question set are not available.",
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter.",
            );
        }
        echo json_encode($json);
    }

    public function getcatSet()
    {
        if (!empty($this->request->getPostGet('class')) && !empty($this->request->getPostGet('subject')) && !empty($this->request->getPostGet('chapter')) && !empty($this->request->getPostGet('category'))) {
            $series = ($this->request->getPostGet('series')) ? $this->request->getPostGet('series') : 0;
            
            $set_info = $this->ApiMethod->setcatinfo($this->request->getPostGet('class'), $this->request->getPostGet('subject'), $series, $this->request->getPostGet('chapter'), $this->request->getPostGet('category'));
            
            
            
            if (!empty($set_info[0])) {
                $seriesTitle = $this->ApiMethod->get_data_by('mastar_series', $series, 'series_id')[0];
                $set_data = array("series_title" => $seriesTitle->series_name);
                $chapIds = $this->request->getPostGet('chapter');

                $chapterTitle = $this->ApiMethod->get_data_by('chaptername', $this->request->getPostGet('chapter'), 'id')[0];
                $setIds = $set_info[0]['id'];
                $getActType = $this->db->query("SELECT * FROM `list` WHERE `set_id`=$setIds")->getResultArray();
                $dtType = [''];
                foreach ($getActType as $storeActype) {
                    array_push($dtType, $storeActype['type']);
                }
                $setArray[] = array(
                    "chapId" => $chapterTitle->id,
                    "chapter_title" => $chapterTitle->chapT_name,
                    "setIds" => $setIds,
                    "actType" => implode(',', $dtType),
                );
                $setArray = array_merge($set_data, array('setData' => $setArray));
                if (!empty($setArray) && $setIds != '') {
                    $json = array(
                        "status" => 1,
                        "msg" => "Data success.",
                        "data" => $setArray,
                    );
                } else {
                    $json = array(
                        "status" => 0,
                        "msg" => "Question set are not available.",
                    );
                }
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Question set are not available.",
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter.",
            );
        }
        echo json_encode($json);
    }

    public function Gettopcategory()
    {
        $class = $this->request->getPostGet('class');
        $subject = $this->request->getPostGet('subject');
        $series = ($this->request->getPostGet('series')) ? $this->request->getPostGet('series') : '0';
        $chapter = $this->request->getPostGet('chapter');
        $month = $this->request->getPostGet('month');

        $monthVar = "";
        if ($class != '' || $subject != '' || $chapter != '') {
            if ($month != "") {
                $monthVar = " and month =" . $month;
            }

    $checkCat = $this->db->query("SELECT * FROM `question` JOIN `category_type` ON `category_type`.`cat_id`=`category` WHERE `class`=$class AND `subject`=$subject AND `series`=$series AND `chapterTitle`=$chapter AND flag='0' $monthVar GROUP BY `category` ORDER BY `category_type`.`cat_num` ")->getResult();
            if ($checkCat) {
                $filterIds = [];
                foreach ($checkCat as $getCatids) {
                    $checkList = $this->db->query("SELECT * FROM `list` WHERE `set_id`='" . $getCatids->id . "' AND flag='0'")->getRow();
                    if ($checkList) {
                        array_push($filterIds, $getCatids->id);
                    }
                }
                if (count($filterIds)) {
                    $idsss = implode(',', $filterIds);
                    $checkList = $this->db->query("SELECT * FROM `question` JOIN `category_type` ON `category_type`.`cat_id`=`category` WHERE `id` in ($idsss)  GROUP BY `category` ORDER BY `category_type`.`cat_num` ")->getResult();
                }
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "catData" => $checkList,
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Data not found.",
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "All Parameters are required.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for series List
     * Parameter : class,subject,series
     */
    public function getSeries()
    {
        $series_list = $this->ApiMethod->setlist($this->data['class'], $this->data['subject'], $this->data['series']);
        if (!empty($series_list)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $series_list,
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Series are not available.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Question List
     * Parameter : setId,type
     */
    public function getQdata()
    {
        $setId = $this->request->getPostGet('setId');
        $type = $this->request->getPostGet('type');

        $Qns_list = $this->ApiMethod->getqdata($type, $setId);
        $All_Type = $this->ApiMethod->getalltype($setId);

        foreach ($All_Type as $typelist) {
            $typeArray[] = $typelist->type;
        }

        if (!empty($setId) && !empty($type)) {
            if (!empty($Qns_list)) {
                usort($typeArray, "custom_type_sort");
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "type" => $typeArray,
                    "data" => $Qns_list,
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Questions are not available.",
                );
            }
        } elseif (!empty($setId) && empty($type)) {
            if (!empty($typeArray)) {
                usort($typeArray, "custom_type_sort");
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "type" => $typeArray,
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Questions Type are not available.",
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Decoded Question List
     * Parameter : setId,type
     */
    public function getDecodeQns()
    {
        $setId = $this->request->getPostGet('setId');
        $type = $this->request->getPostGet('type');
        if (!empty($setId) && !empty($type)) {
            $LeftColumn = $RightColumn = $RightAnwser = $FibQns = array();
            $Qns_list = $this->ApiMethod->getqdata($type, $setId);
            $All_Type = $this->ApiMethod->getalltype($setId);
            foreach ($All_Type as $typelist) {
                $typeArray[] = $typelist->type;
            }

            #print_r($Qns_list);

            foreach ($Qns_list as $qData) {
                $LeftColumn = array_values(array_map("html_decode", array_filter(json_decode($qData['qLeft']))));
                $RightColumn = array_values(array_map("html_decode", array_filter(json_decode($qData['qRight']))));
                $RightAnwser = array_values(array_map("html_decode", array_filter(json_decode($qData['qAnswer']))));
                $FibQns = array_map("html_decode", json_decode($qData['quetionFill']));
                $change_tag = array("<@br>", "&lt;@br&gt;");
                $qnsWithhtml = $qData['question'];
                // Qns Image Url
                $qns_img_url = @preg_split('/(<img[^>]+\>)/i', strip_tags($qData['question'], "<img>"), -1, PREG_SPLIT_DELIM_CAPTURE);
                @preg_match('@src="([^"]+)"@', @$qns_img_url[1], $match);
                $qnsimgsrc = array_pop($match);

                $qnsRow = array(
                    "id" => $qData['id'],
                    "type" => $qData['type'],
                    "text" => html_decode($qData['text']),
                    "url" => html_decode($qData['url']),
                    "image" => html_decode($qData['image']),
                    "mcq" => json_encode(array_map("html_decode_mcq", json_decode($qData['mcq']))),               
                    "answer" => ($qData['answer'] === false) ? '0' : html_decode($qData['answer']),
                    "question" => @preg_split('/(<img[^>]+\>)/i', strip_tags(str_replace($change_tag, "<br>", $qData['question']), "<ul><ol><li><strong><em><br><i><b><u><img><sup><sub></sup></sub>"), -1, PREG_SPLIT_DELIM_CAPTURE)[0],
                    "urlImage" => @preg_split('/(<img[^>]+\>)/i', strip_tags(str_replace($change_tag, "<br>", $qData['question']), "<strong><em><br><i><b><u><img><sup><sub></sup></sub>"), -1, PREG_SPLIT_DELIM_CAPTURE)[1],
                    "set_id" => $qData['set_id'],
                    "img_url" => !empty($qnsimgsrc) ? base_url($qnsimgsrc) : '',
                    //"md_list" => json_encode(array_map("color", json_decode($qData['md_list'], true)), JSON_UNESCAPED_SLASHES),
                    "md_list" => json_encode(json_decode($qData['md_list'], true), JSON_UNESCAPED_SLASHES),
                    "mylist" => $qData['mylist'],
                    "myans" => $qData['myans'],
                    "label" => $qData['label'],
                    "3d_list" => $qData['3d_list'],
                    "solutions" => $qData['solutions'],
                    "questionHtml" => htmlentities(str_replace($change_tag, "<br>", $qnsWithhtml)),

                );
                #print_r($qnsRow); die;
                $qnsRes[] = array_merge(array_map("html_decode", $qnsRow), array(
                    "left_col" => $LeftColumn,
                    "right_col" => $RightColumn,
                    "right_ans" => $RightAnwser,
                    "fib_qns" => $FibQns,
                ));
            }
            
            $media_url = base_url('master');
            if (!empty($qnsRes)) {
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "type" => $typeArray,
                    "media_url" => $media_url,
                    "data" => $qnsRes,
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Questions are not available.",
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Game Question List
     * Parameter : setId,type
     */
    public function getGamedata()
    {
        $setId = $this->request->getPostGet('setId');
        $type = $this->request->getPostGet('type');

        if (!empty($setId) && !empty($type)) {
            $leveldecoration = array("");
            $new = array("");
            $Qns_list = $this->ApiMethod->getqdata($type, $setId);
            $game_level = $this->ApiMethod->get_data_by('game', '1', 'id')[0];
            foreach ($Qns_list as $gData) {
                $Mcqval = array_map("html_decode", json_decode($gData['mcq']));
                $new[$game_level->level][] = array(html_decode($gData['question']), array_filter($Mcqval), $Mcqval[$gData['answer']]);
                $leveldecoration[$game_level->level] = array($game_level->backgound, $game_level->queWindow, $game_level->color);
            }
            if (!empty($new)) {
                $json = array(
                    'status' => '0',
                    'data' => array("questions" => $new, "leveldecoration" => $leveldecoration),
                );
            } else {
                $json = array(
                    'status' => '1',
                    "message" => "Data Not found",
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Set INFO List
     */
    public function getCategory()
    {
        $chpId = $this->request->getPostGet('chpId');
        $cat_list = $this->ApiMethod->categorylist($this->data['class'], $this->data['subject'], $this->data['series'], $chpId);
        if (!empty($cat_list)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $cat_list,
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Categories are not available.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for genrate records
     */
    public function reportgenerator()
    {
        $userid = $this->request->getPostGet('userid');
        $setId = explode('-', $this->request->getPostGet('setId'))[0];
        if (!empty($setId) && !empty($userid)) {
            $getMain = $this->ApiMethod->get_data_by('question', $setId, 'id')[0];
            $starttime = $this->request->getPostGet('starttime');
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
                'act_type' => $this->request->getPostGet('type'),
                'total_attempt' => $this->request->getPostGet('total_qns'),
                'wrng_attempt' => $this->request->getPostGet('wrng_qns'),
                'right_attempt' => $this->request->getPostGet('right_qns'),
            );

            #print_r($reportdata);
            $this->db->delete('reports', ['class' => $getMain->class, 'subject' => $getMain->subject, 'course' => $getMain->series, 'topic' => $getMain->chapter, 'userid' => $userid, 'act_type' => $this->request->getPost('type')]);
            $this->ApiMethod->insertRow('reports', $reportdata);

            if (!empty($getMain)) {
                $json = array("status" => 1, "msg" => "Report updated.");
            }
        } else {
            $json = array("status" => 0, "msg" => "Invalid Parameter.");
        }
        echo json_encode($json);
        die;
    }

    /**
     * This Function is used for Custom types for apps
     */
    public function getQtypedata()
    {
        $setId = $this->request->getPostGet('setId');
        if (!empty($setId)) {
            $type_Array = array('mcq', 'tnf', 'fib', 'mch');
            $type_list = API_connector(base_url("api/getqdata/?setId=" . $setId));

            if ($type_list->status == 1) {
                $act_values = $type_list->type;
            } else {
                $act_values = [];
            }

            $typeArray = array_values(array_intersect($type_Array, $act_values));

            if (!empty($typeArray)) {
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "type" => $typeArray,
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Type are not available.",
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter.",
            );
        }
        echo json_encode($json);
    }
    #get_assessment()
    #get_practice()

    public function gettypelist()
    {
        $setId = $this->request->getPostGet('setId');
        if (!empty($setId)) {
            $type_Array = array('mcq', 'tnf', 'fib', 'mch', 'vid');
            $type_list = API_connector(base_url("api/getqdata/?setId=" . $setId));

            if ($type_list->status == 1) {
                $act_values = $type_list->type;
            } else {
                $act_values = [];
            }

            $typeArray = array_values(array_intersect($type_Array, $act_values));

            if (!empty($typeArray)) {

                if (in_array('vid', $typeArray)) {
                    $typeData[] = 'video';
                }
                $typeData[] = 'practice';
                if (in_array('mcq', $typeArray)) {
                    $typeData[] = 'assesment';
                }
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "typelist" => $typeData,
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Type are not available.",
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter.",
            );
        }
        echo json_encode($json);
    }

    /** Verify User by TOKEN ID */
    public function userverify()
    {
        $uId = $this->request->getPostGet('utoken');
        $uToken = ($uId) ? $uId : "notvalid";
        $uData = $this->ApiMethod->get_data_by('vt_user_token', $uToken, 'token');

        if (!empty($uData)) {
            $json = array(
                "status" => 1,
                "msg" => "valid.",
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid.",
            );
        }
        echo json_encode($json);
    }

    /** Verify Video/Audio/Ebook URL  exist */
    public function mediafileurl()
    {
        $fUrl = base64_decode($this->request->getPostGet('mediafile'));
        $vFile = ($fUrl) ? $fUrl : "notvalid";
        $fData = $this->ApiMethod->get_data_by('list', $vFile, 'url');       
        $set_dictionary = array();
        foreach ($fData as $setinfo) {
            $setData = $this->ApiMethod->get_data_by('question', $setinfo->set_id, 'id')[0];
            if (!empty($setData)) {
                $setInfo = $this->db->query("select question.title,question.class,question.month,mastar_subject.sub_name,category_type.cat_name,chaptername.chapT_name from question join mastar_subject on mastar_subject.sub_id = question.subject join category_type on category_type.cat_id = question.category  join chaptername on chaptername.id = question.chapterTitle where question.id='$setData->id'")->getRow();
                if (!empty($setData->series)) {
                    $series_name = $this->ApiMethod->get_data_by('mastar_series', $setData->series, 'series_id');
                    if (!empty($series_name)) {
                        $setInfo->theme = $series_name[0]->series_name . " >> ";
                    }
                }
                if (!empty($setData->module)) {
                    $module_name = $this->ApiMethod->get_data_by('master_module', $setData->series, 'm_id');
                    if (!empty($module_name)) {
                        $setInfo->module = $module_name[0]->m_name . " >> ";
                    }
                }

                $navigationList = "Set Name : " . $setInfo->title . " >> Class " . $setInfo->class . " >> " . $setInfo->sub_name . " >> M " . $setInfo->month . " >> " . @$setInfo->theme . @$setInfo->module . $setInfo->chapT_name . " >> " . $setInfo->cat_name;
                $set_dictionary[] = $navigationList;
            }
        }
        if (!empty($set_dictionary)) {
            $json = array(
                "status" => 1,
                "msg" => $set_dictionary,
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid.",
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Passed required params
     * Parameter : class,subject,series
     */
    public function ClassData()
    {
       $this->data = array(
            'class' => ($this->request)?$this->request->getPostGet('class'):1,
            'series' => ($this->request)?$this->request->getPostGet('series'):1,
            'subject' => ($this->request)?$this->request->getPostGet('subject'):1,
        );
    }
    /**
     * This Function is used for chapter progress bar
     * Parameter : class,subject,month,user,chapterTitle
     */

    public function progressbar()
    {
        $class = ($this->request->getPostGet('class'))?$this->request->getPostGet('class'):'0';
        $subject = ($this->request->getPostGet('subject')) ? $this->request->getPostGet('subject') : '0';
        $month = ($this->request->getPostGet('month'))?$this->request->getPostGet('month'):'0';
        $user = ($this->request->getPostGet('user'))?$this->request->getPostGet('user'):'0';
        $chapterTitle = ($this->request->getPostGet('chapterTitle'))?$this->request->getPostGet('chapterTitle'):'';
        $addcol = "";
        if ($chapterTitle != "") {
            $addcol = " and chapterTitle =" . $chapterTitle;
        }
        $data['totalQ'] = count($this->db->query("select * from list where set_id in(select id from question where status='active' and class=$class and subject=$subject and month=$month $addcol ) and type in ('mcq','tnf','fib')")->getResult());

        $data['totalM'] = $this->db->query("SELECT SUM(`total_attempt`) AS `allattempt`, SUM(`wrng_attempt`) AS `wrongattempt`, SUM(`right_attempt`) AS `rightattempt`, SUM(`total_time`) AS `spendtime` FROM `reports` join question as q on reports.topic = q.id WHERE `userid`=$user and act_type in ('mcq','tnf','fib') and q.month = $month $addcol GROUP BY `userid`")->getResult();

        if (!empty($data)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $data,
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Data is not available.",
            );
        }
        echo json_encode($json);
    }
}
