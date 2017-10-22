<?php
	Class Model_user extends CI_Model{
		function GetData($name){
			$data = $this->db->get('tagihan '. $name);
			return $data->result_array();
		}

		function getSHU() {
 			$query = $this->db->get('shu');
 			return $query->result_array();
 		}

 		function getAgenda() {
 			$query = $this->db->get('agenda');
 			return $query->result_array();
 		}
	}