<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request Quotation — Grand Satya Rental</title>
  <style>
    body { font-family: Arial, sans-serif; background:#f4f4f4; margin:0; padding:0; }
    .wrap { max-width:600px; margin:32px auto; background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,.08); }
    .header { background:#001B3D; padding:28px 32px; }
    .header h1 { color:#fff; font-size:22px; margin:0; letter-spacing:-.01em; }
    .header p  { color:rgba(255,255,255,.6); font-size:13px; margin:6px 0 0; }
    .body { padding:32px; }
    .label { font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:.1em; color:#9ca3af; margin-bottom:4px; }
    .value { font-size:15px; color:#1f2937; margin-bottom:20px; line-height:1.6; }
    .divider { border:none; border-top:1px solid #e5e7eb; margin:24px 0; }
    .message-box { background:#f8f9fa; border-radius:8px; padding:16px 20px; font-size:14px; color:#374151; line-height:1.7; white-space:pre-wrap; }
    .footer { background:#f8f9fa; padding:20px 32px; text-align:center; font-size:12px; color:#9ca3af; }
    .footer a { color:#F59E0B; text-decoration:none; }
    .badge { display:inline-block; background:#F59E0B; color:#fff; font-size:11px; font-weight:700; padding:3px 10px; border-radius:20px; letter-spacing:.04em; margin-bottom:12px; }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="header">
      <h1>Request Quotation</h1>
      <p>Pesan masuk melalui website Grand Satya Rental — {{ now()->format('d M Y, H:i') }} WIB</p>
    </div>
    <div class="body">
      <span class="badge">NEW REQUEST</span>

      <div class="label">Nama</div>
      <div class="value">{{ $detail['name'] ?? '-' }}</div>

      <div class="label">Perusahaan</div>
      <div class="value">{{ $detail['company'] ?? '-' }}</div>

      <div class="label">Email</div>
      <div class="value"><a href="mailto:{{ $detail['email'] ?? '' }}" style="color:#F59E0B">{{ $detail['email'] ?? '-' }}</a></div>

      <div class="label">No. WhatsApp / Telepon</div>
      <div class="value">{{ $detail['contact'] ?? '-' }}</div>

      @if(!empty($detail['subject']))
      <div class="label">Kebutuhan / Jenis Unit</div>
      <div class="value">{{ $detail['subject'] }}</div>
      @endif

      <hr class="divider">

      <div class="label">Pesan</div>
      <div class="message-box">{{ $detail['message'] ?? '-' }}</div>
    </div>
    <div class="footer">
      Email ini dikirim otomatis oleh sistem website
      <a href="{{ url('/') }}">Grand Satya</a>. Jangan balas email ini secara langsung.
    </div>
  </div>
</body>
</html>
