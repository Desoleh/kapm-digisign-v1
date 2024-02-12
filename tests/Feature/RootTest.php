<?php

it('returns a successful response', function () {
    $this->get('/')
        ->assertRedirect('/login')
        ->assertStatus(302);
});
