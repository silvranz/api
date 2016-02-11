<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Resultset\Simple as Resultset;

class User extends Model
{
	public function getSource()
	{
		return 'UserBasic';
	}
    public static function getAll() {
		$sql = "CALL GetAllUser();";
		$robot = new User();
		return new Resultset(null, $robot, $robot->getReadConnection()->query($sql));
	}
}