<?php

class Pear_format_phone extends Pear_plugin {

	public function render($string=null) {
		$formats = [7=>'000-0000',9=>'000 000 000',10=>'(000) 000-0000',11=>'0 (000) 000-0000',12=>'000 000 000 000'];

		if (isset($formats[strlen($string)])) {
			return pear::format_number($string, $formats[strlen($string)]);
		}

		return $string;
	}

}
