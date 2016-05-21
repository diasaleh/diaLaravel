<?php


namespace App\Http\Controllers;
use \Illuminate\Http\Request;

class niceActionController extends Controller{
    public function getNiceAction($action, $name = null){
        return view('actions.'.$action,['name' => $name]);
    }

    public function postNiceAction(\Illuminate\Http\Request $req) {
        if(isset($req['action']) && $req['name']){
            if(strlen($req['name'])>0){
                return view('actions.nice',['action' => $req['action'] ,'name' => $this->transformName($req['name'])]);
            }
            return redirect()->back();

        }
        return redirect()->back();
    }

    private function transformName($name){
        $prefix = "KING ";
        return $prefix.strtoupper($name);
    }
}