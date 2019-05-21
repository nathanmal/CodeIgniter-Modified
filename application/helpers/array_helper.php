<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniterX Array Helpers
 *
 * @package		CodeIgniterX
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Nathan Malachowski
 */

// ------------------------------------------------------------------------

if ( ! function_exists('array_merge_deep'))
{
	/**
	 * Deep merge two arrays
	 *
	 * merges two arrays, overwriting static keys while merging sub-arrays recursively
	 *
	 * @param	  array Array to merge into 
	 * @param	  array Array to merge
	 * @return	array	Merged array
	 */
	function array_merge_deep( array $a, array $b )
	{
		$m = $a;

		foreach( $b as $k => &$v )
		{
			if( is_array($v) && isset($m[$k]) && is_array($m[$k]) ) {
				$m[$k] = array_merge_deep($m[$k], $v);
			} else if ( is_int($k) ) {
				if( ! in_array($v,$m) ) $m[] = $v;
			} else {
				$m[$k] = $v;
			}
		}

		return $m;
		//return array_key_exists($item, $array) ? $array[$item] : $default;
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('random_element'))
{
	/**
	 * Random Element - Takes an array as input and returns a random element
	 *
	 * @param	array
	 * @return	mixed	depends on what the array contains
	 */
	function random_element($array)
	{
		return is_array($array) ? $array[array_rand($array)] : $array;
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('elements'))
{
	/**
	 * Elements
	 *
	 * Returns only the array items specified. Will return a default value if
	 * it is not set.
	 *
	 * @param	array
	 * @param	array
	 * @param	mixed
	 * @return	mixed	depends on what the array contains
	 */
	function elements($items, array $array, $default = NULL)
	{
		$return = array();

		is_array($items) OR $items = array($items);

		foreach ($items as $item)
		{
			$return[$item] = array_key_exists($item, $array) ? $array[$item] : $default;
		}

		return $return;
	}
}
