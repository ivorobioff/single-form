<?php
namespace ImmediateSolutions\Core\Payloads;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class FormPayload
{
	/**
	 * @var string
	 */
	private $name;
	public function setName($name) { $this->name = $name; }
	public function getName() { return $this->name; }

	/**
	 * @var int
	 */
	private $theme;
	public function setTheme($theme) { $this->theme = $theme; }
	public function getTheme() { return $this->theme; }
}