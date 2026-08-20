<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\HeroSlide;
use App\Models\Instructor;
use App\Models\PricingPlan;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StudioStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $unreadCount = Contact::where('is_read', false)->count();

        return [
            Stat::make('Active Services', Service::where('is_active', true)->count())
                ->description(Service::count() . ' total')
                ->icon('heroicon-o-sparkles')
                ->color('success'),

            Stat::make('Active Instructors', Instructor::where('is_active', true)->count())
                ->description(Instructor::count() . ' total')
                ->icon('heroicon-o-user-group')
                ->color('info'),

            Stat::make('Pricing Plans', PricingPlan::where('is_active', true)->count())
                ->description(PricingPlan::where('is_featured', true)->count() . ' featured')
                ->icon('heroicon-o-currency-dollar')
                ->color('warning'),

            Stat::make('Gallery Images', Gallery::count())
                ->description(Gallery::where('is_active', true)->count() . ' active')
                ->icon('heroicon-o-photo')
                ->color('gray'),

            Stat::make('Hero Slides', HeroSlide::where('is_active', true)->count())
                ->description(HeroSlide::count() . ' total')
                ->icon('heroicon-o-rectangle-stack')
                ->color('primary'),

            Stat::make('Unread Messages', $unreadCount)
                ->description($unreadCount > 0 ? 'Needs attention' : 'All caught up')
                ->icon('heroicon-o-envelope')
                ->color($unreadCount > 0 ? 'danger' : 'success'),
        ];
    }
}
