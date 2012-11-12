<?php
/**
 * A very simple static class to help pass around data between the various
 * filters that are running so that the li3_perf toolbar can display all this
 * data that was collected along the way.
*/
namespace li3_show\extensions\data;

class Data extends \lithium\core\StaticObject {

	static $data = array(
		'queries' => array()
	);

	/**
	 * Sets data.
	*/
	static public function set($key=null, $value=null) {
		if(!empty($key)) {
			static::$data[$key] = $value;
			return true;
		}
		return false;
	}

	/**
	 * Appends data.
	*/
	static public function append($key=null, $value=null) {
		if(!empty($key)) {
			static::$data[$key] = array_merge(static::$data[$key], $value);
			return true;
		}
		return false;
	}

	/**
	 * Gets data.
	*/
	static public function get($key=null) {
		return (isset(static::$data[$key])) ? static::$data[$key]:false;
	}
}
?>
