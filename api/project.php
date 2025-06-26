<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardit Ahmeti</title>
    <link rel="icon" href="/img/dev.png">
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

    <?php include 'data/projects.php'; ?>
    
    <?php include 'gototop.php'; ?>

    <?php
        // Pagination settings
        $projectsPerPage = 8;
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $totalProjects = count($projects);
        $totalPages = ceil($totalProjects / $projectsPerPage);
        $start = ($currentPage - 1) * $projectsPerPage;
        $projectsToShow = array_slice($projects, $start, $projectsPerPage);
    ?>

    <section class="text-gray-600 body-font">
        <div class="container px-10 py-10 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h2 class="text-xs text-blue-500 tracking-widest font-medium title-font mb-1 uppercase">My Work</h2>
                <h1 class="sm:text-4xl text-3xl font-bold title-font text-gray-900 mb-4">Projects</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-600">
                    Throughout my journey, I have completed diverse projects across academic and professional settings, gaining valuable hands-on experience,
                    collaborating with organizations, and developing innovative solutions.
                </p>
                <div class="h-1 w-24 bg-blue-500 rounded mt-6 mx-auto"></div>
            </div>

            <div class="flex flex-wrap -m-4" id="projects-container">
                <?php foreach ($projectsToShow as $index => $project): ?>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="bg-gray-100 p-6 rounded-lg h-full flex flex-col justify-between">
                            <div>
                                <img onclick="openModal('<?php echo $project['image']; ?>')" class="w-full h-64 object-cover rounded mb-4 cursor-pointer hover:opacity-90 transition duration-300" src="<?php echo $project['image']; ?>" alt="Project Image">
                                <h3 class="tracking-widest text-blue-500 text-xs font-medium title-font"><?php echo $project['year']; ?></h3>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4"><?php echo $project['title']; ?></h2>
                                <p id="project-desc-<?php echo $index; ?>" class="leading-relaxed text-base overflow-hidden line-clamp-2 transition-all duration-500">
                                    <?php echo $project['description']; ?>
                                </p>
                                <button onclick="toggleProjectDescription(<?php echo $index; ?>)"
                                    class="text-blue-600 hover:underline focus:outline-none mt-2 text-sm"
                                    id="btn-<?php echo $index; ?>">
                                    Read More
                                </button>
                            </div>
                            <div class="mt-4">
                                <span class="text-gray-700 font-semibold">Technologies:</span>
                                <p class="text-gray-600"><?php echo $project['technologies']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination Links -->
            <div class="flex justify-center mt-8 space-x-2">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="?page=<?php echo $i; ?>"
                        class="px-4 py-2 rounded-full <?php echo $i == $currentPage ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700'; ?>">
                        <?php echo $i; ?>
                    </a>
                <?php endfor; ?>
            </div>

        </div>
    </section>

    <script>
        function toggleProjectDescription(index) {
            const desc = document.getElementById('project-desc-' + index);
            const btn = document.getElementById('btn-' + index);

            desc.classList.toggle('line-clamp-2');

            if (desc.classList.contains('line-clamp-2')) {
                btn.innerText = 'Read More';
            } else {
                btn.innerText = 'Read Less';
            }
        }
    </script>

    <?php include 'data/technologies.php'; ?>

    <section class="text-gray-600 body-font bg-blue-100" id="technologies">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h2 class="text-xs text-blue-500 tracking-widest font-medium title-font mb-1 uppercase">Skills & Technologies</h2>
                <h1 class="sm:text-4xl text-3xl font-bold title-font text-gray-900 mb-4">Technologies I Use</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-700">
                    Over the years, I have mastered a diverse set of technologies to build reliable, scalable, and impactful digital solutions.
                    My technical expertise spans across frontend, backend, databases, and modern frameworks. Here are some of the technologies I work with:
                </p>
                <div class="h-1 w-24 bg-blue-500 rounded mt-6 mx-auto"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-6">
                <?php foreach ($technologies as $tech): ?>
                    <div class="w-32 h-32 bg-white border border-gray-200 rounded-lg shadow-md flex flex-col items-center justify-center hover:shadow-xl transition duration-300">
                        <div class="w-14 h-14 mb-2">
                            <?php echo $tech['icon']; ?>
                        </div>
                        <h2 class="text-gray-900 text-center font-semibold text-sm mt-2"><?php echo $tech['name']; ?></h2>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>

</html>
