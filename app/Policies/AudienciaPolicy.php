<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Audiencia;

class AudienciaPolicy extends Policy
{
    public function update(User $user, Audiencia $audiencia)
    {
        // return $audiencia->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Audiencia $audiencia)
    {
        return true;
    }
}
