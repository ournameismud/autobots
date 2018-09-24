<?php
/**
 * Autobots plugin for Craft CMS 3.x
 *
 * Simple variable plugin to declare image transforms in your config and access these within templates
 *
 * @link      http://ournameismud.co.uk/
 * @copyright Copyright (c) 2018 @cole007
 */

namespace ournameismud\autobots\assetbundles\Autobots;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    @cole007
 * @package   Autobots
 * @since     0.0.1
 */
class AutobotsAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@ournameismud/autobots/assetbundles/autobots/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Autobots.js',
        ];

        $this->css = [
            'css/Autobots.css',
        ];

        parent::init();
    }
}
