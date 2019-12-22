@component('mail::message')
# Message sent from our contact form
@endcomponent

## The Name of the person that sent the email
{{$name}}

## The Email of the person that sent the email
{{$email}}

## Subject of the Email
{{$subject}}

## Body of the Email
{{$body}}

Thanks,<br>
{{ config('app.name') }}
