<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use App\Models\Message;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Dennis',
            'email' => 'dennispirotta@gmail.com',
            'password' => Hash::make('pellio2014')
        ]);
        //Customer::factory(10)->create();
        //Message::factory(20)->create();
        //Transaction::factory(100)->create();
    }
}
