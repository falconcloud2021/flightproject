<?php
namespace App\Models;

use App\Core\Model;

class Order extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getOrders()
	{
		return $this->db->table('orders')
			->getAll();
	}
	
	public function getOrderById($id)
	{
		return $this->db->table('orders')
			->where(['id' => $id])
			->get();
	}

}