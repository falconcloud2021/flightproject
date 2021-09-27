<?php
namespace App\Models;

use App\Core\Model;

class Review extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getReviews()
	{
		return $this->db->table('reviews')
			->getAll();
	}
	
	public function getReviewById($id)
	{
		return $this->db->table('rewiews')
			->where(['id' => $id])
			->get();
	}

}