<?php
namespace ImmediateSolutions\Core\Interfaces;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
interface ContainerInterface
{
	/**
	 * @param string $class
	 * @return object
	 */
	public function get($class);
}