<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Model::unguard();

        $this->call(UsersTableSeeder::class);//调用要运行的填充数据文件
        $this->call(StatusesTableSeeder::class);
        $this->call(FollowersTableSeeder::class);

        Model::reguard();
    }
}
