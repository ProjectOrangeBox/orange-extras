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
class Validate_width extends Validate_base {
	public function filter(&$field, $options) {
		$success = false;
		$file    = WWW . $this->field_data[$options];

		if (file_exists($file)) {
			if (!function_exists('getimagesize')) {
				throw new Exception('Get Image Size Function Not Supported');
			}

			$size    = getimagesize($file);
			$field   = $size[0];
			$success = true;
		}

		return $success;
	}
} /* end class */