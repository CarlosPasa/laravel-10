<?php

namespace App\Rules;

use App\Models\Producto;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidarStockProductoRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Obtenemos el indice del objeto del array
        $indice = explode('.',$attribute)[1];
        // Buscamos el ID del producto
        $idProducto = request()->input('productos.'.$indice.'.id');
        
        // Buscamos el producto
        $producto = Producto::find($idProducto);
        
        // La cantidad sea menor al stock que se esta validando
        if($producto->stock < $value ){
            $fail('La cantidad del producto '.$producto->nombre.' ingresada no es valida');
        }
        
        
    }
}
