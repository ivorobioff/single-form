<?php
namespace ImmediateSolutions\Core\Services;
use ImmediateSolutions\Core\Entities\Fields\Field;
use ImmediateSolutions\Core\Entities\Form;
use ImmediateSolutions\Core\Payloads\Fields\FieldPayload;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class FieldService extends AbstractService
{
	/**
	 * @param int $formId
	 * @param FieldPayload $payload
	 * @return Field
	 */
	public function create($formId, FieldPayload $payload)
	{
		/**
		 * @var Form $form
		 */
		$form = $this->repository->find($formId, Form::class);

		$field = $this->createByType($payload);

		$this->repository->persist($field);
		$this->repository->flush();

		$form->addField($field);

		$this->repository->flush();

		return $field;
	}

	/**
	 * @param FieldPayload $payload
	 * @return Field
	 */
	private function createByType(FieldPayload $payload)
	{

	}
}