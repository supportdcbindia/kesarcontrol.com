@extends('layouts.header')
@section('content')
  <section>
    <div class="breadcrumb-cst events-banner px" data-aos>
      <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2 align-items-center">
          <div class="col">
            <div class="left">
              <div class="heading">
                <h1 data-aos="fade-up">Event Gallery
                </h1>
              </div>
              <div class="para">
                <p data-aos="fade-up" data-aos-delay="200">Capturing milestones, achievements, and memorable
                  moments.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="right" data-aos="fade-up" data-aos-delay="300">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">
                      <svg width="31" height="24" viewBox="0 0 31 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M15.089 6.22623L5.16708 14.362V23.1428C5.16708 23.3701 5.25779 23.5882 5.41927 23.7489C5.58075 23.9097 5.79976 24 6.02812 24L12.0587 23.9845C12.2863 23.9833 12.5042 23.8925 12.6647 23.7319C12.8253 23.5712 12.9154 23.3538 12.9154 23.1272V17.9993C12.9154 17.772 13.0061 17.5539 13.1676 17.3932C13.3291 17.2324 13.5481 17.1421 13.7764 17.1421H17.2206C17.449 17.1421 17.668 17.2324 17.8295 17.3932C17.991 17.5539 18.0817 17.772 18.0817 17.9993V23.1235C18.0813 23.2363 18.1033 23.348 18.1464 23.4523C18.1896 23.5567 18.2529 23.6515 18.3329 23.7314C18.4129 23.8113 18.5079 23.8746 18.6126 23.9179C18.7172 23.9611 18.8294 23.9834 18.9427 23.9834L24.9711 24C25.1995 24 25.4185 23.9097 25.58 23.7489C25.7414 23.5882 25.8321 23.3701 25.8321 23.1428V14.3561L15.9124 6.22623C15.7958 6.13264 15.6505 6.08161 15.5007 6.08161C15.3509 6.08161 15.2056 6.13264 15.089 6.22623ZM30.7616 11.756L26.2627 8.06394V0.642929C26.2627 0.472414 26.1946 0.308882 26.0735 0.18831C25.9524 0.0677371 25.7882 0 25.6169 0H22.6032C22.432 0 22.2677 0.0677371 22.1466 0.18831C22.0255 0.308882 21.9574 0.472414 21.9574 0.642929V4.53318L17.1394 0.586673C16.677 0.207869 16.0968 0.000757234 15.498 0.000757234C14.8992 0.000757234 14.319 0.207869 13.8566 0.586673L0.234365 11.756C0.168973 11.8098 0.114871 11.8759 0.0751508 11.9505C0.0354308 12.0251 0.0108711 12.1068 0.0028749 12.1909C-0.00512131 12.275 0.00360275 12.3598 0.0285486 12.4406C0.0534944 12.5213 0.0941732 12.5963 0.14826 12.6614L1.52055 14.3223C1.57449 14.3876 1.64084 14.4417 1.71579 14.4814C1.79075 14.5212 1.87284 14.5458 1.95736 14.5539C2.04189 14.562 2.1272 14.5534 2.2084 14.5287C2.28959 14.5039 2.36509 14.4635 2.43057 14.4096L15.089 4.02956C15.2056 3.93597 15.3509 3.88494 15.5007 3.88494C15.6505 3.88494 15.7958 3.93597 15.9124 4.02956L28.5714 14.4096C28.6367 14.4635 28.7121 14.504 28.7932 14.5288C28.8743 14.5537 28.9595 14.5623 29.0439 14.5544C29.1284 14.5464 29.2104 14.522 29.2854 14.4824C29.3604 14.4429 29.4268 14.389 29.4808 14.3239L30.8531 12.663C30.9071 12.5976 30.9477 12.5221 30.9723 12.4411C30.997 12.36 31.0053 12.2748 30.9968 12.1906C30.9883 12.1063 30.9631 12.0245 30.9228 11.9499C30.8824 11.8753 30.8277 11.8094 30.7616 11.756Z"
                          fill="white" />
                      </svg>
                      Home
                    </a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page"><span>Event Gallery
                    </span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="px py tabs-swipe">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 px-0/">
            <input type="radio" id="button-1" name="tab" checked>
            <input type="radio" id="button-2" name="tab">
            <ul class="nav nav-pills mb" id="" role="tablist" data-aos="fade-in" data-aos-delay="400">
              <li></li>
              <div class="fx">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="tab-one" data-bs-toggle="pill" data-bs-target="#one" type="button"
                    role="tab" aria-controls="one" aria-selected="true">
                    <label for="button-1">
                      <span class="icon">
                        <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M10.2874 7.71431C10.2874 8.3963 10.0165 9.05035 9.53423 9.53259C9.052 10.0148 8.39794 10.2857 7.71596 10.2857C7.03397 10.2857 6.37992 10.0148 5.89768 9.53259C5.41545 9.05035 5.14453 8.3963 5.14453 7.71431C5.14453 7.03233 5.41545 6.37827 5.89768 5.89604C6.37992 5.4138 7.03397 5.14288 7.71596 5.14288C8.39794 5.14288 9.052 5.4138 9.53423 5.89604C10.0165 6.37827 10.2874 7.03233 10.2874 7.71431Z"
                            fill="black" />
                          <path
                            d="M3.42857 0C2.51926 0 1.64719 0.361224 1.00421 1.00421C0.361223 1.64719 0 2.51926 0 3.42857V20.5714C0 21.4807 0.361223 22.3528 1.00421 22.9958C1.64719 23.6388 2.51926 24 3.42857 24H24C24.9093 24 25.7814 23.6388 26.4244 22.9958C27.0673 22.3528 27.4286 21.4807 27.4286 20.5714V3.42857C27.4286 2.51926 27.0673 1.64719 26.4244 1.00421C25.7814 0.361224 24.9093 0 24 0H3.42857ZM24 1.71429C24.4547 1.71429 24.8907 1.8949 25.2122 2.21639C25.5337 2.53788 25.7143 2.97391 25.7143 3.42857V14.5714L19.2394 11.2337C19.0787 11.1532 18.8967 11.1252 18.7191 11.1539C18.5416 11.1825 18.3776 11.2662 18.2503 11.3931L11.8903 17.7531L7.33029 14.7154C7.16565 14.6058 6.96816 14.5565 6.77132 14.5759C6.57448 14.5953 6.3904 14.6821 6.25029 14.8217L1.71429 18.8571V3.42857C1.71429 2.97391 1.8949 2.53788 2.21639 2.21639C2.53788 1.8949 2.97391 1.71429 3.42857 1.71429H24Z"
                            fill="black" />
                        </svg>
                      </span>
                      <span class="ct">
                        Images
                      </span>
                    </label>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="tab-two" data-bs-toggle="pill" data-bs-target="#two" type="button"
                    role="tab" aria-controls="two" aria-selected="false">
                    <label for="button-2">
                      <span class="icon">
                        <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 4.8C0 3.52696 0.500445 2.30606 1.39124 1.40589C2.28204 0.505713 3.49022 3.32429e-08 4.75 3.32429e-08H22.5625C23.7146 -0.000136915 24.8275 0.422863 25.6939 1.19023C26.5603 1.95759 27.1212 3.01701 27.2721 4.1712L34.6584 0.8544C35.0199 0.691612 35.416 0.622713 35.8106 0.653965C36.2052 0.685218 36.5858 0.815631 36.9178 1.03335C37.2498 1.25107 37.5227 1.54919 37.7117 1.90062C37.9007 2.25204 37.9998 2.64563 38 3.0456V20.9544C37.9997 21.3541 37.9006 21.7473 37.7117 22.0984C37.5228 22.4496 37.2501 22.7475 36.9184 22.9652C36.5868 23.1828 36.2065 23.3133 35.8123 23.3448C35.418 23.3763 35.0222 23.3079 34.6608 23.1456L27.2721 19.8288C27.1212 20.983 26.5603 22.0424 25.6939 22.8098C24.8275 23.5771 23.7146 24.0001 22.5625 24H4.75C3.49022 24 2.28204 23.4943 1.39124 22.5941C0.500445 21.6939 0 20.473 0 19.2V4.8ZM27.3125 17.22L35.625 20.9544V3.0456L27.3125 6.78V17.22ZM4.75 2.4C4.12011 2.4 3.51602 2.65286 3.07062 3.10294C2.62522 3.55303 2.375 4.16348 2.375 4.8V19.2C2.375 19.8365 2.62522 20.447 3.07062 20.8971C3.51602 21.3471 4.12011 21.6 4.75 21.6H22.5625C23.1924 21.6 23.7965 21.3471 24.2419 20.8971C24.6873 20.447 24.9375 19.8365 24.9375 19.2V4.8C24.9375 4.16348 24.6873 3.55303 24.2419 3.10294C23.7965 2.65286 23.1924 2.4 22.5625 2.4H4.75Z"
                            fill="black" />
                        </svg>
                      </span>
                      <span class="ct">
                        Videos
                      </span>
                    </label>
                  </button>
                </li>
              </div>
              <li class="bg"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="">
              <div class="tab-pane fade show active images" id="one" role="tabpanel" aria-labelledby="tab-one"
                tabindex="0">
                <div class="row g justify-content-start">
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/31-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/31-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/29-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/29-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/6-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/6-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/8-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/8-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/20-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/20-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/19-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/19-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/14-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/14-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/30-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/30-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/28-min.jpg?v=1.0" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/28-min.jpg?v=1.0" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/12-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/12-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/11-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/11-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/3-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/3-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/4-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/4-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/16-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/16-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <!-- <div class="col-lg-4 col-md-6">
         <div class="img" data-aos="fade-in" data-aos-delay="450">
         <a href="asset/img/events/img/lg/18-min.jpg" data-fancybox="gallery">
         <img loading="lazy" class="lazy" src="asset/img/events/img/18-min.jpg" alt="">
         </a>
         </div>
         </div> -->
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/21-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/21-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/7-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/7-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/5-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/5-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/15-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/15-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/10-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/10-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/25-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/25-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/26-min.jpg?v=1.0" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/26-min.jpg?v=1.0" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/27-min.jpg?v=1.0" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/27-min.jpg?v=1.0" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/24-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/24-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/13-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/13-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <!-- <div class="col-lg-4 col-md-6">
         <div class="img" data-aos="fade-in" data-aos-delay="450">
         <a href="asset/img/events/img/lg/9-min.jpg" data-fancybox="gallery">
         <img loading="lazy" class="lazy" src="asset/img/events/img/9-min.jpg" alt="">
         </a>
         </div>
         </div> -->
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/17-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/17-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/22-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/22-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/23-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/23-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/1-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/1-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="img" data-aos="fade-in" data-aos-delay="450">
                      <a href="asset/img/events/img/lg/2-min.jpg" data-fancybox="gallery">
                        <img loading="lazy" class="lazy" src="asset/img/events/img/2-min.jpg" alt="">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade videos" id="two" role="tabpanel" aria-labelledby="tab-two" tabindex="0">
                <div class="row row-cols-1 g">
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="main-heading bold">
                          <h3 class="mb" data-aos="fade-up" data-aos-delay="100">
                            Events
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="row g justify-content-center/">
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/shorts/0gMGt-tXDpY" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/5-min.jpg?v=1.0" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/shorts/eHeMY69WCbo" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/6-min.jpg?v=1.0" alt="">
                          </a>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/shorts/QYif5kMJAYs" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/8-min.jpg?v=1.0" alt="">
                          </a>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://youtube.com/shorts/MCo-UwRqqPw?feature=shared" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/10-min.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://youtube.com/shorts/0worHJrbvwQ?feature=shared" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/11-min.jpg" alt="">
                          </a>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://youtube.com/shorts/YYvzUfxOmuM?feature=shared" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/12-min.jpg" alt="">
                          </a>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://youtube.com/shorts/eHeMY69WCbo?feature=shared" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/13-min.jpg" alt="">
                          </a>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/shorts/q7G2_a1Dgbo?feature=share" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/14-min.jpg" alt="">
                          </a>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://youtu.be/mRJXTezXZZ0" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/15-min.jpg" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="main-heading bold">
                          <h3 class="mb" data-aos="fade-up" data-aos-delay="100">
                            Equipments
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="row g justify-content-center/">
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/watch?v=HVVybe6Taho" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/1-min.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/watch?v=Gy1ox1THrIg" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/2-min.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/watch?v=0AmQT9mu2Do" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/3-min.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/shorts/MPX5UAVRE5c" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/7-min.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/shorts/ILNvEl-yChk" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/9-min.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="img" data-aos="fade-in" data-aos-delay="450">
                          <a href="https://www.youtube.com/watch?v=EkLHd3XrxN0" data-fancybox="gallery">
                            <img loading="lazy" class="lazy" src="asset/img/events/videos/poster/4-min.jpg" alt="">
                          </a>
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
    </div>
  </section>
@endsection