<?php


use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole=Role::where('name','admin')->first();
        $user=User::create([
            'name'=>'Admin',
            'phone_number'=>'9876543210',
            'password'=>Hash::make('aSadbek2000#')
        ]);
        $user->roles()->attach($adminRole);
    }
}
