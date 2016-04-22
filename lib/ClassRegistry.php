<?php
class ClassRegistry {
	
	var $objects = array();
	
	function &getInstance() {
		static $instance = [];
		if (!$instance) {
			$instance[0] =& new ClassRegistry();
		}
		return $instance[0];
	}
	
	function set ($key, $object) {
		$self =& ClassRegistry::getInstance();
		if (!isset($self->objects[$key])) {
			$self->objects[$key] =& $object;
			return true;
		}
		
		return false;
	}
	
	function  &get($key) {
		$self =& ClassRegistry::getInstance();
		$return = false;
		if (isset($self->objects[$key])) {
			$return =& $self->objects[$key];
		}
		
		return $return;
	}
		
}