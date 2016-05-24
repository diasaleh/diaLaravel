<?php


namespace App\Http\Controllers;
use \Illuminate\Http\Request;

class niceActionController extends Controller{
    public function getNiceAction($action, $name = null){
        return view('actions.'.$action,['name' => $name]);
    }

    public function postNiceAction(\Illuminate\Http\Request $req) {

        $this->validate($req,[
           'action' => 'required',
            'name' => 'required|alpha',
        ]);

        return view('actions.nice',['action' => $req['action'] ,'name' => $this->transformName($req['name'])]);

    }

    private function transformName($name){
        $prefix = "KING ";
        return $prefix.strtoupper($name);
    }
}