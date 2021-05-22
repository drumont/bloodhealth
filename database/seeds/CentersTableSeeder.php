<?php

use Illuminate\Database\Seeder;


class CentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
        DB::table('centers')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'admin_id' => (1),
        ]);
         **/
        factory(App\Center::class, 10)->create()->each(function ($u) {
            $u->users()->save(factory(App\User::class)->make());
        });
    }
}
