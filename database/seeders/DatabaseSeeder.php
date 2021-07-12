<?php

namespace Database\Seeders;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @var array
     */
    private $users = [
        'florian'
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers();
    }

    private function createUsers()
    {
        collect($this->users)->each(function ($user) {
            $user = (new CreateNewUser)->create([
                'name' => $user,
                'email' => $user . '@wartner.io',
                'password' => 'password',
                'password_confirmation' => 'password',
                'terms' => true,
            ]);

            $user->update([
                'email_verified_at' => now()
            ]);
        });
    }
}
