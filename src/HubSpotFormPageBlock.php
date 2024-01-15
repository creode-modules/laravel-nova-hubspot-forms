<?php

namespace Creode\LaravelNovaHubspotForms;

use Laravel\Nova\Fields\Text;
use Modules\Pages\app\Abstracts\PageBlockAbstract;

class HubSpotFormPageBlock extends PageBlockAbstract
{

    /**
    * @var string $label Admin Label of Flexible Content Layout
    * @var string $name Name of Flexible Content Layout
    * @var string $view Path to Blade Template
    */

    protected $label = 'HubSpot Form';
    protected $name = 'hubspot-form';
    protected $view = 'laravel-nova-hubspot-forms::hubspot-form';


    /**
     * @inheritdoc
     */
    protected function fields(): array
    {
        return [
            Text::make('Form ID', 'formId'),
            Text::make('Portal ID', 'portalId'),
            Text::make('Region', 'region')
                ->default('eu1'),
        ];
    }
}
