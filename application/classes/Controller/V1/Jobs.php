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
		echo "update";
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
		echo "delete";
	}

}