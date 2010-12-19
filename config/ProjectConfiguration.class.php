<?php
#require_once '/srv/lib/symfony14/lib/autoload/sfCoreAutoload.class.php';
require_once 'E:\Server\share\symfony\symfony14\lib\autoload\sfCoreAutoload.class.php';

sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
  }
}
