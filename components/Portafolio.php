<?php namespace Cmantikweb\Portafolio\Components;

use Cms\Classes\ComponentBase;
use Cmantikweb\Portafolio\Models\Portafolio as MPortafolio;

class Portafolio extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'portafolio Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function Portafolios()
    {
        return MPortafolio::all();
    }
}
