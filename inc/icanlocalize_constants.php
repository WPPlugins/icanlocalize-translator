<?php
if(!defined('ICL_API_ENDOINT')){
    define('ICL_API_ENDOINT','https://www.icanlocalize.com/');  
}
define('ICLT_DEBUG_MODE', FALSE);

define('CMS_REQUEST_WAITING_FOR_PROJECT_CREATION',1);
define('CMS_REQUEST_PROJECT_CREATION_REQUESTED',2);
define('CMS_REQUEST_CREATING_PROJECT',3);
define('CMS_REQUEST_RELEASED_TO_TRANSLATORS',4);
define('CMS_REQUEST_TRANSLATED',5);
define('CMS_REQUEST_DONE',6);
define('CMS_REQUEST_FAILED',7);
?>
