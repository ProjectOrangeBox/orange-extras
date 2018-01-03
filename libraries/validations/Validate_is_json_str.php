<?php
/**
 * Orange Framework validation rule
 *
 * This content is released under the MIT License (MIT)
 *
 * @package	CodeIgniter / Orange
 * @author	Don Myers
 * @license http://opensource.org/licenses/MIT MIT License
 * @link	https://github.com/ProjectOrangeBox
 *
 */
class Validate_is_json_str extends Validate_base {
	public function validate(&$field, $options) {
		$this->error_string = '%s is not a json string.';

		if (is_string($field)) {
			$json = json_decode($field, TRUE);
			return ($json !== NULL AND $field != $json);
		}

		return false;
	}
} /* end class */
