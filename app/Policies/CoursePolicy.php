<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Course;

class CoursePolicy
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

    public function enrolled(user $user, course $course){
        return $course->students->contains($user->id);
    }

    public function published(? user $user, course $course){
        if ($course->status == 3) {
           return true;
        }else{
            return false;
        }
    }

    public function dicatated(user $user, course $course){
        if ($course->user_id == $user->id) {
            return true;
        }else{
            return false;
        }
    }

    public function revision(user $user, course $course){
       if ($course->status == 2) {
           return true;
       }else{
           return false;
       }
    }
}
