@component('mail::message')
# Payment Received

Hi, {{ $data->user->username}}, we received your payment, a sum of ${{number_format($data->amount,2)}}. Kindly exercise patience as the payment is fully confirmed by blockchain network

@component('mail::button', ['url' => route('home')])
Go to your Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
