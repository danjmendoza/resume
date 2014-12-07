<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Website {

	public function action_index()
	{
		$this->view = View::factory('bio');
	}

} // End Welcome
