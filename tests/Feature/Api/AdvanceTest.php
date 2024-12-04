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
        $offers =Offer::factory(2)->create();
        $advances = Advance::factory(2)->create();

        $response = $this->get(route('apiAdvanceHome'));
        $response->assertStatus(200)->assertJsonCount(2);
    }


    public function test_CheckIfCanDeleteEntryInAdvanceWithApi(){
        $offers =Offer::factory(2)->create();
        $advances = Advance::factory(2)->create();


        $response = $this->delete(route('apiAdvanceDestroy', 1));
        $this->assertDatabaseCount('advances',1);
        $response = $this->get(route('apiAdvanceHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInAdvanceWithJsonFile(){
        $offers =Offer::factory(2)->create();

        $response = $this->post(route('apiAdvanceStore'), [
            'offer_id' => 1,
            'state' => 'Paused', 
            'phase'=> 'Entrevista técnica', 
            'commentary' => 'Ha ido bien, quedamos en una semana para segunda entrevista', 
        ]);
        $response = $this-> get(route('apiAdvanceHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
   public function test_CheckIfCanUpdateEntryInAdvanceWithJsonFile()
    {
        $offers =Offer::factory(2)->create();


        $advance1 =Advance::create([
            'offer_id' => 1,
            'state' => 'Paused', 
            'phase'=> 'Entrevista técnica', 
            'commentary' => 'Ha ido bien, quedamos en una semana para segunda entrevista',
        ]);


        $data = ['state' => 'Paused'];
        $response = $this->get(route('apiAdvanceHome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put(route('apiAdvanceUpdate', $advance1->id),  [
            'offer_id' => 1,
            'state' => 'In-progress', 
            'phase'=> 'Entrevista técnica', 
            'commentary' => 'Ha ido bien, quedamos en una semana para segunda entrevista',
        ]);

        $data = ['state' => 'In-progress'];
        $response = $this->get(route('apiAdvanceHome'));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    } 

    public function test_ChechIfReceiveOneEntryOfAdvanceInJsonFile(){
        $offers = Offer::factory(2)->create();

        $advance1 =Advance::create([
            'offer_id' => 1,
            'state' => 'Paused', 
            'phase'=> 'Entrevista técnica', 
            'commentary' => 'Ha ido bien, quedamos en una semana para segunda entrevista',
        ]);

        $advance2 = Advance::create([
            'offer_id' => 2,
            'state' => 'In-progress', 
            'phase'=> 'Entrevista RRHH', 
            'commentary' => 'Hemos quedado la semana que viene. Tengo que preparar lo que quiero enseñar',
        ]);

        $data = ['state' => 'Paused'];
        $response = $this->get(route('apiAdvanceShow', $advance1->id));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }
    
}
