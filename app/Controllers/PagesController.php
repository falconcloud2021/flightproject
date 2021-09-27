<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Product;
use Flight;

class PagesController
{
	public function index()
	{
		Flight::render('index');
	}
	
	public function about()
	{
		Flight::render('about');
	}
	
	public function productList()
	{
		$products = (new Product())->getProducts();
		
		Flight::render('product_list', [
			'products' => $products
		]);
	}
	
	public function productItem($id = 0)
	{
		$product = (new Product())->getProductById($id);
		
		Flight::render('product_item', [
			'product' => $product
		]);
	}
	
	public function contacts()
	{
		// $contacts = (new Product())->getContacts();
		
		Flight::render('contacts');
	}

	public function blog()
	{
		Flight::render('blog');
	}


	public function login()
	{
	
		if(Flight::request()->method == 'POST')
		{
			$users = (new User())->getAdmins();

			$data = Flight::request()->data;
			
			foreach ($users as $user) 
			{
				if($user->login == $data->login and $user->password == $data->password)
				{
					
					$_SESSION['user'] = $user;
					break;
				}
			}
			header('Location: /admin/dashboard');
			exit;
		}

			Flight::render('admin.login');
	}
			
		public function logout()
		{
			session_unset();
			session_destroy();
			header('Location: /admin/login');
			exit;

		}


}