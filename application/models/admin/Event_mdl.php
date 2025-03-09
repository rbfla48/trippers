<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_mdl extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    //구석구석남해 행사일정 리스트
    public function get_event_list() 
    {
        $this->db->select('*');
        $this->db->from('tp_monthly_events tme');
        $this->db->where('type', 'N');
        $this->db->order_by('tme.id', 'DESC');

        $query = $this->db->get();

        return $query->result_array();
    }

    //마이굿플레이스 행사일정 리스트
    public function get_place_events() 
    {
        $this->db->select('*');
        $this->db->from('tp_monthly_events tme');
        $this->db->where('type', 'P');
        $this->db->order_by('tme.id', 'DESC');

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

    //행사 수정
    public function update_event($idx, $data) {
        $this->db->trans_begin();

        $this->db->where('id', $idx);
        $this->db->update('tp_monthly_events', $data);

        if ($this->db->trans_status() === FALSE) {
            // 오류 발생 시 롤백
            $this->db->trans_rollback();
            return false;
        } else {
            // 성공 시 커밋
            $this->db->trans_commit();
            return true;
        }

    }

    //행사 등록
    public function insert_event($data) {
        $this->db->trans_begin();

        $this->db->insert('tp_monthly_events', $data);

        if ($this->db->trans_status() === FALSE) {
            // 오류 발생 시 롤백
            $this->db->trans_rollback();
            return false;
        } else {
            // 성공 시 커밋
            $this->db->trans_commit();
            return true;
        }
    }
}