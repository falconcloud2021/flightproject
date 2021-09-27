<?php
namespace App\Core;

use Buki\Pdox;

class Model
{
	protected $db = null;

	public function __construct()
	{
		$this->db = new Pdox([
			'driver'    => DB_DRIVER,
			'host'      => DB_HOST,
			'database'  => DB_NAME,
			'username'  => DB_USER,
			'password'  => DB_PASS,
			'charset'   => DB_CHARSET,
			'collation' => DB_COLLATION,
			'prefix'    => DB_PREFIX
		]);
	}


}