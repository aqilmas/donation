<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donation</title>

    <!-- Fonts: Satoshi (Modern UI), Lora (Elegant Headings), Amiri (Arabic) -->
    <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Lora:wght@500&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --bg-canvas: #FCFCFC;
            --bg-subtle: #F5F7F6;
            --text-primary: #121212;
            --text-secondary: #5C5C5C;
            --brand-green: #1B4332;
            --brand-green-dark: #122B22;
            --border-color: #EAEAEA;
            --shadow-light: rgba(27, 67, 50, 0.04);
            --shadow-medium: rgba(27, 67, 50, 0.08);
            --font-sans: 'Satoshi', sans-serif;
            --font-serif: 'Lora', serif;
            --font-arabic: 'Amiri', serif;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            font-family: var(--font-sans);
            background-color: var(--bg-canvas);
            color: var(--text-primary);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .container { max-width: 1140px; margin: 0 auto; padding: 0 24px; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-on-load { animation: fadeIn 1.2s ease-out; }

        /* HEADER */
        .hero-header {
            padding: 120px 0;
            background: radial-gradient(ellipse at 50% -50%, var(--bg-subtle) 0%, transparent 80%);
        }
        .hero-content { text-align: center; max-width: 840px; margin: 0 auto; }
        .hero-header h1 {
            font-family: var(--font-serif);
            font-size: clamp(3rem, 7vw, 5rem);
            line-height: 1.15;
            margin-bottom: 24px;
            text-wrap: balance;
        }
        .hero-header h1 .highlight { color: var(--brand-green); }
        .hero-header p {
            font-size: 1.125rem;
            color: var(--text-secondary);
            max-width: 640px;
            margin: 0 auto 48px;
            line-height: 1.75;
        }
        .button {
            display: inline-block;
            text-decoration: none;
            font-weight: 700;
            padding: 16px 36px;
            border-radius: 10px;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .button.primary {
            background-color: var(--brand-green);
            color: #fff;
            box-shadow: 0 4px 6px var(--shadow-light), 0 1px 3px var(--shadow-light);
        }
        .button.primary:hover {
            background-color: var(--brand-green-dark);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--shadow-medium), 0 6px 6px var(--shadow-medium);
        }
        
        /* SECTIONS & DIVIDER */
        .content-section { padding: 120px 0; }
        .section-header { text-align: center; margin-bottom: 80px; }
        .section-header h2 {
            font-family: var(--font-serif);
            font-size: clamp(2.75rem, 5vw, 3.5rem);
        }
        .section-divider {
            height: 1px;
            width: 100%;
            max-width: 150px;
            background-color: var(--border-color);
            margin: 0 auto;
        }

        /* INLINE QUOTE SECTION */
        .quote-section {
            padding: 100px 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }
        .quote-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
        }
        .quote-arabic {
            font-family: var(--font-arabic);
            font-size: 2rem;
            text-align: right;
            direction: rtl;
        }
        .quote-separator {
            width: 1px;
            height: 50px;
            background: var(--border-color);
        }
        .quote-translation {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 520px;
            line-height: 1.7;
        }
        
        /* DONATION */
        .donation-section { background-color: var(--bg-subtle); }
        .donation-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; }
        .donation-card {
            background-color: var(--bg-canvas); border: 1px solid var(--border-color);
            border-radius: 16px; padding: 32px; transition: all 0.3s ease;
        }
        .donation-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px var(--shadow-medium), 0 10px 10px -5px var(--shadow-light);
        }
        .donation-header { display: flex; align-items: center; gap: 16px; margin-bottom: 32px; }
        .donation-icon { font-size: 1.5rem; color: var(--brand-green); }
        .donation-title { font-family: var(--font-serif); font-size: 1.75rem; }
        .account-info { text-align: center; margin-bottom: 32px; }
        .account-number {
            font-family: 'SF Mono', 'Courier New', monospace;
            font-size: 1.5rem; margin-bottom: 8px;
        }
        .account-name { color: var(--text-primary); font-weight: 700; }
        .qris-wrapper { background-color: #fff; padding: 16px; border-radius: 12px; }
        .qris-image {
            display: block;
            max-width: 160px;
            margin: 0 auto;
        }
        .copy-button {
            width: 100%; background-color: var(--bg-subtle); color: var(--text-primary);
            border: 1px solid var(--border-color); padding: 14px;
            border-radius: 8px; font-weight: 700; cursor: pointer; transition: all 0.2s ease;
        }
        .copy-button:hover { background-color: #EAEAEA; border-color: #D0D0D0; }

        /* FAQ Section */
        .faq-container { max-width: 800px; margin: 0 auto; }
        .faq-item { border-bottom: 1px solid var(--border-color); }
        .faq-item summary {
            display: flex; justify-content: space-between; align-items: center;
            padding: 24px 0; font-size: 1.25rem;
            font-weight: 500; cursor: pointer;
            list-style: none; /* Remove default marker */
        }
        .faq-item summary::-webkit-details-marker { display: none; } /* Chrome/Safari */
        .faq-icon {
            flex-shrink: 0; margin-left: 16px;
            transition: transform 0.3s ease;
        }
        .faq-answer {
            padding: 0 8px 32px 8px; color: var(--text-secondary);
            line-height: 1.75;
        }
        .faq-answer p { margin-bottom: 1em; }
        .faq-answer strong { color: var(--text-primary); font-weight: 700; }
        .faq-answer em { font-style: italic; }
        .faq-answer ul { list-style-position: inside; padding-left: 8px; }
        .faq-answer blockquote {
            border-left: 3px solid var(--brand-green);
            padding-left: 16px; margin: 16px 0;
            font-style: italic; color: #333;
        }
        .faq-item[open] > summary .faq-icon { transform: rotate(45deg); }

        /* FOOTER & BACK TO TOP */
        .site-footer { padding: 100px 0; text-align: center; }
        .footer-logo { font-family: var(--font-serif); font-size: 2rem; margin-bottom: 16px; }
        .footer-text { color: var(--text-secondary); margin-bottom: 32px; max-width: 500px; margin-left: auto; margin-right: auto; line-height: 1.7; }
        .social-media-links a {
            color: #A0A0A0; font-size: 1.5rem; margin: 0 16px;
            transition: all 0.3s ease; display: inline-block;
        }
        .social-media-links a:hover { color: var(--brand-green); transform: translateY(-4px); }
        #back-to-top-btn {
            position: fixed; bottom: 30px; right: 30px;
            width: 50px; height: 50px; background-color: var(--brand-green);
            color: #fff; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            opacity: 0; visibility: hidden; transform: scale(0.8);
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            z-index: 100; text-decoration: none;
        }
        #back-to-top-btn.visible { opacity: 1; visibility: visible; transform: scale(1); }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .quote-container { flex-direction: column; gap: 24px; text-align: center; }
            .quote-separator { display: none; }
            .quote-arabic { text-align: center; }
        }
        @media (max-width: 768px) {
            .container { padding: 0 24px; }
        }
    </style>
