<?php

class Film extends Eloquent{
    
    protected $table = "film";
    protected $primaryKey = "film_id";
    public    $timestamps = false;
}
