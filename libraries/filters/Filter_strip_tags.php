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
class Filter_strip_tags extends Filter_base {
	public function filter(&$field, $options) {
		$allowable_tags = (!empty($options)) ? $options : '';

		$field = strip_tags($field, $allowable_tags);
	}
} /* end class */
