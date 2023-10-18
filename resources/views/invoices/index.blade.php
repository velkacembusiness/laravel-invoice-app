@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header flex justify-content-between"><h2>Les factures</h2>
                        <a href="{{ route('invoices.create') }}" class="btn btn-outline-success">Create</a></div>

                        <div class="card-body">
                            <div class="container">
                                <div class="row clearfix" style="margin-top:20px">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-hover" id="tab_logic">
                                            <thead>
                                            <tr>
                                                <th class="text-center"> # </th>
                                                <th class="text-center"> Numéro </th>
                                                <th class="text-center">  Date facture </th>
                                                <th class="text-center">  Client </th>
                                                <th class="text-center"> Actions </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($invoices as $invoice)
                                            <tr>
                                                <td>{{ $invoice->id }}</td>
                                                <td>{{ $invoice->invoice_number }}</td>
                                                <td>{{ $invoice->invoice_date->format('d-m-Y') }}</td>
                                                <td>{{ $invoice->customer->name }}</td>

                                                <td ><a href="{{ route('invoices.edit',$invoice->id) }}" class="btn btn-outline-primary d-inline-block">Update</a>

                                                    <form action="{{ route('invoices.destroy',$invoice->id) }}" method="post" class="d-inline-block">
                                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                                                        @csrf
                                                        @method('delete')
                                                    </form>

                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection

