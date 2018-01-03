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
class Validate_contains extends Validate_base {
	public function validate(&$field, $options) {
		$this->error_string = '%s must contain ' . $options;

		return (bool) (strpos($field, $options) !== false) ? true : false;
	}
} /* end class */
