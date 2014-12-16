<?php

class Controller_Jobs extends  Controller_Website {

	public function action_index()
	{
		if($this->request->method() === 'POST')
		{
			$post_data = $this->post();
			$company = Company::create()
							->title($post_data['company']['title'])
							->website($post_data['company']['website'])
							->save();

			$job = Job::create()
						->title($post_data['title'])
						->link($post_data['link'])
						->status($post_data['status'])
						->company($company)
						->save();

			if ($this->is_ajax())
			{
				$this->view = array(
					'message'	=> 'Job Added',
					'job'		=> $job->as_array(),
				);
			}
			else
			{
				$this->view = View::factory('jobs')
								->set('jobs', Job::active_jobs());
			}
		}
		else
		{
			if ($this->is_ajax())
			{
				$jobs = array();
				foreach (Job::active_jobs() as $job_object)
				{
					$jobs[] = $job_object->as_array();
				}
				$this->view = $jobs;
			}
			else
			{
				$this->view = View::factory('jobs')
								->set('jobs', Job::active_jobs());
			}
		}

	}

}