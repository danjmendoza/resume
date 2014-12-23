<?php

class Controller_V1_Jobs extends  RESTful_Controller {

	public function action_get()
	{
		$jobs = array();
		foreach (Job::active_jobs() as $job_object)
		{
			$jobs[] = $job_object->as_array();
		}
		echo json_encode($jobs);
	}

	public function action_update()
	{
		$job_data = $this->request->body();
		var_dump($job_data);
		$job_array = Job::instance(ORM::factory('Job', $job_data->id))
							->save(TRUE)
							->as_array();

		echo json_encode(array(
			'error'		=> FALSE,
			'message'	=> 'Job Archived',
			'job'		=> $job_array,
		));
	}

	public function action_create()
	{
		$post_data = $this->request->body();
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

		echo json_encode(array(
			'error'		=> FALSE,
			'message'	=> 'Job Added',
			'job'		=> $job->as_array(),
		));
	}

	public function action_delete()
	{
		$job = Job::instance(ORM::factory('Job', $_GET['job_id']));
		$job_array = $job->as_array();
		$job->delete();

		echo json_encode(array(
			'error'		=> FALSE,
			'message'	=> 'Job Removed',
			'job'		=> $job_array,
		));
	}

}