<?php

namespace Pimcore\Model\DataObject\Airport;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Airport|false current()
 * @method DataObject\Airport[] load()
 * @method DataObject\Airport[] getData()
 * @method DataObject\Airport[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "1";
protected $className = "airport";


/**
* Filter by ident (Ident)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByIdent ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("ident")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by airport_type (Airport _type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByAirport_type ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("airport_type")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by name (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByName ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by elevation_ft (Elevation _ft)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByElevation_ft ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("elevation_ft")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by continent (Continent)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByContinent ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("continent")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by iso_country (Iso _country)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByIso_country ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("iso_country")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by iso_region (Iso _region)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByIso_region ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("iso_region")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by municipality (Municipality)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByMunicipality ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("municipality")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by scheduled_service (Scheduled _service)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByScheduled_service ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("scheduled_service")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by gps_code (Gps _code)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByGps_code ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("gps_code")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by iata_code (Iata _code)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByIata_code ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("iata_code")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by local_code (Local _code)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLocal_code ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("local_code")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by home_link (Home _link)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByHome_link ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("home_link")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by wikipedia_link (Wikipedia _link)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByWikipedia_link ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("wikipedia_link")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by keywords (Keywords)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByKeywords ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("keywords")->addListingFilter($this, $data, $operator);
	return $this;
}



}
