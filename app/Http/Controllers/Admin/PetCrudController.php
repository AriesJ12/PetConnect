<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PetRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PetCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PetCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Pet::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pet');
        CRUD::setEntityNameStrings('pet', 'pets');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->type('text');
        CRUD::column('breed_id')->type('select')->entity('breed')->attribute('type_with_name')->model("App\Models\Breed");
        CRUD::column('sex')->type('text');
        CRUD::column('weight')->type('text');
        CRUD::column('age')->type('text');
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::field('name')->validationRules('required|min:5');
        CRUD::field([   // select_grouped
            'label'     => 'Breed',
            'type'      => 'select_grouped', //https://github.com/Laravel-Backpack/CRUD/issues/502
            'name'      => 'breed_id',
            'entity'    => 'breed',
            'attribute' => 'name',
            'group_by'  => 'breed', // the relationship to entity you want to use for grouping
            'group_by_attribute' => 'name', // the attribute on related model, that you want shown
            'group_by_relationship_back' => 'pets', // relationship from related model back to this model
        ]);

        CRUD::field('sex')->label('Sex')->type('enum')->validationRules('required');
        CRUD::field('weight')->label('Weight')->type('enum')->validationRules('required');
        CRUD::field('age')->label('Age')->type('enum')->validationRules('required');
        CRUD::field('photo')
        ->type('upload')
        ->withFiles([
            'path' => 'userImages',
        ])
        ->validationRules('image|max:2048');

        CRUD::field('about')->type('textarea')->attributes(['style' => 'height: 15vh']);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        CRUD::column('name')->type('text');
        CRUD::column('breed_id')->type('select')->entity('breed')->attribute('type_with_name')->model("App\Models\Breed");
        CRUD::column('sex')->type('text');
        CRUD::column('weight')->type('text');
        CRUD::column('age')->type('text');
        CRUD::column('photo')->type('text');
        CRUD::column('about')->type('text')->attributes(['style' => 'height: 15vh']);
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }
}
