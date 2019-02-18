<?php

namespace App\Observers;
use App\Feecollection;

class FecollectionObserver
{
    public function created(Feecollection $feecollection){
        dd("new feecollection record inserted");
    }
}


