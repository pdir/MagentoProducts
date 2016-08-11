<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   MaklerModulMplus
 * @author    Mathias Arzberger <develop@pdir.de>
 * @license   All-rights-reserved.
 * @copyright pdir / digital agentur
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Pdir',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Modules
    'Pdir\MagentoListProducts'                 => 'system/modules/MagentoProducts/modules/MagentoListProducts.php',

    // Models
    'Pdir\MagentoCategoriesModel'       => 'system/modules/MagentoProducts/models/MagentoCategoriesModel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_magento_list_prod' => 'system/modules/MagentoProducts/templates',
));
