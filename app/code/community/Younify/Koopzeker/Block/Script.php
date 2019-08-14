<?php
	class Younify_Koopzeker_Block_Script extends Mage_Core_Block_Template{
		function _construct(){
			parent::_construct();
			$this->setTemplate('koopzeker/script.phtml');
		}
	}
?>