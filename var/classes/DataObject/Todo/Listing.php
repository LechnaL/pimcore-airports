<?php

namespace Pimcore\Model\DataObject\Todo;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Todo|false current()
 * @method DataObject\Todo[] load()
 * @method DataObject\Todo[] getData()
 * @method DataObject\Todo[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "4";
protected $className = "todo";


/**
* Filter by user_id (User _id)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByUser_id ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("user_id")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by title (Title)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByTitle ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("title")->addListingFilter($this, $data, $operator);
	return $this;
}



}
