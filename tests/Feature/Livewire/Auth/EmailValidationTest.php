<?php

use App\Livewire\Auth\EmailValidation;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(EmailValidation::class)
        ->assertStatus(200);
});
