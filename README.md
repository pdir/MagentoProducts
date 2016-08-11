Magento Products for Contao
======================

About
-----

Make products from different Magento installations available on your Contao website.

With the extension Magento Products you can easily integrate existing products from Magento categories using a simple content module into your Contao website.
       

System requirements
-------------------

* [Contao](https://github.com/contao/core) 3.2.16 or higher


Installation & Configuration
----------------------------

1. Install MagentoProducts over extension management
2. Copy the content of the file under TL_ROOT/files/magento/magento_products_data.php.txt via FTP or file manager and place it as cie_products_data.php in the root directory of the desired Magento installation(s)
3. Content - Magento products - add new categories for the frontend module
  Set up a category ID of a Magento category, specify a name and specify the url of the script stored in step 2.
  (Ex. http://www.yourdomain.de/cie_products_data.php)
  Create front-end module for the output of the product data: add new module of type &quot;Magento products&quot; in &quot;Layout&quot; -[gt] &quot;Themes&quot; -[gt] &quot;YourActiveTheme&quot; 
  Add newly created module on &quot;content&quot; -[gt] &quot;articles&quot; on a content page :) and watch it!

License
---------------
GPL


ToDo
---------------


Support & Bugs
---------------
If you run into issues with the module, please open a new issue on https://github.com/pdir/MagentoProducts/issues


Deutsche Beschreibung
---------------
&lt;p&gt;Mit der Erweiterung &lt;em&gt;MagentoProducts&lt;/em&gt; k&amp;ouml;nne Sie auf einfache Weise Produkte aus vorhandenen Magento Kategorien &amp;uuml;ber ein einfaches Contentmodul in Ihre Contao Website integrieren.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Installation&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;1. MagentoProducts &amp;uuml;ber Erweiterungsverwaltung installieren&lt;br /&gt;2. Den Inhalt der Datei unter TL_ROOT/files/cie/cie_products_data.php.txt per FTP oder aus der Dateiverwaltung kopieren und als cie_products_data.php im Root-Verzeichnis der gew&amp;uuml;nschten Magento Installation(en) ablegen.&lt;br /&gt;3. &amp;Uuml;ber &quot;Inhalte&quot; -[gt] &quot;Magento Produkte&quot; neue Kategorien f&amp;uuml;r das Content-Modul &lt;em&gt;hinzuf&amp;uuml;gen&lt;/em&gt;.&lt;br /&gt;4. In Datensatz bearbeiten eine Kategorie ID einer Magento Kategorie eingeben, einen Namen der Kategrie angeben und die Url zum in Punkt 2 abgelegten Script angeben. (Bsp. http://www.ihredomain.de/cie_products_data.php)&lt;br /&gt;5. Unter &quot;Layout&quot; -[gt] &quot;Themes&quot; -[gt] &quot;&lt;em&gt;IhrAktiverTheme&lt;/em&gt;&quot; -[gt] Frontend-Modul f&amp;uuml;r die Ausgabe der Produkdaten ein neues Modul vom Typ &quot;Magento Produkte&quot; anlegen&lt;br /&gt;6. Neu angelegtes Modul &amp;uuml;ber &quot;Inhalte&quot; -[gt] &quot;Artikel&quot; auf einer Inhaltseite platzieren und im Frontend anschauen :) fertig!&lt;/p&gt;