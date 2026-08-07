<template>
  <div class="min-h-screen bg-bone text-navy-ink font-sans">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-bone border-b border-navy-brand/20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
          <div class="flex items-center">
            <span class="text-2xl font-serif font-bold text-navy-ink">GRAND SATYA</span>
          </div>
          <div class="hidden md:flex space-x-8">
            <a href="#services" class="text-sm text-mono tracking-wider uppercase text-navy-ink hover:text-gold border-b-2 border-transparent hover:border-gold transition-colors">Layanan</a>
            <a href="#fleet" class="text-sm text-mono tracking-wider uppercase text-navy-ink hover:text-gold border-b-2 border-transparent hover:border-gold transition-colors">Armada</a>
            <a href="#team" class="text-sm text-mono tracking-wider uppercase text-navy-ink hover:text-gold border-b-2 border-transparent hover:border-gold transition-colors">Tim</a>
            <a href="#contact" class="text-sm text-mono tracking-wider uppercase text-navy-ink hover:text-gold border-b-2 border-transparent hover:border-gold transition-colors">Kontak</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-navy-ink text-white py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <div class="text-mono text-gold text-sm tracking-widest uppercase mb-4">Jaringan Armada Nasional</div>
            <h1 class="text-5xl md:text-6xl font-serif mb-6">Solusi Transportasi Korporat Premium</h1>
            <p class="text-lg text-gray-300 mb-8">
              Didirikan untuk melayani klien korporat dan industri, menyediakan pertumbuhan pesat dalam layanan yang ditawarkan seperti pemesanan tiket pesawat, reservasi hotel, pengaturan dokumen perjalanan, dan penyewaan mobil.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
              <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-white font-medium hover:bg-white hover:text-navy-ink transition-colors">
                Minta Penawaran
              </a>
            </div>
            <div class="flex items-center gap-8 mt-10 text-mono text-sm tracking-wider">
              <div>
                <span class="text-3xl font-bold text-gold">12</span>
                <span class="text-gray-400 ml-2">Kota</span>
              </div>
              <div class="w-px h-8 bg-navy-brand"></div>
              <div>
                <span class="text-3xl font-bold text-gold">45</span>
                <span class="text-gray-400 ml-2">Unit</span>
              </div>
              <div class="w-px h-8 bg-navy-brand"></div>
              <div>
                <span class="text-3xl font-bold text-gold">24/7</span>
                <span class="text-gray-400 ml-2">Dukungan</span>
              </div>
            </div>
          </div>
          <div>
            <div class="border border-gold/30 p-4">
              <img src="/anyar/img/car/car (1).jpeg" alt="Grand Satya Fleet" class="w-full h-auto object-cover">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 border-b border-navy-brand/20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-mono text-gold text-sm tracking-widest uppercase mb-2 text-center">Kemampuan Kami</div>
        <h2 class="text-4xl font-serif text-center mb-12">Apa Yang Kami Tawarkan</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="p-6 border border-navy-brand/20">
            <div class="text-gold mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6.75a3 3 0 0 0-3-3h-1.5a3 3 0 0 0-3 3v1.5H6a3 3 0 0 0-3 3v3.75c0 .621.504 1.125 1.125 1.125h1.5A1.125 1.125 0 0 0 6.75 15v-.375a1.125 1.125 0 0 1 1.125-1.125h1.5a1.125 1.125 0 0 1 1.125 1.125V15a1.125 1.125 0 0 0 1.125 1.125h1.5A1.125 1.125 0 0 0 14.25 15v-.375c0-.621.504-1.125 1.125-1.125h1.5A1.125 1.125 0 0 0 18 15v-.75a3 3 0 0 0-3-3h-1.5V6.75Z" />
              </svg>
            </div>
            <h3 class="text-lg font-serif mb-2">Pengemudi Berpengalaman</h3>
            <p class="text-slate">Pengemudi berpengalaman di bidang proyek industri</p>
          </div>
          <div class="p-6 border border-navy-brand/20">
            <div class="text-gold mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </div>
            <h3 class="text-lg font-serif mb-2">Keselamatan Utama</h3>
            <p class="text-slate">Seluruh armada dilindungi asuransi dengan kondisi kendaraan terawat baik</p>
          </div>
          <div class="p-6 border border-navy-brand/20">
            <div class="text-gold mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </div>
            <h3 class="text-lg font-serif mb-2">Dukungan 24/7</h3>
            <p class="text-slate">Layanan 24 jam untuk penggantian unit jika terjadi sesuatu pada unit sewaan</p>
          </div>
          <div class="p-6 border border-navy-brand/20">
            <div class="text-gold mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </div>
            <h3 class="text-lg font-serif mb-2">Layanan Prima</h3>
            <p class="text-slate">Kami memiliki layanan pelanggan yang selalu siap melayani Anda dalam memilih unit</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Fleet Section -->
    <section id="fleet" class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-mono text-gold text-sm tracking-widest uppercase mb-2 text-center">Armada Kami</div>
        <h2 class="text-4xl font-serif text-center mb-12">Kendaraan Kami</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="border border-navy-brand/20">
            <img src="/anyar/img/cars/Lexus.jpeg" alt="Lexus" class="w-full h-48 object-cover">
            <div class="p-6">
              <div class="text-mono text-gold text-xs tracking-widest uppercase mb-2">Eksekutif</div>
              <h3 class="text-xl font-serif mb-2">Lexus</h3>
              <div class="flex items-center gap-2 text-sm text-slate">
                <span class="text-mono">Kapasitas:</span>
                <span>4 Penumpang</span>
              </div>
            </div>
          </div>
          <div class="border border-navy-brand/20">
            <img src="/anyar/img/cars/avanza.jpeg" alt="Toyota Avanza" class="w-full h-48 object-cover">
            <div class="p-6">
              <div class="text-mono text-gold text-xs tracking-widest uppercase mb-2">MPV</div>
              <h3 class="text-xl font-serif mb-2">Toyota Avanza</h3>
              <div class="flex items-center gap-2 text-sm text-slate">
                <span class="text-mono">Kapasitas:</span>
                <span>7 Penumpang</span>
              </div>
            </div>
          </div>
          <div class="border border-navy-brand/20">
            <img src="/anyar/img/cars/corolla cross.jpeg" alt="Toyota Corolla Cross" class="w-full h-48 object-cover">
            <div class="p-6">
              <div class="text-mono text-gold text-xs tracking-widest uppercase mb-2">SUV</div>
              <h3 class="text-xl font-serif mb-2">Toyota Corolla Cross</h3>
              <div class="flex items-center gap-2 text-sm text-slate">
                <span class="text-mono">Kapasitas:</span>
                <span>5 Penumpang</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-16 bg-white border-y border-navy-brand/20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-mono text-gold text-sm tracking-widest uppercase mb-2 text-center">Tim Kami</div>
        <h2 class="text-4xl font-serif text-center mb-12">Temui Tim</h2>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="text-center">
            <div class="border border-navy-brand/20 p-4 mb-4 inline-block">
              <img src="/anyar/img/team/team-1.jpg" alt="Yusmaniar Octavia" class="w-48 h-48 object-cover">
            </div>
            <h3 class="text-xl font-serif mb-1">Yusmaniar Octavia</h3>
            <div class="text-mono text-gold text-sm tracking-wider uppercase">Sales & Operations</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-navy-ink text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
          <div>
            <div class="text-mono text-gold text-sm tracking-widest uppercase mb-2">Hubungi Kami</div>
            <h2 class="text-4xl font-serif mb-8">Terhubung Dengan Kami</h2>
            <div class="space-y-6">
              <div class="flex items-start gap-4">
                <div class="text-gold mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                  </svg>
                </div>
                <div>
                  <div class="text-mono text-gold text-xs tracking-widest uppercase mb-1">Lokasi</div>
                  <div>Jakarta, Indonesia</div>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div class="text-gold mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5A2.25 2.25 0 0 0 2.25 6.75m19.5 0v.5L12 15l-9.75-7.75v-.5" />
                  </svg>
                </div>
                <div>
                  <div class="text-mono text-gold text-xs tracking-widest uppercase mb-1">Email</div>
                  <a href="mailto:cs@grandsatya.com" class="hover:text-gold transition-colors">cs@grandsatya.com</a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <form @submit.prevent="submitForm" class="space-y-4">
              <div>
                <label class="text-mono text-gold text-xs tracking-widest uppercase block mb-2">Nama</label>
                <input type="text" v-model="form.name" class="w-full px-4 py-3 bg-transparent border border-white/30 text-white placeholder-gray-400 focus:outline-none focus:border-gold rounded-none" placeholder="Nama Anda">
              </div>
              <div>
                <label class="text-mono text-gold text-xs tracking-widest uppercase block mb-2">Email</label>
                <input type="email" v-model="form.email" class="w-full px-4 py-3 bg-transparent border border-white/30 text-white placeholder-gray-400 focus:outline-none focus:border-gold rounded-none" placeholder="email@anda.com">
              </div>
              <div>
                <label class="text-mono text-gold text-xs tracking-widest uppercase block mb-2">Pesan</label>
                <textarea v-model="form.message" rows="4" class="w-full px-4 py-3 bg-transparent border border-white/30 text-white placeholder-gray-400 focus:outline-none focus:border-gold rounded-none" placeholder="Pesan Anda..."></textarea>
              </div>
              <button type="submit" class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-white font-medium hover:bg-white hover:text-navy-ink transition-colors rounded-none">
                Kirim Pesan
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-navy-ink text-white py-8 border-t border-gold/20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <span class="text-xl font-serif mb-4 md:mb-0">GRAND SATYA</span>
          <div class="text-mono text-sm text-gray-400 tracking-wider">
            © 2024 Grand Satya. Semua hak cipta dilindungi.
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const form = ref({
  name: '',
  email: '',
  message: ''
})

const submitForm = () => {
  alert('Pesan Anda telah dikirim! Dalam produksi, ini akan mengirim email ke cs@grandsatya.com.')
  form.value = { name: '', email: '', message: '' }
}
</script>
