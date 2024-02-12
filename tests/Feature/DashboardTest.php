<?php

use App\Models\User;

it('has dashboard page', function () {
    $user = User::factory()->create();
    $this->actingAs($user)
        ->get('/dashboard')
        ->assertStatus(200);
});
