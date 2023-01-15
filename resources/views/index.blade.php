@extends('layouts.front')

@section('content')
<section class="home" id="home">
        <div class="home-container container grid">
          <div class="home-img-bg">
            <img src="assets/images/bg-hero.jpg" alt="" class="home-img" />
          </div>  

          <div class="home-data">
            <h1 class="home-title">
            Ayo Mengambil Aksi dan Menjadi
            Satu langkah Lebih Awal dari Siapapun
            </h1>
            <p class="home-description">
            Pelajari Materi dari Dasar dengan Mempelajari Materi Secara Terstruktur
            </p>
            <div class="home-btns">
              <a href="{{ route('courses.index') }}" class="button btn-gray btn-small"> Kursusku </a>
              <a href="#course" class="button button-home">Jelajahi Kursus</a>
            </div>
          </div>
        </div>
      </section>

      <section class="story section container">
        <div class="story-container grid">
          <div class="story-data">
            <h2 class="section-title story-section-title">Tujuan Kami</h2>
            <h1 class="story-title">
              Nikmati belajar tanpa tekanan
            </h1>

            <p class="story-description">
             Belajar membuat sesuatu dengan proyek dunia nyata yang membantu Anda meningkatkan kreativitas
            </p>
            <a href="#course" class="button btn-small">Jelajahi</a>
          </div>
          <div class="story-images">
            <img src="{{ asset('frontend/assets/images/popo.png') }}" alt="" class="story-img" />
            <div class="story-square"></div>
          </div>
        </div>
      </section>

      <section class="products section container" id="course">
        <h2 class="section-title">Semua Kursus</h2>

        <div class="new-container">
          <div class="swiper new-swipper">
            <div class="swiper-wrapper">
            @foreach($courses as $course)
              <article class="products-card swiper-slide">
              <a style="color: inherit;" href="{{ route('courses.show', [$course->slug]) }}" class="products-link">
                <h3 class="products-title">{{ $course->title }}</h3>
                <div class="products-star">
                @for ($star = 1; $star <= 5; $star++)
                    @if ($course->rating >= $star)
                    <i class="bx bxs-star"></i>
                    @else
                    <i class='bx bx-star'></i>
                    @endif
                @endfor
                </div>
                <span class="products-price">Rp. {{ $course->price }}</span>
                @if($course->students()->count() > 5)
                  <button class="products-button">
                    Populer
                  </button>
                @endif
                <span class="products-student">
                {{ $course->students()->count() }} students
                </span>
              </a>
              </article>
            @endforeach
    
            </div>
            <div
              class="swiper-button-next"
              style="
                bottom: initial;
                top: 50%;
                right: 0;
                left: initial;
                border-radius: 50%;
              "
            >
              <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div
              class="swiper-button-prev"
              style="bottom: initial; top: 50%; border-radius: 50%"
            >
              <i class="bx bx-left-arrow-alt"></i>
            </div>
          </div>
        </div>
      </section>
@endsection