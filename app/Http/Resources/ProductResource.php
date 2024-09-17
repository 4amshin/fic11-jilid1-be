<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => ucwords($this->name),
            'price' => $this->price,
            'stock' => $this->stock,
            'category' => $this->category,
            'image' => $this->image,
            'is_best_seller' => $this->is_best_seller
        ];
    }

    // private function formatRupiah($value){
    //     return 'Rp ' . number_format($value, 0, ',', '.');
    // }
}
