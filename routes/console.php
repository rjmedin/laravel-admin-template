<?php

use App\Jobs\DebugJob;
use Illuminate\Support\Facades\Schedule;

Schedule::job(new DebugJob)->everyFiveSeconds();
