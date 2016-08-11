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
$GLOBALS['TL_DCA']['tl_cie_categories'] = array
	(
	'config' => array
		(
		'dataContainer' => 'Table',
		'switchToEdit' 	=> true,
		'sql'          	=> array(
				'keys' => array(
						'id' => 'primary'
				)
		),
	),
	'list' => array
		(
		// Sortierung
		'sorting' => array
			(
			'mode' => 1,
			// Sortierung nach name
			'fields' => array('title'),
			// Kategorisierung
			'flag' => 1,
			// Layout
			'panelLayout' => 'search,limit'
		),
		// Beschriftung
		'label' => array
			(
			'fields' => array('title'),
			'format' => '%s',
		// Callback f�r die Beschriftung
		// 'label_callback'          => array('tl_cie_categories', 'addCategorie')
		),
		'global_operations' => array
			(
			'all' => array
				(
				'label' => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href' => 'act=select',
				'class' => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
			(
			'edit' => array
				(
				'label' => &$GLOBALS['TL_LANG']['tl_cie_categories']['edit'],
				'href' => 'act=edit',
				'icon' => 'edit.gif',
			),
			'copy' => array
				(
				'label' => &$GLOBALS['TL_LANG']['tl_cie_categories']['copy'],
				'href' => 'act=copy',
				'icon' => 'copy.gif',
			),
			'delete' => array
				(
				'label' => &$GLOBALS['TL_LANG']['tl_cie_categories']['delete'],
				'href' => 'act=delete',
				'icon' => 'delete.gif',
				'attributes' => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"',
			),
			'show' => array
				(
				'label' => &$GLOBALS['TL_LANG']['tl_cie_categories']['show'],
				'href' => 'act=show',
				'icon' => 'show.gif'
			)
		),
	), // list end
	'palettes' => array
		(
		'default' => '{title_legend},categorie_id,title,url'
	),
	'fields' => array(
			'id' => array(
				'sql' => "int(10) unsigned NOT NULL auto_increment",
			),

			'tstamp' => array(
				'sql' => "int(10) unsigned NOT NULL default '0'"
			),
			'status' => array(
					'label' => &$GLOBALS['TL_LANG']['tl_cie_categories']['status'],
					'inputType' => 'checkbox',
					'sql' => "int(1) unsigned NOT NULL default '1'"
			),
		// Felder, die im Backend angezeigt werden sollen.
		'categorie_id' => array
			(
			'label' => &$GLOBALS['TL_LANG']['tl_cie_categories']['categorie_id'],
			'inputType' => 'text',
			'search' => true,
			'eval' => array('mandatory' => true, 'maxlength' => 5),
			'sql'	=> "int(10) unsigned NOT NULL default '0'"
		),
		'title' => array
			(
			'label' => &$GLOBALS['TL_LANG']['tl_cie_categories']['title'],
			'inputType' => 'text',
			'search' => true,
			'eval' => array('mandatory' => true, 'maxlength' => 255),
			'sql'	=> "varchar(255) NOT NULL default ''"
		),
		'url' => array
			(
			'label' => &$GLOBALS['TL_LANG']['tl_cie_categories']['url'],
			'inputType' => 'text',
			'search' => true,
			'eval' => array('mandatory' => true, 'maxlength' => 255),
			'sql'	=> "varchar(255) NOT NULL default ''"
		),
	)
);