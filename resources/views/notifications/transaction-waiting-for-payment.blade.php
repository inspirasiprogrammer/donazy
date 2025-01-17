@component('mail::message')
Bismillah

**{{ $transaction->user_name }}**, Terima kasih telah mendukung kegiatan {{ Config::get('app.name') }} untuk membantu saudara-saudari muslim yang sedang kesulitan di Indonesia.

Segera salurkan donasi pilihan anda yaitu **{{ $transaction->campaign->name }}** dengan cara transfer Donasi Anda ke:

<h1 style="text-align: center; margin-bottom: 0;">{{ $paymentMethod->name }}</h1>
<h1 style="text-align: center; margin-bottom: 0;">{{ $paymentMethod->account_number }}</h1>
<h1 style="text-align: center; font-weight: normal;">{{ $paymentMethod->account_holder_name }}</h1>

<h1 style="text-align: center; margin-bottom: 0; font-weight: normal;">Total Donasi Anda</h1>
<h1 style="text-align: center;">@idr($transaction->total)</h1>

**PENTING!**

Mohon transfer sesuai dengan nominal total pembayaran.

Donasi anda akan terverifikasi oleh sistem secara otomatis maksimal 30 menit.

Anda akan mendapatkan notifikasi via email apabila donasi anda telah diterima.

Jazaakumullahu khairan.

<p style="color: #23925C; font-weight: bold">{{ Config::get('app.name') }}</p>
<img src="{{ asset('images/logo.png') }}" width="100" />

@endcomponent

