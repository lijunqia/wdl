<?php

/**
 * [Weizan System] Copyright (c) 2014 wdlcms.com
 * Weizan is NOT a free software, it under the license terms, visited http://www.wdlcms.com/ for more details.
 */

!defined('IN_UC') && exit('Access Denied');

class cachecontrol extends base {

	function __construct() {
		$this->cachecontrol();
	}

	function cachecontrol() {
		parent::__construct();
	}

	function onupdate($arr) {
		$this->load("cache");
		$_ENV['cache']->updatedata();
	}

}

?>