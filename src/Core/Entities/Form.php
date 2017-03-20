<?php
namespace ImmediateSolutions\Core\Entities;
use ImmediateSolutions\Core\Entities\Fields\Field;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class Form
{
	/**
	 * @var int
	 */
	private $id;
	public function setId($id) { $this->id = $id; }
	public function getId() { return $this->id; }

	/**
	 * @var string
	 */
	private $name;
	public function setName($name) { $this->name = $name; }
	public function getName() { return $this->name; }

	/**
	 * @var Field[]
	 */
	private $fields = [];
	public function getFields() { return $this->fields; }
	public function addField(Field $field) { $this->fields[] = $field; }

	/**
	 * @var Theme
	 */
	private $theme;
	public function setTheme(Theme $theme) { $this->theme = $theme; }
	public function getTheme() { return $this->theme; }
}