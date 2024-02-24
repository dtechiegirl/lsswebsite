<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubsController extends Controller
{
    //
    public function orojo(){
        return view('chambers.orojo');
    }

    public function akinola(){
        return view('chambers.aguda');
    }

    public function kayode(){
        return view('chambers.kayode');
    }
    public function gani(){
        return view('chambers.gani');
    }
 
    public function equity(){
        return view('chambers.equity');
    }
    public function justice(){
        return view('chambers.justice');
    }
    public function legal(){
        return view('chambers.legal');
    }
    public function clinic(){
        return view('chambers.clinic');
    }

    public function kekenke(){
        return view('org.kekenke');
    }
    public function clasfon(){
        return view('org.clasfon');
    }
    public function oracles(){
        return view('org.oracles');
    }
    public function clubs(){
        return view('clubs');
    }

    public function ip(){
        return view('clubs.ip');
    }

    public function techlaw(){
        return view('clubs.techlaw');
    }
    public function mooting(){
        return view('clubs.mooting');
    }
    public function energy(){
        return view('clubs.energy');
    }
    public function sport(){
        return view('clubs.sport');
    }
    public function enter(){
        return view('clubs.enter');
    }
    public function gls(){
        return view('clubs.gls');
    }
    public function flf(){
        return view('org.flf');
    }
}
