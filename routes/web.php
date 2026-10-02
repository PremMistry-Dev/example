<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

// Route::get('/about', function () {
//     return ['name' => 'Poppy', 'age' => 23];
// });

Route::get('/jobs', function () {
      return view('jobs', [
        'jobs' => [
        [
            'id' => 1,
            'title' => 'Laravel Developer',
            'description' => 'This is a job description for Laravel Developer.',
            'salary' => '50000'
        ],
        [
            'id' => 2,
            'title' => 'PHP Developer',
            'description' => 'This is a job description for PHP Developer.',
            'salary' => '45000'
        ],
        [
            'id' => 3,
            'title' => 'MERN Developer',
            'description' => 'This is a job description for MERN Developer.',
            'salary' => '55000'
        ]
    ]]);

});

Route::get('/jobs/{id}', function ($id) {
      $jobs = [
        [
            'id' => 1,
            'title' => 'Laravel Developer',
            'description' => 'This is a job description for Laravel Developer.',
            'salary' => '50000'
        ],
        [
            'id' => 2,
            'title' => 'PHP Developer',
            'description' => 'This is a job description for PHP Developer.',
            'salary' => '45000'
        ],
        [
            'id' => 3,
            'title' => 'MERN Developer',
            'description' => 'This is a job description for MERN Developer.',
            'salary' => '55000'
        ]
      ];

      $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);
      //dd($job);

});