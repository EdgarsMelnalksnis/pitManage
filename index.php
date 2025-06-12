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

<section class="w-full text-gray-900 py-16 px-4 md:px-8 lg:px-20">
  <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Why Go Digital?</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
    <!-- Garage Benefits -->
    <div class="p-6 rounded-2xl border border-purple-200 shadow-md bg-white/80 backdrop-blur">
      <h3 class="text-xl font-semibold mb-4">Benefits for Your Garage</h3>
      <ul class="space-y-4 text-gray-700">
        <li class="flex items-start"><span class="text-blue-500 mr-3">📊</span> Organized job scheduling & tracking</li>
        <li class="flex items-start"><span class="text-blue-500 mr-3">🧾</span> Automated invoicing and reports</li>
        <li class="flex items-start"><span class="text-blue-500 mr-3">🔁</span> Service reminders and job history</li>
        <li class="flex items-start"><span class="text-blue-500 mr-3">🔐</span> Secure cloud access from anywhere</li>
        <li class="flex items-start"><span class="text-blue-500 mr-3">🚀</span> Faster turnaround with fewer mistakes</li>
      </ul>
    </div>
    <!-- Client Benefits -->
    <div class="p-6 rounded-2xl border border-purple-200 shadow-md bg-white/80 backdrop-blur">
      <h3 class="text-xl font-semibold mb-4">Benefits for Your Customers</h3>
      <ul class="space-y-4 text-gray-700">
        <li class="flex items-start"><span class="text-purple-500 mr-3">📅</span> Book appointments online</li>
        <li class="flex items-start"><span class="text-purple-500 mr-3">📲</span> Get instant SMS/email updates</li>
        <li class="flex items-start"><span class="text-purple-500 mr-3">🔍</span> Transparent service history</li>
        <li class="flex items-start"><span class="text-purple-500 mr-3">💳</span> Pay online or in person</li>
        <li class="flex items-start"><span class="text-purple-500 mr-3">⭐</span> Better service = happier reviews</li>
      </ul>
    </div>
  </div>
  <div class="text-center mt-12">
    <a href="#" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold py-3 px-6 rounded-full shadow-md hover:scale-105 transition-all duration-300">
      Discover More Benefits
    </a>
  </div>
</section>

</div>
<?php include 'includes/footer.php'; ?>
