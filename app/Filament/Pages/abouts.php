<?php

namespace App\Filament\Pages;

use App\Models\About;
use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Support\Exceptions\Halt;
use Filament\Actions\LocaleSwitcher;
use Filament\Pages\Page;
use Filament\Resources\Concerns\Translatable;


class abouts extends Page implements HasForms
{
    
 
    
    
    use InteractsWithForms;
    public ?array $data = []; 
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?int $navigationSort = 9;


    protected static string $view = 'filament.pages.abouts';

    
    public function mount(): void 
    {
        $about=About::first();
        if($about){
            $this->form->fill(About::first()->attributesToArray()); 
        }
        else{
            $this->form->fill();
        }
    }
 
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->translateLabel(),
                TextInput::make('description')->translateLabel(),
                TextInput::make('message')->translateLabel(),
                TextInput::make('message_description')->translateLabel(),
                TextInput::make('aim')->translateLabel(),
                TextInput::make('aim_description')->translateLabel(),
                TextInput::make('view')->translateLabel(),
                TextInput::make('view_description')->translateLabel(),

                

            ])
            ->statePath('data');
    }
    
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }


    public function save(): void
    {
        try {
            $data = $this->form->getState();
            $about =About::first();
            if($about){
                 $about->update($data);
            }else{
                About::create($data);
            }

            
        } catch (Halt $exception) {
            dd($exception);
        }

        Notification::make() 
        ->success()
        ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
        ->send();
    }

    public  static function getNavigationLabel(): string
        {
            return __('Abouts');
        }

        public static function getModelLabel(): string
            {
                return __('Abouts');
            }

}
