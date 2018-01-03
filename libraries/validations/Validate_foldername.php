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
class Validate_foldername extends Validate_base {
	public function validate(&$field, $options) {
		$this->error_string = '%s is not a valid folder name.';

		return (bool) preg_match("/^([a-zA-Z0-9_\- ])+$/i", $field);
	}
} /* end class */
