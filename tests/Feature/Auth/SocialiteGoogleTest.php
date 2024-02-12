<?php

use Laravel\Socialite\Contracts\Factory;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\SocialiteServiceProvider;
use Laravel\Socialite\Two\GithubProvider;
use Laravel\Socialite\Two\GoogleProvider;

function getEnvironmentSetUp($app)
{
    $app['config']->set('services.github', [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI'),
    ]);
}

function getPackageProviders($app)
{
    return [SocialiteServiceProvider::class];
}

it('redirect to google', function(){

    
    $factory = $this->app->make(Factory::class);

    $provider = $factory->driver('google');

    $this->assertInstanceOf(GoogleProvider::class, $provider);

});
