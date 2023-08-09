<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;

class ActionPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.action-page';

    public function testAction(): Action
    {
        return Action::make('wrongName')
            ->label('Does not work, not named as the method testAction()')
            ->requiresConfirmation()
            ->action(fn () => dd('testAction()'));
    }

    public function test2Action(): Action
    {
        return Action::make('test2')
            ->label('This works, named like the method test2Action()')
            ->requiresConfirmation()
            ->action(fn () => dd('test2Action()'));
    }

    public function test3Action(): Action
    {
        return Action::make('test')
            ->label('This is named "test" and triggers the testAction() method instead of test3Action()')
            ->requiresConfirmation()
            ->action(fn () => dd('test3Action()'));
    }
}
