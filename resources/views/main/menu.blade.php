<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>for P.</title>
    <link rel="icon" href="src/favicon.ico">
</head>

<body>
    <nav class="w-full border-gray-200 dark:bg-gray-900 p-5">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <div class="flex md:order-2">
                <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search" style="z-index: 10;">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/menu" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent font-semibold md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/comics" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Mini Galeries</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="fade-in ms-5 p-5 flex justify-center text-white text-sm" style="margin-right: 65rem;">
        kindly to play this song:D
    </h1>
    <div class="mt-7 top-5" style="height: 100vh;">
        <div class="mt-7">
            <div class="flex items-center justify-center me-auto md:flex">
                <img class="fade-in me-3 rounded" width="200px" src="/src/fls.jpg" alt="Feels Like You">
            </div>
            <div class="flex flex-col items-center justify-center h-full p-2">
                <p class="fade-in text-lg font-bold text-white dark:text-white">Feels like you</p>
                <p class="fade-in text-base text-gray-500 dark:text-gray-400">Faime</p>
            </div>
            <div class="flex mx-auto items-center justify-center mt-1">
                <div class="flex items-center w-full">
                    <div class="w-full">
                        <div class="fade-in flex items-center justify-center mx-auto mb-1">
                            <button id="play-pause-btn" type="button" class="inline-flex items-center justify-center p-2.5 mx-2 font-medium bg-blue-600 rounded-full hover:bg-blue-700 group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                                <svg id="pause-icon" class="w-3 h-3 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <path fill-rule="evenodd" d="M0 .8C0 .358.32 0 .714 0h1.429c.394 0 .714.358.714.8v14.4c0 .442-.32.8-.714.8H.714a.678.678 0 0 1-.505-.234A.851.851 0 0 1 0 15.2V.8Zm7.143 0c0-.442.32-.8.714-.8h1.429c.19 0 .37.084.505.234.134.15.209.354.209.566v14.4c0 .442-.32.8-.714.8H7.857c-.394 0-.714-.358-.714-.8V.8Z" clip-rule="evenodd" />
                                </svg>
                                <svg id="play-icon" class="w-3 h-3 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="#fff" d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <audio id="song" src="/src/fls.mp3" loop></audio>
        </div>
    </div>

    <div class="night"></div>
    <div class="flowers">
        <div class="flower flower--1">
            <div class="flower__leafs flower__leafs--1">
                <div class="flower__leaf flower__leaf--1"></div>
                <div class="flower__leaf flower__leaf--2"></div>
                <div class="flower__leaf flower__leaf--3"></div>
                <div class="flower__leaf flower__leaf--4"></div>
                <div class="flower__white-circle"></div>

                <div class="flower__light flower__light--1"></div>
                <div class="flower__light flower__light--2"></div>
                <div class="flower__light flower__light--3"></div>
                <div class="flower__light flower__light--4"></div>
                <div class="flower__light flower__light--5"></div>
                <div class="flower__light flower__light--6"></div>
                <div class="flower__light flower__light--7"></div>
                <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
                <div class="flower__line__leaf flower__line__leaf--1"></div>
                <div class="flower__line__leaf flower__line__leaf--2"></div>
                <div class="flower__line__leaf flower__line__leaf--3"></div>
                <div class="flower__line__leaf flower__line__leaf--4"></div>
                <div class="flower__line__leaf flower__line__leaf--5"></div>
                <div class="flower__line__leaf flower__line__leaf--6"></div>
            </div>
        </div>

        <div class="flower flower--2">
            <div class="flower__leafs flower__leafs--2">
                <div class="flower__leaf flower__leaf--1"></div>
                <div class="flower__leaf flower__leaf--2"></div>
                <div class="flower__leaf flower__leaf--3"></div>
                <div class="flower__leaf flower__leaf--4"></div>
                <div class="flower__white-circle"></div>

                <div class="flower__light flower__light--1"></div>
                <div class="flower__light flower__light--2"></div>
                <div class="flower__light flower__light--3"></div>
                <div class="flower__light flower__light--4"></div>
                <div class="flower__light flower__light--5"></div>
                <div class="flower__light flower__light--6"></div>
                <div class="flower__light flower__light--7"></div>
                <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
                <div class="flower__line__leaf flower__line__leaf--1"></div>
                <div class="flower__line__leaf flower__line__leaf--2"></div>
                <div class="flower__line__leaf flower__line__leaf--3"></div>
                <div class="flower__line__leaf flower__line__leaf--4"></div>
            </div>
        </div>

        <div class="flower flower--3">
            <div class="flower__leafs flower__leafs--3">
                <div class="flower__leaf flower__leaf--1"></div>
                <div class="flower__leaf flower__leaf--2"></div>
                <div class="flower__leaf flower__leaf--3"></div>
                <div class="flower__leaf flower__leaf--4"></div>
                <div class="flower__white-circle"></div>

                <div class="flower__light flower__light--1"></div>
                <div class="flower__light flower__light--2"></div>
                <div class="flower__light flower__light--3"></div>
                <div class="flower__light flower__light--4"></div>
                <div class="flower__light flower__light--5"></div>
                <div class="flower__light flower__light--6"></div>
                <div class="flower__light flower__light--7"></div>
                <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
                <div class="flower__line__leaf flower__line__leaf--1"></div>
                <div class="flower__line__leaf flower__line__leaf--2"></div>
                <div class="flower__line__leaf flower__line__leaf--3"></div>
                <div class="flower__line__leaf flower__line__leaf--4"></div>
            </div>
        </div>

        <div class="grow-ans" style="--d:1.2s">
            <div class="flower__g-long">
                <div class="flower__g-long__top"></div>
                <div class="flower__g-long__bottom"></div>
            </div>
        </div>

        <div class="growing-grass">
            <div class="flower__grass flower__grass--1">
                <div class="flower__grass--top"></div>
                <div class="flower__grass--bottom"></div>
                <div class="flower__grass__leaf flower__grass__leaf--1"></div>
                <div class="flower__grass__leaf flower__grass__leaf--2"></div>
                <div class="flower__grass__leaf flower__grass__leaf--3"></div>
                <div class="flower__grass__leaf flower__grass__leaf--4"></div>
                <div class="flower__grass__leaf flower__grass__leaf--5"></div>
                <div class="flower__grass__leaf flower__grass__leaf--6"></div>
                <div class="flower__grass__leaf flower__grass__leaf--7"></div>
                <div class="flower__grass__leaf flower__grass__leaf--8"></div>
                <div class="flower__grass__overlay"></div>
            </div>
        </div>

        <div class="growing-grass">
            <div class="flower__grass flower__grass--2">
                <div class="flower__grass--top"></div>
                <div class="flower__grass--bottom"></div>
                <div class="flower__grass__leaf flower__grass__leaf--1"></div>
                <div class="flower__grass__leaf flower__grass__leaf--2"></div>
                <div class="flower__grass__leaf flower__grass__leaf--3"></div>
                <div class="flower__grass__leaf flower__grass__leaf--4"></div>
                <div class="flower__grass__leaf flower__grass__leaf--5"></div>
                <div class="flower__grass__leaf flower__grass__leaf--6"></div>
                <div class="flower__grass__leaf flower__grass__leaf--7"></div>
                <div class="flower__grass__leaf flower__grass__leaf--8"></div>
                <div class="flower__grass__overlay"></div>
            </div>
        </div>

        <div class="grow-ans" style="--d:2.4s">
            <div class="flower__g-right flower__g-right--1">
                <div class="leaf"></div>
            </div>
        </div>

        <div class="grow-ans" style="--d:2.8s">
            <div class="flower__g-right flower__g-right--2">
                <div class="leaf"></div>
            </div>
        </div>

        <div class="grow-ans" style="--d:2.8s">
            <div class="flower__g-front">
                <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--1">
                    <div class="flower__g-front__leaf"></div>
                </div>
                <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--2">
                    <div class="flower__g-front__leaf"></div>
                </div>
                <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--3">
                    <div class="flower__g-front__leaf"></div>
                </div>
                <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--4">
                    <div class="flower__g-front__leaf"></div>
                </div>
                <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--5">
                    <div class="flower__g-front__leaf"></div>
                </div>
                <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--6">
                    <div class="flower__g-front__leaf"></div>
                </div>
                <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--7">
                    <div class="flower__g-front__leaf"></div>
                </div>
                <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--8">
                    <div class="flower__g-front__leaf"></div>
                </div>
                <div class="flower__g-front__line"></div>
            </div>
        </div>

        <div class="grow-ans" style="--d:3.2s">
            <div class="flower__g-fr">
                <div class="leaf"></div>
                <div class="flower__g-fr__leaf flower__g-fr__leaf--1"></div>
                <div class="flower__g-fr__leaf flower__g-fr__leaf--2"></div>
                <div class="flower__g-fr__leaf flower__g-fr__leaf--3"></div>
                <div class="flower__g-fr__leaf flower__g-fr__leaf--4"></div>
                <div class="flower__g-fr__leaf flower__g-fr__leaf--5"></div>
                <div class="flower__g-fr__leaf flower__g-fr__leaf--6"></div>
                <div class="flower__g-fr__leaf flower__g-fr__leaf--7"></div>
                <div class="flower__g-fr__leaf flower__g-fr__leaf--8"></div>
            </div>
        </div>

        <div class="long-g long-g--0">
            <div class="grow-ans" style="--d:3s">
                <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:2.2s">
                <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3.4s">
                <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
                <div class="leaf leaf--3"></div>
            </div>
        </div>

        <div class="long-g long-g--1">
            <div class="grow-ans" style="--d:3.6s">
                <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:3.8s">
                <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:4s">
                <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
                <div class="leaf leaf--3"></div>
            </div>
        </div>

        <div class="long-g long-g--2">
            <div class="grow-ans" style="--d:4s">
                <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
                <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:4.4s">
                <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:4.6s">
                <div class="leaf leaf--3"></div>
            </div>
        </div>

        <div class="long-g long-g--3">
            <div class="grow-ans" style="--d:4s">
                <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
                <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3s">
                <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
                <div class="leaf leaf--3"></div>
            </div>
        </div>

        <div class="long-g long-g--4">
            <div class="grow-ans" style="--d:4s">
                <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
                <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3s">
                <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
                <div class="leaf leaf--3"></div>
            </div>
        </div>

        <div class="long-g long-g--5">
            <div class="grow-ans" style="--d:4s">
                <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
                <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3s">
                <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
                <div class="leaf leaf--3"></div>
            </div>
        </div>

        <div class="long-g long-g--6">
            <div class="grow-ans" style="--d:4.2s">
                <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.4s">
                <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:4.6s">
                <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:4.8s">
                <div class="leaf leaf--3"></div>
            </div>
        </div>

        <div class="long-g long-g--7">
            <div class="grow-ans" style="--d:3s">
                <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:3.2s">
                <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3.5s">
                <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
                <div class="leaf leaf--3"></div>
            </div>
        </div>
    </div>

    <div class="items-center justify-center mt-7 mb-7">
        <figure class="max-w-screen-md mx-auto text-center">
            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
            </svg>
            <blockquote>
                <!-- text-gray-900 -->
                <p class="fade-in p-5 text-lg font-medium text-white dark:text-white pq">Dear P.</p>
                <p class="fade-in p-5 text-xs font-medium text-white dark:text-white text-justify">
                    Makasih udah mau liat website amburadul ini wkwk.<br> Agak santai weh ya kata-katanya, maaf juga sebelumnya aku buat website ini tanpa se-izin kamu. Intinya, tujuan aku buat website ini cuma ingin bilang sesuatu
                </p>
                <p class="fade-in p-5 text-xs font-medium text-white dark:text-white text-justify">
                    “Aku cuma mau bilang terima kasih untuk semua hal baik yang kamu lakuin selama ini. Aku ngerasa nyaman karena berbagi hal yang menyenangkan dan dihargai setiap kali ada kamu, mau itu dalam organisi maupun di luar organisasi. Seiring waktu, aku sadar <i>perasaanku lebih dari sekadar teman.</i> Aku juga ga ingin buru-buru, dan aku paham kalau kamu butuh waktu untuk mikirin ini. Aku cuma ingin kamu tahu apa yang aku rasain. Apapun jawaban kamu, aku tetap ngehargain kamu.”
                </p>
                <p class="fade-in p-5 text-xs font-medium text-white dark:text-white text-justify">
                    Aku bener-bener bersyukur bisa kenal kamu. Rasanya juga ga ada penyesalan buat lebih terbuka ke kamu. Apapun yang kamu rasakan, aku sangat menghargai kamu dan semua yang udah kita jalani. Aku harap kita tetap bisa saling mendukung dan menjaga hubungan baik kaya gini, apapun yang terjadi nanti yaa... <b>semoga aja kita masih bisa temenan dan ga ngerasa canggung satu sama lain.</b>
                </p>
            </blockquote>
        </figure>
    </div>


    <div class="flex justify-center mt-7 pt-5">
        <div class="w-full max-w-sm rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center pt-7 pb-10">
                <img id="hidden-image" width="250rem" class="hidden-image mb-5 rounded-lg shadow-lg pt-7 mt-7" src="/src/last1.jpg" alt="That One Special Day" />
                <p class="text-white p-1">27/9/2024</p>
                <div class="flex mt-4 md:mt-6">
                    <button id="show-image-btn" class="text-white hover:text-white border border-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                        What's Here?
                    </button>
                    <a href="/src/last.jpg" download="special-day.jpg" class="py-2 px-4 ms-2 text-sm font-medium text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                        Download
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Initially Hidden Image */
        .hidden-image {
            display: block;
            opacity: 0;
            transform: translateY(20px);
            /* Initially offset below */
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        /* Show Image with Animation */
        .visible {
            opacity: 1;
            transform: translateY(0);
            /* Move into place */
        }

        .hidden1 {
            opacity: 0;
            transform: translateY(20px);
            /* Move down to hide */
        }

        .fade-in {
            opacity: 0;
            transform: translateY(50px);
            /* Start slightly below */
            transition: opacity 1s ease, transform 1s ease;
            /* Smooth transition */
        }

        /* Visible text */
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
            /* Reset position */
        }
    </style>

    <script>
        onload = () => {
            const c = setTimeout(() => {
                document.body.classList.remove("not-loaded");
                clearTimeout(c);
            }, 1000);
        };

        document.addEventListener("DOMContentLoaded", () => {
            const audio = document.getElementById("song");
            const playPauseBtn = document.getElementById("play-pause-btn");
            const playIcon = document.getElementById("play-icon");
            const pauseIcon = document.getElementById("pause-icon");

            // Auto-play the audio (optional)
            audio.play();

            playPauseBtn.addEventListener("click", () => {
                if (audio.paused) {
                    audio.play();
                    playIcon.classList.add("hidden");
                    pauseIcon.classList.remove("hidden");
                } else {
                    audio.pause();
                    playIcon.classList.remove("hidden");
                    pauseIcon.classList.add("hidden");
                }
            });
        });

        // JavaScript to toggle visibility of the hidden image
        const showImageBtn = document.getElementById("show-image-btn");
        const hiddenImage = document.getElementById("hidden-image");

        showImageBtn.addEventListener("click", () => {
            if (hiddenImage.classList.contains("hidden")) {
                hiddenImage.classList.remove("hidden"); // Show the hidden image
                hiddenImage.classList.add("visible"); // Add visible class to animate
                showImageBtn.textContent = "Hide Image"; // Update button text
            } else {
                hiddenImage.classList.remove("visible"); // Remove animation class
                hiddenImage.classList.add("hidden"); // Hide the image
                showImageBtn.textContent = "What's Here?"; // Reset button text
            }
        });

        // Function to check if an element is in the viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top < window.innerHeight && rect.bottom > 0 // Element intersects viewport
            );
        }

        // Function to handle scroll event
        function handleScroll() {
            const fadeInElements = document.querySelectorAll('.fade-in');
            fadeInElements.forEach((element) => {
                if (isInViewport(element)) {
                    element.classList.add('visible'); // Make visible when in viewport
                } else {
                    element.classList.remove('visible'); // Make invisible when out of viewport
                }
            });
        }

        // Add scroll event listener
        window.addEventListener('scroll', handleScroll);

        // Initial call to handleScroll to catch elements already in view
        handleScroll();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>

</html>