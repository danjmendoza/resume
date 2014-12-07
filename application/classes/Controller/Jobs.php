<?php

class Controller_Jobs extends  Controller_Website {

	public function action_index()
	{
		$jobs = Job::active_jobs();

		$this->view = View::factory('jobs')
							->set('jobs', $jobs);
	}

}