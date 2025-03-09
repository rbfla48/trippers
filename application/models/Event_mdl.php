<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_mdl extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //구석구석남해 행사목록 조회
    public function get_events()
    {
        $this->db->select('*');
        $this->db->from('tp_monthly_events');
//        $this->db->group_start();
//        $this->db->where('MONTH(start_date)', $month);
//        $this->db->or_where('MONTH(end_date)', $month);
//        $this->db->group_end();
        $this->db->where('use_yn', 'Y');
        $this->db->where('type', 'N');
        $this->db->order_by('sort', 'ASC');

        $query = $this->db->get();

        return $query->result_array();
    }

    //마이굿플레이스 행사목록 조회
    public function get_place_events($location='')
    {
        $this->db->select('*');
        $this->db->from('tp_monthly_events');
        $this->db->where('use_yn', 'Y');
        $this->db->where('type', 'P');
        if(!empty($location)){
            if($location == 'Sangju'){
                $location_name = "상주면";
            }else if($location == 'Mijo'){
                $location_name = "미조면";
            }else if($location == 'Idong'){
                $location_name = "이동면";
            }else if($location == 'Nam'){
                $location_name = "남면";
            }else if($location == 'Seo'){
                $location_name = "서면";
            }else if($location == 'Changseon'){
                $location_name = "창선면";
            }else if($location == 'Seolcheon'){
                $location_name = "설천면";
            }else if($location == 'Namhae'){
                $location_name = "남해읍";
            }else if($location == 'Gohyeon'){
                $location_name = "고현면";
            }else{
                $location_name = "삼동면";
            }
            $this->db->where('location', $location_name);
        }
        $this->db->order_by('sort', 'ASC');

        $query = $this->db->get();

        return $query->result_array();
    }

    //구석구석남해 행사일정 날짜리스트 조회
    public function get_event_days()
    {
        $this->db->select('start_date, end_date');
        $this->db->from('tp_monthly_events');
        $this->db->where('type', 'N');
        $query = $this->db->get();
        return $query->result_array();
    }

    //행사 정보
    public function get_event_info($id) 
    {
        $this->db->select('*');
        $this->db->from('tp_monthly_events tme');
        $this->db->where('id', $id);

        $query = $this->db->get();

        return $query->row_array();
    }
}