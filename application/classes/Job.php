<?php

class Job {

	protected $orm_job = NULL;

	public static function active_jobs()
	{
		$orm_jobs = ORM::factory('Job')
						->where('status', '=', 'active')
						->find_all();

		$jobs = array();

		foreach ($orm_jobs as $orm_job)
		{
			$jobs[] = Job::instance($orm_job);
		}

		return $jobs;
	}

	public static function instance(Model_Job $orm_job)
	{
		return new Job($orm_job);
	}

	public function __construct(Model_Job $orm_job)
	{
		$this->orm_job = $orm_job;
	}

	public function link()
	{
		return $this->orm_job->link;
	}

	public function title()
	{
		return $this->orm_job->title;
	}

	public function status()
	{
		return $this->orm_job->status;
	}

	public function progress()
	{
		return $this->orm_job->progress;
	}

	public function company()
	{
		$orm_company = ORM::factory('Company', $this->orm_job->company_id);
		return Company::instance($orm_company);
	}

}