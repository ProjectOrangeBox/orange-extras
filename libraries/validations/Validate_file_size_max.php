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
class Validate_file_size_max extends Validate_base {
	public function validate(&$field, $options) {
		$this->error_string = 'File %s size is greater than ' . $options . ' bytes';

		if (!file_exists($field)) {
			$this->error_string = 'File Not Found.';

			return false;
		}

		$size = filesize($field);

		return (bool) ($size > $options);
	}
} /* end class */