<?php


namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use App\NiceAction;

class niceActionController extends Controller{

    public function getHome(){
        $actions = NiceAction::all();
        return view('home',['actions' => $actions]);
    }


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