<?php

/**
 * Inheritance: no
 * Variants: no
 * information about airport frequencies
 *
 * Fields Summary:
 * - airport_ref [manyToOneRelation]
 * - airport_ident [manyToOneRelation]
 * - freq_type [input]
 * - description [input]
 * - frequency_mhz [numeric]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Frequency\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Frequency\Listing|\Pimcore\Model\DataObject\Frequency|null getByAirport_ref(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Frequency\Listing|\Pimcore\Model\DataObject\Frequency|null getByAirport_ident(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Frequency\Listing|\Pimcore\Model\DataObject\Frequency|null getByFreq_type(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Frequency\Listing|\Pimcore\Model\DataObject\Frequency|null getByDescription(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Frequency\Listing|\Pimcore\Model\DataObject\Frequency|null getByFrequency_mhz(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Frequency extends Concrete
{
public const FIELD_AIRPORT_REF = 'airport_ref';
public const FIELD_AIRPORT_IDENT = 'airport_ident';
public const FIELD_FREQ_TYPE = 'freq_type';
public const FIELD_DESCRIPTION = 'description';
public const FIELD_FREQUENCY_MHZ = 'frequency_mhz';

protected $classId = "2";
protected $className = "frequency";
protected $airport_ref;
protected $airport_ident;
protected $freq_type;
protected $description;
protected $frequency_mhz;


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
* Get airport_ref - Airport _ref
* @return \Pimcore\Model\DataObject\Airport|null
*/
public function getAirport_ref(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("airport_ref");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("airport_ref")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set airport_ref - Airport _ref
* @param \Pimcore\Model\DataObject\Airport|null $airport_ref
* @return $this
*/
public function setAirport_ref(?\Pimcore\Model\Element\AbstractElement $airport_ref): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("airport_ref");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getAirport_ref();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $airport_ref);
	if (!$isEqual) {
		$this->markFieldDirty("airport_ref", true);
	}
	$this->airport_ref = $fd->preSetData($this, $airport_ref);
	return $this;
}

/**
* Get airport_ident - Airport _ident
* @return \Pimcore\Model\DataObject\Airport|null
*/
public function getAirport_ident(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("airport_ident");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("airport_ident")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set airport_ident - Airport _ident
* @param \Pimcore\Model\DataObject\Airport|null $airport_ident
* @return $this
*/
public function setAirport_ident(?\Pimcore\Model\Element\AbstractElement $airport_ident): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("airport_ident");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getAirport_ident();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $airport_ident);
	if (!$isEqual) {
		$this->markFieldDirty("airport_ident", true);
	}
	$this->airport_ident = $fd->preSetData($this, $airport_ident);
	return $this;
}

/**
* Get freq_type - Frequency type
* @return string|null
*/
public function getFreq_type(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("freq_type");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->freq_type;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set freq_type - Frequency type
* @param string|null $freq_type
* @return $this
*/
public function setFreq_type(?string $freq_type): static
{
	$this->markFieldDirty("freq_type", true);

	$this->freq_type = $freq_type;

	return $this;
}

/**
* Get description - Description
* @return string|null
*/
public function getDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->description;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set description - Description
* @param string|null $description
* @return $this
*/
public function setDescription(?string $description): static
{
	$this->markFieldDirty("description", true);

	$this->description = $description;

	return $this;
}

/**
* Get frequency_mhz - Frequency _mhz
* @return float|null
*/
public function getFrequency_mhz(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("frequency_mhz");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->frequency_mhz;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set frequency_mhz - Frequency _mhz
* @param float|null $frequency_mhz
* @return $this
*/
public function setFrequency_mhz(?float $frequency_mhz): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("frequency_mhz");
	$this->frequency_mhz = $fd->preSetData($this, $frequency_mhz);
	return $this;
}

}

