<?php
/**
 *	com_bixprintshop - Online-PrintStore for Joomla
 *  Copyright (C) 2014 Matthijs Alles
 *	Bixie.org
 *
 */
 
// no direct access
defined('_JEXEC') or die('Restricted access');

class plgQuickiconBps_quickiconInstallerScript {

	protected $_ext = 'bps_quickicon';
	protected $_group = 'quickicon';

	/**
	 * Called on installation
	 *
	 * @param   object  $parent  The object responsible for running this script
	 *
	 * @return  boolean  True on success
	 */
	function install($parent)
	{
		// init vars
		$db = JFactory::getDBO();
		// enable plugin
		$db->setQuery("UPDATE `#__extensions` SET `enabled` = 1, `ordering` = 9 WHERE `type` = 'plugin' AND `element` = '{$this->_ext}' AND `folder` = '{$this->_group}'");
		$db->query();

	}

}