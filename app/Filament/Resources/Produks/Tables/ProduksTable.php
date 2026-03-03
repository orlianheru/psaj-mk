<?php

namespace App\Filament\Resources\Produks\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProduksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('harga')
                    ->money('IDR', locale: 'id')
                    ->sortable(),

                TextColumn::make('stok')
                    ->badge()
                    ->color(fn ($state) =>
                        $state <= 0 ? 'danger' :
                        ($state <= 3 ? 'warning' : 'success')
                    ),
            ])
            ->recordActions([
    \Filament\Actions\EditAction::make(),
    \Filament\Actions\DeleteAction::make(),
])

->toolbarActions([
    \Filament\Actions\DeleteBulkAction::make(),
]);
            }
}
