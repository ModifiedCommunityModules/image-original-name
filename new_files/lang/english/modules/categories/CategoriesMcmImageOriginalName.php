<?php
$moduleType = 'MODULE_CATEGORIES';
$moduleName = 'MCM_IMAGE_ORIGINAL_NAME';
$prefix = $moduleType . '_' . $moduleName  . '_';

define($prefix . 'TITLE', 'Get image name on upload © by <a href="https://www.modified-shop.org/forum/index.php?topic=15464.0" target="_blank" style="color: #b0377e; font-weight: bold;">xt_modding</a>');
define($prefix . 'LONG_DESCRIPTION', 'The original image filename will be preserved (for categories and products) and the names will be cleaned and SEO Fit will be made.<br />All letters will be lower case, spaces will be replaced with hyphens and umlauts etc. will be cleaned. Furthermore there is no 0 at the end of the first image. For further images the counter 1,2 etc. is appended with hyphens.<br /><br />Attention: These changes are not done for already existing images! If necessary, these must be adjusted separately.<br /><br />For this module you can ask for support in the modified forum. However, there is no claim to support. Alternatively, a service provider can be commissioned for a fee.');
define($prefix . 'STATUS_TITLE', 'Get image name on upload Activate module?');
define($prefix . 'STATUS_DESC', '');
