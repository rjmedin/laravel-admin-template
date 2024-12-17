<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Inertia\Inertia;

class ChangelogController extends Controller
{
    public function show()
    {
        $changelogPath = base_path('changelog.md');
        $changelogContent = File::exists($changelogPath) ? File::get($changelogPath) : 'Changelog not found.';

        return Inertia::render('Changelog', [
            'changelogContent' => $changelogContent,
        ]);
    }
}
