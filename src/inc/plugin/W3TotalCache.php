<?php
/**
 * @author    : Jakiboy
 * @package   : VanillePlugin
 * @version   : 1.0.x
 * @copyright : (c) 2018 - 2024 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link      : https://jakiboy.github.io/VanillePlugin/
 * @license   : MIT
 *
 * This file if a part of VanillePlugin Framework.
 */

declare(strict_types=1);

namespace VanilleThird\inc\plugin;

use VanilleThird\Helper;

/**
 * W3 Total Cache plugin helper class.
 * 
 * @see https://github.com/W3EDGE/w3-total-cache
 */
final class W3TotalCache
{
	/**
	 * Check whether plugin is enabled.
	 * 
	 * @access public
	 * @return bool
	 */
	public static function isEnabled() : bool
	{
		return Helper::isFunction('w3tc_pgcache_flush');
	}

	/**
	 * Purge cache.
	 * 
	 * @access public
	 * @return bool
	 * @internal
	 */
	public static function purge() : bool
	{
	    if ( self::isEnabled() ) { 
	        w3tc_pgcache_flush();
	        return true;
	    }
	    return false;
	}
}
