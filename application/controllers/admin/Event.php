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

    //행사일정 리스트
	public function list()
    {
        $data = array();
        $data['list'] = $this->event_mdl->get_event_list();
        
        $this->load->view('admin/layout/header.php');
		$this->load->view('admin/event_list.php', $data);
    }

    //행사일정 등록록화면 이동
	public function write()	
	{	
        $this->load->view('admin/layout/header.php');
        $this->load->view('admin/event_write.php');
	}

    //행사일정 수정화면 이동
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

    //작성글 등록,수정
	public function regi_event() {
        $result = array();

        if ($this->input->is_ajax_request()) 
        {
            // POST 데이터 받기
            $id = $this->input->post('id', FALSE);
            $p_id = $this->input->post('p_id', TRUE);        
            $c_id = $this->input->post('c_id', TRUE);        
            $category1 = $this->input->post('category1', TRUE); //대분류카테고리
            $category2 = $this->input->post('category2', TRUE); //소분류 카테고리
            $title = $this->input->post('title', TRUE);
            $content = $this->input->post('content', FALSE);  // XSS 필터링하지 않음
            $content_sub = $this->input->post('content_sub', FALSE);  // XSS 필터링하지 않음
            $article_by = $this->input->post('article_by', TRUE);  // XSS 필터링하지 않음
            $picture_by = $this->input->post('picture_by', TRUE);  // XSS 필터링하지 않음
            $place_by = $this->input->post('place_by', TRUE);  // XSS 필터링하지 않음
            $tag = $this->input->post('tag', TRUE);
            $event_banner_link = $this->input->post('event_banner_link', TRUE);
            $event_banner_text = $this->input->post('event_banner_text', FALSE);
            
            $article = $this->article_mdl->get_article_info($id);

            if(empty($article) && $id != ''){
                $result['msg'] = "조회된 정보가 없습니다.";
                echo json_encode($result);
                exit;
            }

            // 대표 이미지(PC) 업로드 처리
            $banner_image_pc = null;
            if (!empty($_FILES['banner_image_pc']['name'])) 
            { 
                $config['upload_path']   = FCPATH . 'images/article/';
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
                $banner_image_pc = $article['banner_image_pc'];
            }

            // 대표 이미지 업로드 처리
            $banner_image_mobile = null;
            if (!empty($_FILES['banner_image_mobile']['name'])) 
            { 
                $config['upload_path']   = FCPATH . 'images/article/';
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
                $banner_image_mobile = $article['banner_image_mobile'];
            }

            // 썸네일 업로드 처리
            $thumbnail_file = null;
            if (!empty($_FILES['thumbnail']['name'])) 
            { 
                $config['upload_path']   = FCPATH . 'images/article/';
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
                $thumbnail_file = $article['thumbnail'];
            }

            // 하단 이벤트배너 이미지 업로드 처리
            $event_banner_img = null;
            if (!empty($_FILES['event_banner_img']['name'])) 
            { 
                $config['upload_path']   = FCPATH . 'images/article/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $this->generate_unique_filename(); // 파일명 생성 함수 호출
                $config['overwrite']     = TRUE; // 기존 파일 덮어쓰기
                //$config['max_size'] = 2048; // 2MB

                $this->load->library('upload', $config);
                //config 초기화
                $this->upload->initialize($config);

                if ($this->upload->do_upload('event_banner_img')) {

                    $event_banner_data = $this->upload->data();

                    $event_banner_img = $event_banner_data['file_name'];

                } else {
                    $result['msg'] = $this->upload->display_errors();
                    echo json_encode($result);
                    return;
                }
            }
            else
            {
                $event_banner_img = $article['event_banner_img'];
            }

            //데이터베이스에 저장
            $data = array(
                'c_id'               => $c_id ? $c_id : 0,
                'p_id'               => $p_id ? $p_id : 0,
                'category1'          => $category1,
                'category2'          => $category2,
                'title'              => $title,
                'tag'                => $tag,
                'content'            => $content,
                'content_sub'        => $content_sub,
                'article_by'         => $article_by,
                'picture_by'         => $picture_by,
                'place_by'           => $place_by,
                'thumbnail'          => $thumbnail_file,
                'banner_image_pc'    => $banner_image_pc,
                'banner_image_mobile'=> $banner_image_mobile,
                'event_banner_img'   => $event_banner_img,
                'event_banner_link'  => $event_banner_link,
                'event_banner_text'  => $event_banner_text,
                'sort'               => 1,
                'regdate'            => date('Y-m-d H:i:s'),
            );

            //id값 있으면 update
            if(!empty($id))
            {

                $res = $this->article_mdl->update_articles($id, $data);

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
                $data['use_yn'] = 'N'; //새 글작성시 비노출로 저장 
                $res = $this->article_mdl->insert_articles($data);

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
}
