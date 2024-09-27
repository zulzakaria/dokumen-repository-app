<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SekolahResource\Pages;
use App\Filament\Resources\SekolahResource\RelationManagers;
use App\Models\Sekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SekolahResource extends Resource
{
    protected static ?string $model = Sekolah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //form input
                Forms\Components\Select::make('kabupaten')
                ->label('Kabupaten/Kota')
                ->options([
                    'Kota Gorontalo' => 'Kota Gorontalo',
                    'Kab. Gorontalo' => 'Kab. Gorontalo',
                    'Kab. Bone Bolango' => 'Kab. Bone Bolango',
                    'Kab. Gorontalo Utara' => 'Kab. Gorontalo Utara',
                    'Kab. Boalemo' => 'Kab. Boalemo',
                    'Kab. Pohuwato' => 'Kab. Pohuwato',
                ]),
                Forms\Components\Select::make('jenjang')
                ->label('Jenjang')
                ->options([
                    'SLB' => 'SLB',
                    'SMA' => 'SMA',
                    'SMK' => 'SMK',
                ]),
                Forms\Components\TextInput::make('namaSekolah')
                ->required()
                ->maxLength(255)
                ->columnSpan('full'),
                Forms\Components\TextInput::make('npsn')
                ->label('NPSN')
                ->required()
                ->maxLength(8),
                Forms\Components\TextInput::make('emailSekolah')
                ->required()
                ->maxLength(128),
                Forms\Components\TextInput::make('namaKepalaSekolah')
                ->label('Nama Kepala Sekolah')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('telpKepalaSekolah')
                ->label('No HP Kepala Sekolah')
                ->required()
                ->maxLength(64),
                Forms\Components\TextInput::make('namaWakasekKurikulum')
                ->label('Nama Wakil Kepala Sekolah Bid. Kurikulum')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('telpWakasekKurikulum')
                ->label('No HP Wakil Kepala Sekolah Bid. Kurikulum')
                ->required()
                ->maxLength(64),
                Forms\Components\TextInput::make('namaBendahara')
                ->label('Nama Bendahara')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('telpBendahara')
                ->label('No HP Bendahara')
                ->required()
                ->maxLength(64),
                Forms\Components\TextInput::make('namaOperator')
                ->label('Nama Operator')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('telpOperator')
                ->label('No HP Operator')
                ->required()
                ->maxLength(64),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('kabupaten')->searchable(),
                Tables\Columns\TextColumn::make('jenjang')->searchable(),
                Tables\Columns\TextColumn::make('npsn')->searchable(),
                Tables\Columns\TextColumn::make('namaSekolah')->searchable(),
                Tables\Columns\TextColumn::make('namaKepalaSekolah')->label('Kepala Sekolah')->searchable(),
                Tables\Columns\TextColumn::make('telpKepalaSekolah')->label('No HP Kepsek')->searchable(),
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
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSekolahs::route('/'),
            'create' => Pages\CreateSekolah::route('/create'),
            'edit' => Pages\EditSekolah::route('/{record}/edit'),
        ];
    }
}
