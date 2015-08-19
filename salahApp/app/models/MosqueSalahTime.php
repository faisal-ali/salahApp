<?php

class MosqueSalahTime extends Eloquent {
    
    function Mosques() {
        return $this->belongsToMany('Mosque');
    }
    
    function Salahs() {
        return $this->belongsToMany('Salahs');
    }
}