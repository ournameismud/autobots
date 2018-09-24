<?php
/**
 * Autobots plugin for Craft CMS 3.x
 *
 * Simple variable plugin to declare image transforms in your config and access these within templates
 *
 * @link      http://ournameismud.co.uk/
 * @copyright Copyright (c) 2018 @cole007
 */

namespace ournameismud\autobots\models;

use ournameismud\autobots\Autobots;

use Craft;
use craft\base\Model;

/**
 * @author    @cole007
 * @package   Autobots
 * @since     0.0.1
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $transforms = '';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['transforms', 'string'],
        ];
    }
}
