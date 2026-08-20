<?php

namespace App\Filament\Resources\HeroSlides\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroSlideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Slide Image')
                    ->schema([
                        FileUpload::make('image')
                          
                            ->required()
                            ->helperText('Recommended: wide banner image (e.g. 1920x900px).')
                            ->columnSpanFull(),
                    ]),

                Section::make('Slide Content')
                    ->schema([
                        TextInput::make('eyebrow')
                            ->maxLength(255)
                            ->helperText('Small label shown above the title, e.g. "Welcome to"'),

                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Display Settings')
                    ->schema([
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first in the slider.'),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Only active slides show on the homepage.'),
                    ])
                    ->columns(2),
            ]);
    }
}
