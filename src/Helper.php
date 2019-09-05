<?php

// Namespace
namespace Ewereka\Validation\Rules;

// Helper
class Helper
{

	/**
	 * Retrieve the appropriate, localized validation message
	 * or fall back to the given default.
	 *
	 * @param string $key.
	 * @param string $default.
	 * @return string.
	 *
	 **/
	public static function getLocalizedErrorMessage($key, $default)
	{
		return trans("validation.$key") === $key ? $default : trans("validation.$key");
	}
}