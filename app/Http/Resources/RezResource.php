<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RezResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     public static $wrap= 'rezervacija';
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
'ime'=>$this->resource->ime,
'prezime'=>$this->resource->prezime,
'datum'=>$this->resource->datum,
'vreme'=>$this->resource->vrene,
'brOsoba'=>$this->resource->brOsoba,
'user'=>new UserResource($this->resource->user),
'karting'=>new KartingResource($this->resource->karting),
        ];
    }
}
