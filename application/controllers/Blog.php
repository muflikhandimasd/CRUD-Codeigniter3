<?php

class Blog extends CI_Controller
{
	public function index()
	{
		$data['title']   = "This Is Title";
		$data['content'] = "This Is The Contents";
		$this->load->view('blog_view', $data);
	}
}
