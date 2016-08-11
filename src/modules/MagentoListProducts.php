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

namespace Pdir;

/*
 * Front end
 */
$GLOBALS['TL_CSS'][] = 'system/modules/MagentoProducts/html/ccmp.css';

/**
 * Class MagentoListProducts
 *
 * @copyright  pdir / digital agentur 2016
 * @author     Mathias Arzberger <develop@pdir.de>
 * @package    Controller
 */
class MagentoListProducts extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_magento_list_prod';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ' . utf8_strtoupper('Magento Products') . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{
		$id = $this->cie_ccmp_show_category;
		$count = $this->cie_ccmp_list_count;

		if ($count > 0) {
			$strLimit = "LIMIT 0, $count";
			$this->Template->limit = "Unsere Produkte";
		}
		$arrProductsResult = $this->Database->prepare("SELECT * FROM tl_cie_categories WHERE id = $id $strLimit")->execute();

		$arrProducts = array();
		while ($arrProductsResult->next()) {
			$arrProducts = $arrProductsResult->row();
		}
		$this->Template->products = $arrProducts;
	}

}

?>