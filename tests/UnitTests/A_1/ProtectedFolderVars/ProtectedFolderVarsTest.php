<?php
/*
 * This file is part of the Smarty PHPUnit tests.
 */

/**
 * class for protected $template_dir, $compile_dir, $cache_dir, $config_dir, $plugins_dir property tests
 *
 * @runTestsInSeparateProcess
 * @preserveGlobalState    disabled
 * @backupStaticAttributes enabled
 */
class ProtectedFolderVarsTest extends PHPUnit_Smarty
{
    /*
     * Setup test fixture
     */
    public function setUp(): void
    {
        $this->setUpSmarty(__DIR__);
    }

    /*
     * template_dir
     */

    public function testTemplateDirDirectRelative()
    {
        $s = new Smarty();
        $s->setTemplateDir('./foo');
        $d = $s->getTemplateDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }

    public function testTemplateDirDirectRelativeArray()
    {
        $s = new Smarty();
        $s->setTemplateDir(array('./foo', './bar/'));
        $d = $s->getTemplateDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 1 ]);
    }

    public function testTemplateDirDirectRelativeArrayAdd()
    {
        $s = new Smarty();
        $s->setTemplateDir('./foo');
        $s->addTemplateDir('./bar/');
        $d = $s->getTemplateDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 1 ]);
    }

    public function testTemplateDirDirectRelativeExtends()
    {
        $s = new FolderT();
        $d = $s->getTemplateDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }

    public function testTemplateDirDirectRelativeExtends2()
    {
        $s = new FolderT();
        $s->setTemplateDir('./bar');
        $d = $s->getTemplateDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }

    /*
    * config_dir
    */

    public function testConfigDirDirectRelative()
    {
        $s = new Smarty();
        $s->setConfigDir('./foo');
        $d = $s->getConfigDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }

    public function testConfigDirDirectRelativeArray()
    {
        $s = new Smarty();
        $s->setConfigDir(array('./foo', './bar/'));
        $d = $s->getConfigDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 1 ]);
    }

    public function testConfigDirDirectRelativeArrayAdd()
    {
        $s = new Smarty();
        $s->setConfigDir('./foo');
        $s->addConfigDir('./bar/');
        $d = $s->getConfigDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 1 ]);
    }

    public function testConfigDirDirectRelativeExtends()
    {
        $s = new FolderT();
        $d = $s->getConfigDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'conf' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }

    public function testConfigDirDirectRelativeExtends2()
    {
        $s = new FolderT();
        $s->setConfigDir('./bar');
        $d = $s->getConfigDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }

    /*
    * plugins_dir
    */

    public function testPluginDirDirectRelative()
    {
        $s = new Smarty();
        $s->setPluginsDir('./foo');
        $d = $s->getPluginsDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }

    public function testPluginDirDirectRelativeArray()
    {
        $s = new Smarty();
        $s->setPluginsDir(array('./foo', './bar/'));
        $d = $s->getPluginsDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 1 ]);
    }

    public function testPluginDirDirectRelativeArrayAdd()
    {
        $s = new Smarty();
        $s->setPluginsDir('./foo');
        $s->addPluginsDir('./bar/');
        $d = $s->getPluginsDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d[ 0 ]);
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 1 ]);
    }

    public function testPluginDirDirectRelativeExtends()
    {
        $s = new FolderT();
        $d = $s->getPluginsDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'plug' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }

    public function testPluginDirDirectRelativeExtends2()
    {
        $s = new FolderT();
        $s->setPluginsDir('./bar');
        $d = $s->getPluginsDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d[ 0 ]);
    }
    /*
     * compile_dir
     */

    public function testCompileDirDirectRelative()
    {
        $s = new Smarty();
        $s->setCompileDir('./foo');
        $d = $s->getCompileDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d);
    }

    public function testCompileDirDirectRelativeExtends()
    {
        $s = new FolderT();
        $d = $s->getCompileDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'comp' . DIRECTORY_SEPARATOR, $d);
    }

    public function testCompileDirDirectRelativeExtends2()
    {
        $s = new FolderT();
        $s->setCompileDir('./bar');
        $d = $s->getCompileDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d);
    }
    /*
     * cache_dir
     */

    public function testCacheDirDirectRelative()
    {
        $s = new Smarty();
        $s->setCacheDir('./foo');
        $d = $s->getCacheDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'foo' . DIRECTORY_SEPARATOR, $d);
    }

    public function testCacheDirDirectRelativeExtends()
    {
        $s = new FolderT();
        $d = $s->getCacheDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR, $d);
    }

    public function testCacheDirDirectRelativeExtends2()
    {
        $s = new FolderT();
	    $s->setCacheDir('./bar');
        $d = $s->getCacheDir();
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . 'bar' . DIRECTORY_SEPARATOR, $d);
    }
}

class FolderT extends Smarty
{
    protected $template_dir = './foo';

    protected $compile_dir = './comp/';

    protected $plugins_dir = './plug/';

    protected $cache_dir = './cache/';

    protected $config_dir = array('./conf/');

}
