<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegistrationResource;
use App\Models\Registration;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Registration::query()->latest();

        if ($search = $request->string('search')->trim()->value()) {
            $query->where(function ($inner) use ($search) {
                $inner->where('first_name', 'like', "%{$search}%")
                    ->orWhere('last_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%")
                    ->orWhere('organization', 'like', "%{$search}%")
                    ->orWhere('ticket_code', 'like', "%{$search}%");
            });
        }

        $registrations = $query->paginate($request->integer('per_page', 15))->withQueryString();

        return response()->json([
            'data' => RegistrationResource::collection($registrations->items()),
            'meta' => [
                'current_page' => $registrations->currentPage(),
                'last_page' => $registrations->lastPage(),
                'per_page' => $registrations->perPage(),
                'total' => $registrations->total(),
            ],
            'summary' => [
                'total_registrations' => Registration::count(),
            ],
        ]);
    }

    public function export(): Response
    {
        $registrations = Registration::query()->orderBy('created_at')->get();

        $pdf = Pdf::loadView('admin.registrations-pdf', [
            'registrations' => $registrations,
            'generatedAt' => now(),
        ])->setPaper('a4', 'landscape');

        return $pdf->download('registrations-'.now()->format('Y-m-d-His').'.pdf');
    }
}
