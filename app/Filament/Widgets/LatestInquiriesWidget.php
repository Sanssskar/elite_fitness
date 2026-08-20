<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Filament\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestInquiriesWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Latest Inquiries')
            ->query(
                Contact::query()->latest()->limit(5)
            )
            ->columns([
                IconColumn::make('is_read')
                    ->label('Read')
                    ->boolean(),

                TextColumn::make('name')
                    ->weight('bold'),

                TextColumn::make('email'),

                TextColumn::make('interested_in')
                    ->badge()
                    ->placeholder('—'),

                TextColumn::make('created_at')
                    ->label('Received')
                    ->since(),
            ])
            ->recordActions([
                Action::make('view')
                    ->label('View')
                    ->url(fn (Contact $record) => route('filament.admin.resources.contacts.edit', $record)),
            ])
            ->paginated(false)
            ->defaultSort('created_at', 'desc');
    }
}
