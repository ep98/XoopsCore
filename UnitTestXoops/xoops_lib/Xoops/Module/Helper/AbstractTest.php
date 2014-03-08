<?php
require_once(dirname(__FILE__).'/../../../../init_mini.php');

class Xoops_Module_Helper_AbstractInstance extends Xoops_Module_Helper_Abstract
{
}

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class Xoops_Module_Helper_AbstractTest extends MY_UnitTestCase
{
    protected $myclass = 'Xoops_Module_Helper_AbstractInstance';
    
    public function test___construct()
	{
		$dir = XOOPS_ROOT_PATH.'/modules/avatar';
		$instance = new $this->myclass($dir);
		$this->assertInstanceOf($this->myclass, $instance);
    }

}
