<?php

class Controller_Main extends Controller
{
	public function action_index(): void
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}
}