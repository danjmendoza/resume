<?php

class Company extends Entity {

	protected $orm_company = NULL;

	public static function instance(Model_Company $orm_company)
	{
		return new Company($orm_company);
	}

	public static function create()
	{
		return new Company(ORM::factory('Company'));
	}

	public function __construct(Model_Company $orm_company)
	{
		$this->orm_object = $orm_company;
	}

	public function website($website = NULL)
	{
		return $this->field_string('website', $website);
	}

	public function title($title = NULL)
	{
		return $this->field_string('title', $title);
	}

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