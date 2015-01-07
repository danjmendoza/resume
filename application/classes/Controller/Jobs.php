<?php

class Controller_Jobs extends  Controller_Website {

	public function action_index()
	{
		$this->view = View::factory('jobs');
	}

}