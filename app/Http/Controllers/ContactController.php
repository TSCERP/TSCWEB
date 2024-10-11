<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\ContactReason;
use App\Mail\ContactThankYou;
use App\Mail\NewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        $locale = $request->header('X-Locale', App::getLocale());

        App::setLocale($locale);

        $ipAddress = $request->ip();

        $key = Str::lower($ipAddress);

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $secondsRemaining = RateLimiter::availableIn($key);
            $minutesRemaining = ceil($secondsRemaining / 60);

            return response()->json([
                'message' => __('You have exceeded the maximum number of requests. Please try again in :minutes minutes', ['minutes' => $minutesRemaining]),
                'retry_after' => $minutesRemaining,
            ], 429);
        }

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'company_name' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'contact_reason' => 'nullable|exists:contact_reasons,id',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        RateLimiter::hit($key, 60 * 15);

        $contactInfo = ContactInfo::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'phone_number' => $request->phone_number,
            'contact_reason' => $request->contact_reason,
            'message' => $request->message,
        ]);

        Mail::to($contactInfo->email)->send(new ContactThankYou($contactInfo));
        Mail::to("tien.le@vn.gt.com")->send(new NewRequest($contactInfo));
        return response()->json([
            'message' => __('Your information has been sent successfully.')
        ], 200);
    }

    public function getAllReason(Request $request)
    {
        $contactReasons = ContactReason::all();
        return response()->json($contactReasons);
    }
}
