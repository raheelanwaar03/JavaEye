<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');


        // Inserting Users

        $user = new User();
        $user->name = 'Admin';
        $user->referral = 'default';
        $user->phone = '03001122333';
        $user->balance = '0';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'User';
        $user->email = 'user@user.com';
        $user->phone = '03001122333';
        $user->referral = 'default';
        $user->balance = '0';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();

    }
}
