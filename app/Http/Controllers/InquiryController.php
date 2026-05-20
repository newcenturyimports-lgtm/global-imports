<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function showWholesale()
    {
        return view('forms.wholesale');
    }

    public function showContact()
    {
        return view('forms.contact');
    }

    public function showInquire(?string $productSlug = null)
    {
        $product = null;
        if ($productSlug) {
            $product = collect(config('catalog.products'))->firstWhere('slug', $productSlug);
        }
        return view('forms.inquire', compact('product'));
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'type'       => 'required|in:retail,wholesale,contact',
            'name'       => 'required|string|max:120',
            'email'      => 'required|email|max:160',
            'phone'      => 'nullable|string|max:40',
            'company'    => 'nullable|string|max:160',
            'product'    => 'nullable|string|max:160',
            'quantity'   => 'nullable|string|max:40',
            'message'    => 'required|string|max:4000',
            'website'    => 'nullable|max:0',  // honeypot
        ]);

        DB::table('inquiries')->insert([
            'type'       => $data['type'],
            'name'       => $data['name'],
            'email'      => $data['email'],
            'phone'      => $data['phone']   ?? null,
            'company'    => $data['company'] ?? null,
            'product'    => $data['product'] ?? null,
            'quantity'   => $data['quantity']?? null,
            'message'    => $data['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $notify = config('mail.inquiry_notify', env('INQUIRY_NOTIFY_EMAIL'));
        if ($notify) {
            try {
                Mail::raw(
                    "New {$data['type']} inquiry from {$data['name']} <{$data['email']}>\n\n"
                    .($data['company'] ? "Company: {$data['company']}\n" : '')
                    .($data['phone']   ? "Phone:   {$data['phone']}\n"   : '')
                    .($data['product'] ? "Product: {$data['product']}\n" : '')
                    .($data['quantity']? "Qty:     {$data['quantity']}\n": '')
                    ."\nMessage:\n{$data['message']}\n",
                    function ($m) use ($notify, $data) {
                        $m->to($notify)
                          ->subject("New {$data['type']} inquiry — Global Market")
                          ->replyTo($data['email'], $data['name']);
                    }
                );
            } catch (\Throwable $e) {
                Log::warning('Inquiry email failed: '.$e->getMessage());
            }
        }

        return redirect()->route('inquire.thanks')->with('inquiry.name', $data['name']);
    }

    public function thanks()
    {
        return view('forms.thanks', ['name' => session('inquiry.name')]);
    }
}
