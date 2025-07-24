<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function about() {
        return view('about');
    }

    public function curricula() {
        return view('curricula');
    }

    public function contacts() {
        return view('contacts');
    }

    public function services() {
        $services = [
            'marketing',
            'comunicazione',
            'website'
        ];

        return view('services', ['services' => $services]);
    }

    public function service ($service) {
        $services = [
            'marketing' => 10,
            'comunicazione' => 20,
            'website' => 30
        ];
    
        $cost = isset($services[$service])
            ? $services[$service]
            : 'service-not-found';

        if (isset($services[$service])) {
            $service = $services[$service];

            return view('/service', [
                'servizio' => $service,
                'costo' => $cost
            ]);
        }

        return view('/not-found', [
            'service' => $service,
            'costo' => $cost
        ]);
    }

}
