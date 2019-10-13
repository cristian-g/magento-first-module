<?php
namespace CristianGonzalez\FirstModule\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'cristiangonzalez_firstmodule_post';

	protected $_cacheTag = 'cristiangonzalez_firstmodule_post';

	protected $_eventPrefix = 'cristiangonzalez_firstmodule_post';

	protected function _construct()
	{
		$this->_init('CristianGonzalez\FirstModule\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}