<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
* 
*/
class MY_Controller extends CI_Controller
{
	private $default_view;
	private $judul = 'Admin';

	public function __construct()
	{
		parent::__construct();
		if (!$this->autentifikasi->sudah_login())
			redirect(site_url('user/login'));
		if (!$this->autentifikasi->role(array('admin'))) redirect (site_url('user/login'));

		$this->default_view = $this->load->_ci_view_path;
		$this->load->_ci_view_path = $this->default_view.'admin/';
		$this->template->use_asset();
	}

	public function default_meta(){
		$this->template->set_css(array('jquery.mobile-1.2.0.min','myadmin'))->set_js(array('jquery-1.7.2.min','jquery.mobile-1.2.0.min','myadmin'))->set_judul($this->judul);
	}

	public function set_judul($judul = ''){
		$this->judul = $this->judul.'| '.$judul;
		return $this;
	}

	public function _view($view,$data){
		$this->load->view('header',$data);
		$this->load->view($view,$data);
		$this->load->view('footer',$data);
	}

	protected function _modal($view,$data){
		$this->load->view('header',$data);
		$this->load->view($view,$data);
		$this->load->view('footer',$data);
	}
}
?>