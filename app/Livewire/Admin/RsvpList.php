<?php

namespace App\Livewire\Admin;

use App\Models\RSVP;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Actions\Action;

class RsvpList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(RSVP::query())
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('email')
                    ->icon('heroicon-m-envelope')
                    ->iconColor('primary')
                    ->copyable()
                    ->copyMessage('Email address copied')
                    ->copyMessageDuration(1500)
                    ->searchable()
                    ->toggleable(),
            ])
            ->defaultSort('name', 'email')
            ->actions([
                Action::make('delete')
                    ->requiresConfirmation()
                    ->action(fn (RSVP $record) => $record->delete())
            ])->emptyStateHeading('No RSVPs yet.');
    }

    public function render()
    {
        return view('livewire.admin.rsvp-list');
    }
}
