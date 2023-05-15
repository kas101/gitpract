<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\User;
use Illuminate\Http\Request;

class PractiseController extends Controller
{
    public function getUsers(){

      $user = new User();
     $yaba= $user->all();

     foreach($yaba as $person){
        return $person->singer;
     }
    
    }

    public function createUsers(){
        User::factory()->count(39)->create();
    }

    public function getSingers(){
        $user= new Singer();
        $yaba=$user->all();
        foreach($yaba as $person){
            return $person->user;
         }
        
    }
}
