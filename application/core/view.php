<?php
/**
* Главный класс вида, то-есть все страницы отображаются именно через эту функцию
*/
class View
{
	
	//public $template_view; // здесь можно указать общий вид по умолчанию.

	/**
	* Метод для генерации страничок и отображения данных юзеру
	*
	* @return void
	*/
	function generate($content_view, $template_view, $data = null)
	{
		//подключение вида
		include 'application/views/'.$template_view;
	}
}
