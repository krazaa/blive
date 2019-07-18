@component('mail::message')
# Contact Form

Name: {{ $contact['name'] }}<br>
Phone: {{ $contact['phone'] }}<br>
Email: {{ $contact['email'] }}<br>
Message: {{ $contact['message'] }}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
