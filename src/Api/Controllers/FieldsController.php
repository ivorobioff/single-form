<?php
namespace ImmediateSolutions\Api\Controllers;
use ImmediateSolutions\Core\Services\FieldService;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class FieldsController
{
	/**
	 * @var FieldService
	 */
	private $fieldService;

	/**
	 * @param FieldService $fieldService
	 */
	public function __construct(FieldService $fieldService)
	{
		$this->fieldService = $fieldService;
	}
}