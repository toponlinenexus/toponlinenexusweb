<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\QuoteRequest;
use App\Services\ContactMailService;
use App\Services\QuoteMailService;
use Illuminate\Http\RedirectResponse;
use PHPMailer\PHPMailer\Exception as MailException;

class HomeController extends Controller
{
    function index()
    {
        return view('index');
    }

    function aboutUs()
    {
        return view('about-us');
    }

    function services()
    {
        return view('services');
    }

    function blog()
    {
        return view('blog');
    }

    function blogDetail()
    {
        return view('blog_detail');
    }

    function feature()
    {
        return view('feature');
    }

    function testimonials()
    {
        return view('testimonials');
    }

    function quote()
    {
        return view('quote');
    }

    function contact()
    {
        return view('contact');
    }

    function careers()
    {
        return view('careers');
    }

    function submitQuote(QuoteRequest $request, QuoteMailService $quoteMailService): RedirectResponse
    {
        $redirectTo = $request->input('redirect_to', url('quote'));
        if (! is_string($redirectTo) || ! str_starts_with($redirectTo, url('/'))) {
            $redirectTo = url('quote');
        }

        try {
            $quoteMailService->send($request->validated());

            return redirect()
                ->to($redirectTo)
                ->with('success', 'Thank you! Your quote request has been sent successfully. We will respond within 24 hours.');
        } catch (MailException $e) {
            report($e);

            return redirect()
                ->to($redirectTo)
                ->withInput()
                ->with('error', 'Sorry, we could not send your request right now. Please try again or call us at +92 336 5554271.');
        }
    }

    function submitContact(ContactRequest $request, ContactMailService $contactMailService): RedirectResponse
    {
        try {
            $contactMailService->send($request->validated());

            return redirect()
                ->to(url('contact'))
                ->with('success', 'Thank you! Your message has been sent successfully. We will get back to you soon.');
        } catch (MailException $e) {
            report($e);

            return redirect()
                ->to(url('contact'))
                ->withInput()
                ->with('error', 'Sorry, we could not send your message right now. Please try again or call us at +92 336 5554271.');
        }
    }
}
