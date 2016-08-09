<?php

class FilmController extends BaseController{
    
    public function getPrimero(){
        
        $film = Film::select("special_features","title","rating")
                ->orderBy("rating")
                ->paginate(5);
        
        return View::make("film.index",["film" => $film]);
    }
    
    public function getSegundo(){
        
        $film = Film::select("special_features","title","rating")
                ->whereRaw("title like 'B%' AND length < 100 ")
                ->orderBy("rating")
                ->paginate(5);
        
        return View::make("film.index",["film" => $film]); 
    }
    
}
