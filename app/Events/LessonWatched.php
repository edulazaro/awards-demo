<?php

namespace App\Events;

use App\Models\User;
use App\Models\Lesson;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

use App\Awards\LessonsWatchedAchievement;

class LessonWatched
{
    use Dispatchable, SerializesModels;

    public $award;
    public $lesson;
    public $user;

    /**
     * Create a new event instance.
     *
     * @param Lesson $lesson
     * @param User $user
     * @return void
     */
    public function __construct(Lesson $lesson, User $user)
    {
        $this->lesson = $lesson;
        $this->user = $user;
    }
}
