<?php namespace Cmantikweb\Portafolio\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Portafolio Back-end Controller
 */
class Portafolio extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Cmantikweb.Portafolio', 'portafolio', 'portafolio');
    }
}
