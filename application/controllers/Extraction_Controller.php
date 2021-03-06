<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extraction_Controller extends CI_Controller
{
	public function index()
	{
	}

	private function insert_log($activity, $module, $id_project)
	{
		$this->load->model("User_Model");
		$this->User_Model->insert_log($activity, $module, $id_project);
	}

	public function add_question_extraction()
	{
		$id_project = null;
		try {
			$this->logged_in();
			$id = $this->input->post('id');
			$desc = $this->input->post('desc');
			$type = $this->input->post('type');
			$id_project = $this->input->post('id_project');
			$this->validate_level($id_project, array(1, 3));
			$this->load->model("Extraction_Model");

			$this->Extraction_Model->add_question_extraction($id, $desc, $type, $id_project);

			$activity = "Added question extraction " . $id;
			$this->insert_log($activity, 1, $id_project);

		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
			if (is_null($id_project) || empty($id_project)) {
				redirect(base_url());
			} else {
				redirect(base_url('planning/' . $id_project));
			}
		}
	}

	public function add_option()
	{
		$id_project = null;
		try {
			$this->logged_in();
			$id_qe = $this->input->post('id_qe');
			$desc = $this->input->post('desc');
			$id_project = $this->input->post('id_project');
			$this->validate_level($id_project, array(1, 3));
			$this->load->model("Extraction_Model");

			$this->Extraction_Model->add_option($id_qe, $desc, $id_project);

			$activity = "Added option to question extraction " . $id_qe;
			$this->insert_log($activity, 1, $id_project);

		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
			if (is_null($id_project) || empty($id_project)) {
				redirect(base_url());
			} else {
				redirect(base_url('planning/' . $id_project));
			}
		}
	}

	public function delete_extraction()
	{
		$id_project = null;
		try {
			$this->logged_in();
			$id = $this->input->post('id');
			$id_project = $this->input->post('id_project');
			$this->validate_level($id_project, array(1, 3));
			$this->load->model("Extraction_Model");

			$this->Extraction_Model->delete_extraction($id, $id_project);

			$activity = "Deleted question extraction " . $id;
			$this->insert_log($activity, 1, $id_project);

		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
			if (is_null($id_project) || empty($id_project)) {
				redirect(base_url());
			} else {
				redirect(base_url('planning/' . $id_project));
			}
		}
	}

	public function delete_option()
	{
		$id_project = null;
		try {
			$this->logged_in();
			$id_qe = $this->input->post('id_qe');
			$desc = $this->input->post('desc');
			$id_project = $this->input->post('id_project');
			$this->validate_level($id_project, array(1, 3));
			$this->load->model("Extraction_Model");

			$this->Extraction_Model->delete_option($id_qe, $desc, $id_project);

			$activity = "Deleted option to question extraction " . $id_qe;
			$this->insert_log($activity, 1, $id_project);

		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
			if (is_null($id_project) || empty($id_project)) {
				redirect(base_url());
			} else {
				redirect(base_url('planning/' . $id_project));
			}
		}
	}

	public function edit_de()
	{
		$id_project = null;
		try {
			$this->logged_in();
			$id = $this->input->post('id');
			$desc = $this->input->post('desc');
			$type = $this->input->post('type');
			$old_id = $this->input->post('old_id');
			$old_type = $this->input->post('old_type');
			$id_project = $this->input->post('id_project');
			$this->validate_level($id_project, array(1, 3));
			$this->load->model("Extraction_Model");

			$this->Extraction_Model->edit_de($id, $desc, $type, $old_id, $old_type, $id_project);

			$activity = "Edited question extraction " . $id;
			$this->insert_log($activity, 1, $id_project);

		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
			if (is_null($id_project) || empty($id_project)) {
				redirect(base_url());
			} else {
				redirect(base_url('planning/' . $id_project));
			}
		}
	}

	public function edit_option()
	{
		$id_project = null;
		try {
			$this->logged_in();
			$id_qe = $this->input->post('qe');
			$op = $this->input->post('now');
			$old_op = $this->input->post('old');
			$id_project = $this->input->post('id_project');
			$this->validate_level($id_project, array(1, 3));
			$this->load->model("Extraction_Model");

			$this->Extraction_Model->edit_option($id_qe, $op, $old_op, $id_project);

			$activity = "Edited option to question extraction" . $id_qe;
			$this->insert_log($activity, 1, $id_project);

		} catch (Exception $e) {
			$this->session->set_flashdata('error', $e->getMessage());
			if (is_null($id_project) || empty($id_project)) {
				redirect(base_url());
			} else {
				redirect(base_url('planning/' . $id_project));
			}
		}
	}

	private function logged_in()
	{
		if (!$this->session->logged_in) {
			redirect(base_url());
		}
	}

	private function validate_level($project_id, $levels)
	{
		$this->load->model("Project_Model");
		$res_level = $this->Project_Model->get_level($this->session->email, $project_id);

		foreach ($levels as $l) {
			if ($l == $res_level) {
				return;
			}
		}

		redirect(base_url());

	}

}
