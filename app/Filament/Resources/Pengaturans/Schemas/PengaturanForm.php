<?php

namespace App\Filament\Resources\Pengaturans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PengaturanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_klinik')
                    ->required(),
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('telepon')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                FileUpload::make('logo')
                    ->image()
                    ->disk('public')
                    ->directory('pengaturan'),
                FileUpload::make('favicon')
                    ->image()
                    ->disk('public')
                    ->directory('pengaturan'),
                Textarea::make('deskripsi_singkat')
                    ->columnSpanFull(),
                TextInput::make('jam_operasional'),
                TextInput::make('whatsapp')
                    ->tel(),
                TextInput::make('facebook')
                    ->url(),
                TextInput::make('instagram')
                    ->url(),
                Textarea::make('maps_embed')
                    ->columnSpanFull(),
            ]);
    }
}
