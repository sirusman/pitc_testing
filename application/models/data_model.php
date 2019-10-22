<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model {

  public function add_comm_profile($rd_profile_type,$rd_type,$rd_host,$rd_port,$rd_user,$rd_pwd)
    {
			$data = array(
                        'profile_type_id'  	=>    $rd_profile_type,
                        'protocol_id'     	=>    $rd_type,
                        'host' 				=>    $rd_host,
                        'username'  		=>    $rd_user,
                        'password'		    =>    $rd_pwd,
                        'port'  			=>    $rd_port
                      );
            $this->db->insert('communication_profiles', $data);
			$insert_id = $this->db->insert_id();
		return  $insert_id;
    }

 public function add_meters($msn,$msn_type,$phase,$insert_lg)
    {
			$data = array(
                        'msn'  	=>    $msn,
                        'type'     	=>    $msn_type,
                        'phase' 				=>    $phase,
                        'test_info_id'  		=>    $insert_lg
                      );
            return $this->db->insert('meters', $data);
    }

  public function add_test_info($company_id,$login_id,$st_date,$rep,$rep_des,$version,$mode,$is_gprs,$is_rf,$is_plc,$is_wifi,$is_zigbee,$is_lan,$rd_idz,$wr_idz)
    {
			$data = array(
                        'company_id'   		=>    $company_id,
                        'login_id'     		=>    $login_id,
                        'start_datetime' 	=>  $st_date,
                        'company_rep'  		=>    $rep,
                        'company_rep_designation'  =>    $rep_des,
                        'mdc_version'  		=>    $version,
                        'read_profile_id'  	=>    $rd_idz,
                        'write_profile_id'  =>    $wr_idz,
                        'is_gprs'       	=>    $is_gprs,
                        'is_rf'       		=>    $is_rf,
                        'is_plc'       		=>    $is_plc,
                        'is_wifi'       	=>    $is_wifi,
                        'is_zigbee'         =>    $is_zigbee,
                        'is_lan'            =>    $is_lan
                      );
            $this->db->insert('test_info', $data);
			$insert_id = $this->db->insert_id();
		return  $insert_id;
    }

  public function get_info()
    {
        $sql = "SELECT * FROM connections";
        $query=$this->db->query($sql);
        $result=$query->result();
        return $result;
    }
	
}
