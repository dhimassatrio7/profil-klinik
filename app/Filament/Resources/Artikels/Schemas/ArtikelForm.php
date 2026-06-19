<?php

namespace App\Filament\Resources\Artikels\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')
                    ->default(fn (): ?int => auth()->id()),
                TextInput::make('judul')
                    ->required(),
                TextInput::make('slug')
                    ->helperText('Kosongkan untuk membuat slug otomatis dari judul.'),
                RichEditor::make('isi')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->image()
                    ->disk('public')
                    ->directory('artikel'),
                DatePicker::make('tanggal_publish'),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
