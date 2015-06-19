<?php namespace Axi\Check\Components;

use Cms\Classes\ComponentBase;
use Axi\Check\Models\DBauto;
use October\Rain\Database\Builder;

class FormCheck extends ComponentBase
{
    public $districtList;
    public $name;
    public $schoolList;

    public function componentDetails()
    {
        return [
            'name'        => 'FormCheck Component',
            'description' => 'Checklist form with autocomplete input options from the db'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    
    public function onRun()
    {
        $this->districtList = DBauto::lists('districts');
        $this->districtList = array_unique($this->districtList);
        $this->schoolList = DBauto::lists('schools');
        //$this->schoolList = DBauto::where('districts', '=', 'St Tammany Parish Sch District')->lists('schools');
        
        // Alternate method
        /*$this->schoolList = DBauto::where('districts', '=', 'Acadia Parish School District')->get();
        foreach ($this->schoolList as $school)
        {
            echo $school->schools, '<br />';
        }*/

    }

}