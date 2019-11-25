<?php namespace Vertice\Cotizacion;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Vertice\Cotizacion\Components\CotizacionForm' => 'cotizacionForm'
        ];
    }

    public function registerSettings()
    {
    }
}
