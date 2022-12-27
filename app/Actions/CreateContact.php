<?php

namespace App\Actions;

use App\Models\Contact;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Http\Requests\CreateContactRequest;

class CreateContact
{
    use AsAction;

    public function handle(CreateContactRequest $request)
    {
            $json = Contact::create($request->validated());
            if ($json) {
                return response()->json([
                    'success' => true,
                    'code' => 1,
                    'message' => 'Contact made successful',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'code' => 2,
                    'message' => 'error has occur please try again later',
                ], 500);
            }
     
    }
}
