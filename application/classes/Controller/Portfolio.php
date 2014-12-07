<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Portfolio extends Controller_Website {

	/**
	 * Active Navigation Item
	 * @var string
	 */
	public $nav = 'portfolio';

	public function action_index()
	{
		$sites = Portfolio::instance()
					->sites();

		$this->view = View::factory('portfolio')
								->set('sites', $sites);
	}

}
