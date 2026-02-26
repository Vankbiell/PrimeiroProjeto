<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $table = "itens_pedido";

    public $incrementing = true;

    protected $fllable = [
        'pedido_id',
        'produto_id',
        'quantidade',
        'preco'
    ];

    protected $casts = [
        'quantidade' => 'integer',
        'preco' => 'decimal:2'
    ];

    public function pedido(){
        return $this->belongTo(Pedido::class,'pedido_id');
    }

    public function produto(){
        return this->belongTo(Produto::class, 'produto_id');
    }

}
