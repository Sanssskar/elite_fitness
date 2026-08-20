<?php

namespace App\Filament\Resources\Instructors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InstructorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Profile')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('instructors')
                            ->imageEditor()
                            ->imageEditorAspectRatios(['1:1'])
                            ->columnSpanFull(),

                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('role')
                            ->maxLength(255)
                            ->placeholder('e.g. Lead Zumba Instructor'),

                        Textarea::make('bio')
                            ->rows(4)
                            ->columnSpanFull(),

                        TagsInput::make('specialties')
                            ->placeholder('Type a specialty and press Enter')
                            ->helperText('e.g. "Zumba Fitness", "Zumba Toning"')
                            ->columnSpanFull(),
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
