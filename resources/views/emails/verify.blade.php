@component('mail::message')
Hello

<p>you're a step away from completing your registration</p>
<p>Click on the link below to verify your account</p>



@component('mail::button', ['url' => route('verify', $user->email_token)])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
