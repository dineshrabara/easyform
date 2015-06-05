# easyform


## Installation

[![Latest Stable Version](https://poser.pugx.org/dinesh/easyform/v/stable.svg)](https://packagist.org/packages/dinesh/easyform) [![Total Downloads](https://poser.pugx.org/dinesh/easyform/downloads.svg)](https://packagist.org/packages/dinesh/easyform) [![Latest Unstable Version](https://poser.pugx.org/dinesh/easyform/v/unstable.svg)](https://packagist.org/packages/dinesh/easyform) [![License](https://poser.pugx.org/dinesh/easyform/license.svg)](https://packagist.org/packages/dinesh/easyform)
[![Build Status](https://travis-ci.org/dineshrabara/easyform.svg?branch=master)](https://travis-ci.org/dineshrabara/easyform)

Begin by installing this package through Composer.
Edit your project's `composer.json` file to require `dinesh/easyform`.

    "require": {
		"laravel/framework": "4.*",
		"dinesh/easyform": "dev-master"
	}

Next, update Composer from the Terminal:

    composer update

OR

    composer require dinesh/easyform:dev-master

Once this operation completes, the next step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Dinesh\Easyform\EasyformServiceProvider',

Next, you need to publish it's config file(s).

    php artisan config:publish dinesh/easyform

default config template

```php

return array(
    'templates' => array(
        'default' => '<div class="form-group {{error-has}}">
                    {{label}}
                    <div class="controls col-sm-5">
                        {{tag}}
                        {{error-first}}
                    </div>
                </div>',
        'default2' => '<div class="form-group">
                    {{label}}00000000
                    <div class="controls col-sm-5">
                        {{tag}}
                    </div>
                </div>',
    ),
    'tags' => array('{{test}}' => 'default_value'),
);
```

example

```php

{{EasyForm::text('first_name',null,array('class'=> 'form-control'))
          ->label('First Name:',array('class'=>'col-sm-2 control-label'))
          ->error($errors)}}
```