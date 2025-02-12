<?php
class blogModel extends Model
{

	public function record($data = [])
	{
		$this->insert("blog", $data);
	}

	public function countAll($search, $searchColumns)
	{
		return $this->countAllSearch("blog", $search, $searchColumns);
	}

	public function displayAll($offset = null, $limit = null)
	{
           		$columns = array (
  0 => 'blogId',
  1 => 'blogTitle',
  2 => 'blogContent',
  3 => 'blogAuthor',
  4 => 'blogImage',
  5 => 'blogUpdated',
  6 => 'blogIdentify',
);
		return $this->dynamicSelectPagination("blog", $columns, [], $offset, $limit);
	}

	public function displayAllSearch($search, $searchColumns, $offset = null, $limit = null)
	{
	$columns = array (
  0 => 'blogId',
  1 => 'blogTitle',
  2 => 'blogContent',
  3 => 'blogAuthor',
  4 => 'blogImage',
  5 => 'blogUpdated',
  6 => 'blogIdentify',
);
		return $this->dynamicSelectSearch("blog", $columns, [], $search, $searchColumns, $offset, $limit);
	}

	public function displaySingle($id)
	{
		$columns = array (
  0 => 'blogId',
  1 => 'blogTitle',
  2 => 'blogContent',
  3 => 'blogAuthor',
  4 => 'blogImage',
  5 => 'blogUpdated',
  6 => 'blogIdentify',
);
		return $this->dynamicSelect("blog", $columns, ["blogIdentify" => $id]);
	}

	public function update($data, $id)
	{
		return $this->dynamicUpdateWithWhere("blog", $data, ["blogIdentify" => $id]);
	}

	public function erase($id)
	{
		return $this->dynamicDeleteWithPlaceholders("blog", ["blogIdentify" => $id]);
	}
}
