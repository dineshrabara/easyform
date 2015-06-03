<?php

namespace Dinesh\Easyform\Facades;

use Illuminate\Support\Facades\Facade;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EasyFormFacade
 *
 * @author Dinesh Rabara <dinesh.rabara@gmail.com>
 */
class EasyFormFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'EasyForm';
    }

}
