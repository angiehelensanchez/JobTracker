<?php

namespace Tests\Feature\Api;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Offer;
use App\Models\TechStack;

class OfferTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIsReceiveAllEntryOfOfferInJsonFile(): void
    {
        Offer::create([
            'company_name' => 'Inetum',
            'offer_name' => 'Desarrollador Junior',
            'attendance' => 'Hybrid',
            'salary_range' => '21K',
            'description' => '+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.',
            'url' => 'https://www.linkedin.com/jobs/',
            'state' => 'In-progress',
        ]);

        Offer::create([
            'company_name' => 'Santander',
            'offer_name' => 'Desarrollador Junior Python',
            'attendance' => 'Remote',
            'salary_range' => '20K-22K',
            'description' => '+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.',
            'url' => 'https://www.linkedin.com/jobs/',
            'state' => 'Paused',
        ]);

        $response = $this->get(route('apiOfferHome'));
        $response->assertStatus(200)->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryInOfferWithApi(){

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

        $response = $this->delete(route('apiOfferDestroy', $offer1->id));
        $this->assertDatabaseCount('offers',1);
        $response = $this->get(route('apiOfferHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInOfferWithJsonFile(){
        $response = $this->post(route('apiOfferStore'), [
            'company_name' => 'Santander',
            'offer_name' => 'Desarrollador Junior Python',
            'attendance' => 'Remote',
            'salary_range' => '20K-22K',
            'description' => '+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.',
            'url' => 'https://www.linkedin.com/jobs/',
            'state' => 'Paused',
            ]);
        $response = $this-> get(route('apiOfferHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
   public function test_CheckIfCanUpdateEntryInOfferWithJsonFile()
    {
        $offer1 =Offer::create([
            'company_name' => 'Inetum',
            'offer_name' => 'Desarrollador Junior',
            'attendance' => 'Remote',
            'salary_range' => '21K',
            'description' => '+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.',
            'url' => 'https://www.linkedin.com/jobs/',
            'state' => 'In-progress',
        ]);

        $data = ['attendance' => 'Remote'];
        $response = $this->get(route('apiOfferHome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put(route('apiOfferUpdate', $offer1->id),  [
            'company_name' => 'Santander',
            'offer_name' => 'Desarrollador Junior Python',
            'attendance' => 'Hybrid',
            'salary_range' => '20K-23K',
            'description' => '+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.',
            'url' => 'https://www.linkedin.com/jobs/',
            'state' => 'Paused',
        ]);

        $data = ['attendance' => 'Hybrid'];
        $response = $this->get(route('apiOfferHome'));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    } 

    public function test_CheckIfCanAttachTechStackToOfferWithJsonFile(){
    
        $offer1 =Offer::create([
            'company_name' => 'Inetum',
            'offer_name' => 'Desarrollador Junior',
            'attendance' => 'Remote',
            'salary_range' => '21K',
            'description' => '+1 año de experiencia trabajando con tecnologías com Java O .Net O Angular O React Experiencia trabajando con metodología ágil.Apasionado de las nuevas tecnologías. Capacidad para trabajar en un entorno de trabajo ágil y en equipo.',
            'url' => 'https://www.linkedin.com/jobs/',
            'state' => 'In-progress',
        ]);

        $techStack1 = TechStack::create([
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',        
        ]);
        $techStack1 = TechStack::create([
            'name' => 'C++',
            'knowledge' => 'Basic',        
        ]);

        $response = $this->post(route('apiAttachOfferTech', $offer1->id),[
            'stack_id'=> [1,2],
        ]);
        $response->assertStatus(200);
    }

    public function test_ChechIfReceiveOneEntryOfOfferInJsonFile(){
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

        $data = ['attendance' => 'Hybrid'];
        $response = $this->get(route('apiOfferShow', $offer1->id));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }
    
}
