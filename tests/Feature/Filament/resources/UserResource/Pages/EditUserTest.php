<?php

use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Models\User;
use Filament\Actions\DeleteAction;

use function Pest\Livewire\livewire;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('can render page', function () {
    $this->get(UserResource::getUrl('edit', [
        'record' => User::factory()->create(),
    ]))->assertSuccessful();
});

it('can retrieve data', function () {
    $newData = User::factory()->create();
 
    livewire(EditUser::class, [
        'record' => $newData->getRouteKey(),
    ])
        ->assertFormSet([
            'name' => $newData->name,
            'email' => $newData->email,
            'phone' => $newData->phone,
        ]);
});

it('can save', function () {
    $post = User::factory()->create();
    $newData = User::factory()->make(['phone' => '1234567890']);
 
    livewire(EditUser::class, [
        'record' => $post->getRouteKey(),
    ])
        ->fillForm([
            'name' => $newData->name,
            'email' => $newData->email,
            'phone' => $newData->phone,
            'password' => $newData->password,
        ])
        ->call('save')
        ->assertHasNoFormErrors();
 
    expect($post->refresh())
        ->name->toBe($newData->name)
        ->email->toBe($newData->email)
        ->phone->toBe($newData->phone)
        ->password->toBe($newData->password);
});

it('can validate input', function () {
    $post = User::factory()->create();
 
    livewire(EditUser::class, [
        'record' => $post->getRouteKey(),
    ])
        ->fillForm([
            'name' => null,
        ])
        ->call('save')
        ->assertHasFormErrors(['name' => 'required']);
});

it('can delete', function () {
    $post = User::factory()->create();
 
    livewire(EditUser::class, [
        'record' => $post->getRouteKey(),
    ])
        ->callAction(DeleteAction::class);
 
    $this->assertModelMissing($post);
});

it('can not delete', function () {
    $post = User::factory()->create();
 
    livewire(EditUser::class, [
        'record' => $post->getRouteKey(),
    ])
        ->assertActionHidden(DeleteAction::class);
});