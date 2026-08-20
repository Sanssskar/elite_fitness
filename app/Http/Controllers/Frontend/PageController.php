<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\HeroSlide;
use App\Models\Instructor;
use App\Models\PricingPlan;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $heroSlides = HeroSlide::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->take(4)
            ->get();

        $leadInstructor = Instructor::where('is_active', true)
            ->orderBy('sort_order')
            ->first();

        return view('Frontend.home', compact('heroSlides', 'services', 'leadInstructor'));
    }

    public function about(): View
    {
        return view('Frontend.about');
    }

    public function services(): View
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $pricingPlans = PricingPlan::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('Frontend.services', compact('services', 'pricingPlans'));
    }

    public function instructor(): View
    {
        $instructors = Instructor::with('socials')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('Frontend.instructor', compact('instructors'));
    }

    public function gallery(): View
    {
        $photos = Gallery::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $categories = $photos->pluck('category')->filter()->unique()->values();

        return view('Frontend.gallery', compact('photos', 'categories'));
    }

    public function contact(): View
    {
        return view('Frontend.contact');
    }

    public function submitContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'interested_in' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:5000'],
        ]);

        Contact::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Thanks for reaching out! We\'ll get back to you soon.');
    }
}
