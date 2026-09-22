<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Resources\RegistrationResource;
use App\Mail\RegistrationConfirmationMail;
use App\Models\Registration;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function store(StoreRegistrationRequest $request): JsonResponse
    {
        $registration = Registration::create($request->validated());

        Mail::to($registration->email)->send(
            (new RegistrationConfirmationMail($registration))->afterCommit()
        );

        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
            'data' => new RegistrationResource($registration),
        ], 201);
    }
}
