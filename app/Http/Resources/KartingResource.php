<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KartingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

        // return parent::toArray($request);
        public function toArray($request)
        {
            return [
                'lokacija'=>$this->resource->lokacija,
                'radnoVreme'=>$this->resource->radnoVreme,
                'cena'=>$this->resource->cena,
                        ];
        }
    }

