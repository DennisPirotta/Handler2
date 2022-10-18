<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use App\Models\Key;
use App\Models\Message;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
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
        User::factory()->create([
            'name' => 'Dennis',
            'password' => Hash::make('pellio2014')
        ]);
        Key::create([
            'expire_on' => Carbon::now()->addDays(7),
            'key' => Hash::make('eThWmZq4t7w!z%C*') // first key
        ]);
    }
}
