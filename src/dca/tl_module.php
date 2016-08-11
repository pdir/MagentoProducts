<?php

if (!defined('TL_ROOT'))
	die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  pdir / digital agentur 2016
 * @author     Mathias Arzberger <develop@pdir.de>
 * @package    MagentoProducts
 * @license    GPL
 * @filesource
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['magento_products'] = '{title_legend},name,headline,type;{config_legend},cie_ccmp_show_category,cie_ccmp_list_count;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['cie_ccmp_show_category'] = array
	(
	'label'					=> &$GLOBALS['TL_LANG']['MOD']['cie_ccmp_show_category'],
	'exclude'				=> true,
	'inputType'				=> 'select',
	'options_callback'		=> array('magento_products', 'getAllCategories'),
	'eval'					=> array('chosen' => true, 'tl_class' => 'w50'),
	'sql'					=> "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cie_ccmp_list_count'] = array
	(
	'label'					=> &$GLOBALS['TL_LANG']['MOD']['cie_ccmp_list_count'],
	'exclude'				=> true,
	'inputType'				=> 'text',
	'eval'					=> array(
			'mandatory' => true,
			'decodeEntities' => true,
			'maxlength' => 255,
			'tl_class' => 'w50'
	),
	'sql'					=> "int(10) unsigned NOT NULL default '0'"
);

class magento_products extends Backend
{

	public function getAllCategories(DataContainer $dc)
	{
		$categories_result = $this->Database->prepare("SELECT * FROM tl_cie_categories")->execute();

		$categories = array();
		while ($categories_result->next()) {
			$row = $categories_result->row();

			$categories[$row['id']] = $row['title'];
		}

		return $categories;
	}

	/**
	 * Return all list templates as array
	 * @param DataContainer
	 * @return array
	 */
	public function getListTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if ($this->Input->get('act') == 'overrideAll') {
			$intPid = $this->Input->get('id');
		}

		return $this->getTemplateGroup('mod_', $intPid);
	}

}

?> 