<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelContato extends Model
{
    public function Lista()
    {
        return (object) ['nome'=>'gabriel', 'tel' => 34545, 'rua'=> 'Cinco', 'idade'=> 24];

            // (object) ['nome'=>'gabriel', 'tel' => 34545, 'rua'=> 'Cinco', 'idade'=> 24],
            // (object) ['nome'=>'Joao', 'tel' => 234545, 'rua'=> 'oito', 'idade'=> 22],
            // (object) ['nome'=>'daniel', 'tel' => 34545, 'rua'=> 'Cinco', 'idade'=> 14],
    }
}
