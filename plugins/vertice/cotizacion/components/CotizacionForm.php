<?php namespace Vertice\Cotizacion\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
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

        $validator = Validator::make(
            [
                'name' => Input::get('name'),
                'mail' => Input::get('email'),
                'content' => Input::get('message'),
            ],
            [
                'name' => 'required|max:255',
                'mail' => 'required|email',
                'content' => 'max:1000'
            ],
            $messages = [
                'name.required'    => 'El nombre es obligatorio',
                'name.max'    => 'El nombre no puede exceder los 255 caracteres',
                'mail.required'    => 'El mail es obligatorio',
                'mail.email'    => 'El mail tiene un formato incorrecto',
                'content.max'    => 'El mensaje no puede exceder los 1000 caracteres.',
            ]
        );

        if ($validator->fails()){

            return ['#result' => $this->renderPartial('cotizacionform::messages', [
                'errorMsg' => $validator->messages()->all()
            ])];
            //return redirect()->back()->withErrors($validator);
        }

//        Mail::send('vertice.cotizacion::mail.message', ['data' => $data], function($message) use ($data){
//            $message->to('f5aa3b32b4-49e2ea@inbox.mailtrap.io');
//            $message->subject('Solicitud de Cotizacion');
//            $message->from('mail@mail.com');
//        });

        Mail::send('vertice.cotizacion::mail.message', ['data' => $data], function($message) use ($data){
            $message->to(config('mail.from.address'));
            $message->subject('Solicitud de Cotizacion');
            $message->from($data['mail']);
        });

    }

}