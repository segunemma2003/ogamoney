<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeliveryItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "sender_name"=> "required",
            "receiver_name"=> "required",
            "sender_phone" => "required",
            "receiver_phone" => "required",
            "pickup_address" => "required",
            "delivery_address" => "required",
            "save_sender"=> "nullable",
            "save_receiver"=> "nullable",
            "right_away"=> "nullable",
            "schedule_later"=> "nullable",
            "reoccurrence"=> "nullable",
            "one_time"=> "nullable",
            "save_errand"=> "nullable",
            "delivery_date"=> "required",
            "delivery_time"=> "required",
            "payment_status" => "nullable",
            "delivery_status" => "nullable",
            "repeat_schedule"=>"nullable",
            "items.*.item_id"=>"required",
            "items.*.item_name"=>"required",
            "items.*.quantity"=>"required",
            "items.*.total"=>"required",
        ];
    }
}
