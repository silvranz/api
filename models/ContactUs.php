<?php

use Phalcon\Mvc\Model;

class ContactUs extends Model
{
	public function getSource()
	{
		return 'contactus';
	}
    /*
	public static function getAll() {
		$sql = "CALL GetAllUser();";
		$robot = new ContactUs();
		return new Resultset(null, $robot, $robot->getReadConnection()->query($sql));
	}
	public static function getByName($name = '') {
		$sql = "CALL `by-name`('$name');";
		$robot = new Robots();
		return new Resultset(null, $robot, $robot->getReadConnection()->query($sql));
	}
	public static function getById($id = '') {
		$sql = "CALL `by-id`('$id');";
		$robot = new Robots();
		return new Resultset(null, $robot, $robot->getReadConnection()->query($sql));
	}
	
	public static function addRobot($robot = NULL) {
		$sql = "CALL `new-robot`('$robot->name', '$robot->type', '$robot->year');";
		$robot = new Robots();
		return new Resultset(null, $robot, $robot->getReadConnection()->query($sql));
	}
	public static function updateRobot($robot = NULL, $id = NULL) {
		$sql = "CALL `update-robot`('$id', '$robot->name');";
		$robot = new Robots();
		return new Resultset(null, $robot, $robot->getReadConnection()->query($sql));
	}
	public static function deleteRobot($id = NULL) {
		$sql = "CALL `delete-robot`('$id');";
		$robot = new Robots();
		return new Resultset(null, $robot, $robot->getReadConnection()->query($sql));
	}*/
}