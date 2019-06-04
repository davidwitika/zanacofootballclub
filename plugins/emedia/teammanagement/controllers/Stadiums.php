<?php namespace emedia\TeamManagement\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Stadiums extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('emedia.TeamManagement', 'main-menu-item', 'side-menu-item5');
    }
}
