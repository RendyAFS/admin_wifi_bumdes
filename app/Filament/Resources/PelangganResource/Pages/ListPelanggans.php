<?php

namespace App\Filament\Resources\PelangganResource\Pages;

use App\Filament\Resources\PelangganResource;
use App\Models\Pelanggan;
use Filament\Actions;
use Filament\Actions\CreateAction;
use Filament\Pages\Actions\PDFAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListPelanggans extends ListRecords
{
    protected static string $resource = PelangganResource::class;



    protected function getHeaderActions(): array
    {
        return [
            PDFAction::make()
                ->icon('heroicon-m-document')
                ->url(fn()=> route('download.pdf')),
            // UpdateJatuhTempoAction::make()
            //     ->icon('heroicon-m-document')
            //     ->url(fn()=> route('download.pdf')),
            CreateAction::make()
                ->label("Pelanggan")
                ->icon('heroicon-m-user-plus')
                ->color('success'),

            // Actions\ButtonAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return [
            'Semua' => Tab::make(),
            'Belum Bayar' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Belum Bayar'))
                ->badge(Pelanggan::query()->where('status', 'Belum Bayar')->count())
                ->badgeColor('danger'),
            'Sudah Bayar' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Sudah Bayar'))
                ->badge(Pelanggan::query()->where('status', 'Sudah Bayar')->count())
                ->badgeColor('success'),
        ];
    }
}
