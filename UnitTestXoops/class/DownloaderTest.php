<?php
require_once(dirname(__FILE__).'/../init.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class DownloaderAbstractTest extends MY_UnitTestCase
{ 
    public function test___construct()
	{
        // abstract class -> no test
    }
}
