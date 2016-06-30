<?php

class Controller_Admin extends Controller
{
	function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}

	function action_index()
	{	
		$login = $this->model->login();
		if (@$_SESSION['login'] == 'on'){
			$data = $this->model->get_albums();
			$this->view->generate('admin_view.php', $data);
		}else{
			$this->view->generate('login_view.php', $login);
		}
	}

	function action_upload($id = null)
	{	
		if ($_SESSION['login'] == 'on'){
			$this->model->upload_photo($id);
			header('Location: /admin/');
		}else{
			$this->view->generate('login_view.php');
		}
	}

	function action_add()
	{	
		if ($_SESSION['login'] == 'on'){
			$this->model->add_album();
			header('Location: /admin/');
		}else{
			$this->view->generate('login_view.php');
		}
	}

	function action_delete($id = null)
	{	
		if ($_SESSION['login'] == 'on'){
			$this->model->delete_album($id);
			header('Location: /admin/');
		}else{
			$this->view->generate('login_view.php');
		}
	}

	public function action_albumssort($sort = null)
	{
		$data = $this->model->change_sort_albums($sort);
		header('Location: /admin/');

	}

	public function action_photossort($sort = null)
	{
		$data = $this->model->change_sort_photos($sort);
		header('Location: /admin/');
	}

	public function action_logout()
	{
		$this->model->logout();
		header('Location: /');
	}
}