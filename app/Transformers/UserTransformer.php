<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserTransformer
 *
 * @author SMARTINEZ
 */
namespace App\Trasformers;

use League\Fractal\TransformerAbstract;
use App\User;

/**
 * Class UserTransformer
 * @package App\TransformerAbstract
 */

class UserTransformer extends TransformerAbstract{
    /**
     * 
     * @param User $user
     * @return array
     */
    public function transform(User $user){
        return [
            'id'=>$user->uuid,
            'email'=>$user->email,
            'name'=>$user->name,            
            'created_at'=>$user->created_at,
            'update_at'=>$user->update_at
        ];
    }
}
