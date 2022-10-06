<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		switch ($_SERVER['SERVER_PORT'])
		{
			case '443':
			$data = [
				'islamic_date' => islamic_date(),
				// 'weather_widget' => weather_widget()
			];
			$this->load->view('welcome_message', $data);
			break;

			default:
			$this->load->view('welcome_message_http');
			break;
		}
	}

	public function phpinfo()
	{
		switch ($_SERVER['SERVER_PORT'])
		{
			case '443':
			phpinfo();
			break;

			default:
			redirect($this->index(),'refresh');
			break;
		}
	}
}
