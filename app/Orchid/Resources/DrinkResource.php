<?php

namespace App\Orchid\Resources;

use App\Models\Drink;
use App\Models\Ingridient;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Resource;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;


class DrinkResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Drink::class;

    /**
     * Action to create and update the model
     *
     * @param ResourceRequest $request
     * @param Model           $model
     */
    public function onSave(ResourceRequest $request, Model $model)
    {
        $model->fill($request->all())->save();
        // TODO: can i use ternary operator for next IF?
        if(($request->get('ingridients')) != null){
            $model->ingridients()->sync($request->get('ingridients'));
        }
    }

    /**
     * Action to delete a model
     *
     * @param Model $model
     *
     * @throws Exception
     */
    public function onDelete(Model $model)
    {
        $model->delete();
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('name')
                ->title('Name')
                ->placeholder('Enter name here'),
            Input::make('description')
                ->title('Description')
                ->placeholder('Enter description here'),
            Input::make('making')
                ->title('Making')
                ->placeholder('Enter making here'),
            Relation::make('ingridients')
                ->title('Ingridients')
                ->multiple()
                ->placeholder('Ingridients to make')
                ->help('Choose an Ingridients to make the Drink recipe')
                ->fromModel(Ingridient::class,'name','id')
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name'),
            TD::make('making'),
            TD::make('description'),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
