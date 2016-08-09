<?php

class CustomerController extends BaseController{
    
    public function getTercera(){
       
       $customers = Customer::select("first_name","last_name","active")
               ->orderBy("first_name","last_name")
               ->where("active","=","0")
               ->paginate(5); 
       
       return View::make("customer.index",["custo" => $customers]);
    }
}
