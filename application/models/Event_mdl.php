<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_mdl extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //행사목록 조회
    public function get_events()
    {
        $this->db->select('*');
        $this->db->from('tp_monthly_events');
//        $this->db->group_start();
//        $this->db->where('MONTH(start_date)', $month);
//        $this->db->or_where('MONTH(end_date)', $month);
//        $this->db->group_end();
        $this->db->where('use_yn', 'Y');
        $this->db->order_by('sort', 'ASC');

        $query = $this->db->get();

        return $query->result_array();
    }

    //행사일정 날짜리스트 조회
    public function get_event_days()
    {
        $this->db->select('start_date, end_date');
        $this->db->from('tp_monthly_events');
        $query = $this->db->get();
        return $query->result_array();
    }
}