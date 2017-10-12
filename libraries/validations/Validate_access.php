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
class Validate_access extends Validate_base {
	/* access['edit::monkeys'] translates to user::can('edit::monkeys')  */
	public function validate(&$field, $options) {
		$this->error_string = 'You do not have access to %s';

		/* get the current user data */
		return (is_object(ci()->user)) ? ci()->user->can($options) : false;
	}
} /* end class */