<?php

namespace App\Filament\Resources\Produks\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ProdukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),

                TextInput::make('harga')
                    ->numeric()
                    ->required(),

                TextInput::make('stok')
                    ->numeric()
                    ->default(0),

                FileUpload::make('gambar')
                ->image()
                ->disk('public')
                ->directory('produk')
                ->max(10240)
                ->visibility('public')
                ->nullable(),
            ]);
    }
}
