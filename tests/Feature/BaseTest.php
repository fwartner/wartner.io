<?php

it('has a landing page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('has a blog page', function () {
    $response = $this->get('/blog');

    $response->assertStatus(200);
});

it('has an about page', function () {
    $response = $this->get('/about');

    $response->assertStatus(200);
});

it('has a contact page', function () {
    $response = $this->get('/contact');

    $response->assertStatus(200);
});

it('has an imprint page', function () {
    $response = $this->get('/imprint');

    $response->assertStatus(200);
});
