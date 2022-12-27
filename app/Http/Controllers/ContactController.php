<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\CreateContact;
use App\Http\Requests\CreateContactRequest;

class ContactController extends Controller
{
    public function create(CreateContactRequest $request, CreateContact $createContact)
    {
        return $createContact->handle($request);
    }
}
