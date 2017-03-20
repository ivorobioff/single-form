<?php
namespace ImmediateSolutions\Themes\Orange;

use ImmediateSolutions\Core\Entities\Form;
use ImmediateSolutions\Themes\Support\AbstractArchitect;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class Architect extends AbstractArchitect
{
	/**
	 * @param Form $form
	 */
	protected function draw(Form $form)
	{
		require_once __DIR__.'/template.php';
	}

	/**
	 * @return array
	 */
	protected function assets()
	{
		return [
			'css' => [
				__DIR__.'/main.css'
			],
			'js' => [
				__DIR__.'/jquery.js',
				__DIR__.'/main.js'
			],
			'fonts' => [
				//
			],
			'images' => [
				//
			]
		];
	}
}