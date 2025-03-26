<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Subject;

class TeacherSubjectSeeder extends Seeder
{
    public function run(): void
    {
        $teachers = [
            ['name' => 'Alice de Boer', 'hobbies' => 'Lezen, Fietsen', 'invoeren_op' => '2023-01-01'],
            ['name' => 'Bert Jansen', 'hobbies' => 'Gamen', 'invoeren_op' => '2023-02-15'],
            ['name' => 'Claudia Meijer', 'hobbies' => 'Tuinieren', 'invoeren_op' => '2023-03-10'],
            ['name' => 'Daan Visser', 'hobbies' => 'Geen', 'invoeren_op' => '2023-04-20'],
            ['name' => 'Emma Smit', 'hobbies' => 'Koken, Lezen', 'invoeren_op' => '2023-05-30'],
        ];

        foreach ($teachers as $t) {
            Teacher::create($t);
        }

        $subjects = [
            ['name' => 'Wiskunde', 'description' => 'Getallen en logica', 'teacher_id' => 1],
            ['name' => 'Biologie', 'description' => 'Leven en natuur', 'teacher_id' => 1],
            ['name' => 'Nederlands', 'description' => 'Taal en literatuur', 'teacher_id' => 2],
            ['name' => 'Engels', 'description' => 'Internationale taal', 'teacher_id' => 3],
            ['name' => 'Scheikunde', 'description' => 'Stoffen en reacties', 'teacher_id' => 3],
            ['name' => 'Aardrijkskunde', 'description' => 'Wereld en ruimte', 'teacher_id' => 4],
            ['name' => 'Geschiedenis', 'description' => 'Verleden en cultuur', 'teacher_id' => 4],
            ['name' => 'Economie', 'description' => 'Geld en handel', 'teacher_id' => 5],
            ['name' => 'Frans', 'description' => 'Romantische taal', 'teacher_id' => 5],
            ['name' => 'Informatica', 'description' => 'Computers en codering', 'teacher_id' => 2],
        ];

        foreach ($subjects as $s) {
            Subject::create($s);
        }
    }
}

