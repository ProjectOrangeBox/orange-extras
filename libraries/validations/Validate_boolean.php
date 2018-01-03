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
class Validate_boolean extends Validate_base {
	public function filter(&$field, $options) {
		$field = strtolower($field);

		return ($field == 'y' || $field == 'yes' || $field === 1 || $field == '1' || $field == 'true' || $field == 't');
	}
} /* end class */
