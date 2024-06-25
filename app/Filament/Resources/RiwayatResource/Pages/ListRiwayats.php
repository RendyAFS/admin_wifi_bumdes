<?php

namespace App\Filament\Resources\RiwayatResource\Pages;

use App\Filament\Resources\RiwayatResource;
use App\Models\Riwayat;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListRiwayats extends ListRecords
{
    protected static string $resource = RiwayatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Filter Download')
                ->icon('heroicon-m-adjustments-vertical')
                ->modal()
                ->form([
                    DatePicker::make('start_date')
                        ->native(false)
                        ->timezone('Asia/Jakarta')
                        ->label('Mulai Tanggal')
                        ->required(),
                    DatePicker::make('end_date')
                        ->native(false)
                        ->label('Sampai Tanggal')
                        ->timezone('Asia/Jakarta')
                        ->required(),
                ])
                ->action(function (array $data) {
                    return redirect()->route('download-riwayat.pdf', [
                        'start_date' => $data['start_date'],
                        'end_date' => $data['end_date'],
                    ]);
                }),
            // CreateAction::make(),
            Action::make('Download Semua')
                ->color('success')
                ->icon('heroicon-m-arrow-down-circle')
                ->url(fn () => route('download-riwayat.pdf')),
        ];
    }

    public function getTabs(): array
    {
        return [
            '' => Tab::make()
                ->icon('heroicon-m-squares-2x2'),
            'Belum Bayar' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Belum Bayar'))
                ->badge(Riwayat::query()->where('status', 'Belum Bayar')->count())
                ->badgeColor('danger'),
            'Sudah Bayar' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Sudah Bayar'))
                ->badge(Riwayat::query()->where('status', 'Sudah Bayar')->count())
                ->badgeColor('success'),
            'Cicil' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Cicil'))
                ->badge(Riwayat::query()->where('status', 'Cicil')->count())
                ->badgeColor('warning'),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return '';
    }
}
