<?php

namespace App\Filament\Resources\PricingPlans\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PricingPlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Plan Details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('Rs'),

                        TextInput::make('currency')
                            ->default('Rs')
                            ->maxLength(10),

                        TextInput::make('period')
                            ->maxLength(255)
                            ->placeholder('e.g. class, month, year')
                            ->helperText('Shown after the price, e.g. "Rs 2000 / month"'),
                    ])
                    ->columns(3),

                Section::make('Features')
                    ->schema([
                        TagsInput::make('features')
                            ->label('Feature bullet points')
                            ->placeholder('Type a feature and press Enter')
                            ->columnSpanFull(),
                    ]),

                Section::make('Display Settings')
                    ->schema([
                        Toggle::make('is_featured')
                            ->label('Highlight as "Most Popular"')
                            ->default(false),

                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(3),
            ]);
    }
}
