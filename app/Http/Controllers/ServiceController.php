<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function show(string $slug)
    {
        $services = config('services_pages');

        if (! isset($services[$slug])) {
            abort(404);
        }

        return view('services.show', [
            'service' => $services[$slug],
            'slug' => $slug,
        ]);
    }
}
