<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Setting;
class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $setting = Setting::first();
        return view('layouts.app',['setting'=>$setting]);
    }
}
