<?php
/**
*	Страница ошибки 404
*/
class Controller_404 extends Controller
{
	/**
	*	Функция для отображения страницы
	*
	* @return void
	*/
	function action_index()
	{
		//вызов Вида
		$this->view->generate('404_view.php', 'template_view.php');
	}

}
