<?php

namespace Creode\LaravelNovaHubspotForms;

use Laravel\Nova\Fields\Text;
use Modules\Pages\app\Abstracts\PageBlockAbstract;

class HubSpotFormPageBlock extends PageBlockAbstract
{

    protected $label = 'HubSpot Form';
    protected $name = 'hubspot-form';
    protected $view = 'laravel-nova-hubspot-forms::hubspot-form';

    protected function fields()
    {
        return [
            Text::make('Form ID', 'formId'),
            Text::make('Portal ID', 'portalId'),
            Text::make('Region', 'region')
                ->default('eu1'),
        ];
    }
}
