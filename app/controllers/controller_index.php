<?php

class Controller_Index extends Controller
{
	function __construct()
	{
		$this->model = new Model_Index();
		$this->view = new View();
	}

	function action_index($page = null)
	{	
		$data = $this->model->get_albums($page);
		$sedata = $this->model->get_paginations($page);
		$this->view->generate('index_view.php', $data, $sedata);
	}
	function action_album($id = null)
	{	
		$data = $this->model->get_photos($id);
		$sedata = $this->model->get_album($id);
		$this->view->generate('album_view.php', $data, $sedata);
	}
}