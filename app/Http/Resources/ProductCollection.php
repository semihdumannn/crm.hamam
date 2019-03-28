<?php

namespace App\Http\Resources;

use App\Models\Stock;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'pName' => $this->pName,
            'price' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
           /* 'stock'  =>  StockCollection::collection($this->stock)*/
        ] ;
    }

    /**
     * Customize the outgoing response for the resource.
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Http\JsonResponse $response
     */

    public function withResponse($request, $response)
    {
        $response->header('X-Value', 'True');
    }

    public function with($request)
    {
        $included = $this->collection->flatMap(
            function ($product){
                return $product->stock;
            }
        );
        return [
            'included' => $this->withIncluded($included),
        ];
    }

    private function withIncluded(Collection $included){
        return $included->map(
            function ($include) {
                if ($include instanceof Stock) {
                    return new StockCollection($include);
                }

            }
        );
    }
}
