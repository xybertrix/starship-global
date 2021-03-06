<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../static/slick-1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../static/slick-1.8.1/slick/slick-theme.css"
    />
    <link rel="stylesheet" href="../static/style.css" />
    <title>Starship Global</title>
    <style>
      .slider {
        width: 100%;
      }

      .slick-slide {
        margin: 0px 20px;
      }

      .slildeshow__container__element {
        display: flex !important;
        justify-content: center;
      }

      .slick-slide {
        transition: all ease-in-out 0.3s;
        opacity: 0.2;
      }
      .slick-slide > div {
        display: flex;
        justify-content: center;
      }

      .slick-active {
        opacity: 0.5;
      }

      .slick-current {
        opacity: 1;
      }

      @media (max-width: 1024px) {
        .site__services__serices-list {
          display: none;
        }
        .site__services__serices-list-mobile {
          display: block;
        }
      }
      @media (min-width: 1024px) {
        .site__slideshow__inner {
          display: flex !important;
        }
        .site__services__serices-list {
          display: block;
        }
        .site__services__serices-list-mobile {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <!-- SITE HEADER -->
    <header class="site__header my-2 grid place-items-center">
      <div
        class="site__header__inner md:px-5 xl:px-28 flex justify-between w-full max-w-screen-2xl"
      >
        <!-- branding -->
        <div class="site__header__branding flex items-center">
          <div class="header__branding__logo">
            <img src="../static/img/logo.png" class="w-14" alt="" />
          </div>
          <div class="header__branding__name">
            <span class="text-xl font-serif font-bold text-primary"
              >Starship</span
            >
            <span class="text-xl font-serif font-bold">Global</span>
            <div class="font-serif text-sm font-semibold">
              Logistics built to perfection
            </div>
          </div>
        </div>

        <!-- header navigation -->
        <nav class="site__header__nav flex items-center">
          <a
            href="#services"
            class="pr-5 cursor-pointer text-sm font-serif font-semibold opacity-50 hover:opacity-100"
          >
            Services
          </a>
          <a
            href="#vision_mission"
            class="pr-5 cursor-pointer text-sm font-serif font-semibold opacity-50 hover:opacity-100"
          >
            Vision & Mission
          </a>
          <a
            href="#social_responsibility"
            class="pr-5 cursor-pointer text-sm font-serif font-semibold opacity-50 hover:opacity-100"
          >
            Social Responsibility
          </a>
          <a
            href="#contact"
            class="pr-5 cursor-pointer text-sm font-serif font-semibold opacity-50 hover:opacity-100"
          >
            Contact
          </a>
        </nav>
      </div>
    </header>

    <!-- SITE SLIDESHOW -->
    <div id="slideshow" class="site__slideshow slider flex justify-center">
      <div
        class="site__slideshow__inner md:px-5 xl:px-28 py-4 relative max-w-screen-2xl"
      >
        <!-- slide description -->
        <div
          class="site__slildeshow__content p-5 sm:hidden lg:flex flex-col items-center justify-center w-4/12"
        >
          <div>
            <div class="mb-3 text-3xl font-serif font-bold">
              Welcome to ???Starship Global???
            </div>
            <div class="mb-10 font-serif font-semibold">
              Our services span from Freight Forwarding to Logistic services. We
              can proudly provide complete end to end supply chain solutions to
              all our customers. Come lets move your business forward.
            </div>
          </div>
        </div>

        <!-- slide image -->
        <div
          class="site__slildeshow__container bg-primary p-2 rounded-lg lg:w-8/12"
        >
          <div class="slildeshow__container__element relative">
            <img
              style="max-height: 432px"
              src="../static/img/slideshow/Welcome.jpg"
              class="rounded-lg"
              alt=""
            />
            <div class="sm:block lg:hidden absolute top-0">
              <div class="mb-3 text-center text-3xl font-serif font-bold">
                Welcome to ???Starship Global???
              </div>
              <div class="mb-10 text-center font-serif font-semibold">
                Our services span from Freight Forwarding to Logistic services.
                We can proudly provide complete end to end supply chain
                solutions to all our customers. Come lets move your business
                forward.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="site__slideshow__inner md:px-5 xl:px-28 py-4 relative max-w-screen-2xl"
      >
        <!-- slide description -->
        <div
          class="site__slildeshow__content p-5 sm:hidden lg:flex flex-col items-center justify-center w-4/12"
        >
          <div>
            <div class="mb-3 text-3xl font-serif font-bold">
              Apparels
            </div>
            <div class="mb-10 font-serif font-semibold">
              From inception Starship Global has been helping amazing brands to
              grow. Good information leads to good decisions. We have solutions
              for the challenges you face.
            </div>
          </div>
        </div>

        <!-- slide image -->
        <div
          class="site__slildeshow__container bg-primary p-2 rounded-lg lg:w-8/12"
        >
          <div class="slildeshow__container__element relative">
            <img
              style="max-height: 432px"
              src="../static/img/slideshow/Garments .jpg"
              class="rounded-lg"
              alt=""
            />
            <div class="sm:block lg:hidden absolute top-0">
              <div class="mb-3 text-center text-3xl font-serif font-bold">
                Apparels
              </div>
              <div class="mb-10 text-center font-serif font-semibold">
                From inception Starship Global has been helping amazing brands
                to grow. Good information leads to good decisions. We have
                solutions for the challenges you face.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="site__slideshow__inner md:px-5 xl:px-28 py-4 relative lg:flex max-w-screen-2xl"
      >
        <!-- slide description -->
        <div
          class="site__slildeshow__content p-5 sm:hidden lg:flex flex-col items-center justify-center w-4/12"
        >
          <div>
            <div class="mb-3 text-3xl font-serif font-bold">
              High Tech Instruments and Accessories
            </div>
            <div class="mb-10 font-serif font-semibold">
              Are you looking for the best way to ship or air freight your cargo
              ?
            </div>
          </div>
        </div>

        <!-- slide image -->
        <div
          class="site__slildeshow__container bg-primary p-2 rounded-lg lg:w-8/12"
        >
          <div class="slildeshow__container__element relative">
            <img
              style="max-height: 432px"
              src="../static/img/slideshow/Tech .jpg"
              class="rounded-lg"
              alt=""
            />
            <div class="sm:block lg:hidden absolute top-0">
              <div class="mb-3 text-center text-3xl font-serif font-bold">
                High Tech Instruments and Accessories
              </div>
              <div class="mb-10 text-center font-serif font-semibold">
                Are you looking for the best way to ship or air freight your
                cargo ?
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="site__slideshow__inner md:px-5 xl:px-28 py-4 relative lg:flex max-w-screen-2xl"
      >
        <!-- slide description -->
        <div
          class="site__slildeshow__content p-5 sm:hidden lg:flex flex-col items-center justify-center w-4/12"
        >
          <div>
            <div class="mb-3 text-3xl font-serif font-bold">
              Personal Effects
            </div>
            <div class="mb-10 font-serif font-semibold">
              Wherever your cargo needs to be ??? we carry it there to support you
              in every step of the journey, whether it be Inland Haulage,
              Airfreight or Sea Freight. Get in touch and we will find the
              fastest, secure and the most cost effective solutions to transport
              your personal belongings. We will make sure your goods arrive safe
              and sound at its destination.
            </div>
          </div>
        </div>

        <!-- slide image -->
        <div
          class="site__slildeshow__container bg-primary p-2 rounded-lg lg:w-8/12"
        >
          <div class="slildeshow__container__element relative">
            <img
              style="max-height: 432px"
              src="../static/img/slideshow/Customs.jpg"
              class="rounded-lg"
              alt=""
            />
            <div class="sm:block lg:hidden absolute top-0">
              <div class="mb-3 text-center text-3xl font-serif font-bold">
                Personal Effects
              </div>
              <div class="mb-10 text-center font-serif font-semibold">
                Wherever your cargo needs to be ??? we carry it there to support
                you in every step of the journey, whether it be Inland Haulage,
                Airfreight or Sea Freight. Get in touch and we will find the
                fastest, secure and the most cost effective solutions to
                transport your personal belongings. We will make sure your goods
                arrive safe and sound at its destination.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="site__slideshow__inner md:px-5 xl:px-28 py-4 relative lg:flex max-w-screen-2xl"
      >
        <!-- slide description -->
        <div
          class="site__slildeshow__content p-5 sm:hidden lg:flex flex-col items-center justify-center w-4/12"
        >
          <div>
            <div class="mb-3 text-3xl font-serif font-bold">
              Hazardous Cargo
            </div>
            <div class="mb-10 font-serif font-semibold">
              Starship is underpinned with a team of expertise, specialized in
              handling your special needs, with precise planning and on time
              deliveries for your Hazardous Cargo, so if you haven???t already
              talked-to-us, you are most welcome to start experiencing the
              better results when working with ??? Passionate about safety family
              ???
            </div>
          </div>
        </div>

        <!-- slide image -->
        <div
          class="site__slildeshow__container bg-primary p-2 rounded-lg lg:w-8/12"
        >
          <div class="slildeshow__container__element relative">
            <img
              style="max-height: 432px"
              src="../static/img/slideshow/Chemicals.jpg"
              class="rounded-lg"
              alt=""
            />
            <div class="sm:block lg:hidden absolute top-0">
              <div class="mb-3 text-center text-3xl font-serif font-bold">
                Hazardous Cargo
              </div>
              <div class="mb-10 text-center font-serif font-semibold">
                Starship is underpinned with a team of expertise, specialized in
                handling your special needs, with precise planning and on time
                deliveries for your Hazardous Cargo, so if you haven???t already
                talked-to-us, you are most welcome to start experiencing the
                better results when working with ??? Passionate about safety
                family ???
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="site__slideshow__inner md:px-5 xl:px-28 py-4 relative lg:flex max-w-screen-2xl"
      >
        <!-- slide description -->
        <div
          class="site__slildeshow__content p-5 sm:hidden lg:flex flex-col items-center justify-center w-4/12"
        >
          <div>
            <div class="mb-3 text-3xl font-serif font-bold">
              Fruits and Vegetables
            </div>
            <div class="mb-10 font-serif font-semibold">
              Starship Global has crafted a new innovation into the category and
              delivering your fresh produce through the most efficient
              distribution channels. We inimitably offer total management of the
              production value chain from ???Field to Fork ???.
            </div>
          </div>
          <!-- <div
          class="cursor-pointer font-serif uppercase font-bold text-primary"
        >
          Place Inquiry
        </div> -->
        </div>

        <!-- slide image -->
        <div
          class="site__slildeshow__container bg-primary p-2 rounded-lg lg:w-8/12"
        >
          <div class="slildeshow__container__element relative">
            <img
              style="max-height: 432px"
              src="../static/img/slideshow/Vegetable 1.jpg"
              class="rounded-lg"
              alt=""
            />
            <div class="sm:block lg:hidden absolute top-0">
              <div class="mb-3 text-center text-3xl font-serif font-bold">
                Fruits and Vegetables
              </div>
              <div class="mb-10 text-center font-serif font-semibold">
                Starship Global has crafted a new innovation into the category
                and delivering your fresh produce through the most efficient
                distribution channels. We inimitably offer total management of
                the production value chain from ???Field to Fork ???.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="site__slideshow__inner md:px-5 xl:px-28 py-4 relative lg:flex max-w-screen-2xl"
      >
        <!-- slide description -->
        <div
          class="site__slildeshow__content p-5 sm:hidden lg:flex flex-col items-center justify-center w-4/12"
        >
          <div>
            <div class="mb-3 text-3xl font-serif font-bold">
              Tuna Fish
            </div>
            <div class="mb-10 font-serif font-semibold">
              Guaranteed temperature through-out its journey until delivery to
              consignee.
            </div>
          </div>
        </div>

        <!-- slide image -->
        <div
          class="site__slildeshow__container bg-primary p-2 rounded-lg lg:w-8/12"
        >
          <div class="slildeshow__container__element relative">
            <img
              style="max-height: 432px"
              src="../static/img/slideshow/fish-on-ice.jpg"
              class="rounded-lg"
              alt=""
            />
            <div class="sm:block lg:hidden absolute top-0">
              <div class="mb-3 text-center text-3xl font-serif font-bold">
                Tuna Fish
              </div>
              <div class="mb-10 text-center font-serif font-semibold">
                Guaranteed temperature through-out its journey until delivery to
                consignee.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="site__slideshow__inner md:px-5 xl:px-28 py-4 relative lg:flex max-w-screen-2xl"
      >
        <!-- slide description -->
        <div
          class="site__slildeshow__content p-5 sm:hidden lg:flex flex-col items-center justify-center w-4/12"
        >
          <div>
            <div class="mb-3 text-3xl font-serif font-bold">
              Cut Foliage and Live Plants
            </div>
            <div class="mb-10 font-serif font-semibold">
              Freshness will be guaranteed no matter where the final destination
              is.
            </div>
          </div>
        </div>

        <!-- slide image -->
        <div
          class="site__slildeshow__container bg-primary p-2 rounded-lg lg:w-8/12"
        >
          <div class="slildeshow__container__element relative">
            <img
              style="max-height: 432px"
              src="../static/img/slideshow/Cut Flowers.jpg"
              class="rounded-lg"
              alt=""
            />
            <div class="sm:block lg:hidden absolute top-0">
              <div class="mb-3 text-center text-3xl font-serif font-bold">
                Cut Foliage and Live Plants
              </div>
              <div class="mb-10 text-center font-serif font-semibold">
                Freshness will be guaranteed no matter where the final
                destination is.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SITE SERVICES -->
    <div id="services" class="site__services flex justify-center">
      <div
        class="site__services__inner md:px-5 xl:px-28 py-10 max-w-screen-2xl"
      >
        <div class="site__services__header mb-5 relative">
          <div
            class="services__header__watermark font-serif font-bold text-7xl text-primary opacity-30"
          >
            Starship Global
          </div>
          <div
            class="services__header__header absolute top-7 font-serif font-bold text-lg"
          >
            Our Services
          </div>
        </div>
        <div class="site__services__serices-list">
          <div
            class="services__serices-list__service mb-3 pl-10 py-5 border-l-4 border-primary flex"
          >
            <div class="services-list__service__images w-5/12">
              <img
                class="rounded-lg lg:w-72 xl:w-80"
                src="../static/img/Cargo Hold 2.jpg"
                alt=""
              />
              <img
                class="rounded-lg ml-28 lg:-mt-5 xl:-mt-12 lg:w-72 xl:w-80"
                src="../static/img/Air Cargo 3.jpg"
                alt=""
              />
            </div>
            <div
              class="services-list__service__description ml-6 flex flex-col justify-center w-7/12"
            >
              <div class="mb-3 font-serif font-bold text-xl">Air Freight</div>
              <div class="mb-5 font-serif font-semibold">
                Design, implement and deliver un-presidential Air Freight
                solutions for Organizations of different sizes and various
                industries locally and internationally. Greater visibility,
                personalized service along with unmatchable freight rates will
                contribute to increase your bottom lines.
              </div>
              <div class="mb-3 font-serif font-bold">Advantages</div>
              <ul class="ml-3 font-serif">
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Specialized in handling Perishables.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Facilitate Cross Country Logistics.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Trained and certified staff for Hazardous Cargo Handling.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Comprehensive Insurance Cover.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Digital tracking systems.
                </li>
              </ul>
            </div>
          </div>
          <div
            class="services__serices-list__service mb-3 pr-3 py-5 border-r-4 border-primary flex items-center"
          >
            <div
              class="services-list__service__description mr-6 flex flex-col justify-center w-7/12"
            >
              <div class="mb-3 font-serif font-bold text-xl">Sea Freight</div>
              <div class="mb-5 font-serif font-semibold">
                Pioneering cost effective transportation solutions provider from
                one cubic meter to chartering a vessel. You can count on our
                services on Government formalities, Banking Requirements locally
                and internationally.
              </div>
              <div class="mb-3 font-serif font-bold">Advantages</div>
              <ul class="ml-3 font-serif">
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Sea-Air Service.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Consolidation.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Ability to obtain extended LCL and FCL Cut-off times.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Greater Visibility.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Door-To-Door Deliveries.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Comprehensive Insurance Cover.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >On-line track and trace.
                </li>
              </ul>
            </div>
            <div class="services-list__service__images w-5/12">
              <img
                class="rounded-lg lg:w-72 xl:w-80"
                src="../static/img/Vessel.jpg"
                alt=""
              />
              <img
                class="rounded-lg ml-28 lg:-mt-5 xl:-mt-12 lg:w-72 xl:w-80"
                src="../static/img/Port Terminal  444.jpg"
                alt=""
              />
            </div>
          </div>
          <div
            class="services__serices-list__service mb-3 pl-10 py-5 border-l-4 border-primary flex"
          >
            <div class="services-list__service__images w-5/12">
              <img
                class="rounded-lg max-h-96"
                src="../static/img/Wharehousing.jpg"
                alt=""
              />
              <img
                class="rounded-lg ml-28 -mt-32 max-h-96"
                src="../static/img/boxes-shelves-in-warehouse 2.jpg"
                alt=""
              />
            </div>
            <div
              class="services-list__service__description ml-6 flex flex-col justify-center w-7/12"
            >
              <div class="mb-3 font-serif font-bold text-xl">Warehousing</div>
              <div class="mb-5 font-serif font-semibold">
                A fully computerized state of the art facility is manned by
                trained staff, who efficiently control 50,000 sq ft of storage
                space with a specially demarcated area for temperature sensitive
                cargo. Situated within the Colombo city limits which is in close
                proximately to the Port Access road and Colombo Airport Express
                way, The facility would be managed by well-experienced and
                committed staff, who would work around the clock in meeting your
                requirements.
              </div>
              <div class="mb-3 font-serif font-bold">Advantages</div>
              <ul class="ml-3 font-serif">
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Extended LCL and FCL Cut-off times.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Maximize utilization of containers.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Significant Cost Savings.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Comprehensive Insurance Cover.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Survey report on Damage Cargo.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Transportation of stuffed containers to the terminals loading
                  stack.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Twenty four hour operation.
                </li>
              </ul>
            </div>
          </div>
          <div
            class="services__serices-list__service mb-3 pr-3 py-5 border-r-4 border-primary flex items-center"
          >
            <div
              class="services-list__service__description mr-6 flex flex-col justify-center w-7/12"
            >
              <div class="mb-3 font-serif font-bold text-xl">
                Inland Haulage
              </div>
              <div class="mb-5 font-serif font-semibold">
                Transportation solution to move your business forward. Starship
                Global own and operate a modern fleet of Heavy Haulage Vehicles
                and Light Trucks with GPS Tracking Systems and VHF ???
                Communications for greater visibility. In addition to our own
                vehicles we have a fleet of outsourced vehicles enabling us to
                serve you effectively and efficiently.
              </div>
              <div class="mb-3 font-serif font-bold">Advantages</div>
              <ul class="ml-3 font-serif">
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Specialized in Frozen and Temperature Controlled
                  Transportation.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >24 x 7 Operations.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Friendly and Flexible team of people to contact around the
                  clock.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Comprehensive Insurance Cover.
                </li>
              </ul>
            </div>
            <div class="services-list__service__images w-5/12">
              <img
                class="rounded-lg lg:w-80 xl:w-96"
                src="../static/img/Transport .jpg"
                alt=""
              />
            </div>
          </div>
          <div
            class="services__serices-list__service mb-3 pl-10 py-5 border-l-4 border-primary flex"
          >
            <div class="services-list__service__images w-5/12">
              <img
                class="rounded-lg max-h-96"
                src="../static/img/Wharehousing.jpg"
                alt=""
              />
              <img
                class="rounded-lg ml-28 -mt-32 max-h-96"
                src="../static/img/boxes-shelves-in-warehouse 2.jpg"
                alt=""
              />
            </div>
            <div
              class="services-list__service__description ml-6 flex flex-col justify-center w-7/12"
            >
              <div class="mb-3 font-serif font-bold text-xl">Project Cargo</div>
              <div class="mb-5 font-serif font-semibold">
                Explain your project and its requirements, we will take the
                initiative to find new and inventive ways to solve your
                challenges.
              </div>
              <div class="mb-3 font-serif font-bold">Advantages</div>
              <ul class="ml-3 font-serif">
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Extended LCL and FCL Cut-off times.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Maximize utilization of containers.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Significant Cost Savings.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Comprehensive Insurance Cover.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Survey report on Damage Cargo.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Transportation of stuffed containers to the terminals loading
                  stack.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Twenty four hour operation.
                </li>
              </ul>
            </div>
          </div>
          <div
            class="services__serices-list__service mb-3 pr-3 py-5 border-r-4 border-primary flex items-center"
          >
            <div
              class="services-list__service__description mr-6 flex flex-col justify-center w-7/12"
            >
              <div class="mb-3 font-serif font-bold text-xl">
                Customs Brokerage
              </div>
              <div class="mb-5 font-serif font-semibold">
                Specializing in meeting your varied requirements in the Customs
                Brokerage Spheres. Your Starship Global team is well versed in
                guiding you from;
              </div>
              <ul class="ml-3 font-serif">
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Registering your company as an Importer or Exporter.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Educating you of Prevailing Rules and the regulation in the
                  country,
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Assisting you in documentation process,
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Negotiating Customs Duties and Taxes.
                </li>
              </ul>
              <div class="mt-5 font-serif font-semibold">
                You will be rest assured that your valuable goods will be
                delivered to your door step.
              </div>
            </div>
            <div
              class="services-list__service__images w-5/12 flex justify-center"
            >
              <img
                class="rounded-lg max-h-96"
                src="../static/img/Courrier 2.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="site__services__serices-list-mobile">
          <!-- service #1 -->
          <div
            class="services__serices-list__service mb-3 pl-10 py-5 border-l-4 border-primary"
          >
            <div class="services-list__service__images flex">
              <img
                class="rounded-lg md:w-72 xl:w-80"
                src="../static/img/Cargo Hold 2.jpg"
                alt=""
              />
              <div class="">
                <div class="mb-3 font-serif font-bold text-xl">Air Freight</div>
                <div class="mb-5 font-serif font-semibold">
                  Design, implement and deliver un-presidential Air Freight
                  solutions for Organizations of different sizes and various
                  industries locally and internationally. Greater visibility,
                  personalized service along with unmatchable freight rates will
                  contribute to increase your bottom lines.
                </div>
              </div>
            </div>
            <div class="services-list__service__description flex">
              <div class="">
                <div class="mb-3 font-serif font-bold">Advantages</div>
                <ul class="ml-3 font-serif">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Specialized in handling Perishables.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Facilitate Cross Country Logistics.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Trained and certified staff for Hazardous Cargo Handling.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Comprehensive Insurance Cover.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Digital tracking systems.
                  </li>
                </ul>
              </div>
              <img
                class="rounded-lg md:w-72 xl:w-80"
                src="../static/img/Air Cargo 3.jpg"
                alt=""
              />
            </div>
          </div>

          <!-- service #2 -->
          <div
            class="services__serices-list__service mb-3 pr-3 py-5 border-r-4 border-primary"
          >
            <div class="services-list__service__description flex">
              <div class="">
                <div class="mb-3 font-serif font-bold text-xl">Sea Freight</div>
                <div class="mb-5 font-serif font-semibold">
                  Pioneering cost effective transportation solutions provider
                  from one cubic meter to chartering a vessel. You can count on
                  our services on Government formalities, Banking Requirements
                  locally and internationally.
                </div>
              </div>
              <img
                class="rounded-lg md:w-72"
                src="../static/img/Port Terminal  444.jpg"
                alt=""
              />
            </div>
            <div class="services-list__service__images flex">
              <img class="rounded-lg md:w-72" src="../static/img/Vessel .jpg" alt="" />
              <div class="">
                <div class="mb-3 font-serif font-bold">Advantages</div>
                <ul class="ml-3 font-serif">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Sea-Air Service.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Consolidation.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Ability to obtain extended LCL and FCL Cut-off times.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Greater Visibility.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Door-To-Door Deliveries.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Comprehensive Insurance Cover.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >On-line track and trace.
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- service #3 -->
          <div
            class="services__serices-list__service mb-3 pl-10 py-5 border-l-4 border-primary"
          >
            <div class="services-list__service__images flex">
              <img
                class="rounded-lg max-h-96"
                src="../static/img/Wharehousing.jpg"
                alt=""
              />
              <div class="">
                <div class="mb-3 font-serif font-bold text-xl">Warehousing</div>
                <div class="mb-5 font-serif font-semibold">
                  A fully computerized state of the art facility is manned by
                  trained staff, who efficiently control 50,000 sq ft of storage
                  space with a specially demarcated area for temperature
                  sensitive cargo. Situated within the Colombo city limits which
                  is in close proximately to the Port Access road and Colombo
                  Airport Express way, The facility would be managed by
                  well-experienced and committed staff, who would work around
                  the clock in meeting your requirements.
                </div>
              </div>
            </div>
            <div class="services-list__service__description flex">
              <div class="">
                <div class="mb-3 font-serif font-bold">Advantages</div>
                <ul class="ml-3 font-serif">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Extended LCL and FCL Cut-off times.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Maximize utilization of containers.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Significant Cost Savings.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Comprehensive Insurance Cover.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Survey report on Damage Cargo.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Transportation of stuffed containers to the terminals
                    loading stack.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Twenty four hour operation.
                  </li>
                </ul>
              </div>
              <img
                class="rounded-lg max-h-96"
                src="../static/img/boxes-shelves-in-warehouse 2.jpg"
                alt=""
              />
            </div>
          </div>

          <!-- services #4 -->
          <div
            class="services__serices-list__service mb-3 pr-3 py-5 border-r-4 border-primary flex items-center"
          >
            <div
              class="services-list__service__description mr-6 flex flex-col justify-center w-7/12"
            >
              <div class="mb-3 font-serif font-bold text-xl">
                Inland Haulage
              </div>
              <div class="mb-5 font-serif font-semibold">
                Transportation solution to move your business forward. Starship
                Global own and operate a modern fleet of Heavy Haulage Vehicles
                and Light Trucks with GPS Tracking Systems and VHF ???
                Communications for greater visibility. In addition to our own
                vehicles we have a fleet of outsourced vehicles enabling us to
                serve you effectively and efficiently.
              </div>
              <div class="mb-3 font-serif font-bold">Advantages</div>
              <ul class="ml-3 font-serif">
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Specialized in Frozen and Temperature Controlled
                  Transportation.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >24 x 7 Operations.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Friendly and Flexible team of people to contact around the
                  clock.
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mr-3 inline-block h-4 w-4 text-primary"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    /></svg
                  >Comprehensive Insurance Cover.
                </li>
              </ul>
            </div>
            <div class="services-list__service__images w-5/12">
              <img
                class="rounded-lg lg:w-80 xl:w-96"
                src="../static/img/Transport .jpg"
                alt=""
              />
            </div>
          </div>

          <!-- services #5 -->
          <div
            class="services__serices-list__service mb-3 pl-10 py-5 border-l-4 border-primary"
          >
            <div class="services-list__service__images flex">
              <img
                class="rounded-lg max-h-96"
                src="../static/img/Wharehousing.jpg"
                alt=""
              />
              <div class="">
                <div class="mb-3 font-serif font-bold text-xl">
                  Project Cargo
                </div>
                <div class="mb-5 font-serif font-semibold">
                  Explain your project and its requirements, we will take the
                  initiative to find new and inventive ways to solve your
                  challenges.
                </div>
              </div>
            </div>
            <div class="services-list__service__description flex">
              <div class="">
                <div class="mb-3 font-serif font-bold">Advantages</div>
                <ul class="ml-3 font-serif">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Extended LCL and FCL Cut-off times.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Maximize utilization of containers.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Significant Cost Savings.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Comprehensive Insurance Cover.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Survey report on Damage Cargo.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Transportation of stuffed containers to the terminals
                    loading stack.
                  </li>
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mr-3 inline-block h-4 w-4 text-primary"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      /></svg
                    >Twenty four hour operation.
                  </li>
                </ul>
              </div>
              <img
                class="rounded-lg max-h-96"
                src="../static/img/boxes-shelves-in-warehouse 2.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SITE VISION AND MISSION -->
    <div
      id="vision_mission"
      class="site__vision-and-mission flex justify-center"
    >
      <div
        class="site__vision-and-mission__inner md:px-5 xl:px-28 py-10 max-w-screen-2xl"
      >
        <div class="site__vision-and-mission__header mb-5 relative">
          <div
            class="vision-and-mission__header__watermark font-serif font-bold text-7xl text-white opacity-30"
          >
            Starship Global
          </div>
          <div
            class="vision-and-mission__header__header absolute top-7 font-serif text-white font-bold text-lg"
          >
            Vision and Mission
          </div>
        </div>
        <div class="site__vision-and-mission__container">
          <!-- vision -->
          <div
            class="site__vision-and-mission__vision p-5 bg-opacity-20 bg-primary rounded-lg w-7/12"
          >
            <div class="mb-3 font-serif text-lg font-bold text-white">
              Vision
            </div>
            <div class="font-serif text-white">To be a Leader.</div>
          </div>

          <!-- mission -->
          <div
            class="site__vision-and-mission__mission -mt-5 md:ml-40 lg:ml-96 p-5 bg-opacity-20 bg-primary rounded-lg"
          >
            <div class="mb-3 font-serif text-lg font-bold text-white">
              Mission
            </div>
            <div class="font-serif text-white">
              Specialize in tailoring logistic solutions for businesses and
              individuals with the objective of creating efficient, timely
              service packages. Creating awareness of possible services at
              reasonable rates and customer satisfaction
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SITE SOCIAL RESPONSIBILITY -->
    <div
      id="social_responsibility"
      class="site__social-responsibility flex justify-center"
    >
      <div
        class="site__social-responsibility__inner md:px-5 xl:px-28 py-10 max-w-screen-2xl"
      >
        <div class="site__social-responsibility__header mb-5 relative">
          <div
            class="social-responsibility__header__watermark font-serif font-bold text-7xl text-primary opacity-30"
          >
            Starship Global
          </div>
          <div
            class="social-responsibility__header__header absolute top-7 font-serif font-bold text-lg"
          >
            Social Responsibility
          </div>
        </div>
        <div class="mb-3 pl-10 py-5 border-l-4 border-primary flex">
          <div
            class="site__social-responsibility__images md:hidden lg:block w-5/12"
          >
            <img
              class="rounded-lg w-96"
              src="../static/img/Social Responsibility.jpg"
              alt=""
            />
          </div>
          <div
            class="site__social-responsibility__description ml-6 flex flex-col justify-center md:w-full lg:w-7/12"
          >
            <div class="mb-5 font-serif font-semibold">
              Starship Global affects meaningful, long-term transformation in
              communities around Sri Lanka through charitable donations,
              collaboration with nonprofit groups, in-kind grants, and employee
              volunteerism.
            </div>
            <ul class="ml-3 font-serif">
              <li>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="mr-3 inline-block h-4 w-4 text-primary"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"
                  /></svg
                >We donate educational materials to students in the Horana
                education zone annually enabling and encouraging opportunity for
                growth..
              </li>
              <li>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="mr-3 inline-block h-4 w-4 text-primary"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"
                  /></svg
                >We currently work towards educating young children at Orphaned
                Children???s Village in Piliyandala, striving to provide a child
                with a warm and secure family environment, because we believe
                equipping a child to receive an education whilst focusing on
                their mental health will prepare them for an independent life..
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- SITE CONTACT -->
    <div id="contact" class="site__contact flex justify-center bg-primary">
      <div class="site__contact__inner md:px-5 xl:px-28 py-10 max-w-screen-2xl">
        <div class="site__contact__header mb-5 relative">
          <div
            class="contact__header__watermark font-serif font-bold text-7xl text-white opacity-30"
          >
            Starship Global
          </div>
          <div
            class="contact__header__header absolute top-7 font-serif font-bold text-lg"
          >
            Talk To Us
          </div>
        </div>
        <div class="site__contact__form">
          <div class="mb-3 font-serif">
            Your request is very important to us and we are always ready to
            answer your questions, so please feel free to send us your
            inquiries, suggestions or any question by using the below form.
          </div>
          <form action="send_mail.php" method="post" class="flex">
            <div class="mr-3 w-6/12">
              <label class="block mb-1 font-serif font-semibold" for=""
                >Company name</label
              >
              <input
                class="mb-4 p-2 rounded-lg w-full block font-serif"
                type="text"
                name="compnay_name"
                id=""
                placeholder="company name"
              />
              <label class="block mb-1 font-serif font-semibold" for=""
                >Name of the contact person</label
              >
              <input
                class="mb-4 p-2 rounded-lg w-full block font-serif"
                type="text"
                name="contact_person_name"
                id=""
                placeholder="name"
              />
              <label class="block mb-1 font-serif font-semibold" for=""
                >Your contact number</label
              >
              <input
                class="mb-4 p-2 rounded-lg w-full block font-serif"
                type="tel"
                name="contact_number"
                id=""
                placeholder="mobile"
              />
              <label class="block mb-1 font-serif font-semibold" for=""
                >Email Address</label
              >
              <input
                class="p-2 rounded-lg w-full block font-serif"
                type="email"
                name="email_address"
                id=""
                placeholder="email"
              />
            </div>
            <div class="ml-3 w-6/12">
              <label class="block mb-1 font-serif font-semibold" for="inquiry"
                >Your Inquiry</label
              >
              <textarea
                class="mb-4 p-2 rounded-lg w-full block font-serif"
                name="inquiry"
                cols="30"
                rows="8"
                placeholder="your inquiry"
              ></textarea>
              <input
                class="px-7 py-2 border-2 border-black rounded-lg block cursor-pointer text-sm font-semibold font-serif uppercase bg-primary"
                type="submit"
                value="Place Inquiry"
              />
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="flex justify-center">
      <div class="md:px-5 xl:px-28 py-10 max-w-screen-2xl w-full">
        <iframe
          id="location-map"
          frameborder="0"
          class="rounded-lg md:w-full"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
        <div class="site__contact__contact-info p-5">
          <div class="contact-info__addresses__info my-5 pb-3 border-b-2 flex">
            <div class="addresses__info__email flex w-6/12 transition-all">
              <div class="mr-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 text-primary"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"
                  />
                  <path
                    d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                  />
                </svg>
              </div>
              <div class="font-serif text-sm font-semibold">
                talk-to-us@starship-global.com
              </div>
            </div>
          </div>

          <div class="contact__contact-info__addresses md:flex">
            <div
              class="contact-info__addresses__address hover:border-l-4 border-primary hover:pl-3 md:w-6/12 transition-all"
            >
              <div class="mb-5 font-serif font-bold">Office Address</div>
              <div class="contact-info__addresses__addresses-1 mb-3 flex">
                <div class="mr-2 w-max">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="text-primary w-5 h-5"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="3"
                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="3"
                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                  </svg>
                </div>
                <div
                  id="addr-1"
                  class="font-serif cursor-pointer font-semibold text-sm"
                >
                  No 123, 2nd Floor, McLerance Building, Colombo ??? 04, Sri Lanka
                </div>
              </div>
              <div class="contact-info__addresses__mobile-1 mb-5 flex">
                <div class="mr-2 w-max">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="text-primary w-5 h-5"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="3"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                    />
                  </svg>
                </div>
                <div class="font-serif text-sm font-semibold">
                  +94 113 667530
                </div>
              </div>
            </div>

            <div
              class="contact-info__addresses__address hover:border-l-4 border-primary hover:pl-3 md:w-6/12 transition-all"
            >
              <div class="mb-5 font-serif font-bold">Branch Office</div>
              <div class="contact-info__addresses__addresses-2 mb-3 flex">
                <div class="mr-2 w-max">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="text-primary w-5 h-5"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="3"
                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="3"
                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                  </svg>
                </div>
                <div
                  id="addr-2"
                  class="font-serif text-sm font-semibold cursor-pointer"
                >
                  Starship Global branch office is conveniently located in Sri
                  Lanka???s fastest developing area. The corridor between the
                  Mattala Rajapaksha International Airport and the Hambantota
                  Port which is Logistically perfect ( Transshipment / Sea-Air )
                  for catering the major Europe and Middle East departmental
                  stores.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>
    <script src="../static/slick-1.8.1/slick/slick.js"></script>
    <script>
      $(document).ready(function () {
        $(".site__slideshow").slick({
          dots: false,
          arrows: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 5000,
          adaptiveHeight: true,
        });
      });
    </script>
    <script>
      let mapContainer = document.querySelector("#location-map");
      let addr =
        "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.9521314789404!2d79.8570702!3d6.8963292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bdf2fc17347%3A0x4cde939aea1c05cd!2s123%20Bauddhaloka%20Mawatha%2C%20Colombo%2000400!5e0!3m2!1sen!2slk!4v1620215643568!5m2!1sen!2slk";
      document.querySelector("#addr-1").addEventListener("click", () => {
        mapContainer.src =
          "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.9521314789404!2d79.8570702!3d6.8963292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bdf2fc17347%3A0x4cde939aea1c05cd!2s123%20Bauddhaloka%20Mawatha%2C%20Colombo%2000400!5e0!3m2!1sen!2slk!4v1620215643568!5m2!1sen!2slk";
      });
      document.querySelector("#addr-2").addEventListener("click", () => {
        mapContainer.src =
          "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.01795249362!2d81.0864514!3d6.2959604!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTcnNTkuNSJOIDgxwrAwNScyNi4yIkU!5e0!3m2!1sen!2slk!4v1620215507213!5m2!1sen!2slk";
      });
      mapContainer.width = "900";
      mapContainer.height = "450";
      mapContainer.src = addr;
    </script>
  </body>
</html>
