<?php namespace Vertice\Cotizacion\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Vertice\Productos\Models\Producto;

class CotizacionForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Cotizacion',
            'description' => 'Formulario de solicitud de cotización',
        ];
    }

    public function onSend()
    {
        $producto = Producto::find(Input::get('producto_id'));

        $data = array(
            'name' => Input::get('name'),
            'mail' => Input::get('email'),
            'content' => Input::get('message'),
            'producto' => $producto->name,
            'laboratorio' => $producto->laboratorio->name,
            'presentacion' => $producto->presentacion,
            'principio' => $producto->principio->name,
        );

        Mail::send('vertice.cotizacion::mail.message', ['data' => $data], function($message) use ($data){
            $message->to('f5aa3b32b4-49e2ea@inbox.mailtrap.io');
            $message->subject('Solicitud de Cotizacion');
            $message->from('lucasbozzolo@gmail.com');
        });

    }

}