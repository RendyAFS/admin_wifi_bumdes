<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelangganResource\Pages;
use App\Models\Pelanggan;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\Layout\Split;


class PelangganResource extends Resource
{
    protected static ?string $model = Pelanggan::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Pelanggan';
    protected static ?string $navigationGroup = 'Operasional';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Pelanggan')
                    ->schema([
                        TextInput::make('nama_pelanggan')
                            ->placeholder('Nama Lengkap...')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('nominal_bayar')
                            ->default('0')
                            ->placeholder('Rp. -')
                            ->numeric()
                            ->maxLength(255),
                        DatePicker::make('tgl_bayar')
                            ->timezone('Asia/Jakarta')
                            ->locale('ID')
                            ->native(false),
                    ])->columnSpan(1),

                Section::make('Data Pembayaran')
                    ->schema([
                        Select::make('status')
                            ->options([
                                'Belum Bayar' => 'Belum Bayar',
                                'Sudah Bayar' => 'Sudah Bayar',
                                'Cicil' => 'Cicil',
                            ])
                            ->default('Belum Bayar')
                            ->native(false),
                        Textarea::make('keterangan')
                            ->default('-')
                            ->rows(5)
                            ->cols(20),
                    ])->columnSpan(1)
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pelanggan')
                    ->label('Pelanggan')
                    ->sortable()
                    ->searchable(),
                SelectColumn::make('status')
                    ->label('Status')
                    ->options([
                        'Belum Bayar' => 'Belum Bayar',
                        'Sudah Bayar' => 'Sudah Bayar',
                        'Cicil' => 'Cicil',
                    ])
                    ->sortable()
                    ->rules(['required'])
                    ->selectablePlaceholder(false),
                TextColumn::make('tgl_bayar')
                    ->label('Tanggal Bayar')
                    ->visibleFrom('md')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nominal_bayar')
                    ->label('Nominal Bayar')
                    ->visibleFrom('lg')
                    ->searchable()
                    ->money('idr', true),
                TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->visibleFrom('xl')
                    ->searchable(),


            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                // ActionsDeleteAction::make(),
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
            'index' => Pages\ListPelanggans::route('/'),
            'create' => Pages\CreatePelanggan::route('/create'),
            // 'view' => Pages\ViewPelanggan::route('/{record}'),
            'edit' => Pages\EditPelanggan::route('/{record}/edit'),
        ];
    }
}
