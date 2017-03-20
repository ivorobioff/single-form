<?php
namespace ImmediateSolutions\Api\Controllers;
use ImmediateSolutions\Core\Entities\Form;
use ImmediateSolutions\Core\Objects\Archive;
use ImmediateSolutions\Core\Payloads\FormPayload;
use ImmediateSolutions\Core\Services\FormService;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class FormsController
{
	/**
	 * @var FormService
	 */
	private $formService;


	/**
	 * @param FormService $formService
	 */
	public function __construct(FormService $formService)
	{
		$this->formService = $formService;
	}

	/**
	 * @param FormPayload $payload
	 * @return Form
	 */
	public function createAction(FormPayload $payload)
	{
		$form = $this->formService->create($payload);

		return $form;
	}

	/**
	 * @param string $formId
	 * @return Archive
	 */
	public function downloadAction($formId)
	{
		$archive = $this->formService->build($formId);

		return $archive;
	}
}