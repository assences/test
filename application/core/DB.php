<?php
abstract class DB
{
	/**
	* @var object $pdo судя по названию, это для соединения с БД используя PDO
	*/
	public $pdo;

	/**
	* Метод для соединения с БД	
	*
	* @return void
	*/
	public function connect()
	{
		// хост
		$host = "localhost";
		// юзер в Базе Данных
		$user = "mysql";
		// пароль от юзера
		$pass = "mysql";
		// имя БД
		$dbnm = "space";

		//подключение к БД используя PDO
		$this->pdo = new PDO("mysql:host=$host;dbname=$dbnm", $user, $pass)
					or die("Error to connect");
	}

	/**
	* Метод для поиска юзера через ID в таблице
	*
	* @param integer $id переменная содержащая ID пользователя
	* @return array $result содержит данные пользователя в ассоциативном массиве
	*/
	public function find($id)
	{
		//подготавливаем запрос к БД
		$query  = "SELECT * FROM users WHERE id = $id";

		// Выполняем запрос
		$result = $this->pdo->query($query)
						 or die ("Ошибка в запросе к БД<br>В файле: ".__FILE__."<br>В строке: ".__LINE__);

		return $result;
	}

	/**
	* Метод для вставки значений в таблицу
	*
	* @param string $name имя юзера
	* @param integer $level уровень юзверя
	* @param integer $age возраст хомячка
	* @return void
	*/
	public function insert($name, $level, $age)
	{
		//Выполняем сам запрос к БД
		$query = "INSERT INTO users(id, name, level, age) VALUES (null, '$name', $level, $age)";
		$this->pdo->exec($query) or die ("Ошибка в запросе к БД<br>В файле: ".__FILE__."<br>В строке: ".__LINE__);
	}

	/**
	* Метод для апдейта пользователя
	*
	* @param integer $id содержит ID пользователя
	* @param array $user (ассоциативный массив) содержит данные которые нужно внести в таблицу
	* @return void
	*/
	public function update($id, array $user)
	{
		$name = $user['name'];
		$level = $user['level'];
		$age  = $user['age'];
		// Выполняем запрос к БД
		$query = "UPDATE users SET name = '$name', level = $level, age = $age WHERE id = $id";
		$this->pdo->exec($query) 
				or die("Ошибка в запросе к БД<br>В файле: ".__FILE__."<br>В строке: ".__LINE__);
	}

	/**
	* Метод для удаления юзера
	*
	* @param integer $id содержит ID
	* @return void
	*/
	public function delete($id)
	{
		$query = "DELETE FROM users WHERE id = $id";
		$this->pdo->exec($query);
	}

	/**
	* Метод для отображения всех пользователей
	*
	* @return array $result ассоциативный массив, который содержит все данные из таблицы `users`
	*/
	public function select()
	{
		//создание запроса
		$query = "SELECT * FROM users";
		//выполнение запроса
		$result = $this->pdo->query($query);

		return $result;
	}
}