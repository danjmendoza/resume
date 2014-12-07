<?php

class Company {

	protected $orm_company = NULL;

	public static function instance(Model_Company $orm_company)
	{
		return new Company($orm_company);
	}

	public function __construct(Model_Company $orm_company)
	{
		$this->orm_company = $orm_company;
	}

	public function website()
	{
		return $this->orm_company->website;
	}

	public function title()
	{
		return $this->orm_company->title;
	}

}