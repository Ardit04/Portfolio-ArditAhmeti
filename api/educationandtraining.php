<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ardit Ahmeti</title>
  <link rel="icon" href="/img/dev.png">
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

  <?php include 'header.php'; ?>
  <?php include 'gototop.php'; ?>
  <?php include 'data/education.php'; ?>
  <?php include 'data/training.php'; ?>

  <section class="text-gray-600 body-font" id="about">
    <div class="container mx-auto flex px-10 py-10 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" src="/img/ardit.jpg" alt="Ardit">
      </div>
      <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                    Ardit Ahmeti - Full Stack Developer
                </h1>
                <p class="mb-8 leading-relaxed text-justify">
                    Hi! I’m Ardit, a passionate Full-Stack Developer with practical experience in developing scalable
                    web applications and customized WordPress solutions. I bring a strong foundation in:
                    <br><br>
                    - Full-stack development (HTML, CSS/TailwindCSS, JavaScript, React, PHP/Laravel, MySQL) <br>
                    - WordPress development (custom themes, plugins, WooCommerce, Elementor) <br>
                    - Debugging, performance optimization, and software prototyping <br>
                    - Explaining technical concepts in simple terms and guiding others through practical learning
                    <br><br>
                    I am currently pursuing a Bachelor's degree in Computer Science and Engineering at UBT – University
                    for Business and Technology. Additionally, I completed an intensive Full-Stack Development program
                    and internship at Tectigon Academy, where I built real-world web applications using modern tools and
                    frameworks.
                    <br><br>
                    I thrive on solving complex problems, delivering user-focused solutions, and staying up-to-date with
                    the latest technologies. My approach blends creativity, critical thinking, and a deep commitment to
                    clean, maintainable code.
                    <br><br>
                    Let’s collaborate to build something impactful and innovative.
                </p>

                <div class="flex justify-center">
                    <a href="/pdf/arditahmeti-cv.pdf" download
                        class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg items-center">
                        Here is my CV
                        <svg class="w-5 h-5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />
                        </svg>
                    </a>

                    <a href="#contact"
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg items-center"
                        id="contacts">
                        Get in Touch
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-journal-richtext ml-2" viewBox="0 0 16 16">
                            <path
                                d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font bg-green-100">
    <div class="container mx-auto px-4 py-12">
      <h1 class="text-3xl font-bold text-center mb-8">My Education & Training</h1>
      <p class="text-gray-600 max-w-xl mx-auto mb-8 text-center">
        My academic journey has equipped me with strong foundations in engineering and technology. Below are some of the key educational milestones that shaped my professional path.
        I have also participated in various professional training programs that enhanced my technical and soft skills.
      </p>

      <!-- Tab Buttons -->
      <div class="flex justify-center space-x-4 mb-10">
        <button onclick="showTab('education')" id="btn-education"
          class="tab-btn bg-green-600 text-white px-6 py-2 rounded-lg font-medium transition duration-200 shadow hover:bg-green-700">Education</button>
        <button onclick="showTab('training')" id="btn-training"
          class="tab-btn border border-green-600 text-green-600 px-6 py-2 rounded-lg font-medium transition duration-200 hover:bg-green-50">Training</button>
      </div>

      <!-- Education Tab -->
      <div id="education" class="tab-content block">
        <div class="flex flex-wrap -m-4">
          <?php foreach ($education as $edu): ?>
            <div class="p-4 w-full md:w-1/2 lg:w-1/2 xl:w-1/2">
              <div class="h-full bg-white p-8 rounded text-center">
                <img onclick="openModal('<?php echo $edu['image']; ?>')" class="w-full h-64 object-cover rounded mb-4 cursor-pointer hover:opacity-90 transition duration-300" src="<?php echo $edu['image']; ?>" alt="Education Image">
                <h3 class="text-lg font-medium text-gray-900 mb-2"><?php echo $edu['title']; ?></h3>
                <p class="text-green-600 font-semibold"><?php echo $edu['university']; ?></p>
                <p class="text-gray-700"><?php echo $edu['description']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Training Tab -->
      <?php
      $trainingPerSlide = 3;
      $totalSlides = ceil(count($training) / $trainingPerSlide);
      ?>

      <div id="training" class="tab-content hidden">
        <div id="jobs-slider">
          <?php for ($i = 0; $i < $totalSlides; $i++): ?>
            <div class="slide <?php echo $i === 0 ? '' : 'hidden'; ?> flex flex-wrap justify-center gap-6 -m-4">
              <?php for ($j = $i * $trainingPerSlide; $j < ($i + 1) * $trainingPerSlide && $j < count($training); $j++): ?>
                <div class="p-4 w-full md:w-1/4">
                  <div class="h-full bg-white p-8 rounded text-center">
                    <img onclick="openModal('<?php echo $training[$j]['image']; ?>')" class="w-full h-64 object-cover rounded mb-4 cursor-pointer hover:opacity-90 transition duration-300" src="<?php echo $training[$j]['image']; ?>" alt="Training Image">
                    <h3 class="text-lg font-medium text-gray-900 mb-2"><?php echo $training[$j]['title']; ?></h3>
                    <p class="text-green-600 font-semibold"><?php echo $training[$j]['academy']; ?></p>
                    <p class="text-gray-700"><?php echo $training[$j]['description']; ?></p>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
          <?php endfor; ?>
        </div>

        <!-- Dot Indicators -->
        <div class="flex justify-center mt-6 space-x-2">
          <?php for ($i = 0; $i < $totalSlides; $i++): ?>
            <span class="dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" onclick="goToSlide(<?php echo $i; ?>)"></span>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>

  <script>
    function showTab(tab) {
      document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
      document.querySelectorAll('.tab-btn').forEach(el => {
        el.classList.remove('bg-green-600', 'text-white');
        el.classList.add('text-green-600', 'border', 'border-green-600');
      });
      document.getElementById(tab).classList.remove('hidden');
      const activeBtn = document.getElementById('btn-' + tab);
      activeBtn.classList.add('bg-green-600', 'text-white');
      activeBtn.classList.remove('text-green-600', 'border', 'border-green-600');
    }

    let currentSlide = 0;
    const slides = document.querySelectorAll('#jobs-slider .slide');
    const dots = document.querySelectorAll('.dot');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('hidden', i !== index);
      });
      dots.forEach((dot, i) => {
        dot.classList.toggle('bg-green-500', i === index);
        dot.classList.toggle('bg-gray-300', i !== index);
      });
      currentSlide = index;
    }

    function goToSlide(index) {
      showSlide(index);
    }

    // Optional: Auto slide every 10 seconds
    setInterval(() => {
      let next = (currentSlide + 1) % slides.length;
      showSlide(next);
    }, 10000);
  </script>


  <?php include 'footer.php'; ?>

  <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
    <span class="absolute top-4 right-6 text-white text-3xl cursor-pointer" onclick="closeModal()">×</span>
    <img id="modalImage" class="max-w-full max-h-[90vh] rounded shadow-lg" src="" alt="Enlarged">
  </div>

  <script>
    function openModal(src) {
      const modal = document.getElementById("imageModal");
      const modalImg = document.getElementById("modalImage");
      modalImg.src = src;
      modal.classList.remove("hidden");
    }

    function closeModal() {
      document.getElementById("imageModal").classList.add("hidden");
    }

    window.addEventListener("keydown", function(e) {
      if (e.key === "Escape") closeModal();
    });
  </script>

</body>

</html>