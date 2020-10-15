@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Make a Payment') }}</div>

                <div class="card-body">
                    <form action="#" method="POST" id="paymentForm">
                        @csrf
                        <div class="row">
                            <div class="col-auto">
                                <label>Insert amount to pay</label>
                                <input type="number" min="5" step="0.01" class="form-control" name="value" value="{{ mt_rand(500, 100000) / 100 }}" required>
                            </div>
                            <div class="col-auto">
                                <label>
                                    Select Currency
                                </label>
                                <select class="custom-select" name="currency" required>
                                    @foreach ($currencies as $currency)
                                    <option value="{{ $currency->iso }}">
                                        {{ strtoupper($currency->iso) }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-outline-primary btn-lg">
                                Pay
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection