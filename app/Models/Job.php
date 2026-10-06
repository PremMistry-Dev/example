<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job { 
    public static function all(): array
        {
         return  [
        [
            'id' => 1,
            'title' => 'Laravel Developer',
            'description'  => 'This is a job description for Laravel Developer.',
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
        } 

        public static function find(int $id): array
        {
            $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
       
           if(! $job){
                abort(404);
           }
           return $job;
         }
        
}
