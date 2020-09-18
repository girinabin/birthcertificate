<?php

namespace App\Policies;

use App\BirthApplicationForm;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BirthApplicationFormPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function admin(User $user){
        
        return $user->roles()->first()->name=='ADMIN';
   }

    public function editBirthApplicationForm(User $user,BirthApplicationForm $applicationForm){

        return $user->healthPost->id == $applicationForm->health_post_id;

    }

    public function updateBirthApplicationForm(User $user,BirthApplicationForm $applicationForm){

        return $user->healthPost->id == $applicationForm->health_post_id;
        
    }

    public function deleteBirthApplicationForm(User $user,BirthApplicationForm $applicationForm){

        return $user->healthPost->id == $applicationForm->health_post_id;
        
    }
}
