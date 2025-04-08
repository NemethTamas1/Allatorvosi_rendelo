<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=>$this->id,
            "nev"=>$this->nev,
            "kor"=>$this->kor,
            "fajta"=>$this->fajta,
            "oltva"=>$this->fatja ? "oltva" : "nem oltva",
            "gazdi_id"=>$this->gazdi_id
        ];
    }
}
