<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Flight;

class UserController  
{
	public function dashboard()
	{
		$id = $_SESSION['user']->id;

		$user = (new User())->getUserById($id);
		Flight::render('user.dashboard', [
			'user' => $user
		]);
	}
	
	public function basket()
	{
		$id = $_SESSION['user']->id;

		$user = (new User())->getUserById($id);
		Flight::render('user.basket', [
			'user' => $user
		]);
	}

	public function productAll()
	{
		$id = $_SESSION['user']->id;

		$products = (new Product())->getProducts();
		
		Flight::render('user.product_all', [
			'products' => $products,
			'user' => $user
		]);
	}

	
	public function registers()
	{
		$users = (new User())->getUsers();
		
		Flight::render('user.profile', [
			'users' => $users
		]);
	}

	
	
	public function productUnit($id = 0)
	{
		$products = (new Product())->getProductById($id);
		
		Flight::render('user.product_unit', [
			'products' => $products
		]);
	}

	public function productEdit($id = 0)
	{
		if(Flight::request()->method == 'POST')
		{
			$result = (new Pdoduct())->editItem($id);
			header('Location: /user/product/' . $id);
		}

		$product = (new Product())->getProductById($id);
		
		Flight::render('user.product_edit', [
			'product' => $product
		]);

	}

	public function productDelete($id = 0)
	{
		$products = (new Product())->getProductById($id);
		
		Flight::render('user.product_unit', [
			'products' => $products
		]);
	}

	public function profile()
	{		
		Flight::render('user.profile');
	}

	public function charts()
	{		
		Flight::render('user.charts');
	}

	public function tables()
	{		
		Flight::render('user.tables');

	}

	public function login()
	{	
		if(Flight::request()->method == 'POST')
		{
			$users = (new User())->getUsers();

			$data = Flight::request()->data;
			
			foreach ($users as $user) 
			{
				if($user->login == $data->login and $user->password == $data->password)
				{
					
					$_SESSION['user'] = $user;
					break;
				}
			}
			header('Location: /user/dashboard');
			exit;
		}
			Flight::render('user.login');
	}
		
	public function logout()
	{
		session_unset();
		session_destroy();
		header('Location: /user/login');
		exit;
	}

}
