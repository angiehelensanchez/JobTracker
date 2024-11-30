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

        $techStack = new TechStack();
        $techStack->name = "HTML5";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "JavaScript";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "PHP";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "SQL";
        $techStack->knowledge = "Advanced";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Laravel";
        $techStack->knowledge = "Basic";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "React";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Node.js";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "C++";
        $techStack->knowledge = "Basic";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "C#";
        $techStack->knowledge = "Basic";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Ruby";
        $techStack->knowledge = "Basic";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Kotlin";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Swift";
        $techStack->knowledge = "Basic";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "TypeScript";
        $techStack->knowledge = "Intermediate";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Dart";
        $techStack->knowledge = "Basic";
        $techStack->save();

        $techStack = new TechStack();
        $techStack->name = "Go";
        $techStack->knowledge = "Basic";
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

        $offer = new Offer();
        $offer->company_name = "Indra";
        $offer->offer_name = "Frontend Developer";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "25K";
        $offer->description = "+2 años de experiencia en desarrollo frontend utilizando React y TypeScript. Conocimientos sólidos de CSS y maquetación responsive. Experiencia en metodologías ágiles.";
        $offer->url = "https://www.linkedin.com/jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([6,13,1]);

        $offer = new Offer();
        $offer->company_name = "Everis";
        $offer->offer_name = "Backend Developer";
        $offer->attendance = "On-site";
        $offer->salary_range = "30K";
        $offer->description = "Experiencia en Node.js y bases de datos SQL. Capacidad para diseñar e implementar APIs robustas y seguras. Experiencia trabajando en equipo con metodologías ágiles.";
        $offer->url = "https://www.infojobs.net/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([7,4]);

        $offer = new Offer();
        $offer->company_name = "Capgemini";
        $offer->offer_name = "Desarrollador Mobile Junior";
        $offer->attendance = "Remote";
        $offer->salary_range = "22K";
        $offer->description = "Conocimientos básicos en desarrollo de aplicaciones móviles utilizando Kotlin y Swift. Capacidad de aprendizaje rápido y trabajo en equipo.";
        $offer->url = "https://www.linkedin.com/jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([10,11]);

        $offer = new Offer();
        $offer->company_name = "Accenture";
        $offer->offer_name = "DevOps Engineer";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "40K";
        $offer->description = "Experiencia con herramientas de integración continua como Jenkins, Docker, y Kubernetes. Familiaridad con lenguajes como Python o Go.";
        $offer->url = "https://www.infojobs.net/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([2,15]);

        $offer = new Offer();
        $offer->company_name = "Globant";
        $offer->offer_name = "Data Engineer";
        $offer->attendance = "Remote";
        $offer->salary_range = "35K";
        $offer->description = "Familiaridad con SQL y Python para la manipulación de datos. Experiencia en el diseño y optimización de pipelines de datos.";
        $offer->url = "https://www.linkedin.com/jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([4,2]);

        $offer = new Offer();
        $offer->company_name = "Deloitte";
        $offer->offer_name = "C# Developer";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "28K";
        $offer->description = "Conocimientos sólidos de C# y .NET Framework. Experiencia desarrollando aplicaciones de escritorio y servicios backend.";
        $offer->url = "https://www.infojobs.net/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([9]);

        $offer = new Offer();
        $offer->company_name = "BBVA";
        $offer->offer_name = "Full Stack Developer";
        $offer->attendance = "On-site";
        $offer->salary_range = "30K-35K";
        $offer->description = "Dominio de tecnologías frontend como JavaScript y React. Experiencia en backend con Node.js y bases de datos relacionales.";
        $offer->url = "https://www.linkedin.com/jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([6,7,4]);

        $offer = new Offer();
        $offer->company_name = "Amazon";
        $offer->offer_name = "Cloud Engineer";
        $offer->attendance = "Remote";
        $offer->salary_range = "50K";
        $offer->description = "Experiencia con plataformas en la nube como AWS. Conocimientos en Python y configuración de infraestructura como código.";
        $offer->url = "https://www.amazon.jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([2,4]);

        $offer = new Offer();
        $offer->company_name = "Microsoft";
        $offer->offer_name = "Game Developer";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "40K";
        $offer->description = "Conocimientos de C++ y experiencia desarrollando videojuegos con motores como Unity o Unreal Engine.";
        $offer->url = "https://www.linkedin.com/jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([8]);

        $offer = new Offer();
        $offer->company_name = "Google";
        $offer->offer_name = "AI/ML Developer";
        $offer->attendance = "Remote";
        $offer->salary_range = "70K";
        $offer->description = "Experiencia en Python y frameworks de Machine Learning como TensorFlow o PyTorch. Capacidad para resolver problemas complejos.";
        $offer->url = "https://careers.google.com/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([2]);

        $offer = new Offer();
        $offer->company_name = "IBM";
        $offer->offer_name = "Software Engineer";
        $offer->attendance = "On-site";
        $offer->salary_range = "50K";
        $offer->description = "Experiencia en Java y desarrollo de soluciones empresariales. Conocimientos de SQL y metodologías ágiles.";
        $offer->url = "https://www.ibm.com/careers/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([3,4]);

        $offer = new Offer();
        $offer->company_name = "HP";
        $offer->offer_name = "QA Tester";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "25K";
        $offer->description = "Experiencia en pruebas automatizadas y diseño de planes de prueba. Conocimiento básico de Python o Java.";
        $offer->url = "https://www.hp.com/jobs/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([2,3]);

        $offer = new Offer();
        $offer->company_name = "Tesla";
        $offer->offer_name = "Embedded Systems Developer";
        $offer->attendance = "On-site";
        $offer->salary_range = "60K";
        $offer->description = "Experiencia con lenguajes como C y C++. Conocimientos de sistemas operativos en tiempo real.";
        $offer->url = "https://www.tesla.com/careers/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([8]);

        $offer = new Offer();
        $offer->company_name = "Spotify";
        $offer->offer_name = "Backend Developer";
        $offer->attendance = "Remote";
        $offer->salary_range = "45K";
        $offer->description = "Experiencia en desarrollo backend con Go y Python. Conocimientos en manejo de datos a gran escala.";
        $offer->url = "https://www.spotifyjobs.com/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([15,2]);

        $offer = new Offer();
        $offer->company_name = "Meta";
        $offer->offer_name = "AR/VR Developer";
        $offer->attendance = "Hybrid";
        $offer->salary_range = "75K";
        $offer->description = "Experiencia en desarrollo de aplicaciones AR/VR con Unity y C#. Pasión por la tecnología inmersiva.";
        $offer->url = "https://www.metacareers.com/";
        $offer->state = "In-progress";
        $offer->save();

        $offer->techStacks()->attach([9]);


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
