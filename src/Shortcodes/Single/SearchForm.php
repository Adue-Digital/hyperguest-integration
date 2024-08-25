<?php

namespace Adue\WordPressPlugin\Shortcodes\Single;

use Adue\WordPressBasePlugin\Modules\Shortcodes\BaseShortcode;
use Adue\WordPressBasePlugin\Traits\ViewTrait;

class SearchForm extends BaseShortcode
{

    use ViewTrait;

    protected $signature = 'search-form';

    public function run($args)
    {
        $this->view()->render('public/search-form');
    }

}