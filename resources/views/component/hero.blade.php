@section('content')

<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
        <div>
            <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                Start your journey with <span class="text-blue-600">Cyber Handed</span></h1>
            <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">Hand-picked professionals and expertly crafted
                components, designed for any kind of entrepreneur.</p>

            <!-- Buttons -->
            <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="{{route('blogs')}}">
                    Get started
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="{{route('ourteam.view')}}">
                    Contact sales team
                </a>
            </div>
            <!-- End Buttons -->

            <!-- Review -->
            <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">
                <!-- Review -->
                <div class="py-5">
                    <div class="flex gap-x-1">
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                    </div>

                    <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                        <span class="font-bold">4.6</span> /5 - from 12k reviews
                    </p>

                    <div class="mt-5">
                        <!-- Star -->
                        <svg class="h-auto w-16 text-gray-800 dark:text-white" width="80" height="27"
                            viewBox="0 0 80 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.558 9.74046H11.576V12.3752H17.9632C17.6438 16.0878 14.5301 17.7245 11.6159 17.7245C7.86341 17.7245 4.58995 14.7704 4.58995 10.6586C4.58995 6.62669 7.70373 3.51291 11.6159 3.51291C14.6498 3.51291 16.4063 5.42908 16.4063 5.42908L18.2426 3.51291C18.2426 3.51291 15.8474 0.878184 11.4961 0.878184C5.94724 0.838264 1.67578 5.50892 1.67578 10.5788C1.67578 15.5289 5.70772 20.3592 11.6558 20.3592C16.8854 20.3592 20.7177 16.8063 20.7177 11.4969C20.7177 10.3792 20.558 9.74046 20.558 9.74046Z"
                                fill="currentColor" />
                            <path
                                d="M27.8621 7.78442C24.1894 7.78442 21.5547 10.6587 21.5547 14.012C21.5547 17.4451 24.1096 20.3593 27.9419 20.3593C31.415 20.3593 34.2094 17.7645 34.2094 14.0918C34.1695 9.94011 30.896 7.78442 27.8621 7.78442ZM27.902 10.2994C29.6984 10.2994 31.415 11.7764 31.415 14.0918C31.415 16.4072 29.7383 17.8842 27.902 17.8842C25.906 17.8842 24.3491 16.2874 24.3491 14.0519C24.3092 11.8962 25.8661 10.2994 27.902 10.2994Z"
                                fill="currentColor" />
                            <path
                                d="M41.5964 7.78442C37.9238 7.78442 35.2891 10.6587 35.2891 14.012C35.2891 17.4451 37.844 20.3593 41.6763 20.3593C45.1493 20.3593 47.9438 17.7645 47.9438 14.0918C47.9038 9.94011 44.6304 7.78442 41.5964 7.78442ZM41.6364 10.2994C43.4328 10.2994 45.1493 11.7764 45.1493 14.0918C45.1493 16.4072 43.4727 17.8842 41.6364 17.8842C39.6404 17.8842 38.0835 16.2874 38.0835 14.0519C38.0436 11.8962 39.6004 10.2994 41.6364 10.2994Z"
                                fill="currentColor" />
                            <path
                                d="M55.0475 7.82434C51.6543 7.82434 49.0195 10.7784 49.0195 14.0918C49.0195 17.8443 52.0934 20.3992 54.9676 20.3992C56.764 20.3992 57.6822 19.7205 58.4407 18.8822V20.1198C58.4407 22.2754 57.1233 23.5928 55.1273 23.5928C53.2111 23.5928 52.2531 22.1557 51.8938 21.3573L49.4587 22.3553C50.297 24.1517 52.0135 26.0279 55.0874 26.0279C58.4407 26.0279 60.9956 23.9122 60.9956 19.481V8.18362H58.3608V9.26147C57.6423 8.38322 56.5245 7.82434 55.0475 7.82434ZM55.287 10.2994C56.9237 10.2994 58.6403 11.7365 58.6403 14.1317C58.6403 16.6068 56.9636 17.9241 55.2471 17.9241C53.4507 17.9241 51.774 16.4471 51.774 14.1716C51.8139 11.6966 53.5305 10.2994 55.287 10.2994Z"
                                fill="currentColor" />
                            <path
                                d="M72.8136 7.78442C69.62 7.78442 66.9453 10.2994 66.9453 14.0519C66.9453 18.004 69.9393 20.3593 73.093 20.3593C75.7278 20.3593 77.4044 18.8822 78.3625 17.6048L76.1669 16.1277C75.608 17.006 74.6499 17.8443 73.093 17.8443C71.3365 17.8443 70.5381 16.8862 70.0192 15.9281L78.4423 12.4152L78.0032 11.3772C77.1649 9.46107 75.2886 7.78442 72.8136 7.78442ZM72.8934 10.2196C74.0511 10.2196 74.8495 10.8184 75.2487 11.5768L69.6599 13.9321C69.3405 12.0958 71.097 10.2196 72.8934 10.2196Z"
                                fill="currentColor" />
                            <path d="M62.9531 19.9999H65.7076V1.47693H62.9531V19.9999Z" fill="currentColor" />
                        </svg>
                        <!-- End Star -->
                    </div>
                </div>
                <!-- End Review -->

                <!-- Review -->
                <div class="py-5">
                    <div class="flex gap-x-1">
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                fill="currentColor" />
                        </svg>
                        <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51"
                            viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M49.6867 20.0305C50.2889 19.3946 49.9878 18.1228 49.0846 18.1228L33.7306 15.8972C33.4296 15.8972 33.1285 15.8972 32.8275 15.2613L25.9032 0.317944C25.6021 0 25.3011 0 25 0V42.6046C25 42.6046 25.3011 42.6046 25.6021 42.6046L39.7518 49.9173C40.3539 50.2352 41.5581 49.5994 41.2571 48.6455L38.5476 32.4303C38.5476 32.1124 38.5476 31.7944 38.8486 31.4765L49.6867 20.0305Z"
                                fill="transparent" />
                            <path
                                d="M0.313299 20.0305C-0.288914 19.3946 0.0122427 18.1228 0.915411 18.1228L16.2694 15.8972C16.5704 15.8972 16.8715 15.8972 17.1725 15.2613L24.0968 0.317944C24.3979 0 24.6989 0 25 0V42.6046C25 42.6046 24.6989 42.6046 24.3979 42.6046L10.2482 49.9173C9.64609 50.2352 8.44187 49.5994 8.74292 48.6455L11.4524 32.4303C11.4524 32.1124 11.4524 31.7944 11.1514 31.4765L0.313299 20.0305Z"
                                fill="currentColor" />
                        </svg>
                    </div>

                    <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                        <span class="font-bold">4.8</span> /5 - from 5k reviews
                    </p>

                    <div class="mt-5">
                        <!-- Star -->
                        <svg class="h-auto w-16 text-gray-800 dark:text-white" width="110" height="28"
                            viewBox="0 0 110 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M66.6601 8.35107C64.8995 8.35107 63.5167 8.72875 62.1331 9.48265C62.1331 5.4582 62.1331 1.81143 62.2594 0.554199L53.8321 2.06273V2.81736L54.7124 2.94301C55.8433 3.19431 56.2224 3.82257 56.4715 5.33255C56.725 8.35107 56.5979 24.4496 56.4715 27.0912C58.7354 27.5945 61.1257 27.9722 63.5159 27.9722C70.1819 27.9722 74.2064 23.8213 74.2064 17.281C74.2064 12.1249 70.9366 8.35107 66.6601 8.35107ZM63.7672 26.5878C63.2639 26.5878 62.6342 26.5878 62.258 26.4629C62.1316 24.7023 62.0067 17.281 62.1316 10.7413C62.8862 10.4893 63.3888 10.3637 64.0185 10.3637C66.7872 10.3637 68.2965 13.6335 68.2965 17.6572C68.2957 22.6898 66.4088 26.5878 63.7672 26.5878ZM22.1363 1.0568H0V2.18838L1.25796 2.31403C2.89214 2.56533 3.52184 3.57127 3.77242 5.9608C4.15082 10.4886 4.02445 18.6646 3.77242 22.5619C3.52112 24.9522 2.89287 26.0845 1.25796 26.2087L0 26.4615V27.4674H14.2123V26.4615L12.703 26.2087C11.0681 26.0838 10.4392 24.9522 10.1879 22.5619C10.0615 20.9263 9.93583 18.2847 9.93583 15.0156L12.9543 15.1413C14.8413 15.1413 15.7208 16.6505 16.0985 18.7881H17.2308V9.86106H16.0985C15.7201 11.9993 14.8413 13.5078 12.9543 13.5078L9.93655 13.6342C9.93655 9.35773 10.0622 5.33328 10.1886 2.94374H14.59C17.9869 2.94374 19.7475 5.08125 21.0047 8.85513L22.2626 8.47745L22.1363 1.0568Z"
                                fill="currentColor" />
                            <path
                                d="M29.3053 8.09998C35.5944 8.09998 38.7385 12.3764 38.7385 18.0358C38.7385 23.4439 35.2167 27.9731 28.9276 27.9731C22.6393 27.9731 19.4951 23.6959 19.4951 18.0358C19.4951 12.6277 23.0162 8.09998 29.3053 8.09998ZM28.9276 9.35793C26.1604 9.35793 25.4058 13.1311 25.4058 18.0358C25.4058 22.8149 26.6637 26.7137 29.1796 26.7137C32.0703 26.7137 32.8264 22.9405 32.8264 18.0358C32.8264 13.2567 31.5699 9.35793 28.9276 9.35793ZM75.8403 18.1622C75.8403 13.0054 79.1101 8.09998 85.5248 8.09998C90.8057 8.09998 93.3224 11.9995 93.3224 17.1555H81.6253C81.4989 21.8089 83.7628 25.2051 88.2913 25.2051C90.3038 25.2051 91.3098 24.7033 92.5685 23.8223L93.0703 24.4505C91.8124 26.2111 89.0459 27.9731 85.5248 27.9731C79.8647 27.9724 75.8403 23.9479 75.8403 18.1622ZM81.6253 15.7726L87.5366 15.6463C87.5366 13.1311 87.159 9.35793 85.0214 9.35793C82.8839 9.35793 81.7502 12.8791 81.6253 15.7726ZM108.291 9.10663C106.782 8.47693 104.77 8.09998 102.506 8.09998C97.8538 8.09998 94.9594 10.8665 94.9594 14.137C94.9594 17.4075 97.0955 18.7904 100.118 19.7971C103.261 20.9279 104.142 21.8089 104.142 23.3182C104.142 24.8275 103.01 26.2103 100.997 26.2103C98.6084 26.2103 96.8464 24.8275 95.4635 21.0536L94.5825 21.3063L94.7089 26.84C96.2181 27.4683 98.9846 27.9724 101.375 27.9724C106.28 27.9724 109.425 25.4557 109.425 21.5576C109.425 18.9161 108.041 17.4075 104.771 16.1489C101.249 14.766 99.992 13.8857 99.992 12.2501C99.992 10.6152 101.126 9.48286 102.635 9.48286C104.897 9.48286 106.407 10.8665 107.54 14.2627L108.42 14.0114L108.291 9.10663ZM55.0883 8.6033C52.9508 7.3468 49.1769 7.97433 47.1651 12.5028L47.29 8.1007L38.8642 9.73561V10.4902L39.7444 10.6159C40.8775 10.7423 41.3794 11.3705 41.5057 13.0062C41.757 16.0247 41.6314 21.3078 41.5057 23.9486C41.3794 25.4564 40.8775 26.2111 39.7444 26.3374L38.8642 26.4638V27.4697H50.5606V26.4638L49.0513 26.3374C47.7941 26.2111 47.4164 25.4564 47.29 23.9486C47.0387 21.5584 47.0387 16.7793 47.1651 13.7608C47.7933 12.8798 50.5606 12.1259 53.0757 13.7608L55.0883 8.6033Z"
                                fill="currentColor" />
                        </svg>
                        <!-- End Star -->
                    </div>
                </div>
                <!-- End Review -->
            </div>
            <!-- End Review -->
        </div>
        <!-- End Col -->

        <div class="relative ms-4">
            <img class="w-full rounded-md"
                src=" {{asset('images/img/2.jpg')}} "
                alt="Hero Image">
            <div
                class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0">
            </div>

            <!-- SVG-->
            <div class="absolute bottom-0 start-0">
                <svg class="w-2/3 ms-auto h-auto text-white dark:text-neutral-900" width="630" height="451"
                    viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="531" y="352" width="99" height="99" fill="currentColor" />
                    <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                    <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                    <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                    <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                    <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                    <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                    <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                    <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                    <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                    <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                    <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                    <rect x="581" width="49" height="49" fill="currentColor" />
                    <rect x="581" width="49" height="64" fill="currentColor" />
                    <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                    <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                    <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                </svg>
            </div>
            <!-- End SVG-->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Hero -->



