<?php

use App\Filament\Resources\UserResource;
use App\Models\User;

it('can render page', function () {
    $this->actingAs(User::factory()->create());
    $this->get(UserResource::getUrl('index'))->assertSuccessful();
});