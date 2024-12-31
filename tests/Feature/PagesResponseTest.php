<?php

use function Pest\Laravel\get;

it('gives back a successful response for home page', function () {
    // Act & Assert
    get(route('home'))
        ->assertOk();
});
