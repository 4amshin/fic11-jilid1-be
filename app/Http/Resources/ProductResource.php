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
            'description' => $this->description,
            'price' => $this->formatRupiah($this->price),
            'stock' => $this->stock,
            'category' => $this->category,
            'image' => $this->image,
        ];
    }

    private function formatRupiah($value){
        return 'Rp ' . number_format($value, 0, ',', '.');
    }
}
