<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technology>
 */
class TechnologyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tipiTecnologie = [
            'Sviluppo Web',
            'Sviluppo Mobile',
            'Intelligenza artificiale',
            'Realtà Virtuale',
            'Sicurezza Infromatica',
            'BlockChain',
            
        ];
        return [
            'name'=>fake()-> randomElement($tipiTecnologie),
            'description'=>fake() -> paragraph()
            
        ];
        
    }
}
