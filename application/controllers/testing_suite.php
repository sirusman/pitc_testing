<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing_suite extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	
	public function initialize_mdc_test()
	{
		$this->load->view('mdc-interoperability-test');
	}
	
	public function start_mdc_test()
	{
		$login_id = 1;
		$company_id =   $this->input->post('company');
        $rep        =   $this->input->post('rep');
        $rep_des    =   $this->input->post('rep_des');
        $version	=   $this->input->post('version');
        $mode	    =   $this->input->post('mode');
        $msn	    =   $this->input->post('msn');
        $msn_type   =   $this->input->post('msn_type');
		
		$is_gprs   =   $this->input->post('is_gprs');
		$is_rf   =   $this->input->post('is_rf');
		$is_plc   =   $this->input->post('is_plc');
		$is_wifi   =   $this->input->post('is_wifi');
		$is_zigbee   =   $this->input->post('is_zigbee');
		$is_lan   =   $this->input->post('is_lan');

        $rd_profile_type    =   $this->input->post('rd_profile_type');
        $rd_protocol    =   $this->input->post('rd_protocol');
        $rd_host    =   $this->input->post('rd_host');
		$rd_port    =   $this->input->post('rd_port');
		$rd_user    =   $this->input->post('rd_user');
		$rd_pwd     =   $this->input->post('rd_pwd');
		
		$wr_profile_type   =   $this->input->post('wr_profile_type');
		$wr_protocol   =   $this->input->post('wr_protocol');
		$wr_host   =   $this->input->post('wr_host');
		$wr_port   =   $this->input->post('wr_port');
		$wr_user   =   $this->input->post('wr_user');
		$wr_pwd    =   $this->input->post('wr_pwd');
		
		$st_date = date('Y-m-d H:i:s');
		
		$rd_idz = $this->data_model->add_comm_profile($rd_profile_type,$rd_protocol,$rd_host,$rd_port,$rd_user,$rd_pwd);
		$wr_idz = $this->data_model->add_comm_profile($wr_profile_type,$wr_protocol,$wr_host,$wr_port,$wr_user,$wr_pwd);
		$insert_lg = $this->data_model->add_test_info($company_id,$login_id,$st_date,$rep,$rep_des,$version,$mode,$is_gprs,$is_rf,$is_plc,$is_wifi,$is_zigbee,$is_lan,$rd_idz,$wr_idz);
		for($i=0;$i < sizeof($msn); $i++){
			if($msn_type[$i]==1)
				$phase = 1;
			else
				$phase = 3;
			
			if($msn[$i]=='')
				continue;
			$meters = $this->data_model->add_meters($msn[$i],$msn_type[$i],$phase,$insert_lg);
		}
		if($insert_lg){
			$this->session->set_userdata('test_id', $insert_lg);
			redirect(site_url().'/testing_suite/choose_test_cases', 'refresh');
		}
	}
	
	public function initialize_mdm_test()
	{
		$this->load->view('initialize_mdm_test');
	}
	
	public function choose_test_cases()
	{
		$this->load->view('choose_test_cases');
	}
	
}
