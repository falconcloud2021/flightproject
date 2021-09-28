<?php
namespace App\Core;

use App\Controllers\PagesController;
use App\Controllers\AdminController;
use App\Controllers\UserController;
use Flight;
use Windwalker\Renderer\BladeRenderer; 

class Router
{
	public function __construct()
	{
		
		Flight::set('flight.views.path', 'app/Views');
		Flight::set('flight.views.extension', '.blade.php');
		
		Flight::map('render', function($page, $array = null){
			$paths = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'views';
			$renderer = new BladeRenderer($paths, ['cache_path' => $_SERVER['DOCUMENT_ROOT'] . '/resources/cache']);
			echo $renderer->render($page, $array);
		});
		
		$page = new PagesController();
		
		Flight::route('/', [$page, 'index']);
		
		Flight::route('/about', [$page, 'about']);		
		Flight::route('/product', [$page, 'productList']);
		Flight::route('/product/@id', [$page, 'productItem']);
		Flight::route('/contacts', [$page, 'contacts']);
		Flight::route('/blog', [$page, 'blog']);
		
		$admin = new AdminController();
		
		Flight::route('/admin', function () {
			Flight::redirect('/admin/login');
		});
		Flight::route('/admin/login', [$admin, 'login']);
		Flight::route('/admin/dashboard', [$admin, 'dashboard']);
		Flight::route('/admin/products', [$admin, 'productAll']);
		Flight::route('/admin/product/view/@id', [$admin, 'productView']);
		Flight::route('/admin/product/@id', [$admin, 'productUnit']);
		Flight::route('/admin/product/edit/@id', [$admin, 'productEdit']);
		Flight::route('/admin/product/delete/@id', [$admin, 'productDelete']);
		Flight::route('/admin/users_all', [$admin, 'usersAll']);
		Flight::route('/admin/user/add', [$admin, 'userAdd']);
		Flight::route('/admin/user/view/@id', [$admin, 'userView']);
		Flight::route('/admin/user/edit/@id', [$admin, 'userEdit']);
		Flight::route('/admin/user/delete/@id', [$admin, 'userDelete']);
		Flight::route('/admin/profile', [$admin, 'profile']);
		
		Flight::route('/admin/charts', [$admin, 'charts']);		
		Flight::route('/admin/tables', [$admin, 'tables']);
		Flight::route('/admin/activity', [$admin, 'activity']);
		//Flight::route('/admin/activity/@id', [$admin, 'activityActivation']);
		Flight::route('/admin/logout', [$admin, 'logout']);
		
		$userroom = new UserController();

		Flight::route('/user/login', [$userroom, 'login']);
		Flight::route('/user/dashboard', [$userroom, 'dashboard']);
		Flight::route('/user/basket', [$userroom, 'basket']);
		Flight::route('/user/product', [$userroom, 'productAll']);
		Flight::route('/user/product/@id', [$userroom, 'productUnit']);
		Flight::route('/user/product/edit/@id', [$userroom, 'productEdit']);
		Flight::route('/user/product/delete/!id', [$userroom, 'producteDelete']);
		Flight::route('/user/editprofile/@id', [$userroom, 'profile']);
		Flight::route('/user/view/@id', [$userroom, 'view']);
		Flight::route('/user/charts', [$userroom, 'charts']);
		Flight::route('/user/tables', [$userroom, 'tables']);
		Flight::route('/user/logout', [$userroom, 'login']);

	}
}