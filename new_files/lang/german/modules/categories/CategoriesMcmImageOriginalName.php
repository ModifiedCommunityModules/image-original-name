<?php
$moduleType = 'MODULE_CATEGORIES';
$moduleName = 'MCM_IMAGE_ORIGINAL_NAME';
$prefix = $moduleType . '_' . $moduleName  . '_';

define($prefix . 'TITLE', 'Bildernamen bei Upload erhalten © by <a href="https://www.modified-shop.org/forum/index.php?topic=15464.0" target="_blank" style="color: #b0377e; font-weight: bold;">xt_modding</a>');
define($prefix . 'LONG_DESCRIPTION', 'Der original Bild-Dateiname wird erhalten (für Kategorien und Produkte) und die Namen bereinigt und SEO Fit gemacht.<br>Dabei werden alle Buchstaben klein geschrieben, Leerzeichen mit Bindestrichen ersetzt und Umlaute etc. bereinigt. Ferner ist beim ersten Bild keine 0 am Ende. Bei weiteren Bildern wird der Zähler 1,2 etc. mit Bindestrichen angehangen.<br><br>Achtung: Diese Änderungen werden nicht bei bereits vorhandenen Bildern durchgeführt! Diese müssen gegebenfalls extra angepasst werden.<br><br>Für dieses Modul kann Support freundlich im modified Forum erfragt werden. Ein Anspruch auf Support besteht jedoch nicht. Alternativ kann ein Dienstleister kostenpflichtig beauftragt werden.'); 
define($prefix . 'STATUS_TITLE', 'Bildernamen bei Upload erhalten Modul aktivieren?');
define($prefix . 'STATUS_DESC', '');
