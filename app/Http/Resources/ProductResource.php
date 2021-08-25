<?php

namespace App\Http\Resources;

use App\Models\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductResource extends ResourceCollection
{

    public function toArray($request)
    {
       return [
           'data' => $this->collection,
       ];
    }
}
