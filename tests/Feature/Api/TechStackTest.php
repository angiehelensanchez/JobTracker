<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\TechStack;

class TechStackTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIsReceiveAllEntryOfTechStackInJsonFile(): void
    {
        TechStack::create([
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',   
        ]);

        TechStack::create([
            'name' => 'C++',
            'knowledge' => 'Basic',  
        ]);

        $response = $this->get(route('apiTechStackHome'));
        $response->assertStatus(200)->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryInTechStackWithApi(){

        $techStack1 =TechStack::create([
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',   
        ]);

        $techStack2 = TechStack::create([
            'name' => 'C++',
            'knowledge' => 'Basic', 
        ]);

        $response = $this->delete(route('apiTechStackDestroy', $techStack1->id));
        $this->assertDatabaseCount('tech_stacks',1);
        $response = $this->get(route('apiTechStackHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInTechStackWithJsonFile(){
        $response = $this->post(route('apiTechStackStore'), [
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',  
            ]);
        $response = $this-> get(route('apiTechStackHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
   public function test_CheckIfCanUpdateEntryInTechStackWithJsonFile()
    {
        $techStack1 =TechStack::create([
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',   
        ]);

        $data = ['knowledge' => 'Intermediate'];
        $response = $this->get(route('apiTechStackHome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put(route('apiTechStackUpdate', $techStack1->id),  [
            'name' => 'Node.js',
            'knowledge' => 'Advanced', 
        ]);

        $data = ['knowledge' => 'Advanced'];
        $response = $this->get(route('apiTechStackHome'));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    } 

    public function test_ChechIfReceiveOneEntryOfTechStackInJsonFile(){
        $techStack1 =TechStack::create([
            'name' => 'Node.js',
            'knowledge' => 'Intermediate',   
        ]);
        $techStack2 = TechStack::create([
            'name' => 'C++',
            'knowledge' => 'Basic',        
        ]);

        $data = ['knowledge' => 'Intermediate'];
        $response = $this->get(route('apiTechStackShow', $techStack1->id));
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }
    
}
