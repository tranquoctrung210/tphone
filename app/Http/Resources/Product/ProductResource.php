<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'totalPrice' => round(((1 - ($this->discount / 100)) * $this->price), 2),
            'stock' => $this->stock > 0 ? $this->stock : 'Out of stock',
            'rating' => $this->reviews->count() > 0 ?  round($this->reviews->sum('star') / $this->reviews->count(), 2) : 'No rating yet',
            'href' => [
                'link' => route('products.show',  $this->id),
            ]
        ];
    }
}
