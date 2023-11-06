<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - ident [input]
 * - airport_type [input]
 * - name [input]
 * - geographic_point [geopoint]
 * - elevation_ft [numeric]
 * - continent [input]
 * - iso_country [input]
 * - iso_region [input]
 * - municipality [input]
 * - scheduled_service [input]
 * - gps_code [input]
 * - iata_code [input]
 * - local_code [input]
 * - home_link [input]
 * - wikipedia_link [input]
 * - keywords [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Airport\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByIdent(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByAirport_type(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByName(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByElevation_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByContinent(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByIso_country(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByIso_region(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByMunicipality(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByScheduled_service(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByGps_code(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByIata_code(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByLocal_code(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByHome_link(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByWikipedia_link(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByKeywords(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Airport extends Concrete
{
public const FIELD_IDENT = 'ident';
public const FIELD_AIRPORT_TYPE = 'airport_type';
public const FIELD_NAME = 'name';
public const FIELD_GEOGRAPHIC_POINT = 'geographic_point';
public const FIELD_ELEVATION_FT = 'elevation_ft';
public const FIELD_CONTINENT = 'continent';
public const FIELD_ISO_COUNTRY = 'iso_country';
public const FIELD_ISO_REGION = 'iso_region';
public const FIELD_MUNICIPALITY = 'municipality';
public const FIELD_SCHEDULED_SERVICE = 'scheduled_service';
public const FIELD_GPS_CODE = 'gps_code';
public const FIELD_IATA_CODE = 'iata_code';
public const FIELD_LOCAL_CODE = 'local_code';
public const FIELD_HOME_LINK = 'home_link';
public const FIELD_WIKIPEDIA_LINK = 'wikipedia_link';
public const FIELD_KEYWORDS = 'keywords';

protected $classId = "1";
protected $className = "airport";
protected $ident;
protected $airport_type;
protected $name;
protected $geographic_point;
protected $elevation_ft;
protected $continent;
protected $iso_country;
protected $iso_region;
protected $municipality;
protected $scheduled_service;
protected $gps_code;
protected $iata_code;
protected $local_code;
protected $home_link;
protected $wikipedia_link;
protected $keywords;


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
* Get ident - Ident
* @return string|null
*/
public function getIdent(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ident");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ident;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ident - Ident
* @param string|null $ident
* @return $this
*/
public function setIdent(?string $ident): static
{
	$this->markFieldDirty("ident", true);

	$this->ident = $ident;

	return $this;
}

/**
* Get airport_type - Airport _type
* @return string|null
*/
public function getAirport_type(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("airport_type");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->airport_type;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set airport_type - Airport _type
* @param string|null $airport_type
* @return $this
*/
public function setAirport_type(?string $airport_type): static
{
	$this->markFieldDirty("airport_type", true);

	$this->airport_type = $airport_type;

	return $this;
}

/**
* Get name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return $this
*/
public function setName(?string $name): static
{
	$this->markFieldDirty("name", true);

	$this->name = $name;

	return $this;
}

/**
* Get geographic_point - Geographic _point
* @return \Pimcore\Model\DataObject\Data\GeoCoordinates|null
*/
public function getGeographic_point(): ?\Pimcore\Model\DataObject\Data\GeoCoordinates
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("geographic_point");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->geographic_point;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set geographic_point - Geographic _point
* @param \Pimcore\Model\DataObject\Data\GeoCoordinates|null $geographic_point
* @return $this
*/
public function setGeographic_point(?\Pimcore\Model\DataObject\Data\GeoCoordinates $geographic_point): static
{
	$this->markFieldDirty("geographic_point", true);

	$this->geographic_point = $geographic_point;

	return $this;
}

/**
* Get elevation_ft - Elevation _ft
* @return float|null
*/
public function getElevation_ft(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("elevation_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->elevation_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set elevation_ft - Elevation _ft
* @param float|null $elevation_ft
* @return $this
*/
public function setElevation_ft(?float $elevation_ft): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("elevation_ft");
	$this->elevation_ft = $fd->preSetData($this, $elevation_ft);
	return $this;
}

/**
* Get continent - Continent
* @return string|null
*/
public function getContinent(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("continent");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->continent;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set continent - Continent
* @param string|null $continent
* @return $this
*/
public function setContinent(?string $continent): static
{
	$this->markFieldDirty("continent", true);

	$this->continent = $continent;

	return $this;
}

/**
* Get iso_country - Iso _country
* @return string|null
*/
public function getIso_country(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("iso_country");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->iso_country;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set iso_country - Iso _country
* @param string|null $iso_country
* @return $this
*/
public function setIso_country(?string $iso_country): static
{
	$this->markFieldDirty("iso_country", true);

	$this->iso_country = $iso_country;

	return $this;
}

/**
* Get iso_region - Iso _region
* @return string|null
*/
public function getIso_region(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("iso_region");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->iso_region;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set iso_region - Iso _region
* @param string|null $iso_region
* @return $this
*/
public function setIso_region(?string $iso_region): static
{
	$this->markFieldDirty("iso_region", true);

	$this->iso_region = $iso_region;

	return $this;
}

/**
* Get municipality - Municipality
* @return string|null
*/
public function getMunicipality(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("municipality");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->municipality;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set municipality - Municipality
* @param string|null $municipality
* @return $this
*/
public function setMunicipality(?string $municipality): static
{
	$this->markFieldDirty("municipality", true);

	$this->municipality = $municipality;

	return $this;
}

/**
* Get scheduled_service - Scheduled _service
* @return string|null
*/
public function getScheduled_service(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("scheduled_service");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->scheduled_service;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set scheduled_service - Scheduled _service
* @param string|null $scheduled_service
* @return $this
*/
public function setScheduled_service(?string $scheduled_service): static
{
	$this->markFieldDirty("scheduled_service", true);

	$this->scheduled_service = $scheduled_service;

	return $this;
}

/**
* Get gps_code - Gps _code
* @return string|null
*/
public function getGps_code(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("gps_code");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->gps_code;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set gps_code - Gps _code
* @param string|null $gps_code
* @return $this
*/
public function setGps_code(?string $gps_code): static
{
	$this->markFieldDirty("gps_code", true);

	$this->gps_code = $gps_code;

	return $this;
}

/**
* Get iata_code - Iata _code
* @return string|null
*/
public function getIata_code(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("iata_code");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->iata_code;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set iata_code - Iata _code
* @param string|null $iata_code
* @return $this
*/
public function setIata_code(?string $iata_code): static
{
	$this->markFieldDirty("iata_code", true);

	$this->iata_code = $iata_code;

	return $this;
}

/**
* Get local_code - Local _code
* @return string|null
*/
public function getLocal_code(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("local_code");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->local_code;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set local_code - Local _code
* @param string|null $local_code
* @return $this
*/
public function setLocal_code(?string $local_code): static
{
	$this->markFieldDirty("local_code", true);

	$this->local_code = $local_code;

	return $this;
}

/**
* Get home_link - Home _link
* @return string|null
*/
public function getHome_link(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("home_link");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->home_link;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set home_link - Home _link
* @param string|null $home_link
* @return $this
*/
public function setHome_link(?string $home_link): static
{
	$this->markFieldDirty("home_link", true);

	$this->home_link = $home_link;

	return $this;
}

/**
* Get wikipedia_link - Wikipedia _link
* @return string|null
*/
public function getWikipedia_link(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("wikipedia_link");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->wikipedia_link;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set wikipedia_link - Wikipedia _link
* @param string|null $wikipedia_link
* @return $this
*/
public function setWikipedia_link(?string $wikipedia_link): static
{
	$this->markFieldDirty("wikipedia_link", true);

	$this->wikipedia_link = $wikipedia_link;

	return $this;
}

/**
* Get keywords - Keywords
* @return string|null
*/
public function getKeywords(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("keywords");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->keywords;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set keywords - Keywords
* @param string|null $keywords
* @return $this
*/
public function setKeywords(?string $keywords): static
{
	$this->markFieldDirty("keywords", true);

	$this->keywords = $keywords;

	return $this;
}

}

