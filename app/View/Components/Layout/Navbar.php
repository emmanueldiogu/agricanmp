<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'About', 'href' => '/about'],
            ['label' => 'Services', 'href' => '/services'],
            ['label' => 'Contact Us', 'href' => '/contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.navbar');
    }
}