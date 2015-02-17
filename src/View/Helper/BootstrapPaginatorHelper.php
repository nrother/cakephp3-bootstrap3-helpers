<?php

/**
* Bootstrap Paginator Helper
*
*
* PHP 5
*
*  Licensed under the Apache License, Version 2.0 (the "License");
*  you may not use this file except in compliance with the License.
*  You may obtain a copy of the License at
*
*      http://www.apache.org/licenses/LICENSE-2.0
*
*
* @copyright Copyright (c) Mikaël Capelle (http://mikael-capelle.fr)
* @link http://mikael-capelle.fr
* @package app.View.Helper
* @since Apache v2
* @license http://www.apache.org/licenses/LICENSE-2.0
*/

namespace Bootstrap3\View\Helper;

use Cake\View\Helper\PaginatorHelper;

class BootstrapPaginatorHelper extends PaginatorHelper
{
    public function __construct ($view, $config = [])
    {
        $this->templates([
            'nextActive' => '<li><a href="{{url}}" aria-label="{{text}}"><span aria-hidden="true">&raquo;</span></a></li>',
            'nextDisabled' => '<li class="disabled"><a href="" aria-label="{{text}}"><span aria-hidden="true">&raquo;</span></a></li>',
            'prevActive' => '<li><a href="{{url}}" aria-label="{{text}}"><span aria-hidden="true">&laquo;</span></a></li>',
            'prevDisabled' => '<li class="disabled"><a href="" aria-label="{{text}}"><span aria-hidden="true">&laquo;</span></a></li>',
            'first' => '<li><a href="{{url}}">{{text}}</a></li>',
            'last' => '<li><a href="{{url}}">{{text}}</a></li>',
            'number' => '<li><a href="{{url}}">{{text}}</a></li>',
            'current ' => '<li class="active"><a href="{{url}}">{{text}}</a></li>'
        ]);
        
        parent::__construct($view, $config);
    }
}
?>
