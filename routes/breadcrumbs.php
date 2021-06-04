<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About', route('about'));
});

// Home > policies
Breadcrumbs::for('policies', function ($trail) {
    $trail->parent('home');
    $trail->push('Policies', route('policies'));
});

// Home > courses
Breadcrumbs::for('courses', function ($trail) {
    $trail->parent('home');
    $trail->push('Courses', route('courses'));
});

// Home > courses
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', route('contact'));
});


// Home > accesss
Breadcrumbs::for('Access and Participation', function ($trail) {
    $trail->parent('home');
    $trail->push('Access and Participation', route('Access and Participation'));
});


// Home > how to apply
Breadcrumbs::for('How to apply', function ($trail) {
    $trail->parent('home');
    $trail->push('How to apply', route('How to apply'));
});

// Home > Search
Breadcrumbs::for('search', function ($trail) {
    $trail->parent('home');
    $trail->push('Search', route('search'));
});


// Home > Courses > [Course]
Breadcrumbs::for('course', function ($trail, $course) {
    $trail->parent('courses');
    $trail->push($course->title, route('course', $course->id));
});



// // Home > Courses > [Course]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });