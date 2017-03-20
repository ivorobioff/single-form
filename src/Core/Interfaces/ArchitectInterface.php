<?php
namespace ImmediateSolutions\Core\Interfaces;
use ImmediateSolutions\Core\Entities\Form;
use ImmediateSolutions\Core\Objects\Archive;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
interface ArchitectInterface
{
	/**
	 * @param Form $form
	 * @return Archive
	 */
	public function build(Form $form);
}