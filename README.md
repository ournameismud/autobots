# Autobots plugin for Craft CMS 3.x

Simple variable plugin to declare image transforms in your config and access these within templates

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require ournameismud/autobots

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Autobots.

## Autobots Overview

This provides a variable object for image transforms that can be saved in your config folder.

## Configuring Autobots


Your image transforms are saved in your project config folder with the name `autobots.php` with arrays for your image transforms, eg:

```
<?php

return [
    'transforms' => [
    	'thumbCrop' => [
    		'mode'=>'crop',
    		'width'=>'280',
    		'height'=>'280',
    		'position'=>'center-center',
    	],
    	'heroCrop' => [
    		'mode'=>'crop',
    		'width'=>'1489',
    		'height'=>'650',
    		'position'=>'center-center',
    	]
	]
];
```

## Using Autobots

Your image transforms can be easily accessed in your templates, eg:

`{% set transforms = craft.autobots.transforms %}` and then `{{ transforms.thumbCrop }}` to access.


## Autobots Roadmap

* Pass and retrieve specific transform into variable, eg `{% set heroCrop = craft.autobots.transforms('heroCrop') %}`

Brought to you by [@cole007](http://ournameismud.co.uk/)
Autobot by rayhan maulana rikzan from the Noun Project