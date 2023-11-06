<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - user_id [numeric]
 * - title [input]
 * - completed [booleanSelect]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Todo\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Todo\Listing|\Pimcore\Model\DataObject\Todo|null getByUser_id(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Todo\Listing|\Pimcore\Model\DataObject\Todo|null getByTitle(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Todo extends Concrete
{
public const FIELD_USER_ID = 'user_id';
public const FIELD_TITLE = 'title';
public const FIELD_COMPLETED = 'completed';

protected $classId = "4";
protected $className = "todo";
protected $user_id;
protected $title;
protected $completed;


/**
* @param array $values
* @return static
*/
public static function create(array $values = []): static
{
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get user_id - User _id
* @return float|null
*/
public function getUser_id(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("user_id");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->user_id;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set user_id - User _id
* @param float|null $user_id
* @return $this
*/
public function setUser_id(?float $user_id): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("user_id");
	$this->user_id = $fd->preSetData($this, $user_id);
	return $this;
}

/**
* Get title - Title
* @return string|null
*/
public function getTitle(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("title");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->title;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set title - Title
* @param string|null $title
* @return $this
*/
public function setTitle(?string $title): static
{
	$this->markFieldDirty("title", true);

	$this->title = $title;

	return $this;
}

/**
* Get completed - Completed
* @return bool|null
*/
public function getCompleted(): ?bool
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("completed");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->completed;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set completed - Completed
* @param bool|null $completed
* @return $this
*/
public function setCompleted(?bool $completed): static
{
	$this->markFieldDirty("completed", true);

	$this->completed = $completed;

	return $this;
}

}

