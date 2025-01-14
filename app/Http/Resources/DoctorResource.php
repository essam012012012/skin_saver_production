<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'doctor_id' => $this->id,
            'doctor name' => $this->name,
            'phone number' => $this->phone_number,
            'doctor email' => $this->email,
            'doctor clinic address' => $this->clinic_address,
            'image' => $this->doctor_image,
            'doctor schedule' => $this->schedule,
        ];
    }
}
