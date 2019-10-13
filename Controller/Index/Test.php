<?php

namespace CristianGonzalez\FirstModule\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'CristianGonzalez'));
		$this->_eventManager->dispatch('cristiangonzalez_firstmodule_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}