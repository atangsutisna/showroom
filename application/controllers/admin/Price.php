<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends Admin_Controller 
{
    const DIR_VIEW = 'price';

    public function __construct()
	{
        parent::__construct();
        $this->load->model('Price_model', 'price');
    }

	public function new_form($id_product) 
	{
        $this->load->model('Produk_model', 'product');
        $product = $this->product->find_one($id_product);
        $prices = $this->price->find_all($id_product);

		$this->params['title']	= 'Price List';
        $this->params['form_action'] = 'admin/price/do_insert';
        $this->params['product'] = $product;
        $this->params['product_prices'] = $prices;
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
    }
    
    public function do_insert()
    {
		$this->form_validation->set_rules('product_type','Tipe','required',
			array(	'required'	=> 'Tipe harus diisi'));
        $this->form_validation->set_rules('price','Harga','required',
            array(	'required'	=> 'Harga harus diisi'));
        $id_product = $this->input->post('id_product');
        if($this->form_validation->run() === FALSE) {
            $this->reg_form($id_product);
        } else {
            $price = [
                'product_id' => $id_product,
                'product_type' => $this->input->post('product_type'),
                'price' => $this->input->post('price'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];          
            $this->price->insert($price);  
			$this->session->set_flashdata('info','Harga telah ditambah');
			redirect('admin/price/new_form/'. $id_product);
        }            
    }

    public function do_delete($id_product, $id_price)
    {
        $price = $this->price->find_one($id_price);
        if ($price == NULL) {
            show_404();
        }

        $this->price->delete($id_price);
        $this->session->set_flashdata('info','Harga telah ditambah');
        redirect('admin/price/new_form/'. $id_product);
    }

}