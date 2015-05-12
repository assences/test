<?php
/**
* класс-родитель для обработки информации и последующей передачи ее в контреллер
* 
*/
include 'DB.php';
class Model extends DB
{

	public function __construct()
	{
		$this->connect();
	}
	/**
	* Метод для выборки данных
	*
	*@return void
	*/


	public function get_data()
	{
		// todo
	}
}