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
	Globals, TypeCheck, Arrayify, Stringify, Hook
};

/**
 * Third-Party helper class.
 */
final class Helper
{
	/**
	 * @inheritdoc
	 */
	public static function cache() : bool
	{
		return Globals::cache();
	}
	
    /**
	 * @inheritdoc
	 */
	public static function isArray($value) : bool
    {
        return TypeCheck::isArray($value);
    }

	/**
	 * @inheritdoc
	 */
	public static function isClass(string $class, bool $autoload = true) : bool
	{
		return TypeCheck::isClass($class, $autoload);
	}

	/**
	 * @inheritdoc
	 */
	public static function isSubClassOf(string $sub, string $class) : bool
	{
		return TypeCheck::isSubClassOf($sub, $class);
	}

	/**
	 * @inheritdoc
	 */
	public static function hasMethod($object, string $method) : bool
	{
		return TypeCheck::hasMethod($object, $method);
	}

	/**
	 * @inheritdoc
	 */
	public static function isFunction(string $function) : bool
	{
		return TypeCheck::isFunction($function);
	}

	/**
	 * @inheritdoc
	 */
	public static function keys(array $array) : array
	{
		return Arrayify::keys($array);
	}

	/**
	 * @inheritdoc
	 */
	public static function undash(string $string, bool $isGlobal = false) : string
	{
		return Stringify::undash($string, $isGlobal);
	}

	/**
	 * @inheritdoc
	 */
	public static function sanitizeText(string $string) : string
	{
		return Stringify::sanitizeText($string);
	}

	/**
	 * @inheritdoc
	 */
	public static function addAction(string $hook, $callback, int $priority = 10, int $args = 1)
	{
		Hook::addAction($hook, $callback, $priority, $args);
	}

	/**
	 * @inheritdoc
	 */
	public static function removeAction(string $hook, $callback, int $priority = 10) : bool
	{
		return Hook::removeAction($hook, $callback, $priority);
	}

	/**
	 * @inheritdoc
	 */
	public static function addFilter(string $hook, $callback, int $priority = 10, int $args = 1)
	{
		Hook::addFilter($hook, $callback, $priority, $args);
	}

	/**
	 * @inheritdoc
	 */
	public static function hasFilter(string $hook, $callback = false)
	{
		return Hook::hasFilter($hook, $callback);
	}

	/**
	 * @inheritdoc
	 */
	public static function removeFilter(string $hook, $callback, int $priority = 10) : bool
	{
		return Hook::removeFilter($hook, $callback, $priority);
	}

	/**
	 * @inheritdoc
	 */
	public static function applyFilter(string $hook, $value, $args = null)
	{
		return Hook::applyFilter($hook, $value, $args);
	}
}
