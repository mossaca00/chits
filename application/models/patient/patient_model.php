<?php

class Patient_model extends CI_model {

	public function searchPatient($pname) {
		
		$this->db->select('p.person_id, pid.identifier, pnm.given_name, pnm.middle_name, pnm.family_name, p.gender, p.birthdate');
		$this->db->from('patient_identifier pid');
		$this->db->join('person_name pnm', 'pid.patient_id = pnm.person_id', 'INNER');
		$this->db->join('person p', 'pid.patient_id = p.person_id', 'INNER');
		$this->db->like('pnm.given_name OR pnm.family_name', $pname);
		
		$query = $this->db->get();

		return ($query->num_rows() === 0) ? FALSE : $query;

	}

	public function view_patient($id) {

		
		
	}

}

