<?php

namespace App\Filament\Resources\PelangganResource\Pages;

use App\Filament\Resources\PelangganResource;
use App\Models\Pelanggan;
use App\Models\Riwayat;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use Filament\Actions\Action;
use Filament\Notifications\Notification;

class ListPelanggans extends ListRecords
{
    protected static string $resource = PelangganResource::class;



    protected function getHeaderActions(): array
    {
        return [
            Action::make('Reset')
                ->icon('heroicon-m-arrow-path')
                ->action(function () {
                    // Retrieve all data from pelanggans table
                    $pelangganData = Pelanggan::all()->makeHidden('id')->toArray();

                    // Insert data into riwayats table
                    Riwayat::insert($pelangganData);

                    // Update pelanggans table with reset values
                    Pelanggan::query()->update([
                        'nominal_bayar' => '0',
                        'tgl_bayar' => '',
                        'keterangan' => '-',
                        'status' => 'Belum Bayar'
                    ]);

                    // Send success notification
                    Notification::make()
                        ->title('Data berhasil tereset.')
                        ->success()
                        ->send();
                })
                ->color('danger')
                ->requiresConfirmation()
                ->modalHeading('Reset Data')
                ->modalDescription('Apakah yakin reset data? data tidak bisa dikembalikan.')
                ->modalSubmitActionLabel('Ya, reset data'),
            Action::make('Download')
                ->icon('heroicon-m-arrow-down-circle')
                ->url(fn () => route('download.pdf')),
            CreateAction::make()
                ->label("Pelanggan")
                ->icon('heroicon-m-user-plus')
                ->color('success'),
        ];
    }



    public function getTabs(): array
    {
        return [
            '' => Tab::make()
                ->icon('heroicon-m-squares-2x2'),
            'Belum Bayar' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Belum Bayar'))
                ->badge(Pelanggan::query()->where('status', 'Belum Bayar')->count())
                ->badgeColor('danger'),
            'Sudah Bayar' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Sudah Bayar'))
                ->badge(Pelanggan::query()->where('status', 'Sudah Bayar')->count())
                ->badgeColor('success'),
            'Cicil' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Cicil'))
                ->badge(Pelanggan::query()->where('status', 'Cicil')->count())
                ->badgeColor('warning'),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return '';
    }
}
