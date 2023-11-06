<?php

namespace Pimcore\Model\DataObject\Frequency;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Frequency|false current()
 * @method DataObject\Frequency[] load()
 * @method DataObject\Frequency[] getData()
 * @method DataObject\Frequency[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "2";
protected $className = "frequency";


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
* Filter by freq_type (Frequency type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByFreq_type ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("freq_type")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by description (Description)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByDescription ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("description")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by frequency_mhz (Frequency _mhz)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByFrequency_mhz ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("frequency_mhz")->addListingFilter($this, $data, $operator);
	return $this;
}



}
