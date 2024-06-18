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

namespace VanilleThird;

use VanillePlugin\inc\{
	TypeCheck, Arrayify, Hook, GlobalConst
};

/**
 * Third-Party helper class.
 */
final class Helper
{
    /**
	 * Check array.
	 *
	 * @inheritdoc
	 */
	public static function isArray($value) : bool
    {
        return TypeCheck::isArray($value);
    }

	/**
	 * Check class.
	 *
	 * @inheritdoc
	 */
	public static function isClass(string $class, bool $autoload = true) : bool
	{
		return TypeCheck::isClass($class, $autoload);
	}

	/**
	 * Check method.
	 *
	 * @inheritdoc
	 */
	public static function hasMethod($object, string $method) : bool
	{
		return TypeCheck::hasMethod($object, $method);
	}

	/**
	 * Check function.
	 *
	 * @inheritdoc
	 */
	public static function isFunction(string $function) : bool
	{
		return TypeCheck::isFunction($function);
	}

	/**
	 * Get array keys.
	 *
	 * @inheritdoc
	 */
	public static function keys(array $array) : array
	{
		return Arrayify::keys($array);
	}

	/**
	 * Get site cache status.
	 * 
	 * @inheritdoc
	 */
	public static function cache() : bool
	{
		return GlobalConst::cache();
	}

	/**
	 * Check hook filter.
	 *
	 * @inheritdoc
	 */
	public static function hasFilter(string $hook, $callback = false)
	{
		return Hook::hasFilter($hook, $callback);
	}

	/**
	 * Add hook filter.
	 *
	 * @inheritdoc
	 */
	public static function addFilter(string $hook, $callback, int $priority = 10, int $args = 1)
	{
		return Hook::addFilter($hook, $callback, $priority, $args);
	}

	/**
	 * Remove hook filter.
	 *
	 * @inheritdoc
	 */
	public static function removeFilter(string $hook, $callback, int $priority = 10) : bool
	{
		return Hook::removeFilter($hook, $callback, $priority);
	}

	/**
	 * Apply hook filter.
	 *
	 * @inheritdoc
	 */
	public static function applyFilter(string $hook, $value, $args = null)
	{
		return Hook::applyFilter($hook, $value, $args);
	}
}
