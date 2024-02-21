<?php

namespace Tests\Unit;

use App\Jobs\DeleteUser;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_laravel_venture_delete_error(): void
    {
        $user = User::factory()->create();

        DeleteUser::dispatch($user);

        $this->assertModelMissing($user);
    }
}
