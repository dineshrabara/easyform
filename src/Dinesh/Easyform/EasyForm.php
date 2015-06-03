<?php

namespace Dinesh\Easyform;

use Illuminate\Support\Facades\Form;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of easyform
 *
 * @author Dinesh Rabara <dinesh.rabara@gmail.com>
 */
class EasyForm {

    private $template;
    private $config;
    private $tags = array(
        '{{tag}}' => '',
        '{{tag_name}}' => '',
        '{{label}}' => '',
        '{{error-first}}' => '',
        '{{error-has}}' => '',
    );

    public function __construct($config) {
        $this->config = $config;
        $this->template = $config['templates']['default'];
    }

    public function setTemplate($name) {
        $this->template = $this->config['templates'][$name];
        return $this;
    }

    public function text($name, $value = null, $options = array()) {
        $this->tags['{{tag_name}}'] = $name;
        $this->tags['{{tag}}'] = Form::text($name, $value, $options);
        return $this;
    }

    public function error($errors, $message = '<span class="error">:message</span>') {
        $this->tags['{{error-first}}'] = $errors->first($this->tags['{{tag_name}}'], $message);
        $this->tags['{{error-has}}'] = $errors->has($this->tags['{{tag_name}}']) ? 'has-error' : '';
        return $this;
    }

    public function label($value = null, $options = array()) {
        $this->tags['{{label}}'] = Form::label($this->tags['{{tag_name}}'], $value, $options);
        return $this;
    }

    public function __toString() {
        return str_replace(array_keys($this->tags), $this->tags, $this->template);
    }

}