<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
     <!-- Title -->
  <div class="mx-auto max-w-2xl mb-8 lg:mb-14 text-center">
    <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-neutral-200">
      Explore Thinks and Recarch
    </h2>
    <p class="mt-3 text-gray-800 dark:text-neutral-200">
      The powerful and flexible theme for all kinds of businesses.
    </p>
  </div>
  <!-- End Title -->

    <!-- Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Icon Block -->
        <a href="#"
            class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">
            <!-- Icon -->
            <div
                class="flex justify-center items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                <svg class="shrink-0 size-7 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect width="18" height="10" x="3" y="11" rx="2" />
                    <circle cx="12" cy="5" r="2" />
                    <path d="M12 7v4" />
                    <line x1="8" x2="8" y1="16" y2="16" />
                    <line x1="16" x2="16" y1="16" y2="16" />
                </svg>
            </div>
            <!-- End Icon -->

            <div class="mt-3">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Creative minds
                </h3>
            </div>
        </a>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <a href="#"
            class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">
            <!-- Icon -->
            <div
                class="flex justify-center items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                <svg class="shrink-0 size-7 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m7.5 4.27 9 5.15" />
                    <path
                        d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z" />
                    <path d="m3.3 7 8.7 5 8.7-5" />
                    <path d="M12 22V12" />
                </svg>
            </div>
            <!-- End Icon -->

            <div class="mt-3">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Effortless updates
                </h3>
            </div>
        </a>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <a href="#"
            class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">
            <!-- Icon -->
            <div
                class="flex justify-center items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                <svg class="shrink-0 size-7 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                </svg>
            </div>
            <!-- End Icon -->

            <div class="mt-3">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Strong empathy
                </h3>
            </div>
        </a>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <a href="#"
            class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">
            <!-- Icon -->
            <div
                class="flex justify-center items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                <svg class="shrink-0 size-7 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                    <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                    <path d="M4 22h16" />
                    <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                    <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                    <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />
                </svg>
            </div>
            <!-- End Icon -->

            <div class="mt-3">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Conquer the best
                </h3>
            </div>
        </a>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <a href="#"
            class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">
            <!-- Icon -->
            <div
                class="flex justify-center items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                <svg class="shrink-0 size-7 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
            </div>
            <!-- End Icon -->

            <div class="mt-3">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Designing for people
                </h3>
            </div>
        </a>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <a href="#"
            class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">
            <!-- Icon -->
            <div
                class="flex justify-center items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                <svg class="shrink-0 size-7 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M7 10v12" />
                    <path
                        d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z" />
                </svg>
            </div>
            <!-- End Icon -->

            <div class="mt-3">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Simple and affordable
                </h3>
            </div>
        </a>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <a href="#"
            class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">
            <!-- Icon -->
            <div
                class="flex justify-center items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                <svg class="shrink-0 size-7 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M2 3h20" />
                    <path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3" />
                    <path d="m7 21 5-5 5 5" />
                </svg>
            </div>
            <!-- End Icon -->

            <div class="mt-3">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Get freelance work
                </h3>
            </div>
        </a>
        <!-- End Icon Block -->

        <!-- Icon Block -->
        <a href="#"
            class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-neutral-700">
            <!-- Icon -->
            <div
                class="flex justify-center items-center size-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg mx-auto">
                <svg class="shrink-0 size-7 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7" />
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                    <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4" />
                    <path d="M2 7h20" />
                    <path
                        d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7" />
                </svg>
            </div>
            <!-- End Icon -->

            <div class="mt-3">
                <h3 class="text-sm sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Sell your goods
                </h3>
            </div>
        </a>
        <!-- End Icon Block -->
    </div>
    <!-- End Grid -->
     
    <div class="mt-8 text-center">
      <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
        href="#">
        Read case studies
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6" />
        </svg>
      </a>
    </div>
</div>
<!-- End Icon Blocks -->



<!-- FAQ -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Your questions, answered</h2>
    <p class="mt-1 text-gray-600 dark:text-neutral-400">Answers to the most frequently asked questions.</p>
  </div>
  <!-- End Title -->

  <div class="max-w-2xl mx-auto">
    <!-- Accordion -->
    <div class="hs-accordion-group">
      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10 active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
          Can I cancel at anytime?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
          <p class="text-gray-800 dark:text-neutral-200">
            Yes, you can cancel anytime no questions are asked while you cancel but we would highly appreciate if you will give us some feedback.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-two">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
          My team has credits. How do we use them?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
          <p class="text-gray-800 dark:text-neutral-200">
            Once your team signs up for a subscription plan. This is where we sit down, grab a cup of coffee and dial in the details.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-three">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
          How does Cyber-Handed's pricing work?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
          <p class="text-gray-800 dark:text-neutral-200">
            Our subscriptions are tiered. Understanding the task at hand and ironing out the wrinkles is key.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-four">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
          How secure is Cyber-Handed?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
          <p class="text-gray-800 dark:text-neutral-200">
            Protecting the data you trust to Cyber-Handed is our first priority. This part is really crucial in keeping the project in line to completion.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-five">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
          How do I get access to a theme I purchased?
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
          <p class="text-gray-800 dark:text-neutral-200">
            If you lose the link for a theme you purchased, don't panic! We've got you covered. You can login to your account, tap your avatar in the upper right corner, and tap Purchases. If you didn't create a login or can't remember the information, you can use our handy Redownload page, just remember to use the same email you originally made your purchases with.
          </p>
        </div>
      </div>

      <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl p-6 dark:hs-accordion-active:bg-white/10" id="hs-basic-with-title-and-arrow-stretched-heading-six">
        <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
          Upgrade License Type
          <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
          <p class="text-gray-800 dark:text-neutral-200">
            There may be times when you need to upgrade your license from the original type you purchased and we have a solution that ensures you can apply your original purchase cost to the new license purchase.
          </p>
        </div>
      </div>
    </div>
    <!-- End Accordion -->
     
    <div class="mt-8 text-center">
      <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
        href="#">
        Read case studies
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6" />
        </svg>
      </a>
    </div>
  </div>
