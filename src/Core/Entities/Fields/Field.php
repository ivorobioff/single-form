<?php
namespace ImmediateSolutions\Core\Entities\Fields;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
abstract class Field
{
	/**
	 * @var int
	 */
	private $id;
	public function setId($id) { $this->id = $id; }
	public function getId() { return $this->id; }
}