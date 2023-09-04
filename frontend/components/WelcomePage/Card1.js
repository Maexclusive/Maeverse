import React from "react";

export default function Card1(props) {
    return (
        <>
        <section className="header relative pt-16 pb-40 items-center flex h-screen max-h-860-px">
        <div className="container mx-auto items-center flex flex-wrap">
          <div className="w-full md:w-8/12 lg:w-6/12 xl:w-6/12 px-4">
            <div className="col-lg-6 mb-4 mb-lg-0">
              <img className="mw-100" src="mae_svg/1.svg" alt="" />
            </div>
          </div>
          <div className="w-full md:w-8/12 lg:w-6/12 xl:w-6/12 px-4">
            <div className="pt-32 sm:pt-0">
              <h2 className="font-semibold text-4xl text-blueGray-600">
                Hallo Maeverse.
              </h2>
              <p className="mt-4 text-lg leading-relaxed text-blueGray-500">
                Hallo Semuanya Selamat Datang Di Maeverse,Aplikasi Berbasis
                Website Untuk AniMae Community.Disini Kalian Bisa Mendapatkan
                Berbagai Informasi Seputar AniMae,Jelajahi Halaman dan Nantikan
                Informasi Terbaru nya Hanya di Maeverse
              </p>
              <div className="mt-12">
                <a
                  href="https://www.creative-tim.com/learning-lab/tailwind/nextjs/overview/notus?ref=nnjs-index"
                  target="_blank"
                  className="get-started text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-400 active:bg-blueGray-500 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
                >
                  Get started
                </a>
                <a
                  href="https://github.com/creativetimofficial/notus-nextjs?ref=nnjs-index"
                  className="github-star ml-1 text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg"
                  target="_blank"
                >
                  Github Star
                </a>
              </div>
            </div>
          </div>
        </div>
        {/* <img
          className="absolute top-0 b-auto right-0 pt-16 sm:w-6/12 -mt-48 sm:mt-0 w-10/12 max-h-860-px"
          src="/img/pattern_nextjs.png"
          alt="..."
        /> */}
      </section>
          </>
      );
}
