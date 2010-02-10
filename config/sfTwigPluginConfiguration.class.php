<?php

/**
 * sfTwigPlugin configuration.
 *
 * @package     sfTwigPlugin
 * @subpackage  config
 * @author      Your name here
 * @version     SVN: $Id: PluginConfiguration.class.php 17207 2009-04-10 15:36:26Z Kris.Wallsmith $
 */
class sfTwigPluginConfiguration extends sfPluginConfiguration
{
    const VERSION = '1.0.0-DEV';

    /**
     * @see sfPluginConfiguration
     */
    public function initialize()
    {
      sfConfig::set('sf_app_template_dir', sfConfig::get('sf_data_dir').'/template/application/'.sfConfig::get('sf_app'));
    }
}
