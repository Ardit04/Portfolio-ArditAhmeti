<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardit Ahmeti</title>
    <link rel="icon" href="img/rocket.png">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        /* Forma e butonit: rreth me shigjetë */
        #scrollTopBtn {
            width: 50px;
            height: 50px;
            font-size: 24px;
            text-align: center;
            line-height: 50px;
            border-radius: 9999px; /* Rreth */
        }
    </style>
</head>

<body>

    <!-- Scroll to Top Button -->
    <button id="scrollTopBtn" onclick="scrollToTop()"
        class="hidden fixed bottom-6 right-6 bg-blue-500 hover:bg-blue-600 text-white font-bold shadow-lg transition-all duration-300 transform hover:-translate-y-1">
        ↑
    </button>

    <script>
        // Shfaq ose mshefe butonin sipas scrollit
        window.onscroll = function() {
            const btn = document.getElementById('scrollTopBtn');
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) { // Del ma heret
                btn.classList.remove('hidden');
            } else {
                btn.classList.add('hidden');
            }
        };

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

</body>

</html>
