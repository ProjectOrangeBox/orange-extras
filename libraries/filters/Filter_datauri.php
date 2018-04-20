<?php

class Filter_datauri extends Validate {

	public function filter(&$field, $options) {
		$field = ci('data_uri')->extract_data_img($field);
	}

} /* end class */
