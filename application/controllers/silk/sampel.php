
<?php 

defined('BASEPATH') OR exit ('No Direct script acces allowed');

class Sampel extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->BASE_API="http://localhost/tokobuah1/api";
		$this->load->library('curl');
		$this->load->helper('url');
		$this->load->helper('form');
		
	}

	public function index()
	{
		$data["products"] = json_decode($this->curl->simple_get($this->BASE_API.'/product'));
		$this->load->view("sampel/sampel_view",$data);
	}

	public function tambah()
	{
		$this->load->view("sampel/tambah");
	}

	public function aksi_tambah()
	{
		if(isset($_POST['submit'])){
            $data = array(
                'product_id'       =>  $this->input->post('id'),
                'name'      =>  $this->input->post('nama'),
                'price'      =>  $this->input->post('harga'),
                'image'      =>  $this->input->post('gambar'),
                'description'=>  $this->input->post('deskripsi'));
            $insert =  $this->curl->simple_post($this->BASE_API.'/product', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('silk/sampel');
        }else{
            redirect('silk/sampel/tambah');
        }
	}

}