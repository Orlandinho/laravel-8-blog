<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;
use Exception;

class NewsletterController extends Controller
{

    public function __invoke(Newsletter $newsletter) //when you create a class to handle one single action use the __invoke magic method
    {
        request()->validate([
            'email' => 'required|email',
        ]);

        try {

            $newsletter->subscribe(request('email'));

        } catch (Exception $e){

            throw ValidationException::withMessages([
                'email' => 'The email you\'ve provided could not be added'
            ]);
        }

        return redirect('/')->with('success', 'You are now signed up for our newsletter!');
    }
}
