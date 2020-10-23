<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'lname' => 'Bautista',
            'fname'=>'Roland Glenn',
            'address'=>'Ubojan,Tubigon,Bohol',
            'phone'=>'09999',
            'email'=> 'bautista@gmail.com',
            'password' => Hash::make('password'),
            'remember_Token' => Str::random(10),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'lname' => 'Lenteria',
            'fname'=>'Benjie',
            'address'=>'Pob.Centro,Clarin,Bohol',
            'phone'=>'09910',
            'email'=> 'Lenteria@gmail.com',
            'password' => Hash::make('password'),
            'remember_Token' => Str::random(10),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'lname' => 'Reyes',
            'fname'=>'Angelie Mae',
            'address'=>'Lajog,Clarin,Bohol',
            'phone'=>'09911',
            'email'=> 'Reyes@gmail.com',
            'password' => Hash::make('password'),
            'remember_Token' => Str::random(10),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
