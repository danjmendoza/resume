<?php

class Company extends Entity {

	/**
	 * Database row for a company.
	 * @var Model Company
	 */
	protected $orm_company = NULL;

	/**
	 * Loads a single instance of a Company with a Model_Company
	 * @param  Model_Company $orm_company [description]
	 * @return object
	 */
	public static function instance(Model_Company $orm_company)
	{
		return new Company($orm_company);
	}

	/**
	 * Load the company object with an empty database row.
	 * @return Company object
	 */
	public static function create()
	{
		return new Company(ORM::factory('Company'));
	}

	public function __construct(Model_Company $orm_company)
	{
		$this->orm_object = $orm_company;
	}

	/**
	 * Setter/getter for the company website field
	 * @param  string $website
	 * @return string
	 */
	public function website($website = NULL)
	{
		return $this->field_string('website', $website);
	}

	/**
	 * Setter/getter for the company title field
	 * @param  string $title
	 * @return string
	 */
	public function title($title = NULL)
	{
		return $this->field_string('title', $title);
	}

	/**
	 * If a company alread exists with the same website and
	 * the same title, use that company and don't save.
	 * 
	 * @return Company object
	 */
	public function save()
	{
		$orm_company = ORM::factory('Company')
							->where('website', '=', $this->website())
							->where('title', '=', $this->title())
							->find();
		if (!$orm_company->loaded())
		{
			return parent::save();
		}
		else
		{
			$this->orm_object = $orm_company;
			return $this;
		}
	}

}