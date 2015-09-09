<?php
namespace Aoepeople\ComposerInstallers;

class MagentoInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'   => '.modman/' . ($vendor !== '' ? $vendor . '_' : '') . {$name},
        'source'    => 'htdocs/'
    );
}
