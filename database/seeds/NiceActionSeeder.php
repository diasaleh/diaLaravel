<?php

use Illuminate\Database\Seeder;
use App\NiceAction;
use App\Category;
class NiceActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = new Category();
        $c1->name = "Cat 1";
        $c1->save();

        $c2 = new Category();
        $c2->name = "Cat 2";
        $c2->save();

        $nice_action = new NiceAction();
        $nice_action->name = "Greet";
        $nice_action->niceness = 3;
        $nice_action->save();

        $c1->nice_actions()->attach($nice_action);
        $c2->nice_actions()->attach($nice_action);

        $nice_action = new NiceAction();
        $nice_action->name = "Hug";
        $nice_action->niceness = 6;
        $nice_action->save();

        $c1->nice_actions()->attach($nice_action);

        $nice_action = new NiceAction();
        $nice_action->name = "Kiss";
        $nice_action->niceness = 12;
        $nice_action->save();

        $c2->nice_actions()->attach($nice_action);

        $nice_action = new NiceAction();
        $nice_action->name = "Wave";
        $nice_action->niceness = 2;
        $nice_action->save();


        $c2->nice_actions()->attach($nice_action);
        $c1->nice_actions()->attach($nice_action);


    }
}
