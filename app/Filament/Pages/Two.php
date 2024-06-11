<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Two extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.two';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Two';


}
