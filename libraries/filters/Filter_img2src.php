<?php

class Filter_img2src extends Validate {

	public function filter(&$field, $options) {
		$column = (!empty($options)) ? $options : 'src';

		if (preg_match('#src="([^"]+)"#', $field, $match)) {
			$field = $match[1];
		}
	}

} /* end class */