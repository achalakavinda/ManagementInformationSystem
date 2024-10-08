<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
        'id'=>$this->id,
        'name'=>$this->name,
        'address'=>$this->address,
        'contact'=>$this->contact,
        'email'=>$this->email,
        'web_url'=>$this->web_url,
        'active'=>$this->active,
        'created_at'=>$this->created_at,
        'updated_at'=>$this->updated_at,
        ];
    }
}
