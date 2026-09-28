<footer class="site-footer" id="contact">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
                <a class="site-footer-brand" href="{{ url('/') }}" aria-label="LPK GMI halaman utama">
                    <img src="{{ asset('img/logo-jepang-removebg.jpg') }}" alt="Logo LPK GMI">
                    <span>LPK Garuda Mestakung Indonesia</span>
                </a>
                <p class="site-footer-copy">Mendampingi langkahmu melalui pelatihan bahasa Jepang dan persiapan menuju peluang kerja di Jepang.</p>
            </div>
            <div class="col-6 col-lg-3">
                <h2 class="site-footer-title">Jelajahi</h2>
                <a class="site-footer-link" href="{{ url('/#program') }}">Program</a>
                <a class="site-footer-link" href="{{ url('/#about') }}">Tentang kami</a>
                <a class="site-footer-link" href="{{ url('/manual-book') }}">Panduan pendaftaran</a>
                <a class="site-footer-link" href="{{ url('/pendaftaran-siswa-baru') }}">Daftar siswa baru</a>
            </div>
            <div class="col-6 col-lg-4">
                <h2 class="site-footer-title">Hubungi kami</h2>
                <p class="site-footer-contact"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i><span>Jl. Kaibon RT. 03 RW. 03, Desa Balamoa, Kecamatan Pangkah, Kabupaten Tegal, Jawa Tengah 52471</span></p>
                <a class="site-footer-contact" href="mailto:lpkgarudamestakungindonesia@gmail.com"><i class="bi bi-envelope-fill" aria-hidden="true"></i><span>lpkgarudamestakungindonesia@gmail.com</span></a>
                <div class="site-footer-socials" aria-label="Media sosial LPK GMI">
                    <a href="https://wa.me/6282324353371" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.instagram.com/lpk.gmijapanofficial/" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.tiktok.com/@lpk.gmijapantegal" target="_blank" rel="noopener" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                    <a href="https://www.youtube.com/@LPKGARUDAMESTAKUNGINDONESIA" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="site-footer-bottom">
            <span>© {{ date('Y') }} LPK Garuda Mestakung Indonesia · Versi {{ config('site.version') }}</span>
            <a href="{{ url('/') }}">LPK GMI Japan Tegal</a>
        </div>
    </div>
</footer>
