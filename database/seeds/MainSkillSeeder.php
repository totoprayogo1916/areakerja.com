<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\MainSkill;

class MainSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MainSkill = MainSkill::create([
            'nama'      => 'Front-End Developer'
        ]);
        $MainSkill->save();

        $MainSkill = MainSkill::create([
            'nama'      => 'Back-End Developer'
        ]);
        $MainSkill->save();

        $MainSkill = MainSkill::create([
            'nama'      => 'Full Stack Developer'
        ]);
        $MainSkill->save();

        $MainSkill = MainSkill::create([
            'nama'      => 'Android Developer'
        ]);
        $MainSkill->save();

        $MainSkill = MainSkill::create([
            'nama'      => 'Jaringan'
        ]);
        $MainSkill->save();
    }
}
