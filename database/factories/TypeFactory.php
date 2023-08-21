<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tipiProgetti = [
            'Sviluppo software',
            'Infrastruttura',
            'Ricerca e sviluppo (R&S)',
            'Marketing',
            'Eventi',
            'Miglioramento del processo',
            'Gestione del cambiamento',
            'Consulenza',
            'Sviluppo sostenibile',
            'Progetti sociali',
            'Progetti artistici e culturali',
            'Formazione e sviluppo delle risorse umane',
            'Sviluppo economico',
            'Ricerca scientifica',
            'Volontariato e umanitari'
        ];
        return [
            'timing'=>fake()-> randomDigitNotNull(). " " . fake()->randomElement(['week', 'month']),
            'funding'=>fake()-> randomElement(['public', 'state']),
            'kind'=>fake()-> randomElement($tipiProgetti)
        ];
    }
}
