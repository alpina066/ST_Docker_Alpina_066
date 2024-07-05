<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .marquee {
            display: inline-block;
            white-space: nowrap;
            position: absolute;
            will-change: transform;
        }

        .marquee-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 150px;
            /* Adjusted to fit the vertical marquee */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="bg-gray-300">
    <div class="marquee-wrapper">
        <h1 id="marquee" class="marquee text-center font-bold text-6xl p-4 bg-black text-white rounded hover:bg-grey-500 hover:text-yellow-300 ease-in-out">
            <?php echo "WELCOME TO MY PAGE"; ?>
        </h1>
    </div>
    <div class="text-center m-8 font-semibold text-3xl text-blue-500 min-h-screen">
        <p class="text-black p-4">By:</p>
        <h2 class="p-4 text-black">IKI class</h2>
        <h2 class="p-4 text-black">Gede Alpina Dendra</h2>
        <h2 class="pb-4 text-black">2215101066</h2>
    </div>

    <script>
        function startMarquee() {
            const marquee = document.getElementById('marquee');
            const wrapper = document.querySelector('.marquee-wrapper');
            let wrapperHeight = wrapper.offsetHeight;
            let marqueeHeight = marquee.offsetHeight;

            let currentY = -marqueeHeight;
            marquee.style.transform = `translateY(${currentY}px)`;

            function animate() {
                currentY += 0.5;
                if (currentY > wrapperHeight) {
                    currentY = -marqueeHeight;
                }
                marquee.style.transform = `translateY(${currentY}px)`;
                requestAnimationFrame(animate);
            }

            animate();
        }

        window.onload = startMarquee;
    </script>
</body>

</html>