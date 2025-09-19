@extends('layouts.header')
@section('content')

<section>
  <div class="breadcrumb-cst blogs-detail plane px/">
    @if($blog->photo)
    <img loading="lazy" class="lazy img-fluid" src="{{ asset('storage/blog_photos/' . $blog->photo) }}"
      alt="{{ $blog->title }}">
    @else
    <img loading="lazy" class="lazy img-fluid" src="asset/img/breadcrumbs/blogs-detail-min.jpg" alt="">
    @endif
  </div>
</section>
<section>
  <div class="px py blog-detail-main">
    <div class="container-fluid">
      <div class="row row-cols-1">
        <div class="col-lg-10 mx-auto">
          <div class="blog-main-heading semibold center">
            <h1 class="mb">
              {{ isset($blog) ? $blog->title : 'The Importance of Stability Chambers in Pharmaceutical Testing' }}
            </h1>
          </div>
        </div>
        <div class="col">
          <div class="center">
            <div class="blog-title b-btm mb">
              By {{ isset($blog) ? $blog->author : 'Kesar Control Team' }} on {{ isset($blog) ? date('d F, Y',
              strtotime($blog->date)) : '06 March, 2025' }}
            </div>
          </div>
        </div>
        <div class="col">
          <div class="para mt">
            {!! $blog->content !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <section>
  <div class="px pb blog-detail-one">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col">
              <div class="blog-heading semibold">
                <h3 class="mb">
                  What is a Stability Chamber?
                </h3>
              </div>
            </div>
          </div>
          <div class="row g">
            <div class="col-sm-8 col-lg-5 mx-auto">
              <div class="img">
                <img loading="lazy" class="lazy border-radius-sm img-fluid" src="asset/img/blogs/1-min.jpg" alt="">
              </div>
            </div>
            <div class="col-sm-8 col-lg-7 mx-auto">
              <div class="row row-cols-1">
                <div class="col">
                  <div class="para mt">
                    <p>
                      A stability chamber is a specialized testing unit that simulates different environmental
                      conditions—such as temperature, humidity, and light exposure—to assess how pharmaceutical products
                      react over time. These chambers help determine the shelf life, potency, and safety of medicines,
                      ensuring they remain effective throughout their intended use.
                    </p>
                    <p>
                      A stability chamber is a specialized testing unit that simulates different environmental
                      conditions—such as temperature, humidity, and light exposure—to assess how pharmaceutical products
                      react over time. These chambers help determine the shelf life, potency, and safety of medicines,
                      ensuring they remain effective throughout their intended use.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="pt">
                <div class="row">
                  <div class="col-sm-8 col-lg-12 mx-auto">
                    <div class="blog-heading semibold">
                      <h3 class="mb">Why Stability Testing is Essential?</h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-lg-12 mx-auto">
                    <div class="number-list mb">
                      <ul>
                        <li>
                          <div class="heading">
                            Regulatory Compliance
                          </div>
                          <div class="para">
                            <p>
                              Regulatory authorities mandate stability testing to ensure that pharmaceutical products
                              meet quality standards. Kesar Control’s stability chambers help businesses adhere to these
                              critical regulations.
                            </p>
                          </div>
                        </li>
                        <li>
                          <div class="heading">
                            Product Safety & Shelf Life
                          </div>
                          <div class="para">
                            <p>
                              Stability testing helps predict the expiration date and storage conditions required for
                              medicines, ensuring patient safety and optimal performance.
                            </p>
                          </div>
                        </li>
                        <li>
                          <div class="heading">
                            Environmental Stress Testing
                          </div>
                          <div class="para">
                            <p>
                              By exposing products to extreme temperatures, humidity levels, and light conditions,
                              stability chambers help manufacturers understand how their drugs will react in different
                              geographic regions.
                            </p>
                          </div>
                        </li>
                        <li>
                          <div class="heading">
                            Quality Assurance
                          </div>
                          <div class="para">
                            <p>
                              Stability testing ensures that pharmaceutical products maintain their chemical composition
                              and efficacy over time, preventing potential health risks.
                            </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="px pb">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blog-heading semibold">
            <h3 class="mb aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">Conclusion</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          Stability chambers are indispensable in pharmaceutical testing, ensuring that drugs retain their
          effectiveness, safety, and quality over time. Kesar Control Systems is dedicated to providing cutting-edge
          solutions that help pharmaceutical companies maintain regulatory compliance and product reliability.
        </div>
      </div>
    </div>
  </div>
</section> --}}
<section>
  <div class="px pb blog-slider-cmn">
    <div class="container-fluid">
      <div class="row">
        <div class="col relative">
          <div class="main-heading semibold anm-mt/ anm-mb/ m xxl-a">
            <h3 class="mb-xxl-a h-before-btm" data-aos="fade-in" data-aos-offset="100">
              <!-- <span class="dark anm mt"> -->
              Previous Blogs
              <!-- </span> -->
            </h3>
          </div>
          <div class="arrow-btn-top wow animate__animated animate__backInRight animate__delay-1s">
            <div class="swiper-button-next blog-previous-btn"></div>
            <div class="swiper-button-prev blog-previous-btn"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="swiper blog-slider-previous">
            <div class="swiper-wrapper">
              @if(isset($previousBlogs) && $previousBlogs->count() > 0)
              @foreach($previousBlogs as $prev)
                <div class="swiper-slide">
                  <div class="card">
                    <div class="">
                      <div class="img img-anm/" data-aos="fade-in">
                        @if($prev->photo)
                        <img loading="lazy" class="lazy border-radius" src="{{ asset('storage/blog_photos/' . $prev->photo) }}"  class="card-img-top" alt="{{ $prev->title }}">
                        @else
                        <img loading="lazy" class="lazy border-radius" src="asset/img/blogs/previous-slider/1-min.jpg" alt="">
                        @endif 
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row row-cols-1">
                        <div class="col">
                          <div class="blog-title mb">
                            {{ isset($prev) ? date('d F, Y', strtotime($prev->date)) : '06 March 2025' }}
                          </div>
                        </div>
                        <div class="col">
                          <div class="blog-heading semibold">
                            <h3 class="mb"> {{ isset($prev) ? $prev->title : 'Why Regular Calibration is Essential for Laboratory Equipment' }}
                            </h3>
                          </div>
                        </div>
                        <div class="col">
                          <div class="para mt">
                            <p>
                            {!! isset($prev) ? Str::limit(strip_tags($prev->content), 150) : 'Accurate measurements are critical in pharmaceutical and scientific industries.'!!} 
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="col">
                        <a href="{{ isset($prev) ? 'blogs/'.$prev->slug : '#'}}" class="btn btn-transparent ic-fx color-two blog-lg">
                          Read article <span class="icon"><i class="bi bi-arrow-right-circle"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              @else
              <div class="swiper-slide">
                <div class="card">
                  <div class="">
                    <div class="img img-anm/" data-aos="fade-in">
                      <!-- <div class="one"></div>
                                             <div class="two lg"></div> -->
                      <img loading="lazy" class="lazy border-radius" src="asset/img/blogs/previous-slider/1-min.jpg"
                        alt="">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row row-cols-1">
                      <div class="col">
                        <div class="blog-title mb">
                          06 March 2025
                        </div>
                      </div>
                      <div class="col">
                        <div class="blog-heading semibold">
                          <h3 class="mb">Why Regular Calibration is Essential
                            for Laboratory Equipment
                          </h3>
                        </div>
                      </div>
                      <div class="col">
                        <div class="para mt">
                          <p>
                            Accurate measurements are critical in pharmaceutical
                            and scientific industries.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="col">
                      <a href="#" class="btn btn-transparent ic-fx color-two blog-lg">
                        Read article <span class="icon"><i class="bi bi-arrow-right-circle"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="">
                    <div class="img img-anm/" data-aos="fade-in">
                      <!-- <div class="one"></div>
                                             <div class="two lg"></div> -->
                      <img loading="lazy" class="lazy border-radius" src="asset/img/blogs/previous-slider/2-min.jpg"
                        alt="">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row row-cols-1">
                      <div class="col">
                        <div class="blog-title mb">
                          06 March 2025
                        </div>
                      </div>
                      <div class="col">
                        <div class="blog-heading semibold">
                          <h3 class="mb">Why Regular Calibration is Essential
                            for Laboratory Equipment
                          </h3>
                        </div>
                      </div>
                      <div class="col">
                        <div class="para mt">
                          <p>
                            Accurate measurements are critical in pharmaceutical
                            and scientific industries.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="col">
                      <a href="#" class="btn btn-transparent ic-fx color-two blog-lg">
                        Read article <span class="icon"><i class="bi bi-arrow-right-circle"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="">
                    <div class="img img-anm/" data-aos="fade-in">
                      <!-- <div class="one"></div>
                                             <div class="two lg"></div> -->
                      <img loading="lazy" class="lazy border-radius" src="asset/img/blogs/previous-slider/3-min.jpg"
                        alt="">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row row-cols-1">
                      <div class="col">
                        <div class="blog-title mb">
                          06 March 2025
                        </div>
                      </div>
                      <div class="col">
                        <div class="blog-heading semibold">
                          <h3 class="mb">Why Regular Calibration is Essential
                            for Laboratory Equipment
                          </h3>
                        </div>
                      </div>
                      <div class="col">
                        <div class="para mt">
                          <p>
                            Accurate measurements are critical in pharmaceutical
                            and scientific industries.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="col">
                      <a href="#" class="btn btn-transparent ic-fx color-two blog-lg">
                        Read article <span class="icon"><i class="bi bi-arrow-right-circle"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="">
                    <div class="img img-anm/" data-aos="fade-in">
                      <!-- <div class="one"></div>
                                             <div class="two lg"></div> -->
                      <img loading="lazy" class="lazy border-radius" src="asset/img/blogs/previous-slider/1-min.jpg"
                        alt="">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row row-cols-1">
                      <div class="col">
                        <div class="blog-title mb">
                          06 March 2025
                        </div>
                      </div>
                      <div class="col">
                        <div class="blog-heading semibold">
                          <h3 class="mb">Why Regular Calibration is Essential
                            for Laboratory Equipment
                          </h3>
                        </div>
                      </div>
                      <div class="col">
                        <div class="para mt">
                          <p>
                            Accurate measurements are critical in pharmaceutical
                            and scientific industries.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="col">
                      <a href="#" class="btn btn-transparent ic-fx color-two blog-lg">
                        Read article <span class="icon"><i class="bi bi-arrow-right-circle"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection