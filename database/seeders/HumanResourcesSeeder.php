<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class HumanResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('departments')->insert([
            [
                'name'=>'HR',
                'description'=>'Department Human Resources',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'IT',
                'description'=>'Department IT',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Sales',
                'description'=>'Department Sales',
                'status'=>'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('roles')->insert([
            [
                'title'=>'HR',
                'description'=>'Handling team',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'title'=>'Developer',
                'description'=>'Handling codes',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'title'=>'Sales',
                'description'=>'Handling selling',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('employees')->insert([
            [   
                'fullname'=>$faker->name,
                'email'=>$faker->unique()->safeEmail,
                'phone_number'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'birth_date'=>$faker->dateTimeBetween('-40 years', '-20 years'),
                'hire_date'=>Carbon::now(),
                'department_id'=> 1,
                'role_id'=> 1,
                'status'=> 'active',
                'salary'=>$faker->randomFloat(2,3000,6000),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'deleted_at'=>null,

            ],
            [   
                'fullname'=>$faker->name,
                'email'=>$faker->unique()->safeEmail,
                'phone_number'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'birth_date'=>$faker->dateTimeBetween('-40 years', '-20 years'),
                'hire_date'=>Carbon::now(),
                'department_id'=> 1,
                'role_id'=> 1,
                'status'=> 'active',
                'salary'=>$faker->randomFloat(2,3000,6000),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'deleted_at'=>null,

            ]
        ]);
        DB::table('tasks')->insert([
            [
                'title'=>$faker->sentence(3),
                'description'=>$faker->paragraph,
                'assigned_to'=>1,
                'due_date'=>Carbon::parse('2025-07-17'),
                'status'=>'pending',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'title'=>$faker->sentence(3),
                'description'=>$faker->paragraph,
                'assigned_to'=>1,
                'due_date'=>Carbon::parse('2025-07-17'),
                'status'=>'pending',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
        ]);
        DB::table('payrolls')->insert([
            [
                'employee_id'=> 1,
                'salary'=>$faker->randomFloat(2,3000,6000),
                'bonus'=>$faker->randomFloat(2,3000,6000),
                'deductions'=>$faker->randomFloat(2,500,1000),
                'net_salary'=>$faker->randomFloat(2,3000,6000),
                'pay_date'=>Carbon::parse('2025-07-17'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'employee_id'=> 2,
                'salary'=>$faker->randomFloat(2,3000,6000),
                'bonus'=>$faker->randomFloat(2,3000,6000),
                'deductions'=>$faker->randomFloat(2,500,1000),
                'net_salary'=>$faker->randomFloat(2,3000,6000),
                'pay_date'=>Carbon::parse('2025-07-17'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
        ]);
        DB::table('presences')->insert([
            [
                'employee_id'=> 1,
                'check_in'=>Carbon::parse('2025-07-15 06:00:00'),
                'check_out'=>Carbon::parse('2025-07-15 18:00:00'),
                'date'=>Carbon::parse('2025-07-15'),
                'status'=>'present',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'employee_id'=> 2,
                'check_in'=>Carbon::parse('2025-07-15 06:00:00'),
                'check_out'=>Carbon::parse('2025-07-15 18:00:00'),
                'date'=>Carbon::parse('2025-07-15'),
                'status'=>'present',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
        ]);
        DB::table('leave_requests')->insert([
            [
                'employee_id'=> 1,
                'leave_type'=>'Sick Leave',
                'start_date'=>Carbon::parse('2025-07-12'),
                'end_date'=>Carbon::parse('2025-07-15'),
                'status'=>'pending',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'employee_id'=> 2,
                'leave_type'=>'Vacation',
                'start_date'=>Carbon::parse('2025-07-12'),
                'end_date'=>Carbon::parse('2025-07-15'),
                'status'=>'pending',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
        ]);
    }
}
