<?php

require APPPATH . 'Libraries/REST_Controller.php ';

class product extends REST_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function index_get($id =0)
    {
        if (!empty($id))
        {
            $data = $this->db->get_where("products",['product_id' => $id])->result();
        } else {
            $data = $this->db->get("products")->result();
        }
        $this->response($data,REST_Controller :: HTTP_OK);
    }

    function index_post() {
        $data = array(
            'product_id'       =>  $this->input->post('product_id'),
            // 'name'      =>  $this->input->post('nama'),
            // 'price'      =>  $this->input->post('harga'),
            // 'image'      =>  $this->input->post('gambar'),
            'description'=>  $this->input->post('deskripsi'));
        $insert = $this->db->insert('products', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
 ?>