<?php

namespace App\Policies;

use App\Models\Thread;
use App\Models\User;

class ThreadPolicy
{
    /**
     * Solo acceso a preguntas del usuario
     *
     * @param User $user
     * @param Thread $thread
     * @return void
     */
    public function update(User $user, Thread $thread)
    {
        return $user->id === $thread->user_id; // true, false
    }
}
