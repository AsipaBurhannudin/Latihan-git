<?php
class Latihan1 extends CI_Controller
{
	public function index()
	{
		echo"Irasshaimase!, Shiawasena Gakushu Webprogramming<br>";
		echo"Selamat datang, Selamat Belajar Webprogramming<br>";
		//$this->load->view('view-latihan1');
	}
	public function penjumlahan($nil1, $nil2)
	{
		$this->load->model('Model_Latihan1');
		
		$data['nilai1'] = $nil1;
		$data['nilai2'] = $nil2;
		$data['hasil'] = $this->Model_Latihan1->jumlah($nil1, $nil2);

		$this->load->view('view-latihan', $data);
	}
}
