<?php
namespace ImmediateSolutions\Core\Services;
use ImmediateSolutions\Core\Interfaces\ContainerInterface;
use ImmediateSolutions\Core\Interfaces\RepositoryInterface;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
abstract class AbstractService
{
	/**
	 * @var RepositoryInterface
	 */
	protected $repository;

	/**
	 * @var ContainerInterface
	 */
	protected $container;
}