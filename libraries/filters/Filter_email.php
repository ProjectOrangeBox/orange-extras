<?php
/* cleans email doesn't validate it is a email */
class Filter_email extends Filter_base {
	public function filter(&$field, $options) {
		$field = filter_var($field, FILTER_SANITIZE_EMAIL);

		/* options is max length */
		$this->field($field)->length($options);
	}
} /* end class */
