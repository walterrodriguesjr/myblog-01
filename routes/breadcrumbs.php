<?php // routes/breadcrumbs.php


// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('dashboard', route('dashboard.index'));
});

/* Dashboard > Home */
Breadcrumbs::for('dashboard_home', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Home', '#');
});

/* Dashboard > Categories */
Breadcrumbs::for('categories', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Categories', route('categories.index'));
});

// Home > Blog
/* Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
}); */

// Home > Blog > [Category]
/* Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
}); */