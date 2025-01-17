<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id'=> $this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>'('.$this->phone->prefix.') '.$this->phone->phone_number,
            'files' => $this->files,
            'roles' => $this->roles,
            'phoneSim' => $this->phoneSim,
            'fileCategories' => $this->fileCategories
        ];
    }
}
