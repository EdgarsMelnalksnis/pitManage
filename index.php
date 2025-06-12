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
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
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


<section class="w-full text-gray-900 py-16 px-4 md:px-8 lg:px-20">
  <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">How it Works</h2>
  <div class="flex flex-col lg:flex-row items-center gap-10 max-w-6xl mx-auto bg-white/80 backdrop-blur rounded-3xl shadow-xl p-8">
    <!-- Text Steps -->
    <div class="flex-1 space-y-6 text-left">
      <div>
        <h3 class="text-lg font-semibold mb-1">📅 Customer books online</h3>
        <p class="text-gray-600">Clients pick a time and service online using your branded booking page.</p>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-1">📥 Garage receives request</h3>
        <p class="text-gray-600">You get instant notifications and can manage jobs in real-time.</p>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-1">🛠️ Perform and update service</h3>
        <p class="text-gray-600">Track progress, upload photos, and leave notes for full service transparency.</p>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-1">📲 Client gets notified</h3>
        <p class="text-gray-600">Customers receive automated updates and summaries via SMS or email.</p>
      </div>
    </div>
    <!-- Image -->
    <div class="flex-1">
      <img src="/images/how-it-works.png" alt="Workshop and Happy Client" class="rounded-xl shadow-md">
    </div>
  </div>
</section>


<section id="pricing" class="w-full text-gray-900 py-20 px-4 md:px-8 lg:px-20 bg-white">
  <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Pricing</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto text-center">
    <!-- Free Plan -->
    <div class="border rounded-2xl p-6 shadow-sm hover:shadow-lg transition">
      <h3 class="text-lg font-semibold mb-1 text-green-600">Free Forever</h3>
      <p class="text-sm text-gray-500 mb-4">Best for personal use</p>
      <div class="text-3xl font-bold text-green-600 mb-2">FREE</div>
      <button class="bg-green-500 text-white px-6 py-2 rounded-full font-medium hover:bg-green-600 transition">Free forever</button>
      <ul class="mt-6 text-left text-sm space-y-2 text-gray-700">
        <li>✓ Job calendar</li>
        <li>✓ Client notifications</li>
        <li>✓ Service history</li>
        <li>✓ 1 Admin account</li>
      </ul>
    </div>
    <!-- Basic Plan -->
    <div class="border rounded-2xl p-6 shadow-sm hover:shadow-lg transition">
      <h3 class="text-lg font-semibold mb-1 text-pink-600">Startup</h3>
      <p class="text-sm text-gray-500 mb-4">Best for small teams</p>
      <div class="text-3xl font-bold text-pink-600 mb-2">$9</div>
      <button class="bg-pink-500 text-white px-6 py-2 rounded-full font-medium hover:bg-pink-600 transition">Get started</button>
      <ul class="mt-6 text-left text-sm space-y-2 text-gray-700">
        <li>✓ Everything in Free, plus:</li>
        <li>✓ Unlimited staff accounts</li>
        <li>✓ Email reminders</li>
        <li>✓ Customer feedback forms</li>
      </ul>
    </div>
    <!-- Business Plan -->
    <div class="border-2 border-blue-500 rounded-2xl p-6 shadow-lg bg-blue-50">
      <h3 class="text-lg font-semibold mb-1 text-blue-600">Business</h3>
      <p class="text-sm text-gray-500 mb-4">Best for mid-sized garages</p>
      <div class="text-3xl font-bold text-blue-600 mb-2">$19</div>
      <button class="bg-blue-500 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-600 transition">Get started</button>
      <ul class="mt-6 text-left text-sm space-y-2 text-gray-700">
        <li>✓ Everything in Startup, plus:</li>
        <li>✓ Advanced analytics</li>
        <li>✓ SMS notifications</li>
        <li>✓ API access</li>
      </ul>
    </div>
    <!-- Enterprise Plan -->
    <div class="border rounded-2xl p-6 shadow-sm hover:shadow-lg transition">
      <h3 class="text-lg font-semibold mb-1 text-gray-800">Enterprise</h3>
      <p class="text-sm text-gray-500 mb-4">For large service networks</p>
      <div class="text-xl font-bold text-gray-800 mb-2">Custom</div>
      <button class="bg-gray-800 text-white px-6 py-2 rounded-full font-medium hover:bg-black transition">Contact sales</button>
      <ul class="mt-6 text-left text-sm space-y-2 text-gray-700">
        <li>✓ White labeling</li>
        <li>✓ Dedicated account manager</li>
        <li>✓ SLA & Onboarding</li>
        <li>✓ Custom modules</li>
      </ul>
    </div>
  </div>
</section>

</div>
<?php include 'includes/footer.php'; ?>
