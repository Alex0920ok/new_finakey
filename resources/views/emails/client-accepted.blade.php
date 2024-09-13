<x-mail::message>
# Congratulations!

We are pleased to inform you that you have been accepted for the onboarding process. 

To get started, you need to set your password. You can do this by clicking the button below.

<x-mail::button :url="url('reset-password', ['token' => $token]) . '?email=' . urlencode($user->email)">
Set Your Password
</x-mail::button>

Thank you for choosing us,<br>
{{ config('app.name') }}
</x-mail::message>