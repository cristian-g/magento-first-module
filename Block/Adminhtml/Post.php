<?php
namespace CristianGonzalez\FirstModule\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{
	/**
	 * constructor
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'CristianGonzalez_FirstModule';
		$this->_headerText = __('Posts');
		$this->_addButtonLabel = __('Create New Post');
		parent::_construct();
	}
}