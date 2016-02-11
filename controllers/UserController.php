<?php

use Phalcon\Mvc\Controller;

class UserController extends Controller
{

	public function hello(){
		$users = User::getAll();
		foreach ($users as $user) {
			print_r($user->UserEmail);
		}
	}
}