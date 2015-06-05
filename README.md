# easyform
easyform


config file template

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
);

example

```php

{{EasyForm::text('first_name',null,array('class'=> 'form-control'))
                            ->label('First Name:',array('class'=>'col-sm-2 control-label'))->error($errors)}}
