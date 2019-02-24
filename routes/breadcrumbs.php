<?php

// School
Breadcrumbs::for('schools', function ($trail) {
    $trail->push('School', route('schools.index'));
});

// School > Session
Breadcrumbs::for('sessions', function ($trail) {
    $trail->parent('schools');
    $trail->push('About', route('sessions.index'));
});

// School > Session > Class
Breadcrumbs::for('clsss', function ($trail) {
    $trail->parent('sessions');
    $trail->push('Class', route('clsss.index'));
});

// // Home > Blog
// Breadcrumbs::for('blog', function ($trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });