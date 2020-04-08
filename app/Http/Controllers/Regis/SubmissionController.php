<?php

namespace App\Http\Controllers\Regis;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\DataSource;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    //
    public function index () {
        return view("regis.submission", [
            "education" => $this->getAvailableEducationalStage(),  
            "sources" => $this->getDataSources()   
        ]);
    }

    private function getAvailableEducationalStage () {
        // education
        $formal = Education::where("status", "F")->get();
        $informal = Education::where("status", "NF")->get();

        return [
            "formal" => $formal,
            "informal" => $informal
        ];
    }

    private function getDataSources () {
        // sources data
        $strata = DataSource::where("source", "strata")->first()->attributes;
        $incoming = DataSource::where("source", "incoming")->first()->attributes;
        $ownership = DataSource::where("source", "ownership")->first()->attributes;
        $floor = DataSource::where("source", "floor")->first()->attributes;
        $wall = DataSource::where("source", "wall")->first()->attributes;
        $elec = DataSource::where("source", "electricity")->first()->attributes;
        $water = DataSource::where("source", "water")->first()->attributes;

        return [
            "strata" => $strata,
            "incoming" => $incoming,
            "ownership" => $ownership,
            "floor" => $floor,
            "wall" => $wall,
            "electricity" => $elec,
            "water" => $water
        ];
    }
}
