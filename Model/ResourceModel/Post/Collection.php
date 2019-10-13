<?php
namespace CristianGonzalez\FirstModule\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'cristiangonzalez_firstmodule_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('CristianGonzalez\FirstModule\Model\Post', 'CristianGonzalez\FirstModule\Model\ResourceModel\Post');
	}

}