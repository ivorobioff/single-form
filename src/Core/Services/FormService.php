<?php
namespace ImmediateSolutions\Core\Services;
use ImmediateSolutions\Core\Entities\Form;
use ImmediateSolutions\Core\Entities\Theme;
use ImmediateSolutions\Core\Interfaces\ArchitectInterface;
use ImmediateSolutions\Core\Objects\Archive;
use ImmediateSolutions\Core\Payloads\FormPayload;
use ImmediateSolutions\Themes;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class FormService extends AbstractService
{
	private $themes = [
		'moon' => Themes\Moon\Architect::class,
		'orange' => Themes\Orange\Architect::class
	];


	/**
	 * @param FormPayload $payload
	 * @return Form
	 */
	public function create(FormPayload $payload)
	{
		$form = new Form();

		$form->setName($payload->getName());

		/**
		 * @var Theme $theme
		 */
		$theme = $this->repository->find($form->getTheme(), Theme::class);

		$form->setTheme($theme);

		$this->repository->persist($form);
		$this->repository->flush();

		return $form;
	}

	/**
	 * @param int $formId
	 * @return Archive
	 */
	public function build($formId)
	{
		/**
		 * @var Form $form
		 */
		$form = $this->repository->find($formId, Form::class);

		$architect = $this->themes[$form->getTheme()->getName()];

		/**
		 * @var ArchitectInterface $architect
		 */
		$architect = $this->container->get($architect);

		$archive = $architect->build($form);

		return $archive;
	}
}