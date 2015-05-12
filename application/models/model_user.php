<?php
/**
* Модель обработки информации и подключение к БД используя PDO
*
* 
*/
class Model_User extends Model
{
	/**
	* @var object $pdo свойство для соединения с БД используя PDO
	*/
	public $pdo;

	/**
	* Функция для отображения данных из БД
	*
	* @return array $result  возвращает данные в виде ассоциативного массива из таблицы `users`
	*/
	public function get_data() 
	{
		$pdo = new Model();
		return $pdo->select();
	}

	/**
	* Функция для удаления юзеров из Базы данных
	*
	* @return void
	*/
	public function delete_data($id) 
	{
		$pdo = new Model();
		$pdo->delete($id);
	}

	/**
	* Функция для получения данных юзера по ЕГО ID
	*
	* @return array $result  aссоциативный массив с данными юзера
	*/
	public function get_user($id) 
	{
		$pdo = new Model();
		return $pdo->find($id);
	}

	/**
	*	Функция для редактирование данных о юзере
	*
	* @return void
	*/
	public function edit_data($id, array $user)
	{
		$pdo = new Model();
		$pdo->update($id, $user);
	}

	/**
	*	Функция для добавления юзера
	*
	* @return void
	*/
	public function add_data($name, $level, $age)
	{
		$pdo = new Model();
		$pdo->insert($name, $level, $age);
	}
}