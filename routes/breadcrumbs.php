<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('welcome', function ($trail) {
    $trail->push('Home', route('welcome'));
});

//about us page
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('welcome');
    $trail->push('About', route('about'));
});

Breadcrumbs::for('rules', function ($trail) {
    $trail->parent('welcome');
    $trail->push('Rules', route('rules'));
});

Breadcrumbs::for('login', function ($trail) {
    $trail->parent('welcome');
    $trail->push('Login', route('login'));
});

Breadcrumbs::for('register', function ($trail) {
    $trail->parent('welcome');
    $trail->push('Register', route('register'));
});