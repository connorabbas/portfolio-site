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
                'link' => 'https://cam-abbas.com',
                'img' => 'camdesign.png',
            ],
            [
                'title' => 'T&M Lobby Group',
                'link' => 'https://tmlobbygroup.com/',
                'img' => 'cap2.png',
            ],
            [
                'title' => 'Posty',
                'link' => 'https://github.com/connorabbas/posty',
                'img' => 'laravel.png',
            ],
            [
                'title' => 'Budget Tracker',
                'link' => 'https://github.com/connorabbas/budget-tracker',
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