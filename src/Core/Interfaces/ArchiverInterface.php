<?php
namespace ImmediateSolutions\Core\Interfaces;
use ImmediateSolutions\Core\Objects\Archive;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
interface ArchiverInterface
{
	/**
	 * @param string $path
	 * @return Archive
	 */
	public function compress($path);
}