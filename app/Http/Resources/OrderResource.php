<?php

namespace App\Http\Resources;

use App\Enums\OrderState;
use App\Enums\OutgoingState;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            // "imp_uid" => $this->imp_uid,
            "merchant_uid" => $this->merchant_uid,
            "id" => $this->id,

            "products" => $this->products,
            "product" => ProductResource::make($this->products()->first()),

            "user_id" => $this->user_id,
            "user_name" => $this->user_name,
            "user_contact" => $this->user_contact,
            "user_email" => $this->user_email,

            "pay_method_id" => $this->pay_method_id,
            "pay_method_name" => $this->pay_method_name,
            "pay_method_pg" => $this->pay_method_pg,
            "pay_method_method" => $this->pay_method_method,

            "price" => $this->price,

            "state" => $this->state,

            "refund_owner" => $this->refund_owner,
            "refund_bank" => $this->refund_bank,
            "refund_account" => $this->refund_account,

            "reason" => $this->reason,

            "created_at" => Carbon::make($this->created_at)->format("Y.m.d"),

            "products" => ProductResource::collection($this->products()->orderBy("created_at", "desc")->get()),

            "can_refund" => $this->can_refund,
        ];
    }
}
