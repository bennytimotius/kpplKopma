<?php
	Class Model_admin extends CI_Model{
		function addAnggota($data_insert){
                  $this->db->insert('anggota', $data_insert);
                 }
                function addAgenda($data_insert){
                  $this->db->insert('agenda', $data_insert);
                 }
                function addSimpanan($data_insert){
                  $this->db->insert('tagihan', $data_insert);
                 }
                function addSHU($data_insert){
                  $this->db->insert('shu', $data_insert);
                }
		function getAnggota() {
 			$query = $this->db->get('anggota');
 			return $query->result_array();
 		}

 		function getAgenda() {
 			$data = $this->db->get('agenda');
			return $data->result_array();
 		}

 		function getSimpanan() {
 			$data = $this->db->get('tagihan');
			return $data->result_array();
 		}

 		function getSHU() {
 			$data = $this->db->get('shu');
			return $data->result_array();
 		}

 		function delete_anggota($item){
			 $this->db->where_in('id', $item);
			 $this->db->delete('anggota');
		}

		function delete_simpanan($item){
			 $this->db->where_in('id', $item);
			 $this->db->delete('tagihan');
		}

		function delete_agenda($item){
			 $this->db->where_in('id', $item);
			 $this->db->delete('agenda');
		}

		function delete_shu($item){
			 $this->db->where_in('id', $item);
			 $this->db->delete('shu');
		}

		public function update_profile($user, $data){
		    $this->db->where('username', $user);
		    return $this->db->update('anggota', $data);
		}

		public function update_agenda($user, $data){
		    $this->db->where('name', $user);
		    return $this->db->update('agenda', $data);
		}

		public function update_shu($user, $data){
		    $this->db->where('name', $user);
		    return $this->db->update('shu', $data);
		}

		public function update_simpanan($user, $data){
		    $this->db->where('pemicu', $user);
		    return $this->db->update('tagihan', $data);
		}

 		public function GetProfile($name){
			$data = $this->db->get('anggota '. $name);
			return $data->result_array();
		}
	}
