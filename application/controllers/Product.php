<?php

class Product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('product_model', 'product');
	}

	function index()
	{
		$data['products'] = $this->product->getProduct();
		$this->load->view('product_view', $data);
	}

	function add_new()
	{
		$this->load->view('add_product_view');
	}

	function edit($product_id)
	{
		// ! CARA 1
		$result = $this->product->showById($product_id);
		$data = [
			'product_id' => $result->product_id,
			'product_name' => $result->product_name,
			'product_price' => $result->product_price
		];
		$this->load->view('edit_product_view', $data);

		// ! CARA 2
		// if ($result->num_rows() > 0) {
		// 	$i = $result->row_array();
		// 	$data = array(
		// 		'product_id'    => $i['product_id'],
		// 		'product_name'  => $i['product_name'],
		// 		'product_price' => $i['product_price']
		// 	);
		// 	$this->load->view('edit_product_view', $data);
		// } else {
		// 	echo "Data Was Not Found";
		// }
	}

	function update()
	{
		$product_id = $this->input->post('product_id');
		$product_name = $this->input->post('product_name');
		$product_price = $this->input->post('product_price');
		$this->product->update($product_id, $product_name, $product_price);
		redirect('product');
	}


	function save()
	{
		$product_name = $this->input->post('product_name');
		$product_price = $this->input->post('product_price');
		$this->product->save($product_name, $product_price);
		redirect('product');
	}

	function delete($product_id)
	{
		$this->product->delete($product_id);
		redirect('product');
	}
}
