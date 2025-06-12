<?php include 'includes/header.php'; ?>
<style>
html { scroll-behavior: smooth; }

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
/* Modal Animation */
[id$="Modal"] {
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

[id$="Modal"]:not(.hidden) {
    opacity: 1;
    pointer-events: auto;
}

[id$="Modal"] > div {
    transform: translateY(20px);
    transition: transform 0.3s ease;
}

[id$="Modal"]:not(.hidden) > div {
    transform: translateY(0);
}

/* Form styles */
input:focus, button:focus {
    outline: none;
    ring: 2px;
}

/* Gradient button hover effect */
.bg-gradient-to-r:hover {
    background-size: 150%;
}
</style>

<main class="relative background-blur flex flex-col items-center justify-center text-center mt-20 px-4">
    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-4">Your digital garage</h1>
    <p class="text-gray-500 text-lg mb-8">Supercharge your service management with PitManage</p>
    <a href="javascript:void(0)"
       class="bg-gradient-to-r from-blue-500 to-purple-500 hover:from-purple-500 hover:to-blue-500 text-white font-semibold py-3 px-6 rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
       Get Started. It's FREE →
    </a>
<!-- Signup Modal -->
<div id="signupModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 overflow-hidden">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold text-gray-900">Create your account</h3>
                <button onclick="closeModal('signupModal')" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Google Signup -->
            <button class="w-full flex items-center justify-center gap-2 bg-white border border-gray-300 rounded-lg py-3 px-4 text-gray-700 font-medium hover:bg-gray-50 transition mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8h-1.26A8 8 0 1 0 12 16v-5.5A3.5 3.5 0 0 1 8.5 7H6a4 4 0 0 0-4 4v3a4 4 0 0 0 4 4h12a4 4 0 0 0 4-4v-3a4 4 0 0 0-4-4z"></path>
                </svg>
                Sign up with Google
            </button>

            <div class="flex items-center my-4">
                <div class="flex-1 border-t border-gray-300"></div>
                <span class="px-3 text-gray-500">or</span>
                <div class="flex-1 border-t border-gray-300"></div>
            </div>

            <!-- Email Signup Form -->
            <form class="space-y-4">
                <div>
                    <label for="signup-email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input type="email" id="signup-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
                </div>
                <div>
                    <label for="signup-password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="signup-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white py-3 px-4 rounded-lg font-medium hover:from-purple-500 hover:to-blue-500 transition">
                    Create Account
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-4">
                Already have an account?
                <a href="#" onclick="showLoginModal()" class="text-purple-600 hover:text-purple-700 font-medium">Log in</a>
            </p>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div id="loginModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 overflow-hidden">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold text-gray-900">Welcome back</h3>
                <button onclick="closeModal('loginModal')" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Google Login -->
            <button class="w-full flex items-center justify-center gap-2 bg-white border border-gray-300 rounded-lg py-3 px-4 text-gray-700 font-medium hover:bg-gray-50 transition mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8h-1.26A8 8 0 1 0 12 16v-5.5A3.5 3.5 0 0 1 8.5 7H6a4 4 0 0 0-4 4v3a4 4 0 0 0 4 4h12a4 4 0 0 0 4-4v-3a4 4 0 0 0-4-4z"></path>
                </svg>
                Continue with Google
            </button>

            <div class="flex items-center my-4">
                <div class="flex-1 border-t border-gray-300"></div>
                <span class="px-3 text-gray-500">or</span>
                <div class="flex-1 border-t border-gray-300"></div>
            </div>

            <!-- Email Login Form -->
            <form class="space-y-4">
                <div>
                    <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input type="email" id="login-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
                </div>
                <div>
                    <label for="login-password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="login-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
                </div>
                <div class="flex justify-between items-center">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-purple-600 focus:ring-purple-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-purple-600 hover:text-purple-700">Forgot password?</a>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white py-3 px-4 rounded-lg font-medium hover:from-purple-500 hover:to-blue-500 transition">
                    Sign in
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-4">
                Don't have an account?
                <a href="#" onclick="showSignupModal()" class="text-purple-600 hover:text-purple-700 font-medium">Sign up</a>
            </p>
        </div>
    </div>
</div>
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
    <a href="javascript:void(0)" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold py-3 px-6 rounded-full shadow-md hover:scale-105 transition-all duration-300">
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
