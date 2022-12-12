<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
//            'user' => new UserResource($this->user),
            'user' => $this->user->name,
            'title' => $this->title,
            'short_content' => $this->short_content,
            'content' => $this->content,
            'tags' => $this->tags,
            'category' => $this->category->name
        ];
    }
}
