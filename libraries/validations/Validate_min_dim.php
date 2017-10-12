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
class Validate_min_dim extends Validate_base {
	public function validate(&$field, $options) {
		$dim                = explode(',', $options);
		$this->error_string = 'The width & height cannot be less than ' . $dim[0] . 'x' . $dim[1];

		if (!file_exists($field)) {
			$this->error_string = 'File Not Found.';

			return false;
		}

		if (!function_exists('getimagesize')) {
			throw new Exception('Get Image Size Function Not Supported');
		}

		$size = getimagesize($field);

		return (bool) ($size[0] > $dim[0] && $size[1] > $dim[1]);
	}
} /* end class */