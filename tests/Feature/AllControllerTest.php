<?php

namespace Tests\Feature;

use App\Http\Controllers\AllController;
use App\Models\Advance;
use App\Models\TechStack;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Offer;

class AllControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_ChecIfCanReceiveAllDataInView(): void
    {
        $offers = Offer::factory(3)->create();
        $techStack = TechStack::factory(3)->create();
        $response = $this->get('/');

        $response->assertStatus(200)
                ->assertViewIs('home');

    }
    public function test_CheckIfCanReceiveAllOffersInView(){
        $offers = Offer::factory(3)->create();
        $response = $this->get('/offers');

        $response->assertStatus(200)
                ->assertViewIs('allOfferList');
    }

    public function test_CheckIfCanReceiveAllDataOneOfferInView(){

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

        $advance1 =Advance::create([
            'offer_id' => 1,
            'state' => 'Paused', 
            'phase'=> 'Entrevista técnica', 
            'commentary' => 'Ha ido bien, quedamos en una semana para segunda entrevista',
        ]);
        $response = $this->get('/offers/' . $offer1->id);

        $response->assertStatus(200)
                ->assertViewIs('show');
    }
    public function test_IndexOfferFiltersByState()
    {
        Offer::factory()->create(['state' => 'Paused']);
        Offer::factory()->create(['state' => 'In-progress']);

        $response = $this->get('/offers?state=Paused&company_name=');

        $response->assertStatus(200)
                ->assertViewIs('allOfferList')
                ->assertViewHas('offers', function ($offers) {
                    return $offers->count() === 1 && $offers->first()->state === 'Paused';
                });
    }

    public function test_IndexOfferFiltersByCompanyName()
    {
        Offer::factory()->create(['company_name' => 'Inetum']);
        Offer::factory()->create(['company_name' => 'Google']);

        $response = $this->get('/offers?state=&company_name=Inetum');

        $response->assertStatus(200)
                ->assertViewIs('allOfferList')
                ->assertViewHas('offers', function ($offers) {
                    return $offers->count() === 1 && $offers->first()->company_name === 'Inetum';
                });
    }

}
