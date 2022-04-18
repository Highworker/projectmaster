<?php

namespace App\Orchid\Screens;

use App\Models\Drink;
use App\Models\Ingridient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class DrinkListScreen extends Screen
{
    /**
     * @var
     */
    public $drink;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Drink $drink): array
    {
        return [
            'drink' => $drink
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Drink Add';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Add Drink recipe')
                ->icon('paper-plane')
                ->method('create')
        ];
    }

    /**
     * @param Drink $post
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Drink $drink, Request $request)
    {
        $q = $request->get('drink');
        DB::table('drinks')->insert([
            'name' => $q['name'],
            'making' => $q['making'],
            'description' => $q['making']
        ]);

        Alert::info('You have successfully created an Drink.');

        return redirect()->route('platform.drink.list');
    }

    /**
     * @return array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('drink.name')
                    ->title('Drink recipe Name')
                    ->required()
                    ->placeholder('Name of your Drink recipe')
                    ->help('Enter the name of your Drink recipe'),

                Input::make('drink.making')
                    ->title('Drink recipe Making')
                    ->required()
                    ->placeholder('Making of this Drink recipe')
                    ->help('Enter the Drink recipe Making'),

                Input::make('drink.description')
                    ->title('Drink recipe Description')
                    ->required()
                    ->placeholder('Description of this Drink recipe')
                    ->help('Enter the Drink recipe Description'),

                Relation::make('drink.ingridients')
                    ->title('Ingridients')
                    ->multiple()
                    ->placeholder('Ingridients to make')
                    ->help('Choose an Ingridients to make the Drink recipe')
                    ->fromModel(Ingridient::class,'name','id')
            ])
        ];
    }
}
