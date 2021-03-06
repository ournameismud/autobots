<?php
/**
 * Autobots plugin for Craft CMS 3.x
 *
 * Simple variable plugin to declare image transforms in your config and access these within templates
 *
 * @link      http://ournameismud.co.uk/
 * @copyright Copyright (c) 2018 @cole007
 */

namespace ournameismud\autobots\variables;

use ournameismud\autobots\Autobots;
// use ournameismud\autobots\models\Settings;

use Craft;

/**
 * @author    @cole007
 * @package   Autobots
 * @since     0.0.1
 */
class AutobotsVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function transforms($option = null)
    {
        $settings = Autobots::$plugin->getSettings();
        $transforms = $settings->transforms;
        return $transforms;
    }
}
