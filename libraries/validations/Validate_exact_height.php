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
class Validate_exact_height extends Validate_base {
	public function validate(&$field, $options) {
		$this->error_string = 'Height must be %s.';

		if (!$file = $this->locate_file($field)) {
			return false;
		}

		if (!function_exists('getimagesize')) {
			throw new Exception('Get Image Size Function Not Supported');
		}

		$size = getimagesize($file);

		return (bool) ($size[1] == $options);
	}
} /* end class */
