<?php

namespace App\Policies;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProfilePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true; // Allow all users to view any profile
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Profile $profile): bool
    {
        // Allow the user to view the profile if they own it
        return $user->id === $profile->user_id; // Assuming profiles are linked to users
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Allow any authenticated user to create a profile
        return true; // or add your own logic
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Profile $profile): bool
    {
        // Allow the user to update the profile if they own it
        return $user->id === $profile->user_id; // Assuming profiles are linked to users
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Profile $profile): bool
    {
        // Allow the user to delete the profile if they own it
        return $user->id === $profile->user_id; // Assuming profiles are linked to users
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Profile $profile): bool
    {
        // Allow the user to restore the profile if they own it
        return $user->id === $profile->user_id; // Assuming profiles are linked to users
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Profile $profile): bool
    {
        // Allow the user to permanently delete the profile if they own it
        return $user->id === $profile->user_id; // Assuming profiles are linked to users
    }
}