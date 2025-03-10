<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {

	public function __construct() {
        parent::__construct();
		//$this->load->library('session');
		$this->load->model('Event_mdl','event_mdl');
    }

	public function index()
	{
      $this->main();
	}

	public function main(){
		$data = array();
        
        //월 데이터가 없으면 현재월로 조회
        $month = $this->input->get('month') ?? date('m');
        
        //구석구석남해 행사리스트 조회
        $list = $this->event_mdl->get_events();

        //달력 아이콘 표기를 위한 행사날짜 리스트 조회
        $event_date_list = $this->event_mdl->get_event_days();
        //조회된 행사일정들 날짜범위 배열데이터 생성
        $event_dates = [];

        foreach ($event_date_list as $row) {
            // start_date와 end_date가 null이 아닌 경우만 처리
            if ($row['start_date'] && $row['end_date']) {
                $start = new DateTime($row['start_date']);
                $end = new DateTime($row['end_date']);
                $interval = new DateInterval('P1D'); // 하루씩 증가
                $daterange = new DatePeriod($start, $interval, $end->modify('+1 day'));

                // 각 날짜를 배열에 추가
                foreach ($daterange as $date) {
                    $event_dates[] = $date->format('Y-m-d');
                }
            }
        }

        //마이굿플레이스 행사리스트 조회
        $place_list = $this->event_mdl->get_place_events();

        $data['events'] = $list;
        $data['place_events'] = $place_list;
        $data['event_dates'] = json_encode($event_dates);//스크립트에서 인식할수 있게 json으로 전달
        $data['event_ranges'] = json_encode($list);

		$this->load->view('event_calendar.php',$data);
	}

    public function find_my_palce(){
        $data = array();
        $location = $this->input->post('location') ?? "Samdong";//마이굿플레이스 위치정보(기본값:삼동면)

        $data = $this->event_mdl->get_place_events($location);

        echo json_encode($data);
        exit;
    }

    //행사일정 
    public function event_info()
    {
        $data = array();

        $event_id = $this->input->get('id');

        if(!$event_id)
        {
            $data['msg'] = '잘못된 접근입니다.';
            echo json_encode($data);
            exit;
        }
        //행사정보 조회회
        $info = $this->event_mdl->get_event_info($event_id);

        if(!$info)
        {
            $data['msg'] = '조회된 정보가 없습니다.';
            echo json_encode($data);
            exit;
        }

        $data['info'] = $info;
        
        $this->load->view('eventDetail.php',$data);
    }
}
