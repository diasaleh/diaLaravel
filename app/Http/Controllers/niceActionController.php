<?php


namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use App\NiceAction;
use App\NiceActionLog;
use DB;

class niceActionController extends Controller{

    public function getHome(){
        $actions = NiceAction::orderBy('niceness','desc')->get();
        $logged_actions = NiceActionLog::whereHas('nice_action', function($qu){
            $qu->where('name','=','Kiss');
        })->get();
        $query = DB::table('nice_action_logs')
                    ->join('nice_actions','nice_action_logs.nice_action_id','=','nice_actions.id')
                    ->where('nice_actions.name','=','Kiss')
                    ->get();
        return view('home',['actions' => $actions,'logged_actions' => $logged_actions,'db' => $query]);
    }


    public function getNiceAction($action, $name = null){
        if($name == null){
            $name = "You";
        }
     
            $nice_action = NiceAction::where('name',$action)->first();
            $nice_action_log = new NiceActionLog();
            $nice_action->logged_actions()->save($nice_action_log);


        return view('actions.nice',['action' => $action,'name' => $name]);
    }

    public function postInsertNiceAction(\Illuminate\Http\Request $req) {

        $this->validate($req,[
             'name' => 'required|alpha|unique:nice_actions',
             'niceness' => 'required|numeric',
        ]);

        $action = new NiceAction();
        $action->name = ucfirst( strtolower($req['name']));
        $action->niceness = $req['niceness'];
        $action->save();

        $actions = NiceAction::all();
        return redirect()->route('home',['actions' => $actions]);

    }

    private function transformName($name){
        $prefix = "KING ";
        return $prefix.strtoupper($name);
    }
}