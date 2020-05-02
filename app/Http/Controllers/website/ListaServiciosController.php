<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListaServiciosController extends Controller
{
    //
    public function cardiaco(){
        return view('website.gamm_cardiaco');
    }

    public function cerebral(){
        return view('website.gamm_cerebral');
    }

    public function hepatoesplenico(){
        return view('website.gamm_hepatoesplenico');
    }

    public function mama(){
        return view('website.gamm_mama');
    }

    public function oseo(){
        return view('website.gamm_oseo');
    }

    public function pulmonar(){
        return view('website.gamm_pulmonar');
    }

    public function renal(){
        return view('website.gamm_renal');
    }

    public function tiroideo(){
        return view('website.gamm_tiroideo');
    }

    public function trat_artritis(){
        return view('website.trat_artritis');
    }

    public function trat_ca_prostata(){
        return view('website.trat_cancer_prostata');
    }

    public function trat_yodo(){
        return view('website.trat_yodo');
    }

    public function spect_ct(){
        return view('website.spect_ct');
    }
}
