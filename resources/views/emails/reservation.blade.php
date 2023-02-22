@component('mail::message')
  # Nový požadavek na rezervaci v ambulanci ortopedie.

  <strong>Email:</strong> {{ $data['email'] }} <br>
  <strong>Příjmení:</strong> {{ $data['last_name'] }}<br>
  <strong>Jméno:</strong> {{ $data['first_name'] }}<br>
  <strong>Rok narození:</strong> {{ $data['year'] }}<br>
  <strong>Telefon:</strong> {{ $data['phone'] }}<br>
  <strong>Zpráva:</strong> {{ $data['message'] }}<br>
@endcomponent
