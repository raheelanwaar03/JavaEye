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
        $user->level = 'VIP0';
        $user->phone = '03001122333';
        $user->balance = '0';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('Alyan05@');
        $user->role = 'admin';
        $user->status = 'approved';
        $user->save();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->level = 'VIP3';
        $user->phone = '03001122333';
        $user->referral = 'default';
        $user->balance = '1000';
        $user->password = Hash::make('Alyan05@');
        $user->role = 'user';
        $user->status = 'approved';
        $user->save();

        // Inserting users





    }
}
