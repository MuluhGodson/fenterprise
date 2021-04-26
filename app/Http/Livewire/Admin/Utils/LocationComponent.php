<?php

namespace App\Http\Livewire\Admin\Utils;

use Livewire\Component;
use App\Models\Country;
use App\Models\Region;
use App\Models\Division;
use App\Models\SubDivision;

class LocationComponent extends Component
{

    public $country;
    public $regions, $divisions, $subdivisions, $region, $division, $subdivision;
 

    public function mount($lt)
    {
        if($lt){
            $this->subdivision = $lt;
            $sd = SubDivision::find($lt);
            $this->division = $sd->division_id;
            $dv = Division::find($this->division);
            $this->region = $dv->region_id;
            $rg = Region::find($this->region);
            $this->country = $rg->country_id;
        }
    }

    public function render()
    {
        if(!empty($this->country)){
            $this->regions = Region::where('country_id', $this->country)->get();
                if(!empty($this->region)){
                    $this->divisions = Division::where('region_id', $this->region)->get();
                        if(!empty($this->division)){
                            $this->subdivisions = SubDivision::where('division_id', $this->division)->get();
                        }
                }
        }
        return view('livewire.admin.utils.location-component')->withCountries(Country::orderBy('name')->get());
    }

    public function updatedCountry()
    {
        $this->emit('countrySelected', $this->country);
    }

    public function updatedRegion()
    {
        $this->emit('regionSelected', $this->region);
    }

    public function updatedDivision()
    {
        $this->emit('divisionSelected', $this->division);
    }

    public function updatedSubdivision()
    {
        $this->emit('subdivisionSelected', $this->subdivision);
    }
}
