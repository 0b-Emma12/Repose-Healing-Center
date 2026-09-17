<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function team()
    {
        return view('team');
    }

    public function services()
    {
        return view('services');
    }

    public function resources()
    {
        return view('resources');
    }

    public function faq()
    {
        return view('faq');
    }

    public function careers()
    {
        return view('careers');
    }

    public function showCondition($slug)
    {
        $data = config("repose.conditions.{$slug}");
        abort_if(!$data, 404);

        $sidebarLinks = collect(config('repose.conditions'))->map(function($item, $key) {
            return ['title' => $item['title'], 'url' => route('conditions.show', $key)];
        });

        return view('templates.content-page', [
            'data' => $data,
            'sidebarTitle' => 'Conditions We Treat',
            'sidebarLinks' => $sidebarLinks
        ]);
    }

    public function showProgramme($slug)
    {
        $data = config("repose.programmes.{$slug}");
        abort_if(!$data, 404);

        $sidebarLinks = collect(config('repose.programmes'))->map(function($item, $key) {
            return ['title' => $item['title'], 'url' => route('programmes.show', $key)];
        });

        return view('templates.content-page', [
            'data' => $data,
            'sidebarTitle' => 'Our Programmes',
            'sidebarLinks' => $sidebarLinks
        ]);
    }

    public function showAudience($slug)
    {
        $data = config("repose.audiences.{$slug}");
        abort_if(!$data, 404);

        $sidebarLinks = collect(config('repose.audiences'))->map(function($item, $key) {
            return ['title' => $item['title'], 'url' => route('audiences.show', $key)];
        });

        return view('templates.content-page', [
            'data' => $data,
            'sidebarTitle' => 'Support For You',
            'sidebarLinks' => $sidebarLinks
        ]);
    }
}
