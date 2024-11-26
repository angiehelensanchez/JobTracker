<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\JobPortal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::truncate();

        $company = new Company();
        $company->name = "Inetum";
        $company->country = "Spain";
        $company->save();

        JobPortal::truncate();

        $jobPortal = new JobPortal();
        


    }
}
