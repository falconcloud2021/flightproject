<?php
namespace App\Models;

use App\Core\Model;
use App\Helpers\Upload;
use Flight;

class Product extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getProducts()
	{
		return $this->db->table('products')
			->getAll();
	}
	
	public function getProductById($id)
	{
		return $this->db->select('products.*, categories.id as cat_id, categories.title as cat_title')
			->table('products')
			->leftJoin('categories', 'categories.id', '=', 'products.category_id')
			->where(['products.id' => $id])
			->get();
	}

	public function editItem($id)
	{
		$data = Flight::request()->data->getData();
		$image = Flight::request()->files->getData()['img']['name'];
		
		if (isset($image)) {
			$imgResult = (new Upload($_FILES['img']))->getResult();
			
			if ($imgResult['type'] == 'success') {
				$data['img'] = $image;
			}
		}
		
		return $this->db->table('products')
			->where(['id' => $id])
			->update($data);
	}

	//public function newProductUnit()
	//{
	//	return $this->db->table('products')
	//		->where(['id' => $id])
	//		->insert();
	//}

	public function deleteProductById($id)
	{
		return $this->db->table('products')
			->where(['id' => $id])
			->delete();
	}
}