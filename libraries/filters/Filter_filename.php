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
class Filter_filename extends Filter_base {
	public function filter(&$field, $options) {
		$field = preg_replace('/[^\x20-\x7F]/', '', $field);
		$field = str_replace(str_split('~`!@$^()* {}[]|\;"\'<>,'), ' ', $field);

		/* options is max length */
		$this->field($field)->length($options);
	}
} /* end class */
