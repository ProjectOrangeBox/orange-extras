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
class Validate_url extends Validate_base {
	public function validate(&$field, $options) {
		$this->error_string = '%s is a invalid url.';

		return (bool) (preg_match('#^([\.\/-a-z0-9_*-])+$#i', $field));
	}
} /* end class */
