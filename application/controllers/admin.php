<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
    } 
	public function index() {
		
		$this->load->view('login');
	}
	public function login() {
		$this->load->view('login');
	}
	public function loginAction() {
		
	}
	public function customer() {
		$this->load->view('admin/customer');
	}
	public function customerTambah(){
		$this->load->view('admin/customerForm');	
	}
	public function company() {
		$this->load->view('admin/company');
	}
	public function companyTambah(){
		$this->load->view('admin/companyForm');	
	}
	public function library() {
		$data['perpus'] = $this->Model_admin->getall();
		$this->load->view('admin/library', $data);
	}
	public function libraryTambah(){
		if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'judul' => $this->input->post('judul'),
				'penulis' => $this->input->post('penulis'),
				'kategori' => $this->input->post('kategori'),
				'bahasa' => $this->input->post('bahasa'),
				'status' => $this->input->post('status'),
				'deskripsi' => $this->input->post('deskripsi'),
            );
            
            $perpu_id = $this->Model_admin->add($params);
            redirect('admin/library');
        }
        else
        {            
            $this->load->view('admin/add');
        }
	}

	function edit($no_buku)
    {   
        // check if the perpu exists before trying to edit it
        $data['perpu'] = $this->Model_admin->getall($no_buku);
        
        if(isset($data['perpu']['no_buku']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'judul' => $this->input->post('judul'),
					'penulis' => $this->input->post('penulis'),
					'kategori' => $this->input->post('kategori'),
					'bahasa' => $this->input->post('bahasa'),
					'status' => $this->input->post('status'),
					'deskripsi' => $this->input->post('deskripsi'),
                );

                $this->Perpu_model->update($no_buku,$params);            
                redirect('admin/library');
            }
            else
            {
             $this->load->view('admin/edit',$data);
            }
        }
        else
            show_error('The perpu you are trying to edit does not exist.');
    } 

    function remove($no_buku)
    {
        $perpu = $this->Perpu_model->getall($no_buku);

        // check if the perpu exists before trying to delete it
        if(isset($perpu['no_buku']))
        {
            $this->Model_admin->delete($no_buku);
            redirect('admin/library');
        }
        else
            show_error('The perpu you are trying to delete does not exist.');
    }

	public function product() {
		$this->load->view('admin/product');
	}
	public function productTambah(){
		$this->load->view('admin/productForm');	
	}
	public function post(){
		$this->load->view('admin/posts');	
	}
}
