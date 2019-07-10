<?php

namespace App\Policies;

use App\User;
use App\Models\Pessoa;

class PessoaPolicy extends Policy
{
    public function update(User $user, Pessoa $pessoa)
    {
        // return $pessoa->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Pessoa $pessoa)
    {
        return true;
    }
}
