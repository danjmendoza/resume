<?php

class Job extends Entity{

	/**
	 * Stores the Database row that is loaded
	 * into the class
	 * @var Model_Job
	 */
	protected $orm_job = NULL;

	/**
	 * Query to get all active jobs and then wrap
	 * them in the Jobs class.
	 * 
	 * @return array
	 */
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

	/**
	 * Loads the Job class with and empty Database row,
	 * data is temporary unitl method "save()" is called.
	 * @return object
	 */
	public static function create()
	{
		return new Job(ORM::factory('Job'));
	}

	/**
	 * Loads a specific database row from the job table into 
	 * the class and require it to be an instance of Model_Job.
	 * 
	 * @param  Model_Job $orm_job
	 * @return object
	 */
	public static function instance(Model_Job $orm_job)
	{
		return new Job($orm_job);
	}

	/**
	 * Require that an instance of Model_Job be used and then
	 * set the job model to a class attribute.
	 * 
	 * @param Model_Job $orm_job
	 */
	public function __construct(Model_Job $orm_job)
	{
		$this->orm_object = $orm_job;
	}

	/**
	 * Setter/getter for the job link field
	 * @param  string $link
	 * @return string
	 */
	public function link($link = NULL)
	{
		return $this->field_string('link', $link);
	}

	/**
	 * Setter/getter for the job title field
	 * @param  string $title
	 * @return string
	 */
	public function title($title = NULL)
	{
		return $this->field_string('title', $title);
	}

	/**
	 * Setter/getter for the job status field
	 * @param  string $status
	 * @return string
	 */
	public function status($status = NULL)
	{
		return $this->field_string('status', $status);
	}

	/**
	 * Setter/getter for the job progress field
	 * @param  string $progress
	 * @return string
	 */
	public function progress($progress = NULL)
	{
		return $this->field_string('progress', $progress);
	}

	/**
	 * Setter/getter for the job coverletter field
	 * @param  string $coverletter
	 * @return string
	 */
	public function coverletter($coverletter = NULL)
	{
		return $this->field_string('coverletter', $coverletter);
	}

	/**
	 * Setter/getter for the job company field and related
	 * database table of companies.
	 * @param  Company object $company
	 * @return Company Object
	 */
	public function company(Company $company = NULL)
	{
		return $this->field_object('company', $company);
	}

	/**
	 * Save the job, if a job with the same company and the same
	 * title already exists don't save, and return the object as empty.
	 * @param  boolean $force [description]
	 * @return [type]         [description]
	 */
	public function save($force = TRUE)
	{
		$orm_job = ORM::factory('Job')
						->where('company_id', '=', $this->company()->id())
						->where('title', '=', $this->title())
						->find();
		if (!$orm_job->loaded() OR $force = true)
		{
			return parent::save();
		}
		else
		{
			$orm_object = $orm_job;
			return $this;
		}
	}

	/**
	 * Get the array from the ORM model, then add the jobs company
	 * as part of the array.
	 * 
	 * @return array
	 */
	public function as_array()
	{
		$job_array = parent::as_array();
		$job_array['company'] = $this->company()->as_array();
		return $job_array;
	}

	/**
	 * Iterate through the data submitted and update only
	 * the specific fields.
	 * 
	 * @param  array $data   [form submission data]
	 * @param  string $format [if array or object]
	 * @return Job object 
	 */
	public function update($data, $format = 'array')
	{
		if ($format == 'array')
		{
			foreach ($data as $key => $value)
			{
				switch ($key) {
					case 'progress':
						$this->progress($value);
						break;
					case 'status':
						$this->status($value);
						break;
					default:
						break;
				}
			}
		}
		return $this;
	}

}