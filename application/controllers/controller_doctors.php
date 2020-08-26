<?php

class Controller_Doctors extends Controller
{
	public function __construct()
	{
		$this->model = new Model_Doctors();
		$this->view = new View();
	}
	
	public function action_index(): void
	{
		$data = $this->model->get_data();		
		$this->view->generate('doctors_view.php', 'template_view.php', $data);
	}
}
