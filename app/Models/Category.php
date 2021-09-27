<?php


namespace App\Models;


use App\Core\Model;

class Category extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getCategories()
	{
		return $this->db->table('categories')
			->getAll();
	}
	
	public function getCategoryById($id)
	{
		return $this->db->table('categories')
			->where(['id' => $id])
			->get();
	}

}