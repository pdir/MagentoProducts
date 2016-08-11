<?php

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
/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
array_insert($GLOBALS['BE_MOD'], 2, array
	(
	'content' => array /* Gruppe */
		(
		'magento_products' => array /* Modul */
			(
			// list of tables
			'tables' => array('tl_cie_categories'),
			// backend icon
			'icon' => 'system/modules/MagentoProducts/assets/images/icon_16x16px.png'
		)
	)
));


/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */
array_insert($GLOBALS['FE_MOD']['miscellaneous'], 0, array
	(
	'magento_products' => 'MagentoListProducts'
));
?>