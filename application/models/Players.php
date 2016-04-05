<?php

/**
 * Class Players
 *
 * Model for the players active for an agent
 * 
 */
class Players extends MY_Model2 {

	public function __construct()
	{
		parent::__construct('players','agent','player');
	}

}