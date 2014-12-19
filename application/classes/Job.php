<?php

class Job extends Entity{

	protected $orm_job = NULL;

	public static function active_jobs()
	{
		$orm_jobs = ORM::factory('Job')
						->where('status', '=', 'active')
						->order_by('date_added', 'DESC')
						->find_all();

		$jobs = array();

		foreach ($orm_jobs as $orm_job)
		{
			$jobs[] = Job::instance($orm_job);
		}

		return $jobs;
	}

	public static function create()
	{
		return new Job(ORM::factory('Job'));
	}

	public static function instance(Model_Job $orm_job)
	{
		return new Job($orm_job);
	}

	public function __construct(Model_Job $orm_job)
	{
		$this->orm_object = $orm_job;
	}

	public function link($link = NULL)
	{
		return $this->field_string('link', $link);
	}

	public function title($title = NULL)
	{
		return $this->field_string('title', $title);
	}

	public function status($status = NULL)
	{
		return $this->field_string('status', $status);
	}

	public function progress($progress = NULL)
	{
		return $this->field_string('progress', $progress);
	}

	public function company(Company $company = NULL)
	{
		return $this->field_object('company', $company);
	}

	public function save()
	{
		$orm_job = ORM::factory('Job')
						->where('company_id', '=', $this->company()->id())
						->where('title', '=', $this->title())
						->find();
		if (!$orm_job->loaded())
		{
			return parent::save();
		}
		else
		{
			$orm_object = $orm_job;
			return $this;
		}
	}

	public function as_array()
	{
		$job_array = parent::as_array();
		$job_array['company'] = $this->company()->as_array();
		return $job_array;
	}

}