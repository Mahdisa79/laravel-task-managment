<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Task::create([
            'id' => 1,
            'user_id' => '1',
            'title'=>'خرید برای خانه',
            'status' => '0',

        ]);

        Task::create([
            'id' => 2,
            'user_id' => '1',
            'title'=>'تماس با رضا',
            'status' => '0',

        ]);

        Task::create([
            'id' => 3,
            'user_id' => '1',
            'title'=>'کارواش ماشین',
            'status' => '1',

        ]);

        Task::create([
            'id' => 4,
            'user_id' => '1',
            'title'=>'کار روی پروژه',
            'status' => '2',

        ]);
    }
}
