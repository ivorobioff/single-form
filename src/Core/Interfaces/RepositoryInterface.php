<?php
namespace ImmediateSolutions\Core\Interfaces;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
interface RepositoryInterface
{
	/**
	 * @param string $id
	 * @param string $entityClass
	 * @return object
	 */
	public function find($id, $entityClass);

	/**
	 * @param object $entity
	 */
	public function persist($entity);

	public function flush();
}