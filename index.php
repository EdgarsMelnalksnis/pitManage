<?php include 'includes/header.php'; ?>
<style>
    .background-blur::before {
        content: "";
        position: absolute;
        top: -100px;
        left: -100px;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle at center, #7f5af0 0%, transparent 70%);
        filter: blur(120px);
        opacity: 0.6;
        z-index: -1;
    }

    .background-blur::after {
        content: "";
        position: absolute;
        bottom: -100px;
        right: -100px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle at center, #2cb2ff 0%, transparent 70%);
        filter: blur(120px);
        opacity: 0.6;
        z-index: -1;
    }
</style>

<main class="relative background-blur flex flex-col items-center justify-center text-center mt-20 px-4">
    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-4">Your digital garage</h1>
    <p class="text-gray-500 text-lg mb-8">Supercharge your service management with PitManage</p>
    <a href="#"
       class="bg-gradient-to-r from-blue-500 to-purple-500 hover:from-purple-500 hover:to-blue-500 text-white font-semibold py-3 px-6 rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
       Get Started. It's FREE →
    </a>
</main>
<?php include 'includes/footer.php'; ?>
