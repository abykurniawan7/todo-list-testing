<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskReminderFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_get_tasks_with_reminder_today()
    {
        \App\Models\Task::factory()->create([
            'reminder_at' => now(),
        ]);

        \App\Models\Task::factory()->create([
            'reminder_at' => now()->addDays(2),
        ]);

        $response = $this->get('/tasks/reminders/today');
        $response->assertStatus(200);
        $response->assertJsonCount(1); // hanya task yang reminder_at hari ini
    }

}