</div>
<!-- End FAQ -->



<!-- Masonry Cards -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="mx-auto max-w-2xl mb-8 lg:mb-14 text-center">
    <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-neutral-200">
      Explore Gallery
    </h2>
    <p class="mt-3 text-gray-800 dark:text-neutral-200">
      The powerful and flexible theme for all kinds of Injoyment.
    </p>
  </div>
  <!-- End Title -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
    <div class="space-y-2">
      <img class="w-full h-auto object-cover" src=" {{asset('images/img/1.jpg')}} " alt="Gallery Masonry Image">
      <img class="w-full h-auto object-cover" src=" {{asset('images/img/2.jpg')}} " alt="Gallery Masonry Image">
      <img class="w-full h-auto object-cover" src=" {{asset('images/img/3.jpg')}} " alt="Gallery Masonry Image">
     </div>
    <div class="space-y-2">
      <img class="w-full h-auto object-cover" src=" {{asset('images/img/4.jpg')}} " alt="Gallery Masonry Image">
      <img class="w-full h-auto object-cover" src=" {{asset('images/img/5.jpg')}} " alt="Gallery Masonry Image">
      <img class="w-full h-auto object-cover" src=" {{asset('images/img/6.jpg')}} " alt="Gallery Masonry Image">
     </div>
    <div class="space-y-2">
    <img class="w-full h-auto object-cover" src=" {{asset('images/img/8.jpg')}} " alt="Gallery Masonry Image">
    <img class="w-full h-auto object-cover" src=" {{asset('images/img/11.jpg')}} " alt="Gallery Masonry Image">
    <img class="w-full h-auto object-cover" src=" {{asset('images/img/22.jpg')}} " alt="Gallery Masonry Image">
   </div>
    <div class="space-y-2">
    <img class="w-full h-auto object-cover" src=" {{asset('images/img/33.jpg')}} " alt="Gallery Masonry Image">
    <img class="w-full h-auto object-cover" src=" {{asset('images/img/44.jpg')}} " alt="Gallery Masonry Image">
    <img class="w-full h-auto object-cover" src=" {{asset('images/img/55.jpg')}} " alt="Gallery Masonry Image">
   </div>
  </div>
  
  <div class="mt-8 text-center">
      <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
        href="#">
        Read case studies
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6" />
        </svg>
      </a>
    </div>
</div>
<!-- End Masonry Cards -->



<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="mx-auto max-w-2xl mb-8 lg:mb-14 text-center">
    <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-neutral-200">
      Explore tools
    </h2>
    <p class="mt-3 text-gray-800 dark:text-neutral-200">
      The powerful and flexible theme for all kinds of businesses.
    </p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="mx-auto max-w-3xl grid grid-cols-12 gap-6 lg:gap-8">
    <!-- Icon Block -->
    <div class="col-span-6 sm:col-span-4 text-center">
      <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="10" height="14" x="3" y="8" rx="2"/><path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4"/><path d="M8 18h.01"/></svg>
      <div class="mt-2 sm:mt-6">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
          Responsive
        </h3>
      </div>
    </div>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <div class="col-span-6 sm:col-span-4 text-center">
      <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7h-9"/><path d="M14 17H5"/><circle cx="17" cy="17" r="3"/><circle cx="7" cy="7" r="3"/></svg>
      <div class="mt-2 sm:mt-6">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
          Customizable
        </h3>
      </div>
    </div>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <div class="col-span-6 col-start-4 sm:col-span-4 text-center">
      <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/></svg>
      <div class="mt-2 sm:mt-6">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
          24/7 Support
        </h3>
      </div>
    </div>
    <!-- End Icon Block -->
  </div>
  <!-- End Grid -->

  <!-- Grid -->
  <div class="mt-20 grid grid-cols-12 items-center gap-x-2 sm:gap-x-6 lg:gap-x-8">
    <div class="hidden md:block col-span-4 md:col-span-3">
      <img class="rounded-xl" src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
    </div>
    <!-- End Col -->

    <div class="col-span-4 md:col-span-3">
      <img class="rounded-xl" src="https://images.unsplash.com/photo-1587613991119-fbbe8e90531d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
    </div>
    <!-- End Col -->

    <div class="col-span-4 md:col-span-3">
      <img class="rounded-xl" src="https://images.unsplash.com/photo-1554295405-abb8fd54f153?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
    </div>
    <!-- End Col -->

    <div class="col-span-4 md:col-span-3">
      <img class="rounded-xl" src="https://images.unsplash.com/photo-1640622300473-977435c38c04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
   
  <div class="mt-8 text-center">
      <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
        href="#">
        Read case studies
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6" />
        </svg>
      </a>
    </div>
</div>
<!-- End Features -->
 




