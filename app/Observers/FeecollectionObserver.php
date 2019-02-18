<?php

namespace App\Observers;

use App\Feecollection;

class FeecollectionObserver
{
    public function created(Feecollection $feecollection){
        dd("new feecollection record inserted");
    }
}