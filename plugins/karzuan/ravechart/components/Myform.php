<?php namespace Karzuan\Ravechart\Components;

use Cms\Classes\ComponentBase;
use Db;

class Myform extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'ravechart form Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

        public function onRun(){


            //$this->addJs('assets/js/jquery-1.5.2.min.js');
            //$this->addJs('assets/js/fancybox/jquery.fancybox-1.3.4.pack.js');
            $this->addJs('assets/js/click.js');
            $this->addJs('assets/js/mform.js');

    }

}