<?php
/**
 * @author    : Jakiboy
 * @package   : VanillePlugin
 * @version   : 1.0.2
 * @copyright : (c) 2018 - 2024 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link      : https://jakiboy.github.io/VanillePlugin/
 * @license   : MIT
 *
 * This file if a part of VanillePlugin Framework.
 */

declare(strict_types=1);

namespace VanilleThird\inc\plugin;

final class WooCommerce
{
	/**
	 * @access public
	 * @param array void
	 * @return boolean
	 */
	public static function isEnabled()
	{
  		return class_exists('WooCommerce');
	}

	/**
	 * @access public
	 * @param mixed $id
	 * @return array
	 */
	public static function getProduct($id)
	{
		return wc_get_product(intval($id));
	}
	
	/**
	 * @access public
	 * @param array $data
	 * @return array
	 */
	public static function addInput($data = [])
	{
  		woocommerce_wp_text_input($data);
	}

	/**
	 * @access public
	 * @param array $data
	 * @return array
	 */
	public static function addCheckbox($data = [])
	{
  		woocommerce_wp_checkbox($data);
	}

	/**
	 * @access public
	 * @param array $data
	 * @return array
	 */
	public static function addSelect($data = [])
	{
  		woocommerce_wp_select($data);
	}
	
	/**
	 * @access public
	 * @param int $key
	 * @param mixed $product
	 * @return mixed
	 */
	public static function getMeta($key, $product)
	{
		if ( is_object($product) ) {
			$product = self::getProduct($product->get_id());
			
		} else {
			$product = (object)self::getProduct($product);
		}
  		return $product->get_meta($key);
	}

	/**
	 * @access public
	 * @param int $key
	 * @param mixed $product
	 * @return int
	 */
	public static function updateMeta($key, $value, $product)
	{
		if ( is_object($product) ) {
			$product = self::getProduct($product->get_id());

		} else {
			$product = self::getProduct($product);
		}
    	$product->update_meta_data($key, sanitize_text_field($value));
    	return $product->save();
	}
}
