<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Image')
                    ->schema([
                        FileUpload::make('image')
                            ->required()
                            ->columnSpanFull(),

                        TextInput::make('title')
                            ->maxLength(255),

                        TextInput::make('alt_text')
                            ->label('Alt text')
                            ->maxLength(255)
                            ->helperText('Describes the image for accessibility & SEO.'),

                        Select::make('category')
                            ->options([
                                'Zumba' => 'Zumba',
                                'Yoga' => 'Yoga',
                                'Studio' => 'Studio',
                                'Event' => 'Event',
                            ])
                            ->native(false)
                            ->searchable(),
                    ])
                    ->columns(2),

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
