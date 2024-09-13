<x-mail::message>
# Congratulations!

You have been assigned a new client candidate.

<x-mail::button :url="url('contact-form', ['uuid' => $user->uuid])">
View Client Details
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>