<!-- Pricing -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Find the right plan for your team</h2>
    <p class="mt-1 text-gray-600 dark:text-neutral-400">Pay as you go service, cancel anytime.</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="relative before:absolute before:inset-0 before:-z-[1] before:bg-[radial-gradient(closest-side,theme(colors.gray.300),transparent)] dark:before:bg-[radial-gradient(closest-side,theme(colors.neutral.600),transparent)] mt-12">
    <div class="grid gap-px sm:grid-cols-2 lg:grid-cols-4 lg:items-center">
      <!-- Card -->
      <div class="flex flex-col h-full text-center">
        <div class="bg-white pt-8 pb-5 px-8 dark:bg-neutral-900">
          <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Free</h4>
        </div>

        <div class="h-full bg-white lg:mt-px lg:py-5 px-8 dark:bg-neutral-900">
          <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">
            Free
          </span>
        </div>

        <div class="bg-white flex justify-center lg:mt-px pt-7 px-8 dark:bg-neutral-900">
          <ul class="space-y-2.5 text-center text-sm">
            <li class="text-gray-800 dark:text-neutral-400">
              1 user
            </li>

            <li class="text-gray-800 dark:text-neutral-400">
              Plan features
            </li>

            <li class="text-gray-800 dark:text-neutral-400">
              Product support
            </li>
          </ul>
        </div>

        <div class="bg-white py-8 px-8 dark:bg-neutral-900">
          <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400 dark:focus:text-blue-400 dark:focus:border-blue-400" href="#">
            Sign up
          </a>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col h-full text-center">
        <div class="bg-white pt-8 pb-5 px-8 dark:bg-neutral-900">
          <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Startup</h4>
        </div>

        <div class="h-full bg-white lg:mt-px lg:py-5 px-8 dark:bg-neutral-900">
          <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">
            <span class="font-bold text-2xl -me-2">$</span>
            39
          </span>
        </div>

        <div class="bg-white flex justify-center lg:mt-px pt-7 px-8 dark:bg-neutral-900">
          <ul class="space-y-2.5 text-center text-sm">
            <li class="text-gray-800 dark:text-neutral-400">
              2 users
            </li>

            <li class="text-gray-800 dark:text-neutral-400">
              Plan features
            </li>

            <li class="text-gray-800 dark:text-neutral-400">
              Product support
            </li>
          </ul>
        </div>

        <div class="bg-white py-8 px-8 dark:bg-neutral-900">
          <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400 dark:focus:text-blue-400 dark:focus:border-blue-400" href="#">
            Sign up
          </a>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col h-full text-center">
        <div class="bg-white pt-8 pb-5 px-8 dark:bg-neutral-900">
          <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Team</h4>
        </div>

        <div class="h-full bg-white lg:mt-px lg:py-5 px-8 dark:bg-neutral-900">
          <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">
            <span class="font-bold text-2xl -me-2">$</span>
            89
          </span>
        </div>

        <div class="bg-white flex justify-center lg:mt-px pt-7 px-8 dark:bg-neutral-900">
          <ul class="space-y-2.5 text-center text-sm">
            <li class="text-gray-800 dark:text-neutral-400">
              5 users
            </li>

            <li class="text-gray-800 dark:text-neutral-400">
              Plan features
            </li>

            <li class="text-gray-800 dark:text-neutral-400">
              Product support
            </li>
          </ul>
        </div>

        <div class="bg-white py-8 px-8 dark:bg-neutral-900">
          <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400 dark:focus:text-blue-400 dark:focus:border-blue-400" href="#">
            Sign up
          </a>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col h-full text-center">
        <div class="bg-white pt-8 pb-5 px-8 dark:bg-neutral-900">
          <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Enterprise</h4>
        </div>

        <div class="h-full bg-white lg:mt-px lg:py-5 px-8 dark:bg-neutral-900">
          <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">
            <span class="font-bold text-2xl -me-2">$</span>
            149
          </span>
        </div>

        <div class="bg-white flex justify-center lg:mt-px pt-7 px-8 dark:bg-neutral-900">
          <ul class="space-y-2.5 text-center text-sm">
            <li class="text-gray-800 dark:text-neutral-400">
              10 users
            </li>

            <li class="text-gray-800 dark:text-neutral-400">
              Plan features
            </li>

            <li class="text-gray-800 dark:text-neutral-400">
              Product support
            </li>
          </ul>
        </div>

        <div class="bg-white py-8 px-8 dark:bg-neutral-900">
          <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400 dark:focus:text-blue-400 dark:focus:border-blue-400" href="#">
            Sign up
          </a>
        </div>
      </div>
      <!-- End Card -->
    </div>
  </div>
  <!-- End Grid -->

  <!-- Comparison table -->
  <div class="mt-20">
    <div id="hs-pricing-comparision-content" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-pricing-comparision">
      <!-- xs to lg -->
      <div class="space-y-24 lg:hidden">
        <section>
          <div class="px-4 mb-4">
            <h2 class="text-lg leading-6 font-medium text-gray-800">Free</h2>
          </div>
          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              Financial data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Open/High/Low/Close</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Price-volume difference indicator</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              On-chain data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Network growth</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Average token age consumed</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Exchange flow</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total ERC20 exchange funds flow</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Transaction volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total circulation (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Velocity of tokens (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">ETH gas used</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              Social data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Dev activity</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Topic search</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Relative social dominance</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total social volume</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>
        </section>

        <section>
          <div class="px-4 mb-4">
            <h2 class="text-lg leading-6 font-medium text-gray-800">Startup</h2>
          </div>
          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              Financial data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Open/High/Low/Close</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Price-volume difference indicator</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              On-chain data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Network growth</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Average token age consumed</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Exchange flow</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total ERC20 exchange funds flow</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Transaction volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total circulation (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Velocity of tokens (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">ETH gas used</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              Social data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Dev activity</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Topic search</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Relative social dominance</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total social volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>
        </section>

        <section>
          <div class="px-4 mb-4">
            <h2 class="text-lg leading-6 font-medium text-gray-800">Team</h2>
          </div>
          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              Financial data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Open/High/Low/Close</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Price-volume difference indicator</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              On-chain data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Network growth</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Average token age consumed</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Exchange flow</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total ERC20 exchange funds flow</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Transaction volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total circulation (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Velocity of tokens (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">ETH gas used</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              Social data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Dev activity</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Topic search</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Relative social dominance</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total social volume</th>
                <td class="py-5 pe-4">
                  <!-- Minus -->
                  <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  <!-- Minus -->
                  <span class="sr-only">No</span>
                </td>
              </tr>
            </tbody>
          </table>
        </section>

        <section>
          <div class="px-4 mb-4">
            <h2 class="text-lg leading-6 font-medium text-gray-800">Enterprise</h2>
          </div>
          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              Financial data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Open/High/Low/Close</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Price-volume difference indicator</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              On-chain data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Network growth</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Average token age consumed</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Exchange flow</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total ERC20 exchange funds flow</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Transaction volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total circulation (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Velocity of tokens (beta)</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">ETH gas used</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>

          <table class="w-full">
            <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
              Social data
            </caption>
            <thead>
              <tr>
                <th class="sr-only" scope="col">Feature</th>
                <th class="sr-only" scope="col">Included</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Dev activity</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Topic search</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Relative social dominance</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>

              <tr class="border-t border-gray-200 dark:border-neutral-700">
                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total social volume</th>
                <td class="py-5 pe-4">
                  <!-- Check -->
                  <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  <!-- End Solid Check -->
                  <span class="sr-only">Yes</span>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
      </div>
      <!-- End xs to lg -->

      <!-- lg+ -->
      <div class="hidden lg:block">
        <table class="w-full h-px">
          <caption class="sr-only">
            Pricing plan comparison
          </caption>
          <thead class="sticky top-0 inset-x-0 bg-white dark:bg-neutral-900">
            <tr>
              <th class="py-4 ps-6 pe-6 text-sm font-medium text-gray-800 text-start" scope="col">
                <span class="sr-only">Feature by</span>
                <span class="dark:text-white">Plans</span>
              </th>

              <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white" scope="col">Free</th>
              <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white" scope="col">Startup</th>
              <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white" scope="col">Team</th>
              <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white" scope="col">Enterprise</th>
            </tr>
          </thead>
          <tbody class="border-t border-gray-200 divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
            <tr>
              <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white" colspan="5" scope="colgroup">Financial data</th>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Open/High/Low/Close</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Price-volume difference indicator</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white" colspan="5" scope="colgroup">On-chain data</th>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Network growth</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Average token age consumed</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Exchange flow</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total ERC20 exchange funds flow</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Transaction volume</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Total circulation (beta)</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Velocity of tokens (beta)</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">ETH gas used</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Not included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white" colspan="5" scope="colgroup">Social data</th>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Dev activity</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Topic search</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Relative social dominance</th>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- Minus -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- Minus -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Minus -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- Minus -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>

            <tr>
              <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400" scope="row">Relative social dominance</th>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Free</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Startup</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Team</span>
              </td>

              <td class="py-5 px-6">
                <!-- Check -->
                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                <!-- End Solid Check -->
                <span class="sr-only">Included in Enterprise</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End lg+ -->
    </div>

    <div class="text-center mt-12">
      <button type="button" class="hs-collapse-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="hs-pricing-comparision" aria-expanded="false" aria-controls="hs-pricing-comparision-content" data-hs-collapse="#hs-pricing-comparision-content">
        <span class="hs-collapse-open:hidden block">View pricing comparision</span>
        <span class="hs-collapse-open:block hidden">Hide pricing comparision</span>
        <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
      </button>
    </div>
  </div>
  <!-- End Comparison table -->
</div>
<!-- End Pricing -->




  <!-- Clients -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="w-2/3 sm:w-1/2 lg:w-1/3 mx-auto text-center mb-6">
      <h2 class="text-gray-600 dark:text-neutral-400">Trusted by Open Source, enterprise, and more than 99,000 of you
      </h2>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid grid-cols-3 md:grid-cols-6 gap-x-6">
      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500"
        enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" xmlns="http://www.w3.org/2000/svg">
        <path
          d="m431.7 0h-235.5v317.8h317.8v-235.5c0-45.6-36.7-82.3-82.3-82.3zm-308.9 0h-40.5c-45.6 0-82.3 36.7-82.3 82.3v40.5h122.8zm-122.8 196.2h122.8v122.8h-122.8zm392.5 317.8h40.5c45.6 0 82.3-36.7 82.3-82.3v-39.2h-122.8zm-196.3-121.5h122.8v122.8h-122.8zm-196.2 0v40.5c0 45.6 36.7 82.3 82.3 82.3h40.5v-122.8zm828-359.6h-48.1v449.4h254.5v-43h-206.4zm360.8 119c-93.7 0-159.5 69.6-159.5 169.6v11.5c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-21.5-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h243.1v-2.5s1.3-15.2 1.3-22.8c-.3-91.2-53.4-149.5-134.4-149.5zm-108.9 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm521.6-96.2v16.5c-20.3-34.2-58.2-55.7-97.5-55.7h-3.8c-86.1 0-145.6 68.4-145.6 168.4 0 101.3 57 169.6 141.8 169.6 67.1 0 97.5-40.5 107.6-58.2v49.4h45.6v-447h-46.8v157zm-98.8 257c-59.5 0-98.7-50.6-98.7-126.6 0-73.4 41.8-125.3 100-125.3 49.4 0 98.7 39.2 98.7 125.3 0 93.7-51.9 126.6-100 126.6zm424.1-250.7v2.5c-8.9-15.2-36.7-48.1-103.8-48.1-84.8 0-140.5 64.6-140.5 163.3s58.2 165.8 144.3 165.8c46.8 0 78.5-16.5 100-50.6v44.3c0 62-39.2 97.5-108.9 97.5-29.1 0-59.5-7.6-86.1-21.5l-2.5-1.3-17.7 39.2 2.5 1.3c32.9 16.5 69.6 25.3 105.1 25.3 74.7 0 154.4-38 154.4-143.1v-311.3h-46.8zm-93.7 241.8c-62 0-102.5-48.1-102.5-122.8 0-76 35.4-119 96.2-119 67.1 0 98.7 39.2 98.7 119 1.3 78.5-31.6 122.8-92.4 122.8zm331.7-286.1c-93.7 0-158.2 69.6-158.2 168.4v11.4c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-22.8-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h244.2v-2.5s1.3-15.2 1.3-22.8c0-89.9-53.2-148.2-135.5-148.2zm-107.6 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm440.6-127.9c-6.3-1.3-11.4-1.3-17.7-2.5-44.3 0-81 27.9-100 74.7v-72.2h-46.8l1.3 320.3v2.5h48.1v-135.4c0-20.3 2.5-41.8 8.9-60.8 15.2-49.4 49.4-81 89.9-81 5.1 0 10.1 0 15.2 1.3h2.5v-46.8z"
          fill="currentColor" />
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="-4.126838974812941 0.900767442746961 939.436838974813 230.18142889845947" width="2500" height="607">
        <path
          d="M667.21 90.58c-13.76 0-23.58 4.7-28.4 13.6l-2.59 4.82V92.9h-22.39v97.86h23.55v-58.22c0-13.91 7.56-21.89 20.73-21.89 12.56 0 19.76 7.77 19.76 21.31v58.8h23.56v-63c0-23.3-12.79-37.18-34.22-37.18zm-114.21 0c-27.79 0-45 17.34-45 45.25v13.74c0 26.84 17.41 43.51 45.44 43.51 18.75 0 31.89-6.87 40.16-21l-14.6-8.4c-6.11 8.15-15.87 13.2-25.55 13.2-14.19 0-22.66-8.76-22.66-23.44v-3.89h65.73v-16.23c0-26-17.07-42.74-43.5-42.74zm22.09 43.15h-44.38v-2.35c0-16.11 7.91-25 22.27-25 13.83 0 22.09 8.76 22.09 23.44zm360.22-56.94V58.07h-81.46v18.72h28.56V172h-28.56v18.72h81.46V172h-28.57V76.79zM317.65 55.37c-36.38 0-59 22.67-59 59.18v19.74c0 36.5 22.61 59.18 59 59.18s59-22.68 59-59.18v-19.74c-.01-36.55-22.65-59.18-59-59.18zm34.66 80.27c0 24.24-12.63 38.14-34.66 38.14S283 159.88 283 135.64v-22.45c0-24.24 12.64-38.14 34.66-38.14s34.66 13.9 34.66 38.14zm98.31-45.06c-12.36 0-23.06 5.12-28.64 13.69l-2.53 3.9V92.9h-22.4v131.53h23.56v-47.64l2.52 3.74c5.3 7.86 15.65 12.55 27.69 12.55 20.31 0 40.8-13.27 40.8-42.93v-16.64c0-21.37-12.63-42.93-41-42.93zM468.06 149c0 15.77-9.2 25.57-24 25.57-13.8 0-23.43-10.36-23.43-25.18v-14.72c0-15 9.71-25.56 23.63-25.56 14.69 0 23.82 9.79 23.82 25.56zm298.47-90.92L719 190.76h23.93l9.1-28.44h54.64l.09.28 9 28.16h23.92L792.07 58.07zm-8.66 85.53l21.44-67.08 21.22 67.08zM212.59 95.12a57.27 57.27 0 0 0-4.92-47.05 58 58 0 0 0-62.4-27.79A57.29 57.29 0 0 0 102.06 1a57.94 57.94 0 0 0-55.27 40.14A57.31 57.31 0 0 0 8.5 68.93a58 58 0 0 0 7.13 67.94 57.31 57.31 0 0 0 4.92 47A58 58 0 0 0 83 211.72 57.31 57.31 0 0 0 126.16 231a57.94 57.94 0 0 0 55.27-40.14 57.3 57.3 0 0 0 38.28-27.79 57.92 57.92 0 0 0-7.12-67.95zM126.16 216a42.93 42.93 0 0 1-27.58-10c.34-.19 1-.52 1.38-.77l45.8-26.44a7.43 7.43 0 0 0 3.76-6.51V107.7l19.35 11.17a.67.67 0 0 1 .38.54v53.45A43.14 43.14 0 0 1 126.16 216zm-92.59-39.54a43 43 0 0 1-5.15-28.88c.34.21.94.57 1.36.81l45.81 26.45a7.44 7.44 0 0 0 7.52 0L139 142.52v22.34a.67.67 0 0 1-.27.6l-46.3 26.72a43.14 43.14 0 0 1-58.86-15.77zm-12-100A42.92 42.92 0 0 1 44 57.56V112a7.45 7.45 0 0 0 3.76 6.51l55.9 32.28L84.24 162a.68.68 0 0 1-.65.06L37.3 135.33a43.13 43.13 0 0 1-15.77-58.87zm159 37l-55.9-32.28L144 70a.69.69 0 0 1 .65-.06l46.29 26.73a43.1 43.1 0 0 1-6.66 77.76V120a7.44 7.44 0 0 0-3.74-6.54zm19.27-29c-.34-.21-.94-.57-1.36-.81L152.67 57.2a7.44 7.44 0 0 0-7.52 0l-55.9 32.27V67.14a.73.73 0 0 1 .28-.6l46.29-26.72a43.1 43.1 0 0 1 64 44.65zM78.7 124.3l-19.36-11.17a.73.73 0 0 1-.37-.54V59.14A43.09 43.09 0 0 1 129.64 26c-.34.19-.95.52-1.38.77l-45.8 26.44a7.45 7.45 0 0 0-3.76 6.51zm10.51-22.67l24.9-14.38L139 101.63v28.74l-24.9 14.38-24.9-14.38z"
          fill="currentColor" />
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500" fill="none"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2428 1002">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M311.5 389.8h191.8l67 117.5 77.8-117.5h178.3L682.7 590.7l154 220.7H648.1l-77.8-135.8-91.7 135.8h-175l153.2-220.7-145.3-200.9Z"
          fill="currentColor" />
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M1279.3 640.7H955.4c2.9 26 10 45.2 21 58a76.5 76.5 0 0 0 61.1 27.3c16 0 31.5-4 45.3-12 8.8-5 18.2-13.7 28.2-26.5l159.2 14.7c-24.4 42.4-53.7 72.7-88 91.2-34.5 18.2-83.8 27.5-148.2 27.5-55.8 0-99.7-7.9-131.8-23.6a193.2 193.2 0 0 1-79.6-75c-21-34.4-31.6-74.6-31.6-121 0-65.8 21.2-119.2 63.3-159.8 42.3-40.8 100.6-61.3 175-61.3 60.3 0 108 9.2 142.8 27.5a184 184 0 0 1 79.8 79.3c18.3 34.7 27.4 79.8 27.4 135.3v18.4ZM1115 563.3c-3.2-31.3-11.6-53.7-25.2-67.1a73.1 73.1 0 0 0-53.8-20.3 73.6 73.6 0 0 0-61.6 30.6c-9.7 12.7-16 31.6-18.5 56.8H1115Zm137-173.5h168.3l81.9 267.1 84.5-267H1750l-179.1 421.5h-143.3L1252 389.8Zm463.2 212c0-64.3 21.7-117.4 65-159 43.5-41.7 102-62.6 176-62.6 84.4 0 148.2 24.5 191.3 73.5 34.6 39.4 52 88 52 145.8 0 64.7-21.5 117.8-64.5 159.3-43 41.3-102.4 62-178.5 62-67.7 0-122.5-17.1-164.3-51.5-51.4-42.6-77-98.4-77-167.6Zm162-.5c0 37.7 7.5 65.5 22.8 83.4a72 72 0 0 0 57.3 27.1c23.4 0 42.5-9 57.4-26.7 15-17.8 22.5-46 22.5-85.4 0-36.4-7.6-63.7-22.7-81.5a70.5 70.5 0 0 0-56-26.7c-23.5 0-43 9-58.3 27-15.4 18.2-23 45.9-23 82.8ZM2363.1.1a64 64 0 0 1 0 127.9 64 64 0 0 1 0-128Z"
          fill="currentColor" />
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M1912.1 671.5c220.3-135 326.4-327 334-419.2 8.7-106.7-71-235.9-358.9-238-345 3.6-790 158.3-1163.6 360.4h138c315.8-152.6 672-266.2 1000.8-275.2 287.7-7.8 304.4 149.2 302 199-3.6 71-74.7 234.5-252.3 373Zm-1315.7-222-36 22.7 10 17.5 26-40.1ZM419.8 567.5C212 717 57 873.2.8 1001.9 77.8 897.1 217 771 394.9 647l40.4-58.1-15.5-21.4Z"
          fill="currentColor" />
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M2036.3 580a819.8 819.8 0 0 0 114.2-122.8l-3-3.5c-8-9.2-17-17.5-26.5-25-21 39.8-50 83.7-88.2 128.3 1.6 7 2.8 14.7 3.5 23Z"
          fill="currentColor" />
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500"
        viewBox="0 -8.881784197001252e-16 267.51517722360785 65.24679557585003" xmlns="http://www.w3.org/2000/svg"
        width="2500" height="610">
        <path
          d="M263.043 56.411a4.418 4.418 0 1 0 .085 0zm0 8.33a3.874 3.874 0 1 1 3.809-3.938v.065a3.791 3.791 0 0 1-3.708 3.871h-.1m-16.96-9.535h-9.6V40.17c0-3.585-.064-8.2-4.993-8.2-5 0-5.765 3.906-5.765 7.939v15.294h-9.6V24.287h9.216v4.225h.129a10.1 10.1 0 0 1 9.093-4.994c9.73 0 11.524 6.4 11.524 14.726zm-40.79-35.143a5.571 5.571 0 1 1 5.57-5.572 5.571 5.571 0 0 1-5.57 5.572m4.8 35.143h-9.61V24.287h9.61zM250.87.004h-55.21a4.728 4.728 0 0 0-4.781 4.67v55.439a4.731 4.731 0 0 0 4.781 4.675h55.21a4.741 4.741 0 0 0 4.8-4.675V4.67a4.738 4.738 0 0 0-4.8-4.67m-86.12 31.749c-4.8 0-7.68 3.205-7.68 7.875s2.879 7.878 7.68 7.878 7.687-3.2 7.687-7.878-2.881-7.875-7.687-7.875m16.525 23.437h-8.838v-4.1h-.131a12.071 12.071 0 0 1-9.544 4.868c-9.224 0-15.3-6.657-15.3-16.071 0-8.646 5.377-16.585 14.216-16.585 3.973 0 7.684 1.087 9.861 4.1h.126V9.577h9.609zm-46.139-19.048a5.756 5.756 0 0 0-5.894-5.89 6.406 6.406 0 0 0-6.784 5.89zm8.132 13.7a16.909 16.909 0 0 1-13.128 6.151c-9.6 0-17.286-6.408-17.286-16.331s7.685-16.328 17.286-16.328c8.973 0 14.6 6.4 14.6 16.328v3.01h-22.282a7.171 7.171 0 0 0 7.235 6.019 8.193 8.193 0 0 0 6.851-3.778zM47.834 24.279h9.219v4.225h.131a10.085 10.085 0 0 1 9.09-4.994c9.735 0 11.527 6.405 11.527 14.726V55.19h-9.6V40.159c0-3.588-.066-8.2-5-8.2-4.99 0-5.76 3.907-5.76 7.939v15.288h-9.6zM82.669 9.58h9.6v27.265l10.88-12.583h11.77l-12.6 14.313 12.335 16.63h-12.066L92.397 39.923h-.126v15.28h-9.6zM32.911 24.276h9.6v30.916h-9.6zm4.8-15.37a5.569 5.569 0 1 1-5.57 5.569 5.569 5.569 0 0 1 5.57-5.569M0 9.587h9.993v36.4h18.5v9.222H0zm263.744 51.522a1.2 1.2 0 0 0 1.21-1.269c0-.9-.543-1.33-1.657-1.33h-1.8v4.712h.677v-2.054h.832l.019.025 1.291 2.029h.724l-1.389-2.1zm-.783-.472h-.785v-1.593h.995c.514 0 1.1.084 1.1.757 0 .774-.593.836-1.314.836"
          fill="currentColor" />
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500" fill="none"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 33">
        <path d="M9.3 16.5C9.3 9 14.3 2.7 21.2.7a16.5 16.5 0 1 0 0 31.6c-6.9-2-11.9-8.3-11.9-15.8Z"
          fill="currentColor" />
        <path d="M21.7 10c4 0 7.4 2.8 8.5 6.4a8.9 8.9 0 1 0-17 0c1-3.6 4.4-6.3 8.5-6.3Z" fill="currentColor" />
        <path d="M24.8 19.4c0 3-2 5.5-4.8 6.3A6.6 6.6 0 1 0 20 13c2.8.8 4.8 3.4 4.8 6.4Z" fill="currentColor" />
        <path
          d="M39.6 13.5A4.4 4.4 0 0 1 44 9.1h1.3v2.7l-1 .2-1 .6-.2.4-.1.5h2.3v3H43v9.2h-3.4v-9.3h-1.3v-2.9h1.3ZM55.7 13.5h3.4v6.1a6.9 6.9 0 0 1-1.7 4.6 6 6 0 0 1-4.5 1.8c-1 0-1.8-.1-2.5-.5a6 6 0 0 1-3.2-3.4c-.3-.8-.4-1.6-.4-2.5v-6H50v6c0 .5 0 1 .2 1.3l.5 1c.2.4.5.6.9.8.3.2.8.3 1.2.3a2.6 2.6 0 0 0 2.1-1c.3-.3.4-.7.5-1l.2-1.4v-6ZM61.2 25.7V9.5h3.4v16.2h-3.4ZM66.9 25.7V9.5h3.3v16.2H67ZM78.5 21.2l3.3-7.7h3.7l-5.7 12.2h-2.7l-5.6-12.2H75l3.4 7.7ZM87 13.5h3.3v12.2H87V13.5Zm1.6-5 .8.1.6.4.4.7.2.7a1.9 1.9 0 0 1-.6 1.4l-.6.4a2 2 0 0 1-.8.1c-.5 0-1-.2-1.3-.5a2 2 0 0 1-.4-2.1c0-.3.2-.5.4-.7l.6-.4.7-.1ZM98.8 13.2a6.7 6.7 0 0 1 4.8 1.9 6.3 6.3 0 0 1 1.9 5.7h-9.8a3.3 3.3 0 0 0 3.2 2.2c.5 0 1-.1 1.4-.4.5-.2.9-.5 1.2-1h3.7c-.2.7-.5 1.3-1 1.8a6.1 6.1 0 0 1-3.3 2.3 7 7 0 0 1-6.9-1.6 6.1 6.1 0 0 1-2-4.5 6.1 6.1 0 0 1 2-4.5c.7-.6 1.4-1 2.2-1.4.8-.3 1.7-.5 2.6-.5Zm3.2 5.2c-.3-.6-.7-1.1-1.2-1.5-.6-.4-1.3-.7-2-.7s-1.4.3-2 .7c-.5.4-.9.9-1.1 1.5h6.3ZM123 13.5h3.6l-5 12.2H119l-2.5-6.5-2.5 6.5h-2.7l-5-12.2h3.6l2.7 7 2.8-7h2.2l2.8 7 2.7-7Z"
          fill="currentColor" />
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500" fill="none"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 32">
        <g clip-path="url(#a)">
          <path
            d="M46.6 11c.5-.7 1-1.3 1.9-1.7.7-.5 1.6-.7 2.6-.7v3.9h-1c-1.1 0-2 .2-2.6.8-.6.5-1 1.5-1 2.8v7.3H43V8.8h3.7v2.3ZM53 16c0-1.4.2-2.7.8-3.9a6.6 6.6 0 0 1 5.9-3.6 6 6 0 0 1 4.9 2.4v-2h3.7v14.5h-3.7v-2.1c-.5.6-1.2 1.2-2 1.7-.9.4-1.8.6-3 .6a6.4 6.4 0 0 1-5.8-3.6 8.7 8.7 0 0 1-.9-4Zm11.6.1c0-.9-.2-1.7-.6-2.3-.3-.6-.8-1.1-1.4-1.5-.6-.3-1.3-.5-2-.5a3.8 3.8 0 0 0-3.3 2c-.4.6-.5 1.4-.5 2.2 0 1 .1 1.7.5 2.4a3.8 3.8 0 0 0 3.4 2 4 4 0 0 0 1.9-.5c.6-.4 1-.9 1.4-1.5.4-.6.6-1.4.6-2.3ZM86.4 8.8l-9.2 21.5h-4l3.3-7.3-6-14.2h4.2L78.5 19l3.9-10.2h4ZM95.2 23.6a8 8 0 0 1-3.8-.9 7 7 0 0 1-2.7-2.7 8 8 0 0 1-1-3.9c0-1.5.3-2.8 1-4a7 7 0 0 1 2.8-2.6 8 8 0 0 1 3.8-1 8 8 0 0 1 3.9 1 7.6 7.6 0 0 1 3.7 6.6c0 1.5-.3 2.8-1 4a7 7 0 0 1-2.8 2.6c-1.2.6-2.4 1-3.9 1Zm0-3.2a3.6 3.6 0 0 0 3.3-2c.4-.6.6-1.4.6-2.3 0-1.4-.4-2.4-1.1-3.2a3.6 3.6 0 0 0-2.7-1.1c-1.1 0-2 .4-2.7 1.1-.7.8-1.1 1.8-1.1 3.2 0 1.4.4 2.5 1 3.2.8.7 1.6 1.1 2.7 1.1ZM114.1 8.6c1.8 0 3.2.6 4.3 1.7 1 1 1.6 2.6 1.6 4.5v8.6h-3.7v-8c0-1.2-.3-2.1-1-2.7-.5-.7-1.3-1-2.3-1-1 0-1.9.3-2.5 1-.6.6-.8 1.5-.8 2.6v8h-3.8V8.9h3.8v1.8a5 5 0 0 1 1.8-1.4 6 6 0 0 1 2.6-.6ZM25.1 0H7C3 0 0 3 0 6.9V25C0 29 3 32 6.9 32H25c3.8 0 6.9-3 6.9-6.9V7C32 3 29 0 25.1 0Z"
            fill="currentColor" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M12.7 12a2.5 2.5 0 1 0 0-5.1 2.5 2.5 0 0 0 0 5Zm4-5.1a6.1 6.1 0 1 1 0 12.1V7Zm0 12.1 6.2 6.1H9V11.4l7.7 7.6Z"
            fill="currentColor" class="fill-white dark:fill-neutral-900" />
        </g>
      </svg>
    </div>
    <!-- End Grid -->

    <!-- Grid -->
    <div class="grid grid-cols-3 md:grid-cols-5 gap-x-6 sm:gap-x-6">
      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500"
        xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 88 22" xml:space="preserve"
        enable-background="new 0 0 88 22">
        <path
          d="M36.3 14.6a7.3 7.3 0 0 1-5.6 2.8c-3.8 0-6.8-2.7-6.8-6.2a6 6 0 0 1 2-4.5A6 6 0 0 1 30.5 5c2.2 0 4.3 1 5.6 2.8l-2.5 1.8a3.7 3.7 0 0 0-3.1-1.8 3.5 3.5 0 0 0-3.5 3.5c.1 2 1.7 3.5 3.6 3.5 1.3 0 2.5-.6 3.2-1.7l2.5 1.5z"
          fill="currentColor" />
        <path d="M37.7 0H40.8V17.1H37.7z" fill="currentColor" />
        <path
          d="M49.1 14.7c2 0 3.7-1.6 3.8-3.6-.1-2-1.8-3.6-3.8-3.6s-3.7 1.6-3.8 3.6c.1 2 1.7 3.6 3.8 3.6m0-9.8c1.7-.1 3.4.5 4.7 1.7 1.3 1.2 2 2.8 2.1 4.5a6.4 6.4 0 0 1-2.1 4.5 6.4 6.4 0 0 1-4.7 1.7c-3.8 0-6.8-2.7-6.8-6.2s3-6.2 6.8-6.2"
          fill="currentColor" />
        <path d="M55.3 5.1 59 5.1 62 11.5 65.2 5.1 68.6 5.1 62 17.8z" fill="currentColor" />
        <path
          d="M77.5 9.4a3 3 0 0 0-2.9-1.9c-1.3 0-2.5.7-3.1 1.9h6zm2 6.3a7 7 0 0 1-4.6 1.6c-3.8 0-6.8-2.7-6.8-6.2 0-1.7.7-3.3 1.9-4.5a6 6 0 0 1 4.6-1.7c1.7-.1 3.3.6 4.5 1.8s1.8 2.8 1.7 4.5v.8h-9.6a3.9 3.9 0 0 0 6.5 1.5l1.8 2.2zm2.8-5.3c0-2.9 2.2-5.2 5.7-5.2V8c-.7 0-1.5.3-2 .8s-.7 1.3-.6 2v6.3h-3.1v-6.7z"
          fill="currentColor" />
        <path
          d="M9.7 5.6a5 5 0 0 0-8.3-3.5C0 3.5-.4 5.6.3 7.4s2.5 3 4.5 3h4.9V5.6zm1.4 0a5 5 0 0 1 8.3-3.5c1.4 1.4 1.8 3.5 1.1 5.3s-2.5 3-4.5 3h-4.9V5.6zm0 11a5 5 0 0 0 8.3 3.5c1.4-1.4 1.8-3.5 1.1-5.3s-2.5-3-4.5-3h-4.9v4.8zm-6.3 3.5c1.9 0 3.5-1.5 3.5-3.5v-3.5H4.8c-1.9 0-3.5 1.5-3.5 3.5s1.6 3.5 3.5 3.5zm4.9-3.5a5 5 0 0 1-8.3 3.5C0 18.7-.4 16.6.3 14.8s2.5-3 4.5-3h4.9v4.8z"
          fill="currentColor" />
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500" fill="none"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 151 32">
        <path
          d="M.7 7.6v7.6h15.1V0H.7v7.6ZM17.4 0v15.2h15.1V0H17.4ZM139.3 5.1a5 5 0 0 0-3 2.2c-.6 1-.8 1.8-.8 3.2v1.3h-2.2v1.4l-.1 1.3h2.3v11.1h3.3V14.5h4.8V18c0 4.2.1 5 .6 6 .4.9 1.1 1.5 2 1.7a8 8 0 0 0 3.2 0l.7-.3v-2.6l-.6.2c-1 .4-2 .2-2.4-.6-.1-.3-.2-.8-.2-4.2v-3.7h3.2v-2.7H147v-4h-.3l-1.7.6-1.3.4v3.1h-2.4l-2.4-.1v-1.4c0-1.5.2-2 .9-2.4.4-.3 1.4-.4 2-.1l.6.1V6.7c0-1.2 0-1.4-.2-1.5-.3-.1-2.3-.2-2.8 0ZM66.6 6.3c-.6.4-1 .9-1 1.6 0 1.1 1 1.9 2.2 1.8 1-.1 1.7-.8 1.7-1.8 0-.7-.2-1.1-.9-1.6-.5-.3-1.5-.3-2 0ZM42.1 16v9.6h3.2V10.9l3 7.3 3 7.4h2.3l2.9-7.4 3-7.3v14.7h3.3V6.4h-4.5L55.6 13l-2.9 7-.2.6-1-2.6-2.8-7-1.8-4.6H42V16ZM76.8 11.7a6.8 6.8 0 0 0-5 4.7c-.4 1-.5 3.3-.2 4.4a6.8 6.8 0 0 0 3.2 4.3c1.8 1 4.5 1 6.5.2l.7-.2v-3l-.7.4c-2 1-4.1.9-5.4-.5-1-1-1.3-2.4-1-4.1a4 4 0 0 1 2.4-3.4 5 5 0 0 1 4.3.5l.5.3v-3.1l-.8-.3c-1-.3-3.4-.4-4.5-.2ZM90.7 11.7c-1.1.2-2 .8-2.6 2l-.3.5v-2.4h-3.2v13.8h3.2V17l.4-.7c.5-1 1-1.6 2-1.8a4 4 0 0 1 2 .3l.4.2v-1.6c0-1.1 0-1.6-.2-1.7a4 4 0 0 0-1.7-.1ZM98 11.7a6.4 6.4 0 0 0-5 5c-.3 1-.3 3.1 0 4.3.5 2.3 2.3 4 4.6 4.7 1 .2 3 .2 4.1 0 2.1-.6 3.8-2 4.5-4 .5-1.1.7-2.4.6-3.7a6.6 6.6 0 0 0-1.9-4.6c-.7-.8-1.3-1.1-2.4-1.5-.9-.3-3.5-.4-4.5-.2Zm3.4 2.8c.8.4 1.5 1.2 1.8 2 .1.6.2 1 .2 2.3 0 1.4 0 1.7-.3 2.3-.3.8-.8 1.4-1.6 1.8-.5.2-.7.3-1.6.3-1.2 0-1.8-.2-2.5-.8-1.1-1-1.6-3.2-1.2-5.2.4-1.4 1-2.2 2-2.7.9-.4 2.4-.4 3.2 0ZM111.8 11.7a4.9 4.9 0 0 0-3.1 2.5c-.4.8-.4 2.4 0 3.3.5 1 1 1.4 3 2.4L114 21c.3.3.4 1.2.1 1.6-.7 1-3.1 1-5-.2l-.7-.4V25l.5.2c1.3.5 3.8.7 5.1.3a4.6 4.6 0 0 0 3.2-2.3c.2-.5.3-.8.3-1.7 0-1 0-1.2-.3-1.6-.6-1-1.3-1.7-3.4-2.6-1.5-.7-2-1-2-1.7-.3-1.6 2.1-2.1 4.5-1l.6.4v-1.5l-.1-1.5-.7-.2a11 11 0 0 0-4.2-.2ZM124 11.8c-1.7.4-3.2 1.4-4 2.7a9 9 0 0 0-.6 7.3c1 2.8 4 4.4 7.4 4 1.9-.2 3-.7 4.1-2 1.5-1.3 2-2.8 2-5.2 0-2.4-.5-4-1.8-5.2a5.6 5.6 0 0 0-2.9-1.6c-1.1-.3-3.1-.3-4.3 0Zm3.7 2.8c.6.3 1.2 1 1.6 1.8.2.6.2 1 .2 2.2 0 2.4-.5 3.5-1.8 4.2-.6.3-.8.4-1.7.4-1.3 0-2-.3-2.7-1-.8-1-1-1.7-1-3.4 0-2.3.5-3.5 2-4.2.6-.4.7-.4 1.8-.3.8 0 1.2 0 1.6.3ZM66 18.7v6.9h3.2V11.9h-1.6l-1.7-.1v6.9ZM.7 24.4V32h15.1V16.8H.7v7.6ZM17.4 24.4v7.5H25l7.5.1V16.8H17.4v7.6Z"
          fill="currentColor" />
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500" fill="none"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 107 32">
        <g clip-path="url(#a)" fill="currentColor">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M3.1 0A3.1 3.1 0 0 0 0 3.1v25.2c0 1.7 1.4 3.1 3.1 3.1h25.2c1.7 0 3.1-1.4 3.1-3.1V3C31.4 1.4 30 0 28.3 0H3Zm7.3 18H13c2 0 3.3-2 2.5-3.8l-2.7-6a2.4 2.4 0 0 1 4.4-2L24.7 23a2.5 2.5 0 1 1-4.6 2l-.5-1c-.4-1-1.4-1.6-2.5-1.6h-3c-1 0-2 .6-2.5 1.6l-.4 1a2.5 2.5 0 0 1-4.7-2L8 19.6c.4-1 1.3-1.6 2.4-1.6Zm10.7-9.4L22.5 5c0-.3.5-.3.6 0l.6 1.2.1.1 1.5.8c.2.1.2.5 0 .6L21.5 9a.3.3 0 0 1-.5-.4ZM7.4 13.4l3.6 1.3c.3.1.5-.1.4-.4l-1.3-3.6a.3.3 0 0 0-.6 0L8.7 12l-.1.2-1.3.6c-.2.1-.2.5 0 .6ZM42.1 26.7h-3l6.6-20.3c.1-.3.4-.4.6-.4h4.5c.2 0 .5.1.6.4L58 26.7h-3l-2-6.3H44l-2 6.3Zm2.9-9 2.8-8.6a.8.8 0 0 1 1.5 0l2.8 8.7H45Z" />
          <path
            d="M60.5 11.3v15.4h2.7V12c0-.3-.3-.6-.7-.6h-2ZM106 6h-2v20.7h2.7V6.6c0-.3-.3-.6-.7-.6ZM68.2 13.5a2.2 2.2 0 1 1-4.4 0 2.2 2.2 0 0 1 4.4 0ZM77.9 11.4c3.9.3 5.4 3.8 5.7 5.4h-2.9c-.3-2-2.7-3.9-5.7-2.8-3.3 1.2-3.2 4.8-3 6 .2 1.1.6 3 3 4 3 1.1 5.4-.8 5.7-2.8h2.9c-.3 1.7-1.8 5-5.7 5.4-4.3.5-6-1.5-6.8-2.4a7 7 0 0 1-1.4-2.8c-.8-3.5.4-6.5 1.4-7.6.7-1 2.5-2.8 6.8-2.4Z" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M87.8 13.8c-1 1-2.2 4-1.5 7.6.2.8.8 2 1.5 2.8.7.9 2.3 2.5 5.8 2.5 3.6 0 5.1-1.6 5.9-2.5a7 7 0 0 0 1.4-2.8c.8-3.5-.5-6.5-1.4-7.6-.7-1-2.3-2.5-5.9-2.5-3.5 0-5.1 1.6-5.8 2.5Zm1 6.3c-.2-1.3-.4-4.9 3-6a5.4 5.4 0 0 1 3.6 0c3.4 1.1 3.3 4.7 3.1 6-.2 1-.6 3-3 4a5.4 5.4 0 0 1-3.7 0c-2.4-1-2.9-3-3-4Z" />
        </g>
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500"
        xmlns="http://www.w3.org/2000/svg" width="2500" height="1036" viewBox="0 -6.166 294.398 121.975">
        <path
          d="M12.139 90.511c-3.939 0-7.799-.479-10.938-1.292l.487-8.277c3.053 1.123 7.313 2.012 11.254 2.012 5.952 0 10.775-2.492 10.775-8.359C23.718 63.172 0 68.002 0 50.466c0-9.325 7.315-15.834 19.941-15.834 3.214 0 6.51.397 9.809.959l-.485 7.802c-3.132-.963-6.591-1.527-9.806-1.527-6.754 0-10.211 3.134-10.211 7.638 0 10.855 23.72 6.839 23.72 23.798-.005 9.973-7.882 17.209-20.829 17.209M54.106 90.264c-2.249 0-3.938-.076-6.03-.479v17.397h-8.601V49.746h8.12c0 2.094-.082 5.309-.484 7.476h.162c2.25-5.068 6.833-8.283 12.944-8.283 9.487 0 14.712 6.75 14.712 18.814.001 14.076-7.473 22.511-20.823 22.511m3.861-34.246c-6.434 0-9.892 7.558-9.892 14.384v12.312c1.852.562 3.86.804 6.272.804 6.833 0 11.497-4.182 11.497-14.958.001-8.039-2.49-12.542-7.877-12.542zM102.519 57.381C94.561 55.936 90.7 61.485 90.7 73.466v16.238h-8.606V49.746H90.3c0 2.246-.246 5.791-.809 8.844h.162c1.771-5.388 5.79-10.377 13.271-9.651l-.405 8.442M114.803 43.797c-3.056 0-5.55-2.414-5.55-5.393 0-2.971 2.494-5.385 5.55-5.385 2.974 0 5.467 2.333 5.467 5.385 0 2.979-2.493 5.393-5.467 5.393m4.26 45.907h-8.6V49.746h8.6v39.958zM154.449 89.704V63.975c0-4.982-1.374-7.875-5.951-7.875-6.03 0-10.457 6.345-10.457 14.302v19.303h-8.603V49.746h8.203c0 2.094-.162 5.546-.563 7.796l.082.075c2.33-5.141 7.157-8.68 13.91-8.68 9.084 0 11.9 5.711 11.9 12.787v27.979h-8.521M186.675 90.425c-8.524 0-11.1-3.294-11.1-12.214V56.417h-7.634v-6.671h7.634V37.04l8.523-2.333v15.039h10.532v6.671h-10.448v19.137c0 5.954 1.205 7.558 5.224 7.558 1.769 0 3.699-.24 5.226-.643v7.076c-2.331.486-5.307.88-7.957.88"
          fill="currentColor" />
        <path
          d="M233.712 78.636c11.72-15.086 20.938-32.809 20.938-45.537 0-6.652-4.765-11.295-10.978-14.823.123 13.831-4.668 46.263-9.96 60.36M195.279 115.809c27.47-9.188 67.29-30.598 94.985-49.725 2.324-1.6 4.135-3.085 4.135-5.685 0-4.519-8.275-10.576-12.292-12.987-21.792 22.653-65.163 56.596-86.828 68.397"
          fill="currentColor" />
        <path
          d="M220.76 96.567c16.938-11.709 41.545-33.739 49.873-45.727 1.963-2.82 3.416-4.454 3.416-7.405 0-4.839-5.644-8.382-9.703-10.849-9.727 22.924-31.579 51.469-43.586 63.981M236.192 64.087c2.191-14.477.903-31.952-1.894-42.913-1.521-5.969-6.901-12.706-11.88-14.812 6.526 18.522 12.128 44.898 13.774 57.725"
          fill="currentColor" />
        <path d="M231.367 43.779C226.235 29.91 213.446.998 194.633-6.165c12.247 13.516 30.417 40.337 36.734 49.944"
          fill="currentColor" />
      </svg>

      <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-500 dark:text-neutral-500" width="2500"
        height="728" viewBox="0 0 512 149" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M.06 27.679h17.852v39.662h37.651V27.679h17.875v97.358H55.563V84.542H17.912v40.495H.06V27.679zM129.993 93.326c0 8.15-6.64 14.782-14.788 14.782-8.151 0-14.787-6.632-14.787-14.782V51.41h-16.93v41.916c0 17.487 14.229 31.711 31.717 31.711 17.484 0 31.712-14.224 31.712-31.711V51.41h-16.924v41.916M194.179 51.901c-8.398 0-14.26 2.437-19.921 7.994V27.679h-16.985v59.705c0 22.348 16.158 37.653 34.311 37.653 20.181 0 37.863-15.578 37.863-36.567 0-20.723-16.305-36.569-35.268-36.569zm.422 57.423c-11.509 0-20.31-9.612-20.31-20.854 0-11.244 8.801-20.859 20.31-20.859 9.752 0 18.558 9.615 18.558 20.859 0 11.242-8.806 20.854-18.558 20.854zM257.974 56.18c0-8.538 5.689-11.245 11.917-11.245 5.014 0 11.649 3.792 15.979 8.398l11.103-13.001c-5.549-7.448-16.788-12.596-25.998-12.596-18.421 0-31.694 10.7-31.694 28.444 0 32.91 40.497 22.478 40.497 40.902 0 5.682-5.551 10.698-11.913 10.698-10.026 0-13.278-4.876-17.881-10.024l-12.327 12.729c7.86 9.617 17.608 14.495 29.257 14.495 17.47 0 31.556-10.835 31.556-27.767 0-36.566-40.496-25.188-40.496-41.033M343.184 50.947c-18.151 0-34.311 15.296-34.311 37.649v59.859h16.984v-32.369c5.662 5.553 11.521 7.994 19.922 7.994 18.962 0 35.269-15.844 35.269-36.567 0-20.992-17.687-36.566-37.864-36.566zm3.018 57.425c-11.508 0-20.31-9.625-20.31-20.859 0-11.244 8.802-20.859 20.31-20.859 9.75 0 18.557 9.615 18.557 20.859 0 11.234-8.807 20.859-18.557 20.859zM506.069 109.324c-10.018 0-12.862-4.332-12.862-10.971V68.965h15.572V54.069h-15.572v-19.64l-17.195 7.718v59.863c0 15.306 10.56 23.027 25.045 23.027 2.167 0 5.15-.14 6.777-.541l4.199-15.438c-1.896.131-4.062.266-5.964.266"
          fill="currentColor" />
        <path
          d="M461.278 69.831c-3.256-5.602-7.836-10.093-13.562-13.474-4.279-2.491-8.716-4.072-13.716-4.751v-17.8c5-2.123 8.103-6.822 8.103-12.304 0-7.472-5.992-13.527-13.458-13.527-7.472 0-13.569 6.055-13.569 13.527 0 5.482 2.924 10.181 7.924 12.304v17.808c-4 .578-8.148 1.825-11.936 3.741-7.737-5.876-33.107-25.153-47.948-36.412.352-1.269.623-2.577.623-3.957 0-8.276-6.702-14.984-14.981-14.984S333.78 6.71 333.78 14.986c0 8.275 6.706 14.985 14.985 14.985 2.824 0 5.436-.826 7.69-2.184l3.132 2.376 43.036 31.008c-2.275 2.089-4.394 4.465-6.089 7.131C393.099 73.737 391 79.717 391 86.24v1.361c0 4.579.87 8.902 2.352 12.963 1.305 3.546 3.213 6.77 5.576 9.685l-14.283 14.318a11.501 11.501 0 0 0-12.166 2.668 11.499 11.499 0 0 0-3.388 8.19c.001 3.093 1.206 6 3.394 8.187a11.5 11.5 0 0 0 8.188 3.394 11.51 11.51 0 0 0 8.191-3.394 11.514 11.514 0 0 0 3.39-8.187c0-1.197-.185-2.365-.533-3.475l14.763-14.765c2.024 1.398 4.21 2.575 6.56 3.59 4.635 2.004 9.751 3.225 15.35 3.225h1.026c6.19 0 12.029-1.454 17.518-4.428 5.784-3.143 10.311-7.441 13.731-12.928 3.438-5.502 5.331-11.581 5.331-18.269v-.334c0-6.579-1.523-12.649-4.722-18.21zm-18.038 30.973c-4.007 4.453-8.613 7.196-13.82 7.196h-.858c-2.974 0-5.883-.822-8.731-2.317-3.21-1.646-5.65-3.994-7.647-6.967-2.064-2.918-3.184-6.104-3.184-9.482v-1.026c0-3.321.637-6.47 2.243-9.444 1.717-3.251 4.036-5.779 7.12-7.789 3.028-1.996 6.262-2.975 9.864-2.975h.335c3.266 0 6.358.644 9.276 2.137 2.973 1.592 5.402 3.767 7.285 6.628 1.829 2.862 2.917 5.949 3.267 9.312.055.699.083 1.415.083 2.099 0 4.564-1.744 8.791-5.233 12.628z"
          fill="currentColor" />
      </svg>
    </div>
    <!-- End Grid -->

    <div class="mt-8 text-center">
      <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
        href="#">
        Read case studies
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6" />
        </svg>
      </a>
    </div>
  </div>
  <!-- End Clients -->


@endsection