<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->helper('url');
        $this->load->library('form_validation');

        $this->load->model('admin/Event_mdl', 'event_mdl');
    }

	public function index()
	{
      $this->list();
	}

    //구석구석남해 행사일정 리스트
	public function list()
    {
        $data = array();
        $data['list'] = $this->event_mdl->get_event_list();
        
        $this->load->view('admin/layout/header.php');
		$this->load->view('admin/event_list.php', $data);
    }

    //마이굿플레이스 행사 리스트
	public function place_list()
    {
        $data = array();
        $data['list'] = $this->event_mdl->get_place_events();
        
        $this->load->view('admin/layout/header.php');
		$this->load->view('admin/event_place_list.php', $data);
    }

    //구석구석남해 행사일정 등록화면 이동
	public function write()	
	{	
        $this->load->view('admin/layout/header.php');
        $this->load->view('admin/event_write.php');
	}

    //마이굿플레이스 행사일정 등록화면 이동
	public function place_write()	
	{	
        $this->load->view('admin/layout/header.php');
        $this->load->view('admin/event_place_write.php');
	}

    //구석구석남해 행사일정 수정화면 이동
	public function modify()	
	{	
		$id = $this->input->get('id', TRUE);

        $result = array();
        $data = array();

        if(empty($id))
        {
            $result['msg'] = "id가 없습니다";
            json_encode($result);
            exit;
        }
        
        $data['info'] = $this->event_mdl->get_event_info($id);

        if (!empty($data)) {
            
            $this->load->view('admin/layout/header.php');
            $this->load->view('admin/event_modify.php', $data);

		}else{
			$result['msg'] = "조회된 정보가 없습니다";
            echo json_encode($result);
            exit;
		}
	}

    //마이굿플레이스 행사일정 수정화면 이동
	public function place_modify()	
	{	
		$id = $this->input->get('id', TRUE);

        $result = array();
        $data = array();

        if(empty($id))
        {
            $result['msg'] = "id가 없습니다";
            json_encode($result);
            exit;
        }
        
        $data['info'] = $this->event_mdl->get_event_info($id);

        if (!empty($data)) {
            
            $this->load->view('admin/layout/header.php');
            $this->load->view('admin/event_place_modify.php', $data);

		}else{
			$result['msg'] = "조회된 정보가 없습니다";
            echo json_encode($result);
            exit;
		}
	}

    //본문 첨부 이미지 저장
    public function upload_image() {
        if ($_FILES['file']['name']) {
            $config['upload_path'] =  "images/event/";
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name']     = $this->generate_unique_filename(); // 파일명 생성 함수 호출
            $config['overwrite']     = TRUE; // 기존 파일 덮어쓰기
            //$config['max_size'] = 2048; // 2MB

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = $this->upload->display_errors();
                echo json_encode(['error' => $error]);
            } else {
                $data = $this->upload->data();
                $file_path = base_url("images/event/".$data['file_name']);
                echo $file_path;
            }
        }
    }

    private function generate_unique_filename() {
        // 현재 시간과 랜덤 숫자를 조합하여 고유한 파일명 생성
        return date('YmdHis') . '_' . rand(1000, 9999);
    }

    //정렬순서 업데이트
    public function update_sort(){
        $id = $this->input->post('id', TRUE);
        $sort = $this->input->post('sort', TRUE);
        $table = "tp_monthly_events";

        update_sort($table, $id, $sort);
    }

    //사용여부 업데이트
    public function update_use_yn(){
        $id = $this->input->post('id', TRUE);
        $use_yn = $this->input->post('use_yn', TRUE);
        $table = "tp_monthly_events";

        update_use_yn($table, $id, $use_yn);
    }

    //작성글 등록,수정
	public function regi_event() {
        $result = array();

        if ($this->input->is_ajax_request()) 
        {
            // POST 데이터 받기
            $id = $this->input->post('id', FALSE);
            $title = $this->input->post('title', TRUE);
            $start_date = $this->input->post('start_date', TRUE);
            $end_date = $this->input->post('end_date', TRUE);
            $address = $this->input->post('address', TRUE);
            $address_detail = $this->input->post('address_detail', TRUE);
            $location = $this->input->post('location', TRUE);
            $content = $this->input->post('content', FALSE);  // XSS 필터링하지 않음
            $content_sub = $this->input->post('content_sub', FALSE);  // XSS 필터링하지 않음
            $tag = $this->input->post('tag', TRUE);
            
            $event = $this->event_mdl->get_event_info($id);

            if(empty($event) && $id != ''){
                $result['msg'] = "조회된 정보가 없습니다.";
                echo json_encode($result);
                exit;
            }

            // 대표 이미지(PC) 업로드 처리
            $banner_image_pc = null;
            if (!empty($_FILES['banner_image_pc']['name'])) 
            { 
                $config['upload_path']   = FCPATH . 'images/event/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $this->generate_unique_filename(); // 파일명 생성 함수 호출
                $config['overwrite']     = TRUE; // 기존 파일 덮어쓰기
                //$config['max_size'] = 2048; // 2MB

                $this->load->library('upload', $config);
                //config 초기화
                $this->upload->initialize($config);

                if ($this->upload->do_upload('banner_image_pc')) {

                    $banner = $this->upload->data();

                    $banner_image_pc = $banner['file_name'];

                } else {
                    $result['msg'] = $this->upload->display_errors();
                    echo json_encode($result);
                    return;
                }
            }
            else
            {
                $banner_image_pc = $event['banner_image_pc'];
            }

            // 대표 이미지(모바일) 업로드 처리
            $banner_image_mobile = null;
            if (!empty($_FILES['banner_image_mobile']['name'])) 
            { 
                $config['upload_path']   = FCPATH . 'images/event/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $this->generate_unique_filename(); // 파일명 생성 함수 호출
                $config['overwrite']     = TRUE; // 기존 파일 덮어쓰기
                //$config['max_size'] = 2048; // 2MB

                $this->load->library('upload', $config);
                //config 초기화
                $this->upload->initialize($config);

                if ($this->upload->do_upload('banner_image_mobile')) {

                    $banner = $this->upload->data();

                    $banner_image_mobile = $banner['file_name'];

                } else {
                    $result['msg'] = $this->upload->display_errors();
                    echo json_encode($result);
                    return;
                }
            }
            else
            {
                $banner_image_mobile = $event['banner_image_mobile'];
            }

            // 썸네일 업로드 처리
            $thumbnail_file = null;
            if (!empty($_FILES['thumbnail']['name'])) 
            { 
                $config['upload_path']   = FCPATH . 'images/event/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $this->generate_unique_filename(); // 파일명 생성 함수 호출
                $config['overwrite']     = TRUE; // 기존 파일 덮어쓰기
                //$config['max_size'] = 2048; // 2MB

                $this->load->library('upload', $config);
                //config 초기화
                $this->upload->initialize($config);

                if ($this->upload->do_upload('thumbnail')) {

                    $thumbnail_data = $this->upload->data();

                    $thumbnail_file = $thumbnail_data['file_name'];

                } else {
                    $result['msg'] = $this->upload->display_errors();
                    echo json_encode($result);
                    return;
                }
            }
            else
            {
                $thumbnail_file = $event['thumbnail'];
            }

            //데이터베이스에 저장
            $data = array(
                'title'                 => $title,
                'banner_image_mobile'   => $banner_image_mobile,
                'banner_image_pc'       => $banner_image_pc,
                'start_date'            => $start_date,
                'end_date'              => $end_date,
                'address'               => $address,
                'address_detail'        => $address_detail,
                'location'              => $location,
                'thumbnail'             => $thumbnail_file,
                'content'               => $content,
                'content_sub'           => $content_sub,
                'tag'                   => $tag,
                'sort'                  => 1,
                'regdate'               => date('Y-m-d H:i:s'),
            );

            //id값 있으면 update
            if(!empty($id))
            {

                $res = $this->event_mdl->update_event($id, $data);

                if($res)
                {
                    $result['msg'] = "수정되었습니다";
                }
                else
                {
                    $result['msg'] = "수정 실패하였습니다";
                }
            }
            //id값 없으면 insert
            else
            {
                $data['use_yn'] = 'N'; //새 행사 등록시 비노출로 저장
                $res = $this->event_mdl->insert_event($data);

                if($res)
                {
                    $result['msg'] = "저장되었습니다";
                }
                else
                {
                    $result['msg'] = "저장 실패하였습니다";
                }
            }
        }else{
            $result['msg'] = "입력된 정보가 없습니다.";
        }

        echo json_encode($result);
        exit;
    }

    //행사일정 삭제
    public function event_delete()
    {
        $id = $this->input->post('id', TRUE);

        $result = array();
        $data = array();

        if(empty($id))
        {
            $result['msg'] = "id가 없습니다";
            json_encode($result);
            exit;
        }

        $info = $this->event_mdl->get_event_info($id);

        if (!empty($info))
        {
            //delete헬퍼
            $res = delete_record('tp_monthly_events', $id);

            if($res == true)
            {
                $result['code'] = "0000";
                $result['msg'] = "삭제되었습니다.";
            }else{
                $result['code'] = "9999";
                $result['msg'] = "처리중 에러가 발생하였습니다";
            }
        }else{
            $result['code'] = "9999";
            $result['msg'] = "조회된 정보가 없습니다";
        }
        echo json_encode($result);
        exit;
    }
}
