<?php

class Salah extends Eloquent {
    
    function MosqueSalahTimes() {
        return $this->hasMany('MosqueSalahTimes');
    }
}