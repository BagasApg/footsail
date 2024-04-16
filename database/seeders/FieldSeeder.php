<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\FieldType;
use App\Models\FieldClass;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Reguler'
            ],
            [
                'name' => 'Matras'
            ],
            [
                'name' => 'Rumput'
            ]
            ];

        foreach($types as $type){
            FieldType::create($type);
        }
        $classes = [
            [
                'name' => 'Indoor'
            ],
            [
                'name' => 'Outdoor'
            ]
            ];

        foreach($classes as $class){
            FieldClass::create($class);
        }

        $courts = [
            [
                'field_class_id' => 1,
                'field_type_id' => 1,
                'name' => 'Indoor Reguler',
                'price' => 300000
            ],[
                'field_class_id' => 1,
                'field_type_id' => 2,
                'name' => 'Indoor Matras',
                'price' => 250000
            ],[
                'field_class_id' => 1,
                'field_type_id' => 3,
                'name' => 'Indoor Rumput',
                'price' => 200000
            ],[
                'field_class_id' => 2,
                'field_type_id' => 1,
                'name' => 'Outdoor Reguler',
                'price' => 250000
            ],[
                'field_class_id' => 2,
                'field_type_id' => 2,
                'name' => 'Outdoor Matras',
                'price' => 200000
            ],[
                'field_class_id' => 2,
                'field_type_id' => 3,
                'name' => 'Outdoor Rumput',
                'price' => 100000
            ],
            
        ];

        foreach($courts as $court){
            Field::create($court);
        }
    }
}
