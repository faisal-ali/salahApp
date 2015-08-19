<?php

class Mosque extends Eloquent {
    
    function MosqueSalahTimes() {
        return $this->hasMany('MosqueSalahTime');
    }
}