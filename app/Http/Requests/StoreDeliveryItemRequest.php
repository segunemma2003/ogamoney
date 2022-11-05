<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;
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
            "sender_id"=> "required",
            "receiver_id"=> "nullable",
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
            "items"=>"present|array",
            "items.*.item_id"=>"required",
            "items.*.item_name"=>"required",
            "items.*.quantity"=>"required",
            "items.*.total"=>"required",
            "repeat.interval"=>"nullable",
            "repeat.days"=>"nullable",
            "repeat.time"=>"nullable",
            "repeat.custom_date"=>"nullable"
        ];
    }

    public function failedValidation(Validator $validator)

    {

        throw new HttpResponseException(response()->json([

            'success'   => false,

            'message'   => 'Validation errors',

            'data'      => $validator->errors()

        ]));

    }
}
