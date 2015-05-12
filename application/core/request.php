<?php
/**
*	Класс который заменяет стандартный вызов $_REQUEST['что-то'];
*
* @author O.P.
* @version -0.1 fail:)
*/
class Request
{
	public $request;

	public function getValue($value)
	{
		return $this->request = $_REQUEST["$value"];
	}
}