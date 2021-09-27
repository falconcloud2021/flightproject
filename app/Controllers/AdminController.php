<?php
namespace App\Controllers;
 
use App\Helpers\HashPassword;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product; 
use App\Models\Review; 
use App\Models\User;
use Flight;

class AdminController
{
	public function dashboard()
	{
		$id = $_SESSION['user']->id;
		
		$user = (new User())->getUserById($id);
		Flight::render('admin.dashboard', [
			'user' => $user
		]);
	}

	public function productAll()
	{
		$id = $_SESSION['user']->id;

		$products = (new Product())->getProducts();
		$user = (new User())->getUserById($id );
		Flight::render('admin.product_all', [
			'products' => $products,
			'user' => $user
		]);
	}

	public function productView($id = 0)
	{
		$product = (new Product())->getProductById($id);
		$user = (new User())->getUserById($_SESSION['user']->id);
		Flight::render('admin.product_view', [
			'product' => $product,
			'user' => $user
		]);
	}

	public function productUnit()
	{
		$id = $_SESSION['user']->id;

		$products = (new Product())->getProducts();
		$user = (new User())->getUserById($id );
		Flight::render('admin.product_unit', [
			'products' => $products,
			'user' => $user
		]);
	}
	
	//public function productUnit($id = 0)
	//{
	//	$id = $_SESSION['user']->id;

	//	if(Flight::request()->method == 'POST')
	//	{
	//		$result = (new Product())->newProductUnit($id);
	//		header('Location: /admin/product/unit/' . $id);
	//	}

	//	$products = (new Product())->getProductById($id);
	//	$user = (new User())->getUserById($id );
	//	Flight::render('admin.products', [
	//		'products' => $products,
	//		'user' => $user
	//	]);
	//}

	public function productEdit($id = 0)
	{
		$id = $_SESSION['user']->id;

		if(Flight::request()->method == 'POST')
		{
			$result = (new Product())->editItem($id);
			header('Location: /admin/product/edit/' . $id);
		}

		$product = (new Product())->getProductById($id);
		$categories = (new Category())->getCategories();
		$user = (new User())->getUserById($id );
		Flight::render('admin.product_edit', [
			'product' => $product,
			'categories' => $categories,
			'user' => $user
		]);
	}

	public function productDelete($id = 0)
	{
		$result = (new Product())->deleteProductById($id);
		Flight::redirect('/admin/products');
	}

	public function usersAll()
	{
		$id = $_SESSION['user']->id;

		$users = (new User())->getUsers();
		$user = (new User())->getUserById($id );
		
		Flight::render('admin.users_all', [
			'users' => $users,
			'user' => $user
		]);
	}

	public function userEdit($id = 0)
	{
		$id = $_SESSION['user']->id;

		$user = (new User())->getUserById($id); // тот кого редактируем
		$currentUser = (new User())->getUserById($_SESSION['user']->id);
		Flight::render('admin.user_edit', [
			'user' => $user,
			'currentUser' => $currentUser
		]);
	}
	
	public function userView($id = 0)
	{
	
	}
	
	public function profile()
	{	
		$id = $_SESSION['user']->id;

		$user = (new User())->getUserById($id);
		Flight::render('admin.profile', [
			'user' => $user
		]);
	}

	public function charts()
	{	
		$id = $_SESSION['user']->id;

		$user = (new User())->getUserById($id);
		Flight::render('admin.charts', [
			'user' => $user
		]);
	}

	public function tables()
	{	
		$id = $_SESSION['user']->id;
		
		$user = (new User())->getUserById($id);
		Flight::render('admin.tables', [
			'user' => $user
		]);
	}

	public function activity()
	{
		if (Flight::request()->method == 'POST')
		{
			$result = (new User())->addUser();
			Flight::redirect('/client/dashboard');
			
		}
		Flight::render('admin.activity');
	}

	public function login()
	{
	
		if(Flight::request()->method == 'POST')
		{
			$users = (new User())->getAdmins();

			$data = Flight::request()->data;
			
			//$hashPassword = new HashPassword();
			
			foreach ($users as $user) 
			{
				if($user->login == $data->login and password_verify($data->password, $user->password))
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
