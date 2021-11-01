<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<h3><b>This message from</b> {{ $contact->names }}</h3>

<p><strong>{{ $contact->message }}</strong></p><br>

<span>The Sender Email Adress <a href="mailto:{{ $contact->email }}"> {{ $contact->email }}</a></span>
<hr>

Thank Your Regards,<br>
{{ config('app.name') }}
