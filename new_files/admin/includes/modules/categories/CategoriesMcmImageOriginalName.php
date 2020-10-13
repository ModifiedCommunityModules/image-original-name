<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2020 [www.modified-shop.org]

   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   
   Link zum Thema: https://www.modified-shop.org/forum/index.php?topic=15464.0
   
   catImageOriginalName module by wdp.net 2016
   Install in admin directory /includes/modules/categories/
   Activate in admin backend   /module/

*/

defined( '_VALID_XTC' ) or die( 'Direct Access to this location is not allowed.' );

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class CategoriesMcmImageOriginalName extends StdModule
{
  
    public function __construct()
    {
        $this->init('MODULE_CATEGORIES_MCM_IMAGE_ORIGINAL_NAME');
    }

    public function image_name(string $imageName, string $dataId, string $counter, string $suffix, array $nameArr, bool $srcId, array $dataArr): string
    {
        // include the seo mask to clean up names - insert hyphens, remove umlauts and lower case etc.
        include_once DIR_FS_INC . 'seo_url_href_mask.php';

        // first image is clean without -0 on the end of the name
        $separator = ((string) $counter > 0) ? '-' . $counter : '';

        // gets the original name of the uploaded file
        $name = array_shift($nameArr);

        // now glue it all together
        $imageName = seo_url_href_mask($name) . $separator . '.' . $suffix;

        return $imageName;
    }
}
