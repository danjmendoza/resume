<?php

class Site {

	protected $orm_site = NULL;

	public static function instance(Model_Site $orm_site)
	{
		return new Site($orm_site);
	}

	public function __construct(Model_Site $orm_site)
	{
		$this->orm_site = $orm_site;
	}

	public function categories()
	{
		return $this->orm_site->categories;
	}

	public function url()
	{
		return $this->orm_site->url;
	}

	public function image()
	{
		return $this->orm_site->image;
	}

	public function title()
	{
		return $this->orm_site->title;
	}

}