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

namespace VanilleThird\inc\module;

use VanilleThird\Helper;

/**
 * Opcache module helper class.
 * 
 * @see https://www.php.net/manual/en/book.opcache.php
 */
final class Opcache
{
	/**
	 * Check module is enabled.
	 * 
	 * @access public
	 * @return bool
	 */
	public static function isEnabled() : bool
	{
		return Helper::isFunction('opcache_reset');
	}
	
	/**
	 * Purge cache.
	 * 
	 * @access public
	 * @return bool
	 */
	public static function purge() : bool
	{
		if ( Helper::isFunction('opcache_reset') ) {
			return opcache_reset();
		}
		return false;
	}
}
