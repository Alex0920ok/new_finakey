<x-mail::message>
# Congratulations!

There is a client candidate available for assignment.

<x-mail::button :url="url('contact-form', ['uuid' => $user->uuid])">
Assign Client to RM
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
