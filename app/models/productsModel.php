<?php
class productsModel extends Model
{

	public function record($data = [])
	{
		$this->insert("products", $data);
	}

	public function countAll($search, $searchColumns)
	{
		return $this->countAllSearch("products", $search, $searchColumns);
	}

	public function displayAll($offset = null, $limit = null)
	{
           		$columns = array (
  0 => 'productId',
  1 => 'productName',
  2 => 'productDesc',
  3 => 'productPrice',
  4 => 'productImage',
  5 => 'productTags',
  6 => 'productUpdated',
  7 => 'productIdentify',
);
		return $this->dynamicSelectPagination("products", $columns, [], $offset, $limit);
	}

	public function displayAllSearch($search, $searchColumns, $offset = null, $limit = null)
	{
	$columns = array (
  0 => 'productId',
  1 => 'productName',
  2 => 'productDesc',
  3 => 'productPrice',
  4 => 'productImage',
  5 => 'productTags',
  6 => 'productUpdated',
  7 => 'productIdentify',
);
		return $this->dynamicSelectSearch("products", $columns, [], $search, $searchColumns, $offset, $limit);
	}

	public function displaySingle($id)
	{
		$columns = array (
  0 => 'productId',
  1 => 'productName',
  2 => 'productDesc',
  3 => 'productPrice',
  4 => 'productImage',
  5 => 'productTags',
  6 => 'productUpdated',
  7 => 'productIdentify',
);
		return $this->dynamicSelect("products", $columns, ["productIdentify" => $id]);
	}

	public function update($data, $id)
	{
		return $this->dynamicUpdateWithWhere("products", $data, ["productIdentify" => $id]);
	}

	public function erase($id)
	{
		return $this->dynamicDeleteWithPlaceholders("products", ["productIdentify" => $id]);
	}
}
