<?php

namespace Pimcore\Model\DataObject\Runway;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Runway|false current()
 * @method DataObject\Runway[] load()
 * @method DataObject\Runway[] getData()
 * @method DataObject\Runway[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "3";
protected $className = "runway";


/**
* Filter by airport_ref (Airport _ref)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByAirport_ref ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("airport_ref")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by airport_ident (Airport _ident)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByAirport_ident ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("airport_ident")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by length_ft (Length _ft)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLength_ft ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("length_ft")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by width_ft (Width_ft)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByWidth_ft ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("width_ft")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by surface (Surface)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterBySurface ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("surface")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by lighted (Lighted)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLighted ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("lighted")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by closed (Closed)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByClosed ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("closed")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by le_ident (Le _ident)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLe_ident ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("le_ident")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by le_latitude_deg (Le _latitude _deg)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLe_latitude_deg ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("le_latitude_deg")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by le_longitude_deg (Le _longitude_deg)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLe_longitude_deg ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("le_longitude_deg")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by le_elevation_ft (Le _elevation _ft)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLe_elevation_ft ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("le_elevation_ft")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by le_heading_degT (Le _heading _deg T)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLe_heading_degT ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("le_heading_degT")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by le_displaced_threshold_ft (Le _displaced _threshold _ft)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByLe_displaced_threshold_ft ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("le_displaced_threshold_ft")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by he_ident (He _ident)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByHe_ident ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("he_ident")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by he_latitude_deg (He _latitude _deg)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByHe_latitude_deg ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("he_latitude_deg")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by he_longitude_deg (He _longitude _deg)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByHe_longitude_deg ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("he_longitude_deg")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by he_elevation_ft (He _elevation _ft)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByHe_elevation_ft ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("he_elevation_ft")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by he_heading_degT (He _heading _deg T)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByHe_heading_degT ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("he_heading_degT")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by he_displaced_threshold_ft (He _displaced _threshold _ft)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByHe_displaced_threshold_ft ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("he_displaced_threshold_ft")->addListingFilter($this, $data, $operator);
	return $this;
}



}