</head>
<body id="top">

    <header class="hero-header animate-on-load">
        <div class="container hero-content">
            <h1>Jejak <span class="highlight">Kebaikan</span> yang Tak Terputus</h1>
            <p>Setiap amanah yang Anda titipkan adalah benih harapan yang kami tanam. Bersama, kita wujudkan menjadi pohon kebaikan yang rindang dan bermanfaat selamanya.</p>
            <a href="#donation" class="button primary">Mulai Berdonasi</a>
        </div>
    </header>

    <main>
        <section class="quote-section">
            <div class="container quote-container">
                <div class="quote-arabic">لَنْ تَنَالُوا الْبِرَّ حَتّٰى تُنْفِقُوْا مِمَّا تُحِبُّوْنَ</div>
                <div class="quote-separator"></div>
                <div class="quote-translation">"Kamu sekali-kali tidak akan memperoleh <strong>kebajikan (yang sempurna)</strong> sebelum kamu menafkahkan sebagian <em>harta yang kamu cintai</em>."<br>(QS. Ali 'Imran: 92)</div>
            </div>
        </section>

        <!-- BAGIAN GALERI TELAH DIHAPUS DARI SINI -->

        <section id="donation" class="content-section donation-section">
            <div class="container">
                <div class="section-header">
                    <h2>Salurkan Kebaikan Anda</h2>
                </div>
                <div class="donation-grid">
                    <div class="donation-card">
                        <div class="donation-header">
                            <i class="fa-solid fa-qrcode donation-icon"></i>
                            <h3 class="donation-title">QRIS</h3>
                        </div>
                        <div class="qris-wrapper"><img src="media/IMG-22266-WA990.jpg" alt="QRIS Code" class="qris-image"></div>
                    </div>
                    <div class="donation-card">
                        <div class="donation-header">
                            <i class="fa-solid fa-wallet donation-icon"></i>
                            <h3 class="donation-title">E-Wallet</h3>
                        </div>
                        <div class="account-info">
                            <p class="account-number" id="dana-number">087838080852</p>
                            <p class="account-name">Amanah Kebaikan bersama</p>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('dana-number', this)">Salin Nomor</button>
                    </div>
                    <div class="donation-card">
                        <div class="donation-header">
                            <i class="fa-solid fa-building-columns donation-icon"></i>
                            <h3 class="donation-title">Bank Transfer</h3>
                        </div>
                        <div class="account-info">
                            <p class="account-number" id="bsi-number">maaf blom ada</p>
                            <p class="account-name">Amanah Kebaikan bersama</p>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('bsi-number', this)">Salin Rekening</button>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="container">
            <div class="section-divider"></div>
        </div>

        <section class="content-section" style="padding-top: 80px;">
            <div class="container">
                <div class="section-header">
                    <h2>Tanya Jawab Seputar Kebaikan</h2>
                </div>
                <div class="faq-container">
                    <details class="faq-item">
                        <summary>
                            <span>Mengapa kita dianjurkan untuk bersedekah?</span>
                            <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                        </summary>
                        <div class="faq-answer">
                            <p>Bersedekah adalah wujud nyata dari <strong>rasa syukur</strong> kita kepada Allah SWT atas segala nikmat yang telah diberikan. Ini bukan sekadar tentang memberi, tetapi tentang membersihkan harta dan jiwa. Dengan berbagi, kita mengakui bahwa semua yang kita miliki adalah titipan yang harus dimanfaatkan di jalan kebaikan.</p>
                            <blockquote>"Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan mensucikan mereka." <br><em>(QS. At-Taubah: 103)</em></blockquote>
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>
                            <span>Apa saja manfaat utama dari bersedekah?</span>
                            <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                        </summary>
                        <div class="faq-answer">
                            <p>Manfaat sedekah sangat luas, baik di dunia maupun di akhirat. Beberapa di antaranya adalah:</p>
                            <ul>
                                <li><strong>Menghapus Dosa:</strong> Rasulullah SAW bersabda, <em>"Sedekah itu dapat menghapus dosa sebagaimana air memadamkan api." (HR. Tirmidzi)</em></li>
                                <li><strong>Melipatgandakan Harta:</strong> Allah berjanji akan melipatgandakan rezeki bagi mereka yang gemar bersedekah, seperti yang digambarkan dalam QS. Al-Baqarah: 261.</li>
                                <li><strong>Memberi Ketenangan Jiwa:</strong> Tindakan memberi secara tulus dapat mengurangi stres dan memberikan perasaan bahagia serta damai yang mendalam.</li>
                                <li><strong>Pahala yang Terus Mengalir:</strong> Melalui <em>sedekah jariyah</em> (seperti membangun sumur, masjid, atau menyebarkan ilmu), pahalanya akan terus mengalir bahkan setelah kita meninggal dunia.</li>
                            </ul>
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>
                            <span>Apakah sedekah harus selalu dalam bentuk uang?</span>
                            <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                        </summary>
                        <div class="faq-answer">
                            <p>Tidak. Pintu sedekah sangatlah luas. Islam mengajarkan bahwa kebaikan tidak hanya terbatas pada materi. Rasulullah SAW bersabda bahwa <strong>"Senyummu di hadapan saudaramu adalah sedekah."</strong></p>
                            <p>Bentuk sedekah lainnya bisa berupa menyingkirkan gangguan dari jalan, mengajarkan ilmu yang bermanfaat, memberikan nasihat yang baik, bahkan menafkahi keluarga sendiri dengan niat yang benar. Setiap perbuatan baik yang dilakukan dengan ikhlas untuk mencari ridha Allah adalah bentuk sedekah.</p>
                        </div>
                    </details>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="site-footer">
        <div class="container">
            <h3 class="footer-logo">Amanah Kebaikan Bersama</h3>
            <p class="footer-text">Terima kasih telah menjadi bagian dari gerakan kebaikan ini. Setiap kontribusi Anda, besar maupun kecil, adalah bahan bakar yang menjaga cahaya harapan tetap menyala bagi mereka yang membutuhkan.</p>
            <div class="social-media-links">
                <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <a href="#top" id="back-to-top-btn" aria-label="Kembali ke atas"><i class="fa-solid fa-arrow-up"></i></a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Back to Top Button
            const backToTopBtn = document.getElementById('back-to-top-btn');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 400) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            }, { passive: true });
        });

        // Copy to Clipboard Function
        function copyToClipboard(elementId, button) {
            const textToCopy = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(textToCopy).then(() => {
                const originalText = button.innerHTML;
                button.innerHTML = '<i class="fa-solid fa-check"></i> Disalin';
                button.style.backgroundColor = 'var(--brand-green)';
                button.style.color = '#fff';
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.style.backgroundColor = '';
                    button.style.color = '';
                }, 2000);
            }).catch(err => { console.error('Gagal menyalin:', err); });
        }
    </script>
</body>
</html>