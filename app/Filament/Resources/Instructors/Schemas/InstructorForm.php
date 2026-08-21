<?php

namespace App\Filament\Resources\Instructors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
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

                Section::make('Social Links')
                    ->description('Add Facebook, Instagram, or any other profile links for this instructor.')
                    ->schema([
                        Repeater::make('socials')
                            ->relationship()
                            ->schema([
                                Select::make('platform')
                                    ->options([
                                        'facebook' => 'Facebook',
                                        'instagram' => 'Instagram',
                                        'youtube' => 'YouTube',
                                        'tiktok' => 'TikTok',
                                        'whatsapp' => 'WhatsApp',
                                        'twitter' => 'Twitter / X',
                                        'linkedin' => 'LinkedIn',
                                        'website' => 'Website',
                                    ])
                                    ->required()
                                    ->native(false)
                                    ->searchable(),

                                TextInput::make('url')
                                    ->label('Profile URL')
                                    ->url()
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->columns(2)
                            ->orderColumn('sort_order')
                            ->addActionLabel('Add Social Link')
                            ->itemLabel(fn (array $state): ?string => $state['platform'] ?? null)
                            ->collapsible()
                            ->defaultItems(0)
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
