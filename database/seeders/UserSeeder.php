<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)
            ->has(SportsEvent::factory()
            ->count(1)
            ->has(SportsEvent::factory()
            ->count(1)
            ->has(Categorie::factory()
            ->count(3)
            ->state(new Sequence(
            ['nom' => 'Minim'],
            ['nom' => 'Cadet'],
            ['nom' => 'Senior'],
            ))
            ->state(new Sequence(
            ['sexe' => 'HOMME'],
            ['sexe' => 'FEMME'],
            ))
            ->state(new Sequence(
            ['poids' => '-40 KG'],
            ['poids' => '-50 KG'],
            ['poids' => '+50 KG'],
            ))->has(Athlet::factory()
            ->count(2)
            ->state(function (array $attributes, Categorie $categorie) {
            return ['sexe' => $categorie->sexe];
            })
            ->for(Team::factory())
            ->hasCommentaires(2)
            )
            )
            ->hasCommentaires(2)
            ))
            ->create();

            $roles=Role::factory(2)->state(new Sequence(
                [
                'nom' => 'Admin',
                'nom' => 'User',
                'nom' => 'Manager'
                ]))
                ->create();
                $users=User::factory()->count(3)->hasAttached(Role::inRandomOrder()->limit(2)->get())
                ->create();
    }
}
