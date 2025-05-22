<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskReminderTest extends TestCase
{
    use RefreshDatabase;

    public function test_reminder_at_can_be_set()
    {
        $task = \App\Models\Task::factory()->create([
            'reminder_at' => now()->addDays(1),
        ]);

        $this->assertNotNull($task->reminder_at);
    }

}
