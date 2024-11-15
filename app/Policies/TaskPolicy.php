<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    /**
     * Méthode pour vérifier si l'utilisateur est propriétaire du projet associé à la tâche.
     */
    private function isProjectOwner(User $user, Project $project): bool
    {
        return $user->id === $project->user_id;
    }

    /**
     * Determine if the user can view any tasks.
     */
    public function viewAny(User $user): bool
    {
        // Exemple: autoriser l'accès à tous les utilisateurs connectés
        return true;
    }

    /**
     * Determine if the user can view a specific task.
     */
    public function view(User $user, Project $project): bool
    {
        return $this->isProjectOwner($user, $project);
    }

    /**
     * Determine if the user can create a task.
     */
    public function create(User $user, Project $project): bool
    {
        return $this->isProjectOwner($user, $project);
    }

    /**
     * Determine if the user can update the task.
     */
    public function update(User $user, Project $project): bool
    {
        return $this->isProjectOwner($user, $project);
    }

    /**
     * Determine if the user can delete the task.
     */
    public function delete(User $user, Project $project): bool
    {
        return $this->isProjectOwner($user, $project);
    }
}
