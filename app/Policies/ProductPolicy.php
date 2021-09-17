<?php

namespace App\Policies;

use App\Models\User;
//use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */


   public function isPriorityHigher(User $user)
   {
       return $user->priority = 1;
   }
}
