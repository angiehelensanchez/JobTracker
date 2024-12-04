<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Advance;
use App\Models\Offer;

class AdvanceTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIsReceiveAllEntryOfAdvancesInJsonFile(): void
    {
        $offer1 =Offer::create([
            'company_name' => 'Inetum',
            'offer_name' => 'Desarrollador Junior',
            'attendance' => 'Hybrid',
            'salary_range' => '21K',
            'description' => '+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.',
            'url' => 'https://www.linkedin.com/jobs/',
            'state' => 'In-progress',
        ]);

        $offer2 = Offer::create([
            'company_name' => 'Santander',
            'offer_name' => 'Desarrollador Junior Python',
            'attendance' => 'Remote',
            'salary_range' => '20K-22K',
            'description' => '+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.',
            'url' => 'https://www.linkedin.com/jobs/',
            'state' => 'Paused',
        ]);
        
        
        Advance::create([
            'offer_id' => $offer1->id,
            'state' => 'Paused', 
            'phase'=> 'Entrevista técnica', 
            'commentary' => 'Ha ido bien, quedamos en una semana para segunda entrevista',
        ]);

        Advance::create([
            'offer_id' => $offer2->id,
            'state' => 'In-progress', 
            'phase'=> 'Entrevista RRHH', 
            'commentary' => 'Hemos quedado la semana que viene. Tengo que preparar lo que quiero enseñar',
        ]);

        $response = $this->get(route('apiAdvanceHome'));
        $response->assertStatus(200)->assertJsonCount(2);
    }


    public function test_CheckIfCanDeleteEntryInAdvanceWithApi(){

        $advance1 =Advance::create([
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',   
        ]);

        $advance2 = Advance::create([
            'name' => 'C++',
            'knowledge' => 'Basic', 
        ]);

        $response = $this->delete(route('apiAdvanceDestroy', $advance1->id));
        $this->assertDatabaseCount('tech_stacks',1);
        $response = $this->get(route('apiAdvanceHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInAdvanceWithJsonFile(){
        $response = $this->post(route('apiAdvanceStore'), [
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',  
            ]);
        $response = $this-> get(route('apiAdvanceHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
   public function test_CheckIfCanUpdateEntryInAdvanceWithJsonFile()
    {
        $advance1 =Advance::create([
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',   
        ]);

        $data = ['knowledge' => 'Intermediate'];
        $response = $this->get(route('apiAdvanceHome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put(route('apiAdvanceUpdate', $advance1->id),  [
            'name' => 'Node.js',
            'knowledge' => 'Advanced', 
        ]);

        $data = ['knowledge' => 'Advanced'];
        $response = $this->get(route('apiAdvanceHome'));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    } 

    public function test_ChechIfReceiveOneEntryOfAdvanceInJsonFile(){
        $advance1 =Advance::create([
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',   
        ]);
        $advance2 = Advance::create([
            'name' => 'C++',
            'knowledge' => 'Basic',        
        ]);

        $data = ['knowledge' => 'Intermediate'];
        $response = $this->get(route('apiAdvanceShow', $advance1->id));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }
    
}
