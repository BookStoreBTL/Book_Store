<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {       
        // factory(App\User::class, 100)->create();
        // factory(App\Language::class, 10)->create();
        // factory(App\Publisher::class, 10)->create();
        // factory(App\Book::class, 1000)->create();
        // factory(App\Author::class, 100)->create();
        // factory(App\Category::class, 10)->create();
        // factory(App\Contact::class, 200)->create();
        // factory(App\Review::class, 290)->create();
        // factory(App\Order::class, 980)->create();
        factory(App\OrderDetail::class, 1000)->create();
        // factory(App\Payment::class, 1000)->create();
        // $this->call(adminSeeder::class);
    }
}

class adminSeeder extends Seeder{
    public function run(){
        DB::table('admin')->insert([
            [
                'name'=>'admin',
                'phone_number'=>'0979927230',
                'password'=>bcrypt('12345678'),
                'email'=>Str::random(7).'@gmail.com',
                'address'=>'144 Xuan Thuy, Cau Giay'
            ]
        ]
        );
    }
}
