<?php


namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use App\NiceAction;
use App\NiceActionLog;

class niceActionController extends Controller{

    public function getHome(){
        $actions = NiceAction::all();
        $logged_actions = NiceActionLog::all();

        return view('home',['actions' => $actions,'logged_actions' => $logged_actions]);
    }


    public function getNiceAction($action, $name = null){
        if($name == null){
            $name = "You";
        }
        $tid =  NiceAction::where('name',$action)->first()->id;
        echo $tid;
        $t = NiceActionLog::where('nice_action_id',$tid);

        if ($t->count() > 0) {
            echo "not null";


        } else{
            echo "null";
            $nice_action = NiceAction::where('name',$action)->first();
            $nice_action_log = new NiceActionLog();
            $nice_action->logged_actions()->save($nice_action_log);
        }

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