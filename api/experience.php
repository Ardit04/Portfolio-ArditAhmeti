<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardit Ahmeti</title>
    <link rel="icon" href="/img/rocket.png">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>

</head>

<body>

    <?php include 'header.php'; ?>

    <?php include 'data/experiences.php'; ?>
    
    <?php include 'gototop.php'; ?>

    <section class="text-gray-600 body-font bg-white" id="experiences">
        <div class="container px-10 py-10 mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-xs text-blue-500 tracking-widest font-medium title-font mb-1">Professional Journey</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">My Experience & Contributions</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-justify">
                    Throughout my professional journey, I have embraced opportunities to work across different industries,
                    enhancing my technical skills, leadership abilities, and creative problem-solving.
                    Each role, project, and collaboration has helped shape me into a versatile and passionate developer
                    ready to deliver impactful solutions. Here’s a glimpse into the experiences that have defined my career so far.
                </p>
            </div>

            <div class="flex flex-wrap -m-4">
                <?php foreach ($experiences as $index => $experience): ?>
                    <div class="p-4 lg:w-1/3">
                        <div class="h-full bg-blue-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h1 class="tracking-widest text-s title-font font-medium text-gray-500 mb-1">
                                Company: <?php echo $experience['company']; ?>
                            </h1>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
                                Position: <?php echo $experience['position']; ?>
                            </h1>

                            <!-- Description -->
                            <p id="desc-<?php echo $index; ?>" class="leading-relaxed mb-3 text-justify line-clamp-2 overflow-hidden transition-all duration-500">
                                Description: <?php echo $experience['description']; ?>
                            </p>

                            <!-- Read More button -->
                            <button onclick="toggleDescription(<?php echo $index; ?>)" class="text-blue-600 hover:underline focus:outline-none mt-2">
                                Read More
                            </button>

                            <span class="mt-4 block text-gray-500 text-s">
                                Duration: <?php echo $experience['duration']; ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
        function toggleDescription(index) {
            const desc = document.getElementById('desc-' + index);
            desc.classList.toggle('line-clamp-2');
        }
    </script>



    <section class="flex flex-col items-center justify-center bg-blue-100 py-12 px-6">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Explore More About Me</h2>
            <p class="text-gray-600 text-base leading-relaxed">
                Download my CV or view my latest projects to learn more about my journey and work.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
            <a href="/pdf/arditahmeti-cv.pdf" download class="inline-flex items-center text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg transition">
                Here is my CV
                <svg class="w-5 h-5 ml-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />
                </svg>
            </a>

            <a href="project.php" class="inline-flex items-center text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg transition">
                Here are my projects
                <svg class="w-6 h-6 ml-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                </svg>
            </a>
        </div>
    </section>


    <?php include 'footer.php'; ?>

</body>

</html>