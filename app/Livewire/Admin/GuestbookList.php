<?php

namespace App\Livewire\Admin;

use App\Models\Guestbook;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Actions\Action;

class GuestbookList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(Guestbook::query())
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
                TextColumn::make('message')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }
                        return $state;
                    })
                    ->searchable()
                    ->toggleable(),
            ])
            ->defaultSort('name', 'email')
            ->actions([
                Action::make('delete')
                    ->requiresConfirmation()
                    ->action(fn (Guestbook $record) => $record->delete())
            ])->emptyStateHeading('No Guestbooks yet.');
    }

    public function render()
    {
        return view('livewire.admin.guestbook-list');
    }
}
