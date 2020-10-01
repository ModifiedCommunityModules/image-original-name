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
   Install in admin directoty /includes/modules/categories/
   Activate in admin backend   /module/

*/

defined( '_VALID_XTC' ) or die( 'Direct Access to this location is not allowed.' );

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class imageOriginalName extends StdModule
{
  
    function __construct()
    {
        $this->init('MODULE_CATEGORIES_MF_IMAGEORIGINALNAME');
    }
        
    //--- BEGIN CUSTOM  CLASS METHODS ---//

    function image_name(string $image_name, int $data_id, string $counter, string $suffix, array $name_arr, $srcID, array $data_arr): string
    {
        // include the seo mask to clean up names - insert hyphens, remove umlauts and lower case etc.
        include_once (DIR_FS_INC . 'seo_url_href_mask.php');

        $separator = (((string)$counter > 0) ? '-'.$counter : ''); // first image is clean without -0 on the end of the name

        $name= array_shift($name_arr); // gets the original name of the uploaded file

        // now glue it all together
        $image_name = seo_url_href_mask($name).$separator.'.'.$suffix;

        //and return the new string
        return $image_name;
    }
}
