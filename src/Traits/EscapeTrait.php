<?php

namespace donatj\MySqlSchema\Traits;

trait EscapeTrait {

	/**
	 * @param string $input
	 * @param string $wrapChar
	 * @return mixed
	 */
	protected function escape( string $input, string $wrapChar = '`' ) : string {
		return str_replace($wrapChar, $wrapChar . $wrapChar, $input);
	}

	/**
	 * @param string $input
	 * @param string $wrapChar
	 * @return string
	 */
	protected function mkString( string $input, string $wrapChar = '`' ) : string {
		return $wrapChar . $this->escape($input, $wrapChar) . $wrapChar;
	}
}
