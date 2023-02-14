<?php

class Product_model extends CI_Model
{

	public function getProduct()
	{
		// ! TABLE NAME = 'product
		$result = $this->db->get('product')->result();
		return $result;
	}

	function save($product_name, $product_price)
	{
		$data = array(
			'product_name' => $product_name,
			'product_price' => $product_price
		);
		$this->db->insert('product', $data);
	}

	function delete($product_id)
	{
		$this->db->delete('product', array('product_id' => $product_id));
	}

	function showById($product_id)
	{
		$query = $this->db->get_where('product', ['product_id' => $product_id])->row();
		return $query;
	}

	function update($product_id, $product_name, $product_price)
	{
		$data = array(
			'product_name' => $product_name,
			'product_price' => $product_price
		);
		$this->db->where('product_id', $product_id);
		$this->db->update('product', $data);
	}
}
