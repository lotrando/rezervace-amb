<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>Rezervace</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      color: #1a1f36;
      box-sizing: border-box;
      word-wrap: break-word;
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
        Helvetica Neue, Ubuntu, sans-serif;
    }

    body {
      min-height: 100%;
      background-color: #ffffff;
    }

    h1 {
      letter-spacing: -1px;
    }

    a {
      color: #11289a;
      text-decoration: unset;
    }

    .text-danger {
      color: #ff0000
    }

    .login-root {
      background: #fff;
      display: flex;
      width: 100%;
      min-height: 100vh;
      overflow: hidden;
    }

    .loginbackground {
      min-height: 692px;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      z-index: 0;
      overflow: hidden;
    }

    .flex-flex {
      display: flex;
    }

    .align-center {
      align-items: center;
    }

    .center-center {
      align-items: center;
      justify-content: center;
    }

    .box-root {
      box-sizing: border-box;
    }

    .flex-direction--column {
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .loginbackground-gridContainer {
      display: -ms-grid;
      display: grid;
      -ms-grid-columns: [start] 1fr [left-gutter] (86.6px) [16] [left-gutter] 1fr [end];
      grid-template-columns: [start] 1fr [left-gutter] repeat(16, 86.6px) [left-gutter] 1fr [end];
      -ms-grid-rows: [top] 1fr [top-gutter] (64px) [8] [bottom-gutter] 1fr [bottom];
      grid-template-rows: [top] 1fr [top-gutter] repeat(8, 64px) [bottom-gutter] 1fr [bottom];
      justify-content: center;
      margin: 0 -2%;
      transform: rotate(-12deg) skew(-12deg);
    }

    .box-divider--light-all-2 {
      box-shadow: inset 0 0 0 2px #e3e8ee;
    }

    .box-background--blue {
      background-color: #5469d4;
    }

    .box-background--white {
      background-color: #ffffff;
    }

    .box-background--blue800 {
      background-color: #212d63;
    }

    .box-background--gray100 {
      background-color: #e3e8ee;
    }

    .box-background--cyan200 {
      background-color: #7fd3ed;
    }

    .padding-top--64 {
      padding-top: 64px;
    }

    .padding-top--24 {
      padding-top: 24px;
    }

    .padding-top--48 {
      padding-top: 48px;
    }

    .padding-bottom--24 {
      padding-bottom: 24px;
    }

    .padding-horizontal--48 {
      padding: 28px;
    }

    .padding-bottom--15 {
      padding-bottom: 15px;
    }

    .flex-justifyContent--center {
      -ms-flex-pack: center;
      justify-content: center;
    }

    .formbg {
      margin: 0px auto;
      width: 100%;
      max-width: 600px;
      background: white;
      border-radius: 4px;
      box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px,
        rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
    }

    span {
      display: block;
      font-size: 20px;
      line-height: 28px;
      color: #1a1f36;
    }

    label {
      margin-bottom: 10px;
    }

    .reset-pass a,
    label {
      font-size: 14px;
      font-weight: 600;
      display: block;
    }

    .reset-pass>a {
      text-align: right;
      margin-bottom: 10px;
    }

    .grid--50-50 {
      display: grid;
      grid-template-columns: 50% 50%;
      align-items: center;
    }

    .field input {
      font-size: 16px;
      line-height: 28px;
      padding: 8px 16px;
      width: 100%;
      min-height: 44px;
      border: unset;
      border-radius: 4px;
      outline-color: rgb(84 105 212 / 0.5);
      background-color: rgb(255, 255, 255);
      box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px;
    }

    .field textarea {
      font-size: 16px;
      line-height: 28px;
      padding: 8px 16px;
      width: 100%;
      min-height: 44px;
      border: unset;
      border-radius: 4px;
      outline-color: rgb(84 105 212 / 0.5);
      background-color: rgb(255, 255, 255);
      box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px;
    }

    input[type="submit"] {
      background-color: rgb(20, 48, 187);
      box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgb(20, 48, 187) 0px 0px 0px 1px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
      color: #fff;
      font-weight: 600;
      cursor: pointer;
    }

    .field-checkbox input {
      width: 20px;
      height: 15px;
      margin-right: 5px;
      box-shadow: unset;
      min-height: unset;
    }

    .field-checkbox label {
      display: flex;
      align-items: center;
      margin: 0;
    }

    a.ssolink {
      display: block;
      text-align: center;
      font-weight: 600;
    }

    .footer-link span {
      font-size: 14px;
      text-align: center;
    }

    .listing a {
      color: #697386;
      font-weight: 600;
      margin: 0 10px;
    }

    .animationRightLeft {
      animation: animationRightLeft 2s ease-in-out infinite;
    }

    .animationLeftRight {
      animation: animationLeftRight 2s ease-in-out infinite;
    }

    .tans3s {
      animation: animationLeftRight 3s ease-in-out infinite;
    }

    .tans4s {
      animation: animationLeftRight 4s ease-in-out infinite;
    }

    @keyframes animationLeftRight {
      0% {
        transform: translateX(0px);
      }

      50% {
        transform: translateX(1000px);
      }

      100% {
        transform: translateX(0px);
      }
    }

    @keyframes animationRightLeft {
      0% {
        transform: translateX(0px);
      }

      50% {
        transform: translateX(-1000px);
      }

      100% {
        transform: translateX(0px);
      }
    }
  </style>
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      {{-- <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div> --}}
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--40 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="#" rel="dofollow">Rezervace KHN a.s.</a></h1><br>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              @if (session()->has('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}
                </div>
              @endif
              <form id="stripe-login" action="{{ route('rezervace.store') }}" method="post">
                @csrf
                <div class="box-root padding-top--40 padding-bottom--24 flex-flex flex-justifyContent--center">
                  ????dost o term??n u l??ka??e (ambulance v nemocnici)
                </div>
                <div class="box-root padding-top--40 padding-bottom--24 flex-flex flex-justifyContent--center">
                  Je n??m l??to, ??e jste se k n??m nedovolali. Zanechte n??m na sebe identifika??n?? a kontaktn?? ??daje, budeme V??s s mo??n??m term??nem kontaktovat do 48 hodin v r??mci
                  pracovn?? doby od 8:00 - 13:30.
                </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input name="email" type="email" value="{{ old('email') }}">
                  @error('email')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="field padding-bottom--24">
                  <label for="last_name">P????jmen??</label>
                  <input name="last_name" type="text" value="{{ old('last_name') }}">
                  @error('last_name')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="field padding-bottom--24">
                  <label for="first_name">Jm??no</label>
                  <input name="first_name" type="text" value="{{ old('first_name') }}">
                  @error('first_name')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="field padding-bottom--24">
                  <label for="year">Rok narozen??</label>
                  <input name="year" type="text" value="{{ old('year') }}">
                  @error('year')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="field padding-bottom--24">
                  <label for="phone">Telefonn?? ????slo (mobil), na kter??m V??s m????eme kontaktovat.</label>
                  <input name="phone" type="text" value="{{ old('phone') }}">
                  @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="field padding-bottom--24">
                  <label for="evidence">Jste ji?? v evidenci na???? ambulance?</label>
                  <select name="evidence">
                    <option value="Ne">Ne</option>
                    <option value="Ano">Ano</option>
                  </select>
                </div>

                <div class="field padding-bottom--24">
                  <label for="type">V jak?? oblasti ??e????te zdravotn?? probl??m</label>
                  <select name="type">
                    <option value="Ortopedie">Ortopedie</option>
                    <option value="Spondylochirurgie">Spondylochirurgie (nemoci p??te??e)</option>
                  </select>
                </div>

                <div class="field padding-bottom--24">
                  <label for="message">Text Va??i ????dosti</label>
                  <textarea name="message" type="text" rows="2">{{ old('message') }}</textarea>
                </div>

                <div class="field padding-bottom--24">
                  <input name="submit" type="submit" value="Odeslat rezervaci">
                </div>
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--14">
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">?? KHN a.s.</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('sweetalert::alert')
</body>

</html>
