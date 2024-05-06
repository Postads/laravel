<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProjectStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Загрузка ролей user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        UserRole::create([
            'id' => 1,
            'name' => 'users',
            'description' => 'Пользователь',
        ]);
       UserRole::create([
           'id' => 999,
           'name' => 'developer',
           'description' => 'Полный доступ',
       ]);
        $this->info("Success");
        $this->info("Создание profile Admin - php artisan project:create-AdminUserRoot");
    }
}
