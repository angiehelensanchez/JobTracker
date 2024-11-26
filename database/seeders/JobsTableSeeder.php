<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\JobPortal;
use App\Models\Offer;
use App\Models\TechStack;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $company = new Company();
        $company->nameCompany = "Inetum";
        $company->country = "Spain";
        $company->save();

        $company = new Company();
        $company->nameCompany = "Ineco";
        $company->country = "Spain";
        $company->save();



        $jobPortal = new JobPortal();
        $jobPortal->namePortal = "LinkedIn";
        $jobPortal->url = "https://www.linkedin.com/jobs/";
        $jobPortal->save();

        $jobPortal = new JobPortal();
        $jobPortal->namePortal = "Infojobs";
        $jobPortal->url = "https://www.infojobs.net/";
        $jobPortal->save();


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
        $offer->company_id = 1;
        $offer->offer_name = "Desarrollador Junior";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "21K";
        $offer->description = "+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.";
        $offer->jobportal_id = 1;
        $offer->save();

        $offer->techStacks()->attach([3,1]);

        $offer = new Offer();
        $offer->company_id = 2;
        $offer->offer_name = "Desarrollador Junior Python";
        $offer->attendance = "Remote";
        $offer->salary_range = "20K-22K";
        $offer->description = "+1 año de experiencia trabajando con tecnologías com Python Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.";
        $offer->jobportal_id = 1;
        $offer->save();

        $offer->techStacks()->attach([2,1]);

        
        $state = new State();
        $state->offer_id= 1;
        $state->status= "First Interview";
        $state->commentary = "Ha ido bien, quedamos en una semana";
        $state->save();

        $state = new State();
        $state->offer_id= 2;
        $state->status= "Primera entrevista";
        $state->commentary = "Ha ido mal. Quieren 2 años de experiencia";
        $state->save();

        $state = new State();
        $state->offer_id= 1;
        $state->status= "Entrevista técnia";
        $state->commentary = "He pasado el corte pero en dos semanas exámen técnico";
        $state->save();

    }
}
