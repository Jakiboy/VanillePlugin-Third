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
 * Nginx Helper plugin helper class.
 * 
 * @see https://github.com/rtCamp/nginx-helper
 */
final class NginxHelper
{
	/**
	 * Check whether plugin is enabled.
	 *
	 * @access public
	 * @return bool
	 */
	public static function isEnabled() : bool
	{
		return Helper::isClass('\Nginx_Helper_Admin');
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
			global $nginx_purger;
			if ( Helper::hasMethod($nginx_purger, 'purge_all') ) {
				$nginx_purger->purge_all();
				return true;
			}
		}
		return false;
	}
}
