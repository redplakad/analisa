<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DebiturResource\Pages;
use App\Filament\Resources\DebiturResource\RelationManagers;
use App\Models\Debitur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DebiturResource extends Resource
{
    protected static ?string $model = Debitur::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nik')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('tempat_lahir')
                ->required()
                ->maxLength(255),
            Forms\Components\DatePicker::make('tanggal_lahir')
                ->required(),
            Forms\Components\TextInput::make('pekerjaan')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('alamat')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('status_perkawinan')
                ->required()
                ->options([
                    'single' => 'Single',
                    'married' => 'Married',
                    'divorced' => 'Divorced',
                ]),
            Forms\Components\TextInput::make('nama_pasangan')
                ->maxLength(255),
            Forms\Components\TextInput::make('nik_pasangan')
                ->maxLength(255),
            Forms\Components\TextInput::make('jumlah_anak')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('status_tempat_tinggal')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('no_hp')
                ->label('Nomor HP')
                ->tel()
                ->required()
                ->maxLength(15)
                ->prefix('+62'),
            Forms\Components\TextInput::make('no_wa')
                ->label('Nomor WA')
                ->tel()
                ->required()
                ->maxLength(15)
                ->prefix('+62'),
            Forms\Components\TextInput::make('no_npwp')
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDebiturs::route('/'),
            'create' => Pages\CreateDebitur::route('/create'),
            'edit' => Pages\EditDebitur::route('/{record}/edit'),
        ];
    }
}
