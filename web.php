<?php

class Room {
	public $name;

	public function __construct($name) {
		$this->name = $name;
	}
}

class User {
		public $name;

		public function __construct($name) {
			$this->name = $name;
		}
	}


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	/*$room1 = new Room('Corner');
	$room2 = new Room('Tangen');
	$room3 = new Room('Markens');

	$rooms = array($room1, $room2, $room3);

	$user = new User('Kevin Benjamin Zeppo Adriaansen');
	*/

	$collection1 = '
	{
		"rooms": [
			{
				"id": 1,
				"name": "Corner"
			},
			{
				"id": 2,
				"name": "Tangen"
			},
			{
				"id": 3,
				"name": "Markens"
			}
		]
	}';

	$String = '
	{
		"user": [
			{
				"id": 1,
				"name": "Kevin Benjamin Zeppo Adriaansen"
			}
		]
	}';


	$rooms = json_decode($collection1, true);
	$user = json_decode($String, true);

	return view('sidebar', compact('rooms', 'user'));
});
