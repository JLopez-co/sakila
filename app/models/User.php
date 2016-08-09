<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'staff';
        protected $primaryKey= 'staff_id';
        public $timestamps = false;

	protected $hidden = array('password', 'remember_token');
        
        
        public function getAuthIdentifier(){}
        public function getAuthPassword(){
            
            return $this->password;
        }
        public function getRememberToken(){}
        public function setRememberToken($value){}
        public function getRememberTokenName(){}
        public function getReminderEmail(){}

}
