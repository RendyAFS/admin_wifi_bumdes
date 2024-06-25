<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatResource\Pages;
use App\Filament\Resources\RiwayatResource\RelationManagers;
use App\Models\Riwayat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Layout\SpnTextColumnit;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatResource extends Resource
{
    protected static ?string $model = Riwayat::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationLabel = 'Riwayat';
    protected static ?string $navigationGroup = 'Operasional';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_pelanggan')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('nominal_bayar')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('tgl_bayar')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('keterangan')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pelanggan')
                    ->label('Pelanggan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->sortable()
                    ->color(fn (string $state): string => match ($state) {
                        'Cicil' => 'warning',
                        'Sudah Bayar' => 'success',
                        'Belum Bayar' => 'danger',
                    })
                    ->searchable(),
                TextColumn::make('tgl_bayar')
                    ->label('Tanggal Bayar')
                    ->sortable()
                    ->searchable()
                    ->visibleFrom('md'),
                TextColumn::make('nominal_bayar')
                    ->label('Nominal Bayar')
                    ->sortable()
                    ->searchable()
                    ->visibleFrom('lg'),

                TextColumn::make('keterangan')
                    ->label('Keteangan')
                    ->searchable()
                    ->visibleFrom('xl'),

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRiwayats::route('/'),
            'create' => Pages\CreateRiwayat::route('/create'),
            'view' => Pages\ViewRiwayat::route('/{record}'),
            // 'edit' => Pages\EditRiwayat::route('/{record}/edit'),
        ];
    }
}
