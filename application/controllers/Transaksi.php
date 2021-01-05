<?php
class Transaksi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
    
	public function index()
	{
        $this->load->model('TransaksiModel');
		$data['tr'] = $this->TransaksiModel->getAllTransaksi();
		// $this->load->view('templates/header',$data);
		// $this->load->view('karyawan/tentang',$data1);
		// $this->load->view('templates/footer');
		$this->load->view('templates/header');
		$this->load->view('transaksi', $data);
    }
    public function transaksiDetail($id)
    {
        $this->load->model('TransaksiModel', 'tr');
        $data['data'] = $this->tr->get_id();
        // var_dump($data);
        // die;
        $this->load->view('templates/header');
        $this->load->view('detailTransaksi', $data);
    }
    public function done()
    {
        $this->load->view('templates/header');
        $this->load->view('done');   
    }
}