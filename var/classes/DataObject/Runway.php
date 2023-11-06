<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - airport_ref [manyToOneRelation]
 * - airport_ident [manyToOneRelation]
 * - length_ft [numeric]
 * - width_ft [numeric]
 * - surface [input]
 * - lighted [input]
 * - closed [input]
 * - le_ident [input]
 * - le_latitude_deg [numeric]
 * - le_longitude_deg [numeric]
 * - le_elevation_ft [numeric]
 * - le_heading_degT [numeric]
 * - le_displaced_threshold_ft [numeric]
 * - he_ident [input]
 * - he_latitude_deg [numeric]
 * - he_longitude_deg [numeric]
 * - he_elevation_ft [numeric]
 * - he_heading_degT [numeric]
 * - he_displaced_threshold_ft [numeric]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Runway\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByAirport_ref(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByAirport_ident(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByLength_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByWidth_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getBySurface(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByLighted(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByClosed(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByLe_ident(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByLe_latitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByLe_longitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByLe_elevation_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByLe_heading_degT(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByLe_displaced_threshold_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByHe_ident(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByHe_latitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByHe_longitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByHe_elevation_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByHe_heading_degT(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Runway\Listing|\Pimcore\Model\DataObject\Runway|null getByHe_displaced_threshold_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Runway extends Concrete
{
public const FIELD_AIRPORT_REF = 'airport_ref';
public const FIELD_AIRPORT_IDENT = 'airport_ident';
public const FIELD_LENGTH_FT = 'length_ft';
public const FIELD_WIDTH_FT = 'width_ft';
public const FIELD_SURFACE = 'surface';
public const FIELD_LIGHTED = 'lighted';
public const FIELD_CLOSED = 'closed';
public const FIELD_LE_IDENT = 'le_ident';
public const FIELD_LE_LATITUDE_DEG = 'le_latitude_deg';
public const FIELD_LE_LONGITUDE_DEG = 'le_longitude_deg';
public const FIELD_LE_ELEVATION_FT = 'le_elevation_ft';
public const FIELD_LE_HEADING_DEG_T = 'le_heading_degT';
public const FIELD_LE_DISPLACED_THRESHOLD_FT = 'le_displaced_threshold_ft';
public const FIELD_HE_IDENT = 'he_ident';
public const FIELD_HE_LATITUDE_DEG = 'he_latitude_deg';
public const FIELD_HE_LONGITUDE_DEG = 'he_longitude_deg';
public const FIELD_HE_ELEVATION_FT = 'he_elevation_ft';
public const FIELD_HE_HEADING_DEG_T = 'he_heading_degT';
public const FIELD_HE_DISPLACED_THRESHOLD_FT = 'he_displaced_threshold_ft';

protected $classId = "3";
protected $className = "runway";
protected $airport_ref;
protected $airport_ident;
protected $length_ft;
protected $width_ft;
protected $surface;
protected $lighted;
protected $closed;
protected $le_ident;
protected $le_latitude_deg;
protected $le_longitude_deg;
protected $le_elevation_ft;
protected $le_heading_degT;
protected $le_displaced_threshold_ft;
protected $he_ident;
protected $he_latitude_deg;
protected $he_longitude_deg;
protected $he_elevation_ft;
protected $he_heading_degT;
protected $he_displaced_threshold_ft;


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
* Get length_ft - Length _ft
* @return float|null
*/
public function getLength_ft(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("length_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->length_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set length_ft - Length _ft
* @param float|null $length_ft
* @return $this
*/
public function setLength_ft(?float $length_ft): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("length_ft");
	$this->length_ft = $fd->preSetData($this, $length_ft);
	return $this;
}

/**
* Get width_ft - Width_ft
* @return float|null
*/
public function getWidth_ft(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("width_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->width_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set width_ft - Width_ft
* @param float|null $width_ft
* @return $this
*/
public function setWidth_ft(?float $width_ft): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("width_ft");
	$this->width_ft = $fd->preSetData($this, $width_ft);
	return $this;
}

/**
* Get surface - Surface
* @return string|null
*/
public function getSurface(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("surface");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->surface;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set surface - Surface
* @param string|null $surface
* @return $this
*/
public function setSurface(?string $surface): static
{
	$this->markFieldDirty("surface", true);

	$this->surface = $surface;

	return $this;
}

/**
* Get lighted - Lighted
* @return string|null
*/
public function getLighted(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("lighted");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->lighted;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set lighted - Lighted
* @param string|null $lighted
* @return $this
*/
public function setLighted(?string $lighted): static
{
	$this->markFieldDirty("lighted", true);

	$this->lighted = $lighted;

	return $this;
}

/**
* Get closed - Closed
* @return string|null
*/
public function getClosed(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("closed");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->closed;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set closed - Closed
* @param string|null $closed
* @return $this
*/
public function setClosed(?string $closed): static
{
	$this->markFieldDirty("closed", true);

	$this->closed = $closed;

	return $this;
}

/**
* Get le_ident - Le _ident
* @return string|null
*/
public function getLe_ident(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_ident");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_ident;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_ident - Le _ident
* @param string|null $le_ident
* @return $this
*/
public function setLe_ident(?string $le_ident): static
{
	$this->markFieldDirty("le_ident", true);

	$this->le_ident = $le_ident;

	return $this;
}

/**
* Get le_latitude_deg - Le _latitude _deg
* @return float|null
*/
public function getLe_latitude_deg(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_latitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_latitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_latitude_deg - Le _latitude _deg
* @param float|null $le_latitude_deg
* @return $this
*/
public function setLe_latitude_deg(?float $le_latitude_deg): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("le_latitude_deg");
	$this->le_latitude_deg = $fd->preSetData($this, $le_latitude_deg);
	return $this;
}

/**
* Get le_longitude_deg - Le _longitude_deg
* @return float|null
*/
public function getLe_longitude_deg(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_longitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_longitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_longitude_deg - Le _longitude_deg
* @param float|null $le_longitude_deg
* @return $this
*/
public function setLe_longitude_deg(?float $le_longitude_deg): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("le_longitude_deg");
	$this->le_longitude_deg = $fd->preSetData($this, $le_longitude_deg);
	return $this;
}

/**
* Get le_elevation_ft - Le _elevation _ft
* @return float|null
*/
public function getLe_elevation_ft(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_elevation_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_elevation_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_elevation_ft - Le _elevation _ft
* @param float|null $le_elevation_ft
* @return $this
*/
public function setLe_elevation_ft(?float $le_elevation_ft): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("le_elevation_ft");
	$this->le_elevation_ft = $fd->preSetData($this, $le_elevation_ft);
	return $this;
}

/**
* Get le_heading_degT - Le _heading _deg T
* @return float|null
*/
public function getLe_heading_degT(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_heading_degT");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_heading_degT;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_heading_degT - Le _heading _deg T
* @param float|null $le_heading_degT
* @return $this
*/
public function setLe_heading_degT(?float $le_heading_degT): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("le_heading_degT");
	$this->le_heading_degT = $fd->preSetData($this, $le_heading_degT);
	return $this;
}

/**
* Get le_displaced_threshold_ft - Le _displaced _threshold _ft
* @return float|null
*/
public function getLe_displaced_threshold_ft(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_displaced_threshold_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_displaced_threshold_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_displaced_threshold_ft - Le _displaced _threshold _ft
* @param float|null $le_displaced_threshold_ft
* @return $this
*/
public function setLe_displaced_threshold_ft(?float $le_displaced_threshold_ft): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("le_displaced_threshold_ft");
	$this->le_displaced_threshold_ft = $fd->preSetData($this, $le_displaced_threshold_ft);
	return $this;
}

/**
* Get he_ident - He _ident
* @return string|null
*/
public function getHe_ident(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_ident");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_ident;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_ident - He _ident
* @param string|null $he_ident
* @return $this
*/
public function setHe_ident(?string $he_ident): static
{
	$this->markFieldDirty("he_ident", true);

	$this->he_ident = $he_ident;

	return $this;
}

/**
* Get he_latitude_deg - He _latitude _deg
* @return float|null
*/
public function getHe_latitude_deg(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_latitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_latitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_latitude_deg - He _latitude _deg
* @param float|null $he_latitude_deg
* @return $this
*/
public function setHe_latitude_deg(?float $he_latitude_deg): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("he_latitude_deg");
	$this->he_latitude_deg = $fd->preSetData($this, $he_latitude_deg);
	return $this;
}

/**
* Get he_longitude_deg - He _longitude _deg
* @return float|null
*/
public function getHe_longitude_deg(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_longitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_longitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_longitude_deg - He _longitude _deg
* @param float|null $he_longitude_deg
* @return $this
*/
public function setHe_longitude_deg(?float $he_longitude_deg): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("he_longitude_deg");
	$this->he_longitude_deg = $fd->preSetData($this, $he_longitude_deg);
	return $this;
}

/**
* Get he_elevation_ft - He _elevation _ft
* @return float|null
*/
public function getHe_elevation_ft(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_elevation_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_elevation_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_elevation_ft - He _elevation _ft
* @param float|null $he_elevation_ft
* @return $this
*/
public function setHe_elevation_ft(?float $he_elevation_ft): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("he_elevation_ft");
	$this->he_elevation_ft = $fd->preSetData($this, $he_elevation_ft);
	return $this;
}

/**
* Get he_heading_degT - He _heading _deg T
* @return float|null
*/
public function getHe_heading_degT(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_heading_degT");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_heading_degT;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_heading_degT - He _heading _deg T
* @param float|null $he_heading_degT
* @return $this
*/
public function setHe_heading_degT(?float $he_heading_degT): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("he_heading_degT");
	$this->he_heading_degT = $fd->preSetData($this, $he_heading_degT);
	return $this;
}

/**
* Get he_displaced_threshold_ft - He _displaced _threshold _ft
* @return float|null
*/
public function getHe_displaced_threshold_ft(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_displaced_threshold_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_displaced_threshold_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_displaced_threshold_ft - He _displaced _threshold _ft
* @param float|null $he_displaced_threshold_ft
* @return $this
*/
public function setHe_displaced_threshold_ft(?float $he_displaced_threshold_ft): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("he_displaced_threshold_ft");
	$this->he_displaced_threshold_ft = $fd->preSetData($this, $he_displaced_threshold_ft);
	return $this;
}

}

