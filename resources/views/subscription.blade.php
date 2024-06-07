{{--@extends('layouts.app')--}}

{{--@section('content')--}}

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="backgroundfinal" style="background-color: #f8f9fa; padding: 20px;">
    <!-- Services header -->
    <section class="row" id="tmServices">
        <div class="col-12">
            <div class="tm-bg-black-transparent text-center tm-services-header" style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
                <h2 class="text-uppercase tm-services-page-title" style="color: white; font-size: 2.5rem; margin: 0;">Payment</h2>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-header" style="background-color: #ff0000; color: white; font-weight: bold; border-radius: 10px 10px 0 0; padding: 15px;">
                        You will be charged ${{ number_format($plan->price, 2) }} for {{ $plan->name }} Plan
                    </div>

                    <div class="card-body" style="padding: 20px;">

                        <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                            @csrf
                            <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">

                            <div class="row">
                                <div class="col-xl-4 col-lg-4">
                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="" style="font-weight: bold;">Name</label>
                                        <input type="text" name="name" id="card-holder-name" class="form-control" value="" placeholder="Name on the card" style="padding: 10px; border-radius: 5px; border: 1px solid #ced4da;">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-4 col-lg-4">
                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="" style="font-weight: bold;">Card details</label>
                                        <div id="card-element" style="padding: 10px; border-radius: 5px; border: 1px solid #ced4da;"></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <hr>
                                    <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}" style="background-color: #ff0000; border: none; padding: 10px 20px; border-radius: 5px;">
                                        Purchase
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}')

        const elements = stripe.elements()
        const cardElement = elements.create('card')

        cardElement.mount('#card-element')

        const form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('card-button')
        const cardHolderName = document.getElementById('card-holder-name')

        form.addEventListener('submit', async (e) => {
            e.preventDefault()

            cardBtn.disabled = true
            const { setupIntent, error } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            )

            if(error) {
                cardBtn.disabled = false
            } else {
                let token = document.createElement('input')
                token.setAttribute('type', 'hidden')
                token.setAttribute('name', 'token')
                token.setAttribute('value', setupIntent.payment_method)
                form.appendChild(token)
                form.submit();
            }
        })
    </script>
</div>

{{--@endsection--}}
