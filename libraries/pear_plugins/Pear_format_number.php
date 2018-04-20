<?php 
/*
Pear::format_numbers('1234567890', '(000) 000-0000') (123) 456-7890
Pear::format_numbers('1234567890', '000.000.0000') 123.456.7890
*/
class Pear_format_number extends Pear_plugin {

	public function render($string=null,$format=null) {
		$result = '';
		$fpos = 0;
		$spos = 0;

		while ((strlen($format) - 1) >= $fpos) 	{
			if (ctype_alnum(substr($format, $fpos, 1))) {
				$result .= substr($string, $spos, 1);
				$spos++;
			} else {
				$result .= substr($format, $fpos, 1);
			}

			$fpos++;
		}

		return $result;
	}

}
