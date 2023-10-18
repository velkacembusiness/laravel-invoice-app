<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoicesItem;
use App\Models\Product;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index',compact('invoices'));
    }
    public function create()
    {
        $customers = Customer::all();
        $products = Product::all();
        return view('invoices.create', compact('customers', 'products'));
    }
    public function store(Request $request)
    {
//        dd($request);
        $invoice = Invoice::create($request->invoice);
        for ($i=0; $i < count($request->product); $i++) {
            if (isset($request->qty[$i]) && isset($request->price[$i])) {
                InvoicesItem::create([
                    'invoice_id' => $invoice->id,
                    'product_id' => $request->product[$i],
                    'quantity' => $request->qty[$i],
                    'price' => $request->price[$i]
                ]);
            }
        }

        return redirect()->route('home');
    }

    public function edit(Invoice $invoice)
    {
        $customers = Customer::all();
        $products = Product::all();
        return view('invoices.edit', compact('invoice','customers','products'));
    }


    public function update(Request $request, Invoice $invoice)
    {
//        dd($request);

        $invoice->update($request->invoice);
        $invoice->invoice_items()->delete();
        for ($i=0; $i < count($request->product); $i++) {
            if (isset($request->qty[$i]) && isset($request->price[$i])) {
                InvoicesItem::create([
                    'invoice_id' => $invoice->id,
                    'product_id' => $request->product[$i],
                    'quantity' => $request->qty[$i],
                    'price' => $request->price[$i]
                ]);
            }
        }

//        $invoice->invoice_items()->saveMany($request->product);

        return redirect()->route('home');

        return redirect()->route('countries.index')->withMessage('Wilaya has been updated');
    }

    public function show($invoice_id)
    {
        $invoice = Invoice::findOrFail($invoice_id);
        return view('invoices.show', compact('invoice'));
    }

    public function download($invoice_id)
    {
        $invoice = Invoice::findOrFail($invoice_id);
        $pdf     = \Barryvdh\DomPDF\PDF::loadView('invoices.pdf', compact('invoice'));

        return $pdf->stream('invoice.pdf');
    }

    public function destroy(Invoice $invoice)
    {
//        $invoice->invoice_items()->delete();
        $invoice->delete();

    }

}
