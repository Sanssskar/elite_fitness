<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Service Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, callable $set) {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Used in the service page URL. Auto-generated from the title, but you can edit it.'),

                        TextInput::make('short_description')
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText('Short summary shown on service cards/listing.'),

                        Textarea::make('description')
                            ->rows(5)
                            ->columnSpanFull()
                            ->helperText('Full description shown on the service detail page.'),
                    ])
                    ->columns(2),

                Section::make('Image & Highlights')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('services')
                            ->imageEditor()
                            ->columnSpanFull(),

                        TagsInput::make('features')
                            ->label('Feature bullet points')
                            ->placeholder('Type a feature and press Enter')
                            ->helperText('e.g. "Full-body cardio", "Easy-to-follow choreography"')
                            ->columnSpanFull(),
                    ]),

                Section::make('Display Settings')
                    ->schema([
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
