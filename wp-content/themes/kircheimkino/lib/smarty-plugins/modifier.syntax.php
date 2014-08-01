<?php

function smarty_modifier_syntax($string, $language) {

	if ($language == 'smarty') {
		$string = preg_replace('/([a-z_]+)=/', '<span class="keyword">$1</span>=', $string);
		$string = preg_replace('/('.preg_quote('$').'[a-z_]+)/', '<span class="variable">$1</span>', $string);
		$string = preg_replace('/=([a-z_]+)/', '=<span class="string">$1</span>', $string);
		$string = preg_replace('/{([a-z_]+)/', '{<span class="function">$1</span>', $string);
		$string = preg_replace('/([{}])/', '<span class="identyfier">$1</span>', $string);
		$string = preg_replace('/(\/\/[a-zA-Z0-9\', ]+)/', '<span class="comment">$1</span>', $string);
	}
	else if ($language == 'php') {
		$string = preg_replace('/(\=)/', '<span class="other">$1</span>', $string);
		$string = preg_replace('/('.preg_quote('$').'[a-z_]+)/', '<span class="variable">$1</span>', $string);
		$string = preg_replace('/([a-z_]+)\(/', '<span class="function">$1</span>(', $string);
		$string = preg_replace('/(true|false)/', '<span class="boolean">$1</span>', $string);
		$string = preg_replace('/([\[\]\(\)])/', '<span class="special">$1</span>', $string);
		$string = preg_replace('/(\'[A-Za-z_\/.:0-9]+\')/', '<span class="string">$1</span>', $string);
		$string = preg_replace('/(\/\/ [a-zA-Z0-9_:.\', ]+)/', '<span class="comment">$1</span>', $string);
	}
	return $string;
	
}