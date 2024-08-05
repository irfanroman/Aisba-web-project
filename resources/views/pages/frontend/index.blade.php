@extends('pages.frontend.parent')

@section('content')
    <!-- !!! ABOUT US !!! -->
    <div class="aboutus">
        <img src="{{ asset('frontend/assets/image/about-image.png') }}" />
        <div class="aboutus-right">
            <h5>Tentang Kami</h5>
            <h6>Al-Imam<span> Islamic School</span></h6>
            <p>
                <span> Al Imam Islamic School </span> adalah lembaga
                Al-Imam Islamic School Balikpapan lebih dikenal dengan sebutan AISBA.
                Berada di bawah naungan Yayasan Al-Imam Madinatul Iman.
                Yayasan ini dirikan oleh Bapak Ir. H. Muhammad Utama Jaya.
                AISBA didirikan sejak tahun 2014 dengan dua jenjang: SD dan SMP.
                Kini AISBA sudah punya jenjang dari Daycare, TK, SD, SMP, hingga SMA berlokasi di Bukit Cinta Damai,
                Balikpapan Kota.
            </p>
            <a href="{{ route('about') }}">
                Selengkapnya
                <i class="material-icons">arrow_forward_ios</i>
            </a>

        </div>
    </div>

    <!-- ABOUT US END -->

    <!-- PROGRAM -->
    <div class="program">
        <div class="program-title">
            <h6>Program</h6>
            <h1>Program Unggulan <span>Sekolah</span></h1>
        </div>
        <div class="program-card">
            <!-- PROGRAM CARD 1 -->
            <div class="program-card-item">
                <img src="{{ asset('frontend/assets/icon/quran-rounded_icon.svg') }}" />
                <h6>Tahfidz Al-Qur'an</h6>
                <p>
                    Program ini bertujuan untuk mencetak para hafidz dan hafidzah
                    Al-Qur'an 30 juz. Santri diwajibkan untuk menghafal Al-Qur'an setiap
                    hari dan mengikuti program pembinaan tahfidz yang intensif.
                </p>
            </div>
            <!-- PROGRAM CARD 2 -->
            <div class="program-card-item">
                <img src="{{ asset('frontend/assets/icon/quran-rounded_icon.svg') }}" />
                <h6>Takhassus Tahfidz Quran</h6>
                <p>
                    Program ini diperuntukkan bagi santri yang ingin fokus menghafal
                    Al-Qur'an dalam waktu singkat, yaitu selama 3 bulan. Santri akan
                    mengikuti program tahfidz yang lebih intensif dengan target hafalan
                    minimal 15 juz.
                </p>
            </div>
            <!-- PROGRAM CARD 3 -->
            <div class="program-card-item">
                <img src="{{ asset('frontend/assets/icon/quran-rounded_icon.svg') }}" />
                <h6>Kelas Tahfidz Quran Online</h6>
                <p>
                    Program ini diperuntukkan bagi bagi yang ingin menghafal Al-Qur'an
                    secara online. Santri akan mengikuti program tahfidz online dengan
                    menggunakan platform Zoom dan Google Meet.
                </p>
            </div>
        </div>
    </div>
    <!-- PROGRAM END -->

    <!-- ALUMNI -->
    <div class="alumni">
        <div class="alumni-title">
            <h6>Suara Alumni</h6>
            <h1>Apa kata <span>Alumni?</span></h1>
            <p>
                Review Testimoni dari para alumni yang telah menyelesaikan
                pendidikannya di Al-Imam Islamic School
            </p>
        </div>
        <div class="alumni-card">
            <!-- ALUMNI CARD 1 -->
            <div class="alumni-card-item">
                <div class="alumni-card-item-text">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <p>
                        Saya senang dengan proses pembelajaran di SD-SMP AISBa: interaktif, tidak membosankan dan seperti
                        belajar di luar kelas. Sekolah juga memberikan saya kesempatan untuk mengukir prestasi dengan
                        mengikuti berbagai perlombaan. <br><br>

                        Di AISBa juga tidak hanya belajar pelajaran umum dan bahasa asing, tapi juga tahfidz al-Qur’an, dan
                        agama. Meski full-day school, suasana kepesantrenan dan persaudaraan sangat terasa. Pokoknya
                        komplit. Bekal penting bagi saya untuk menapaki cita-cita selanjutnya.

                    </p>
                </div>
                <div class="alumni-card-item-profile">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <div class="alumni-card-item-author">
                        <h6>Ashilah Hanifah Huwaidah</h6>
                        <p>Alumni SMP AISBa Tahun 2019. Mahasiswi Universitas Gadjah Mada Fakultas Psikologi</p>
                    </div>
                </div>
            </div>
            <!-- ALUMNI CARD 2 -->
            <div class="alumni-card-item">
                <div class="alumni-card-item-text">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <p>
                        Don't judge a book by its cover."Istilah ini berlaku buat saya. Awalnya, saya skeptis terhadap AISBa
                        karena dulu berada di ruko. Kira-kira apa bisa efektif, yah? Namun, akhirnya terjawab. Masya-Allah.
                        Ternyata, para alumninya diterima di berbagai pesantren besar di Jawa. <br><br>

                        Hingga tahun ke-3 ini, proses belajar putra saya di SMP AISBa juga berjalan baik. AISBa punya banyak
                        kegiatan menarik. Salah satunya Examination Authority (EXOT). Asesmen ini untuk menguji kemampuan
                        anak. Alhamdulillah, anak saya bisa menjawabnya.

                    </p>
                </div>
                <div class="alumni-card-item-profile">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <div class="alumni-card-item-author">
                        <h6>Bunda Rosiana Dharyanti</h6>
                        <p>Alumni SMP AISBa 2024 dan peraih Heat Round Hong Kong International Mathematical Olympiad 2023
                        </p>
                    </div>
                </div>
            </div>
            <!-- ALUMNI CARD 3 -->
            <div class="alumni-card-item">
                <div class="alumni-card-item-text">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <p>
                        Orangtua harus selektif memilih sekolah. Setidaknya harus sesuai visi-misi orangtua.
                        Alhamdulillah, SD AISBa pilihan terbaik dari berbagai sekolah Islam yang ada.
                        Dua anak kami dapat pelajaran tidak hanya umum, tapi juga agama: aqidah, fiqih, tahsin, tahfidz,
                        dan arabic dengan porsi waktu cukup banyak. Para ustaz dan ustazah selalu meng-upgrade skill dan
                        open mindend hingga membuat kami sebagai orangtua makin percaya.
                    </p>
                </div>
                <div class="alumni-card-item-profile">
                    <img src="{{ asset('frontend/assets/icon/quote_icon.svg') }}" />
                    <div class="alumni-card-item-author">
                        <h6>Bunda Arlina Devinta Widhyasti, Orangtua Aisyah El-Rubi Alexandria</h6>
                        <p>Alumni Kelas 6Pi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ALUMNI END -->

    <!-- NEWS -->
    <div class="news">
        <div class="news-title">
            <h6>Berita dan Agenda</h6>
            <h1>Berita <span>Terkini</span></h1>
        </div>
        <div class="news-group">
            <!-- NEWS CARD 1 -->
            @foreach ($lattest_news as $row)
                <a href="{{ route('detailNews', $row->slug) }}" class="news-card">
                    <div class="news-card-transition">
                        <img src="{{ $row->image }}" />
                        <div class="news-card-item">
                            <div class="news-card-item-top">
                                <h6>{{ $row->title }}</h6>
                                <i class="material-icons">arrow_right</i>
                                <p>{{ $row->created_at }}</p>
                            </div>
                            <p>
                                {!! Str::words($row->description, '6') !!}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
            <!-- NEWS CARD 2 -->
            {{-- <a href="" class="news-card">
          <div class="news-card-transition">
            <img src="" />
            <div class="news-card-item">
              <div class="news-card-item-top">
                <h6>BQ Al Jahra</h6>
                <i class="material-icons">arrow_right</i>
                <p>25 days ago</p>
              </div>
              <p>
                Pondok Pesantren Baitul Quran Al Jahra Magetan menggunakan
                kurikulum pendidikan yang memadukan pendidikan agama dan
                pendidikan umum.
              </p>
            </div>
          </div>
        </a>
        <!-- NEWS CARD 3 -->
        <a href="" class="news-card">
          <div class="news-card-transition">
            <img src="" />
            <div class="news-card-item">
              <div class="news-card-item-top">
                <h6>BQ Al Jahra</h6>
                <i class="material-icons">arrow_right</i>
                <p>25 days ago</p>
              </div>
              <p>
                Pondok Pesantren Baitul Quran Al Jahra Magetan menggunakan
                kurikulum pendidikan yang memadukan pendidikan agama dan
                pendidikan umum.
              </p>
            </div>
          </div>
        </a> --}}
        </div>
    </div>
    <!-- NEWS END -->

    <!-- MAP -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.858024008014!2d116.85473837583378!3d-1.2571074987309219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147f3b5dd05e5%3A0x223d24afe4a964c4!2sAL%20IMAM%20ISLAMIC%20SCHOOL%20BALIKPAPAN!5e0!3m2!1sen!2sid!4v1722401420264!5m2!1sen!2sid"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></src=>
        style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map">
        <div class="map-card">
            <div class="map-title">
                <img src="frontend/assets/icon/google-maps_icon.svg" alt="Google Maps" />
                <h3>Al-Imam Islamic School</h3>
            </div>
            <p>
                Jl. Gn. Guntur No.27, Damai, Kecamatan Balikpapan Selatan,
                Kota Balikpapan, Kalimantan Timur 76114
            </p>
        </div>
    </div>

    <!-- MAP END -->

    <!-- PROMOSI -->
    <div class="promosi">
        <img src="{{ asset('frontend/assets/image/hero_bg.png') }}" alt="" />
        <div class="promosi-page">
            <h1>Wujudkan Impian Menjadi Hafidz Qur'an yang Berprestasi!</h1>
            <p>
                Tunggu apalagi? Yuk segera gabung! Raih Kesempatanmu Menjadi Hafidz
                Qur'an Berprestasi Bersama Pondok Baitul Quran Al Jahra!
            </p>
            <a href="">Daftar Sekarang</a>
        </div>
    </div>
    <!-- PROMOSI END -->
@endsection
