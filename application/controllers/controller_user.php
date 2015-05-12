<?php
/**
* Класс для связи модели и вида
*/
class Controller_User extends Controller 
{

	function __construct() 
	{
		$this->model = new Model_User();
		$this->view  = new View();
		$this->request = new Request();
	}

	/**
	*	Вывод главной странице
	*
	* @return void
	*/
	function action_index() 
	{
		//получаем данные из модели
		$data = $this->model->get_data();
		//вызываем вид
		$this->view->generate('user_view.php', 'template_view.php', $data);
	}

	/**
	*	Функция для удаления юзера
	* @return void
	*/
	function action_delete()
	{
		//получаем URL   
		$url = explode('/', $_SERVER['REQUEST_URI']);
		//получаем ID юзера
		$id  = $url[3];
		//удаляем юзера
		$this->model->delete_data($id);

		$data = $this->model->get_data();
		$this->view->generate('user_view.php', 'template_view.php', $data);
	}

	/**
	*	Функция для получения информация о юзере
	*
	* @return void
	*/
	function action_get_user()
	{
		//получаем адресс
		$url = explode('/', $_SERVER['REQUEST_URI']);
		//получаем ИД юзера из адресса
		$id  = $url[3];

		$data = $this->model->get_user($id);
		$this->view->generate('edit_view.php', 'template_view.php', $data);
	}

	/**
	*	Функция для редактирования юзера
	* 
	* @return void
	*/
	function action_edit()
	{
		//получаем ИД юзера из адресса
		$url   = explode('/', $_SERVER['REQUEST_URI']);
		$id    = $url[3];

		// создаем переменные для запроса в БД
		$user = array('name' => $this->request->getValue('edit_name'),
						'level' => $this->request->getValue('edit_level'),
						'age' => $this->request->getValue('edit_age'));

		//редактируем юзера
		$this->model->edit_data($id, $user);

		$data = $this->model->get_user();
		$this->view->generate('edit_view.php', 'template_view.php', $data);
	}

	/**
	*	Функция для добавления юзера
	*
	* @return void
	*/
	function action_add()
	{
		// создаем переменные для запроса к БД
		$name  = $this->request->getValue('name');
		$level = $this->request->getValue('level');
		$age   = $this->request->getValue('age');

		//добавляем юзера
		$this->model->add_data($name, $level, $age);

		$data = $this->model->get_data();
		$this->view->generate('user_view.php', 'template_view.php', $data);
	}
}