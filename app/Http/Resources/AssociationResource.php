<?php

namespace App\Http\Resources;

use App\Http\Resources\AgenceResource;
use App\Models\Agence;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssociationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            // 'user_id'=>auth()->user()->id#
            'agence'=>AgenceResource::collection(
                Agence::where('association_id', $this->id)->get()
            ),
            'image'=>$this->image,
        ];
    }
}
