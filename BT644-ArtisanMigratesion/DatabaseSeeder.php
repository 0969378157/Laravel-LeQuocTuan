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
        DB::table('score')->insert([
        [
            'rollNo_student_external' => 1,
            'id_subject_external' => 2,
            'Score' => '5'
        ],
        [
            'rollNo_student_external' => 2,
            'id_subject_external' => 3,
            'Score' => '5'
        ],
        [
            'rollNo_student_external' => 3,
            'id_subject_external' => 4,
            'Score' => '5'
        ],
        [
            'rollNo_student_external' => 5,
            'id_subject_external' => 5,
            'Score' => '5'
        ],
        [
            'rollNo_student_external' => 4,
            'id_subject_external' => 2,
            'Score' => '5'
        ]
    ],
    );
    }
}
