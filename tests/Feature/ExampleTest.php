<?php

it('gives back a successful response for home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
