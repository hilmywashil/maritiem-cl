<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    @php $isAdmin = Request::is('admin/login'); @endphp
    {{ $isAdmin ? 'Login Admin' : 'Login Anggota' }} — ASITA Jawa Barat
  </title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500&family=DM+Serif+Display&display=swap" rel="stylesheet" />

  <style>
    /* ── Reset ───────────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    /* ── Tokens ──────────────────────────────────────────── */
    :root {
      --c-primary:    #5c6bc0;
      --c-primary-dk: #3949ab;
      --c-accent:     #9575cd;
      --c-bg:         #f7f7fb;
      --c-surface:    #ffffff;
      --c-panel:      #eeecfb;
      --c-panel-mid:  #dbd7f7;
      --c-text:       #1a1a2e;
      --c-muted:      #6b6b8a;
      --c-border:     #e0ddf5;
      --c-error-bg:   #fee2e2;
      --c-error-br:   #fca5a5;
      --c-error-tx:   #991b1b;
      --c-warn-bg:    #fef3c7;
      --c-warn-br:    #fcd34d;
      --c-warn-tx:    #92400e;
      --c-ok-bg:      #d1fae5;
      --c-ok-br:      #6ee7b7;
      --c-ok-tx:      #065f46;
      --radius-sm:    6px;
      --radius-md:    10px;
      --radius-lg:    16px;
      --shadow-card:  0 2px 24px 0 rgba(92,107,192,0.08), 0 1px 4px 0 rgba(92,107,192,0.06);
    }

    /* ── Base ────────────────────────────────────────────── */
    html, body {
      height: 100%;
      font-family: 'DM Sans', sans-serif;
      background: var(--c-bg);
      color: var(--c-text);
      -webkit-font-smoothing: antialiased;
    }

    /* ── Page wrapper ────────────────────────────────────── */
    .page {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 32px 16px;
      background:
        radial-gradient(ellipse 60% 50% at 80% 10%, rgba(149,117,205,.12) 0%, transparent 70%),
        radial-gradient(ellipse 50% 40% at 10% 80%, rgba(92,107,192,.10) 0%, transparent 70%),
        var(--c-bg);
    }

    /* ── Card ────────────────────────────────────────────── */
    .card {
      display: flex;
      width: 100%;
      max-width: 900px;
      min-height: 540px;
      background: var(--c-surface);
      border-radius: var(--radius-lg);
      border: 1px solid var(--c-border);
      box-shadow: var(--shadow-card);
      overflow: hidden;
    }

    /* ── Left – form pane ────────────────────────────────── */
    .pane-form {
      flex: 1;
      padding: 52px 48px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    /* ── Right – decorative pane ─────────────────────────── */
    .pane-deco {
      width: 42%;
      background: var(--c-panel);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 48px 36px;
      position: relative;
      overflow: hidden;
    }
    .pane-deco::before {
      content: '';
      position: absolute;
      width: 300px; height: 300px;
      border-radius: 50%;
      background: radial-gradient(circle, var(--c-panel-mid) 0%, transparent 70%);
      top: -80px; right: -80px;
      pointer-events: none;
    }
    .pane-deco::after {
      content: '';
      position: absolute;
      width: 200px; height: 200px;
      border-radius: 50%;
      background: radial-gradient(circle, var(--c-panel-mid) 0%, transparent 70%);
      bottom: -60px; left: -60px;
      pointer-events: none;
    }
    .deco-img {
      width: 200px;
      height: 200px;
      object-fit: contain;
      position: relative;
      z-index: 1;
      margin-bottom: 28px;
    }
    .deco-title {
      font-family: 'DM Serif Display', serif;
      font-size: 22px;
      color: var(--c-primary-dk);
      text-align: center;
      margin-bottom: 10px;
      position: relative;
      z-index: 1;
    }
    .deco-sub {
      font-size: 13.5px;
      color: var(--c-muted);
      text-align: center;
      line-height: 1.65;
      max-width: 220px;
      position: relative;
      z-index: 1;
    }

    /* ── Logo row ────────────────────────────────────────── */
    .logo-row {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 36px;
    }
    .logo-mark {
      width: 34px; height: 34px;
      background: linear-gradient(135deg, var(--c-primary), var(--c-accent));
      border-radius: 9px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .logo-mark svg { display: block; }
    .logo-name {
      font-size: 15px;
      font-weight: 500;
      letter-spacing: 0.01em;
      color: var(--c-text);
    }

    /* ── Badge ───────────────────────────────────────────── */
    .badge {
      display: inline-block;
      padding: 4px 13px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 0.03em;
      margin-bottom: 12px;
    }
    .badge--admin   { background: #e3f2fd; color: #1565c0; }
    .badge--anggota { background: #ede7f6; color: #6a1b9a; }

    /* ── Heading ─────────────────────────────────────────── */
    .form-title {
      font-family: 'DM Serif Display', serif;
      font-size: 26px;
      color: var(--c-text);
      margin-bottom: 4px;
      line-height: 1.25;
    }
    .form-sub {
      font-size: 14px;
      color: var(--c-muted);
      margin-bottom: 30px;
      line-height: 1.5;
    }

    /* ── Alerts ──────────────────────────────────────────── */
    .alert {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      padding: 12px 14px;
      border-radius: var(--radius-sm);
      font-size: 13.5px;
      line-height: 1.5;
      margin-bottom: 20px;
      animation: fadeDown .25s ease;
    }
    @keyframes fadeDown {
      from { opacity: 0; transform: translateY(-8px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .alert--error   { background: var(--c-error-bg); border: 1px solid var(--c-error-br); color: var(--c-error-tx); }
    .alert--warning { background: var(--c-warn-bg);  border: 1px solid var(--c-warn-br);  color: var(--c-warn-tx); }
    .alert--success { background: var(--c-ok-bg);    border: 1px solid var(--c-ok-br);    color: var(--c-ok-tx); }
    .alert__icon { flex-shrink: 0; font-size: 15px; margin-top: 1px; }
    .alert__msg  { flex: 1; }
    .alert__close {
      background: none; border: none; cursor: pointer;
      padding: 0; color: inherit; opacity: .55;
      font-size: 18px; line-height: 1; flex-shrink: 0;
      transition: opacity .15s;
    }
    .alert__close:hover { opacity: 1; }

    /* ── Fields ──────────────────────────────────────────── */
    .field { margin-bottom: 18px; }
    .field__label {
      display: block;
      font-size: 13px;
      color: var(--c-muted);
      font-weight: 400;
      margin-bottom: 7px;
    }
    .field__input {
      width: 100%;
      height: 42px;
      padding: 0 14px;
      border: 1px solid var(--c-border);
      border-radius: var(--radius-sm);
      background: var(--c-bg);
      font-family: inherit;
      font-size: 14px;
      color: var(--c-text);
      outline: none;
      transition: border-color .15s, box-shadow .15s;
    }
    .field__input::placeholder { color: #b0aeca; }
    .field__input:focus {
      border-color: var(--c-primary);
      box-shadow: 0 0 0 3px rgba(92,107,192,.14);
      background: var(--c-surface);
    }
    .field__input.is-error { border-color: #f87171; }

    /* ── Password wrap ───────────────────────────────────── */
    .pw-wrap { position: relative; }
    .pw-wrap .field__input { padding-right: 42px; }
    .pw-toggle {
      position: absolute; right: 12px; top: 50%; transform: translateY(-50%);
      background: none; border: none; cursor: pointer; padding: 0;
      color: var(--c-muted); display: flex; align-items: center;
      transition: color .15s;
    }
    .pw-toggle:hover { color: var(--c-primary); }

    /* ── Submit button ───────────────────────────────────── */
    .btn-submit {
      width: 100%;
      height: 44px;
      margin-top: 6px;
      border: none;
      border-radius: var(--radius-sm);
      background: var(--c-primary);
      color: #fff;
      font-family: inherit;
      font-size: 14.5px;
      font-weight: 500;
      letter-spacing: 0.02em;
      cursor: pointer;
      transition: background .15s, transform .1s, box-shadow .15s;
      box-shadow: 0 2px 12px rgba(92,107,192,.3);
    }
    .btn-submit:hover {
      background: var(--c-primary-dk);
      box-shadow: 0 4px 16px rgba(92,107,192,.35);
    }
    .btn-submit:active { transform: scale(.985); }

    /* ── Footer links ────────────────────────────────────── */
    .divider {
      height: 1px;
      background: var(--c-border);
      margin: 24px 0;
    }
    .form-footer {
      text-align: center;
      font-size: 13px;
      color: var(--c-muted);
      line-height: 2;
    }
    .form-footer a {
      color: var(--c-primary);
      font-weight: 500;
      text-decoration: none;
      transition: color .15s;
    }
    .form-footer a:hover { color: var(--c-primary-dk); text-decoration: underline; }

    /* ── Responsive ──────────────────────────────────────── */
    @media (max-width: 680px) {
      .pane-deco  { display: none; }
      .pane-form  { padding: 40px 28px; }
      .card       { max-width: 460px; min-height: auto; }
    }
  </style>
</head>
<body>

@php
  $isAdmin      = Request::is('admin/login');
  $loginAction  = $isAdmin ? route('admin.login.post')   : route('anggota.login.post');
  $inputLabel   = $isAdmin ? 'Username atau Email'       : 'Alamat Email';
  $inputType    = $isAdmin ? 'text'                      : 'email';
  $inputName    = $isAdmin ? 'login'                     : 'email';
  $inputPH      = $isAdmin ? 'Masukkan username atau email' : 'nama@email.com';
  $badgeClass   = $isAdmin ? 'badge--admin'              : 'badge--anggota';
  $badgeLabel   = $isAdmin ? 'Admin'                     : 'Anggota';
  $formTitle    = $isAdmin ? 'Login Admin'               : 'Member Login';
  $formSub      = $isAdmin ? 'Masuk dengan akun administrator Anda.' : 'Masuk ke akun anggota Anda untuk melanjutkan.';
  $decoTitle    = $isAdmin ? 'Panel Administrator'       : 'Portal Member';
  $decoSub      = $isAdmin
    ? 'Kelola data dan pengaturan sistem ASITA Jawa Barat.'
    : 'Akses eksklusif untuk anggota ASITA Jawa Barat. Kelola profil dan informasi keanggotaan Anda.';
@endphp

<main class="page">
  <div class="card">

    {{-- ── Form pane ─────────────────────────────────── --}}
    <section class="pane-form">

      {{-- Logo --}}
      <div class="logo-row">
        <div class="logo-mark">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M12 2L2 7l10 5 10-5-10-5z" stroke="#fff" stroke-width="1.8" stroke-linejoin="round"/>
            <path d="M2 17l10 5 10-5" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M2 12l10 5 10-5" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <span class="logo-name">ASITA Jawa Barat</span>
      </div>

      {{-- Badge + Heading --}}
      <!--<span class="badge {{ $badgeClass }}">{{ $badgeLabel }}</span>-->
      <h1 class="form-title">{{ $formTitle }}</h1>
      <p class="form-sub">{{ $formSub }}</p>

      {{-- Alerts --}}
      @if(session('error'))
        <div class="alert alert--error" id="a-error">
          <span class="alert__icon">⚠</span>
          <span class="alert__msg">{{ session('error') }}</span>
          <button class="alert__close" type="button" onclick="closeAlert('a-error')">&times;</button>
        </div>
      @endif

      @if(session('warning'))
        <div class="alert alert--warning" id="a-warning">
          <span class="alert__icon">⏰</span>
          <span class="alert__msg">{{ session('warning') }}</span>
          <button class="alert__close" type="button" onclick="closeAlert('a-warning')">&times;</button>
        </div>
      @endif

      @if(session('success'))
        <div class="alert alert--success" id="a-success">
          <span class="alert__icon">✓</span>
          <span class="alert__msg">{{ session('success') }}</span>
          <button class="alert__close" type="button" onclick="closeAlert('a-success')">&times;</button>
        </div>
      @endif

      @if($errors->any())
        <div class="alert alert--error" id="a-validation">
          <span class="alert__icon">⚠</span>
          <span class="alert__msg">{{ $errors->first() }}</span>
          <button class="alert__close" type="button" onclick="closeAlert('a-validation')">&times;</button>
        </div>
      @endif

      {{-- Form --}}
      <form action="{{ $loginAction }}" method="POST" novalidate>
        @csrf

        <div class="field">
          <label class="field__label" for="field-login">{{ $inputLabel }}</label>
          <input
            class="field__input {{ $errors->has($inputName) ? 'is-error' : '' }}"
            id="field-login"
            type="{{ $inputType }}"
            name="{{ $inputName }}"
            placeholder="{{ $inputPH }}"
            value="{{ old($inputName) }}"
            autocomplete="{{ $isAdmin ? 'username' : 'email' }}"
            required
            autofocus
          />
        </div>

        <div class="field">
          <label class="field__label" for="field-password">Password</label>
          <div class="pw-wrap">
            <input
              class="field__input {{ $errors->has('password') ? 'is-error' : '' }}"
              id="field-password"
              type="password"
              name="password"
              placeholder="Masukkan password"
              autocomplete="current-password"
              required
            />
            <button class="pw-toggle" type="button" aria-label="Tampilkan password" onclick="togglePw()">
              <svg id="icon-eye" width="17" height="17" viewBox="0 0 24 24" fill="none">
                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z" stroke="currentColor" stroke-width="1.6"/>
                <circle cx="12" cy="12" r="3.2" stroke="currentColor" stroke-width="1.6"/>
              </svg>
              <svg id="icon-eye-off" width="17" height="17" viewBox="0 0 24 24" fill="none" style="display:none">
                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M14.12 14.12a3 3 0 1 1-4.24-4.24" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                <line x1="2" y1="2" x2="22" y2="22" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </button>
          </div>
        </div>

        <button class="btn-submit" type="submit">Masuk</button>
      </form>

      {{-- Footer links --}}
      <div class="divider"></div>
      <div class="form-footer">
        @if(!$isAdmin)
          Belum punya akun? <a href="{{ route('join-us') }}">Daftar sekarang</a><br>
          <a href="{{ route('admin.login') }}">Login sebagai Admin</a>
        @else
          <a href="{{ route('anggota.login') }}">Login sebagai Anggota</a>
        @endif
      </div>

    </section>

    {{-- ── Decorative pane ──────────────────────────────── --}}
    <aside class="pane-deco" aria-hidden="true">
      <img
        class="deco-img"
        src="{{ asset('images/asita-logo-nobg.png') }}"
        alt=""
        role="presentation"
      />
      <p class="deco-title">{{ $decoTitle }}</p>
      <p class="deco-sub">{{ $decoSub }}</p>
    </aside>

  </div>
</main>

<script>
  function togglePw() {
    const input = document.getElementById('field-password');
    const isHidden = input.type === 'password';
    input.type = isHidden ? 'text' : 'password';
    document.getElementById('icon-eye').style.display     = isHidden ? 'none'  : '';
    document.getElementById('icon-eye-off').style.display = isHidden ? ''      : 'none';
  }

  function closeAlert(id) {
    const el = document.getElementById(id);
    if (!el) return;
    el.style.transition = 'opacity .25s, transform .25s';
    el.style.opacity = '0';
    el.style.transform = 'translateY(-6px)';
    setTimeout(() => el.remove(), 280);
  }

  // Auto-dismiss setelah 7 detik
  setTimeout(() => {
    document.querySelectorAll('.alert').forEach(el => {
      el.style.transition = 'opacity .4s, transform .4s';
      el.style.opacity = '0';
      el.style.transform = 'translateY(-6px)';
      setTimeout(() => el.remove(), 420);
    });
  }, 7000);
</script>

</body>
</html>