<?php

use Illuminate\Database\Seeder;
use App\User;
use App\sermons;

class sermonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sermons')->delete();
        $json = File::get("data/sermonsdata.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
          sermons::create(array(
            'id' => $obj->id,
            'title' => $obj->title,
            'description' => $obj->description
            
          ));
        }
    }
}
