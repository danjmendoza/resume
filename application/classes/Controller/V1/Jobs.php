<?php

class Controller_V1_Jobs extends  Controller_Rest {

	public function action_index()
	{
		$jobs = array();
		foreach (Job::active_jobs() as $job_object)
		{
			$jobs[] = $job_object->as_array();
		}
		$this->rest_output($jobs);
	}

	public function action_update()
	{
		$job = Job::instance(ORM::factory('Job', $this->_params['id']))
							->update($this->_params)
							->save(TRUE);
		$job_array = $job->as_array();
		$output = array(
			'error'		=> FALSE,
			'message'	=> 'Job '.$job->title().' Updated',
			'job'		=> $job_array,
		);
		$this->rest_output($output);
	}

	public function action_create()
	{
		$post_data = $this->_params;

		$company = Company::create()
						->title($post_data['company']['title'])
						->website($post_data['company']['website'])
						->save();

		$job = Job::create()
					->title($post_data['title'])
					->link($post_data['link'])
					->coverletter($post_data['coverletter'])
					->status('active')
					->progress($post_data['progress'])
					->company($company)
					->save();

		$output = array(
			'error'		=> FALSE,
			'message'	=> 'Job Added',
			'job'		=> $job->as_array(),
		);
		$this->rest_output($output);
	}

	public function action_delete()
	{
		$job_id = $this->request->param('id');
		$job = Job::instance(ORM::factory('Job', $job_id));
		$job_array = $job->as_array();
		$job->delete();

		$output = array(
			'error'		=> FALSE,
			'message'	=> 'Job Removed',
			'job'		=> $job_array,
		);
		$this->rest_output($output);
	}

}