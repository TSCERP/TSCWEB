<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use App\Models\ContactInfo;
use App\Models\ContactReason;
use Filament\Support\Enums\MaxWidth;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;


class contact extends Page implements HasTable
{
    use InteractsWithTable;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected  ContactInfo $ContactInfo;
    protected static string $view = 'filament.pages.contact';
    public static function getNavigationBadge(): ?string
    {
        return ContactInfo::count();
    }
    public function getMaxContentWidth(): MaxWidth
    {
        return MaxWidth::Full;
    }
    public static function canAccess(): bool
    {
        return true;
        // return auth()->user()->is_admin;
    }
    public function table(Table $table): Table
    {
        return $table
            ->query(ContactInfo::with('reason')->orderBy('created_at', 'desc'))
            ->columns([
                TextColumn::make('created_at')
                    ->label('Request Date')
                    ->dateTime('d/m/Y H:i:s')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('fullname')
                    ->label('Full Name')
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('company_name')
                    ->label('Company Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone_number')
                    ->label('Phone Number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('reason.description')
                    ->label('Contact Reason')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('message')
                    ->label('Message')
                    ->searchable()
                    ->sortable(),

            ]) ->defaultSortOptionLabel('Date')
            ->filters([
                SelectFilter::make('contact_reason')
                    ->label('Contact Reason')
                    ->multiple()
                    ->options(ContactReason::all()->pluck('description', 'id'))
                    ->placeholder('Select')
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                ExportBulkAction::make()
            ]);
    }

}
