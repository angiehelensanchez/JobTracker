<?php

namespace Database\Seeders;

use App\Models\JobPortal;
use App\Models\Offer;
use App\Models\TechStack;
use App\Models\Advance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $techStack = new TechStack();
        $techStack->name = "CSS3";
        $techStack->knowledge = "Basic";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Python";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Java";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $offer = new Offer();
        $offer->company_name = "Inetum";
        $offer->offer_name = "Desarrollador Junior";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "21K";
        $offer->description = "+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.";
        $offer->url = "https://www.linkedin.com/jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([3,1]);

        $offer = new Offer();
        $offer->company_name = "Santander";
        $offer->offer_name = "Desarrollador Junior Python";
        $offer->attendance = "Remote";
        $offer->salary_range = "20K-22K";
        $offer->description = "+1 año de experiencia trabajando con tecnologías com Python Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.";
        $offer->url = "https://www.infojobs.net/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([2,1]);

        $offer = new Offer();
        $offer->company_name = "Inetum";
        $offer->offer_name = "Desarrollador Java";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "20K";
        $offer->description = "+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.";
        $offer->url = "https://www.linkedin.com/jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([3,1]);



        $advance = new Advance();
        $advance->offer_id= 1;
        $advance->state= "Paused";
        $advance->phase= "Entrevista técnica";
        $advance->commentary = "Ha ido bien, quedamos en una semana para segunda entrevista";
        $advance->save();

        $advance = new Advance();
        $advance->offer_id= 2;
        $advance->state= "In-progress";
        $advance->phase= "Entrevista RRHH";
        $advance->commentary = "Hemos quedado la semana que viene. Tengo que preparar lo que quiero enseñar";
        $advance->save();

        $advance = new Advance();
        $advance->offer_id= 1;
        $advance->state= "Finished";
        $advance->phase= "Entrevista RRHH";
        $advance->commentary = "He pasado el corte pero en dos semanas exámen técnico";
        $advance->save();

    }
}
