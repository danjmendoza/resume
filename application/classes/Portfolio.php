<?php

class Portfolio {

	protected $sites = array();

	public static function instance()
	{
		return new Portfolio();
	}

	public function sites()
	{
		$orm_sites = ORM::factory('Site')->find_all();
		
		foreach ($orm_sites as $orm_site)
		{
			$this->sites[] = Site::instance($orm_site);
		}

		return $this->sites;
	}

}