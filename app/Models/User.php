<?php

namespace App\Models;

use App\Core\Model; 
use Flight;

class User extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getUsers()
	{
		return $this->db->table('users')
			->getAll();
	}
	
	public function getUserById($id)
	{
		return $this->db->select([
				'users.*',
				'users_groups.id AS g_id',
				'users_groups.name AS g_name',
				'users_status.id AS s_id',
				'users_status.name AS s_name'
			])
			->table('users')
			->leftJoin(
				'users_groups',
				'users.group_id',
				'=',
				'users_groups.id'
			)
			->leftJoin(
				'users_status',
				'users.status_id',
				'=',
				'users_status.id'
			)
			->where(['users.id' => $id])
			->get();
	}

	public function getAdmins()
	{

		return $this->db->table('users')
		->leftJoin('users_groups','users.group_id', '=', 'users_groups.id')
		->leftJoin('users_status','users.status_id', '=', 'users_status.id')
		->where([
			
				'users.group_id' => 1,
				'users.status_id' => 1

		])
		->getAll();

	}
	
	public function addUser()
	{
		$data = Flight::request()->data->getData();
		
		$this->db->table('users')
			->insert([
				'id' => null,
				'first_name' => null,
				'second_name' => null,
				'last_name' => null,
				'login' => trim($data['login']),
				'password' => password_hash(trim($data['password']), PASSWORD_DEFAULT),
				'group_id' => 2,
				'status_id' => 1,
				'created_at' => (new \DateTime())->format('Y-m-d H:i:s'),
				'address' => null,
				'ip' => Flight::request()->ip, //$data['ip'], // пришло с формы
				'updated_at' => null, // в момент изменения профиля
				'visited_at' => null // в ммент выхода
		]);
	}
	
	
}