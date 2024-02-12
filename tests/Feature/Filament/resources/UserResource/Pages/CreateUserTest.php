<?php

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Models\User;
use Illuminate\Support\Str;
use function Pest\Livewire\livewire;
 
it('can create', function () {

    $newData = User::factory()->make();
 
    livewire(CreateUser::class)
        ->fillForm([
            'name' => $newData->name,
            'email' => $newData->email,
            'phone' => $newData->phone,
            'password' => $newData->password,
        ])
        ->call('create')
        ->assertHasNoFormErrors();
 
    $this->assertDatabaseHas(User::class, [
        'name' => $newData->name,
        'email' => $newData->email,
        'phone' => $newData->phone,
        'password' => $newData->password,
    ]);
});

it('can validate input', function () {

    $newData = User::factory()->make();

    livewire(CreateUser::class)
        ->fillForm([
            'name' => null,
            'email' => null,
            'phone' => null,
            'password' => null,
        ])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required']);
});

it('can validate phone unique', function () {

    $newData = User::factory()->create(['phone' => '08122166666']);
    $newData = User::factory()->make();

    livewire(CreateUser::class)
        ->fillForm([
            'name' => $newData->name,
            'email' => $newData->email,
            'phone' => '08122166666',
            'password' => $newData->password,
        ])
        ->call('create')
        ->assertHasFormErrors(['phone' => 'unique']);
});


