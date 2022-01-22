<?php
class ProjectsController
{

    public function index()
    {
        $projects = [
            [
                'title' => 'PHP Mini Framework',
                'cat' => 'PHP MVC & OOP',
                'img' => 'php_PNG50.png',
            ],
            [
                'title' => 'Wholesale Ecommerce Site',
                'cat' => 'Full Stack',
                'img' => 'code.jpg',
            ],
            [
                'title' => 'CRM Inventory Management Plugin',
                'cat' => 'WordPress',
                'img' => 'wp.png',
            ],
            [
                'title' => 'South Dakota Area Obituaries',
                'cat' => 'Full Stack',
                'img' => 'obits.png',
            ],
        ];

        $otherProjects = [
            [
                'title' => 'CAMABBAS Design',
                'cat' => 'Full Stack',
                'img' => 'camdesign.png',
            ],
            [
                'title' => 'T&M Lobby Group',
                'cat' => 'Full Stack',
                'img' => 'cap2.png',
            ],
            [
                'title' => 'Elementor Widgets',
                'cat' => 'WordPress',
                'img' => 'WP-ELEM.png',
            ],
            [
                'title' => 'Posty',
                'cat' => 'Laravel',
                'img' => 'laravel.png',
            ],
            [
                'title' => 'Budget Tracker',
                'cat' => 'React JS',
                'img' => 'react.png',
            ],
        ];

        return App::view('projects', [
            'pageTitle' => 'Projects',
            'projects' => $projects,
            'otherProjects' => $otherProjects,
        ]);
    }
}