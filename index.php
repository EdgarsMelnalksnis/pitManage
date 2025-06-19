<?php
session_start();
 include 'includes/header.php'; ?>
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
/* Multi-step form styles */
.blurred-bg {
    background: url('/images/inputFormBackground.png') no-repeat center center;
    background-size: cover;
    filter: blur(4px);
    position: fixed;
    inset: 0;
    z-index: 10;
    display: none;
}

.form-overlay {
    position: fixed;
    inset: 0;
    z-index: 20;
    display: none;
    align-items: center;
    justify-content: center;
}

.form-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    padding: 30px;
    width: 90%;
    max-width: 400px;
    text-align: center;
}

.form-card input, .form-card select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    font-size: 16px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.form-card button {
    background: linear-gradient(to right, #5a6dfb, #9c4de7);
    color: white;
    border: none;
    padding: 12px;
    width: 100%;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

.step { display: none; }
.step.active { display: block; }
</style>

<main class="relative background-blur flex flex-col items-center justify-center text-center mt-20 px-4">
    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-4">Your digital garage</h1>
    <p class="text-gray-500 text-lg mb-8">Supercharge your service management with PitManage</p>
    <a href="javascript:void(0)" id="getStarted"
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
            <form method="post" action="login_handler.php" class="space-y-4">
                <div>
                    <label for="signup-email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input type="text" id="signup-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
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


<div id="starterModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50 backdrop-blur-sm">
  <div class="bg-white rounded-xl p-6 w-full max-w-lg shadow-2xl space-y-4">
    <div class="flex justify-between items-center">
      <h2 class="text-xl font-bold">Let’s get started</h2>
      <button onclick="document.getElementById('starterModal').classList.add('hidden')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
    </div>
    <form id="starterForm" class="space-y-4">
      <input type="text" placeholder="Your Service Name" class="w-full border rounded px-4 py-2" required>
      <input type="text" placeholder="Service Address" class="w-full border rounded px-4 py-2" required>
      <input type="number" placeholder="Number of Workstations" class="w-full border rounded px-4 py-2">
      <textarea placeholder="Describe any features you need" class="w-full border rounded px-4 py-2" rows="3"></textarea>
      <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">Submit</button>
    </form>
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
                    <input type="text" id="login-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition">
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
<!-- Multi-step Form -->
<div class="blurred-bg" id="blurredBg"></div>

<div class="form-overlay" id="formOverlay">
    <div class="form-card">
        <h2 id="formTitle">Step 1 of 3</h2>

        <div class="step active" id="step1">
            <input type="text" id="email" placeholder="Email Address" required />
            <button onclick="nextStep()">Next</button><button onclick="cancelForm()" style="background:#ccc;color:#333;margin-left:10px;">Cancel</button>
        </div>

        <div class="step" id="step2">
            <input type="text" id="fullName" placeholder="Full Name" required />
            <input type="text" id="company" placeholder="Company Name" required />
            <button onclick="nextStep()">Next</button><button onclick="cancelForm()" style="background:#ccc;color:#333;margin-left:10px;">Cancel</button>
        </div>

        <div class="step" id="step3">
            <label><input type="checkbox" /> Online Booking</label><br/>
            <label><input type="checkbox" /> Employee Work Management</label><br/>
            <label><input type="checkbox" /> Automated Invoicing</label><br/>
            <label><input type="checkbox" /> WhatsApp Integration</label><br/>
            <button onclick="submitForm()">Finish</button><button onclick="cancelForm()" style="background:#ccc;color:#333;margin-left:10px;">Cancel</button>
        </div>
    </div>
</div>
</main>

<section class="w-full text-gray-900 py-16 px-4 md:px-8 lg:px-20">
  <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Why Go Digital?</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
    <!-- Garage Benefits -->
    <div class="p-6 rounded-2xl border border-purple-200 shadow-md bg-white/80 backdrop-blur hover:shadow-xl hover:border-blue-300 transition-all duration-300 relative overflow-hidden group">
      <!-- Animated background element -->
      <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-purple-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
      <!-- Floating dots pattern -->
      <div class="absolute inset-0 opacity-0 group-hover:opacity-30 transition-opacity duration-700">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-400 rounded-full animate-float" style="animation-delay: 0.1s"></div>
        <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-purple-400 rounded-full animate-float" style="animation-delay: 0.3s"></div>
        <div class="absolute bottom-1/4 right-1/4 w-2 h-2 bg-blue-400 rounded-full animate-float" style="animation-delay: 0.5s"></div>
      </div>
      <h3 class="text-xl font-semibold mb-4 relative z-10">Benefits for Your Garage</h3>
      <ul class="space-y-4 text-gray-700 relative z-10">
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200"><span class="text-blue-500 mr-3">📊</span> Organized job scheduling & tracking</li>
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200" style="transition-delay: 0.05s"><span class="text-blue-500 mr-3">🧾</span> Automated invoicing and reports</li>
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200" style="transition-delay: 0.1s"><span class="text-blue-500 mr-3">🔁</span> Service reminders and job history</li>
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200" style="transition-delay: 0.15s"><span class="text-blue-500 mr-3">🔐</span> Secure cloud access from anywhere</li>
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200" style="transition-delay: 0.2s"><span class="text-blue-500 mr-3">🚀</span> Faster turnaround with fewer mistakes</li>
      </ul>
    </div>
    
    <!-- Client Benefits -->
    <div class="p-6 rounded-2xl border border-purple-200 shadow-md bg-white/80 backdrop-blur hover:shadow-xl hover:border-purple-300 transition-all duration-300 relative overflow-hidden group">
      <!-- Animated background element -->
      <div class="absolute inset-0 bg-gradient-to-br from-purple-50 to-pink-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
      <!-- Floating dots pattern -->
      <div class="absolute inset-0 opacity-0 group-hover:opacity-30 transition-opacity duration-700">
        <div class="absolute top-1/5 right-1/4 w-3 h-3 bg-purple-400 rounded-full animate-float" style="animation-delay: 0.2s"></div>
        <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-pink-400 rounded-full animate-float" style="animation-delay: 0.4s"></div>
        <div class="absolute top-1/4 right-1/3 w-2 h-2 bg-purple-400 rounded-full animate-float" style="animation-delay: 0.6s"></div>
      </div>
      <h3 class="text-xl font-semibold mb-4 relative z-10">Benefits for Your Customers</h3>
      <ul class="space-y-4 text-gray-700 relative z-10">
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200"><span class="text-purple-500 mr-3">📅</span> Book appointments online</li>
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200" style="transition-delay: 0.05s"><span class="text-purple-500 mr-3">📲</span> Get instant SMS/email updates</li>
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200" style="transition-delay: 0.1s"><span class="text-purple-500 mr-3">🔍</span> Transparent service history</li>
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200" style="transition-delay: 0.15s"><span class="text-purple-500 mr-3">💳</span> Pay online or in person</li>
        <li class="flex items-start group-hover:translate-x-1 transition-transform duration-200" style="transition-delay: 0.2s"><span class="text-purple-500 mr-3">⭐</span> Better service = happier reviews</li>
      </ul>
    </div>
  </div>
  <div class="text-center mt-12">
    <a href="javascript:void(0)" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold py-3 px-6 rounded-full shadow-md hover:scale-105 transition-all duration-300">
      Discover More Benefits
    </a>
  </div>
</section>

<style>
  /* Add this to your existing style section */
  @keyframes float {
    0%, 100% {
      transform: translateY(0) translateX(0);
    }
    50% {
      transform: translateY(-10px) translateX(5px);
    }
  }
  .animate-float {
    animation: float 3s ease-in-out infinite;
  }
</style>

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


<!-- Login Modal -->
<div id="loginModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
  <div class="bg-white rounded-xl p-6 shadow-xl max-w-sm w-full mx-4">
    <h2 class="text-xl font-semibold mb-4">Log In</h2>
    <input type="text" placeholder="Email" class="w-full border p-2 rounded mb-3" />
    <input type="password" placeholder="Password" class="w-full border p-2 rounded mb-4" />
    <button class="w-full bg-blue-600 text-white py-2 rounded">Log In</button>
  </div>
</div>

<!-- Signup Modal -->
<div id="signupModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
  <div class="bg-white rounded-xl p-6 shadow-xl max-w-sm w-full mx-4">
    <h2 class="text-xl font-semibold mb-4">Sign Up</h2>
    <input type="text" placeholder="Full Name" class="w-full border p-2 rounded mb-3" />
    <input type="text" placeholder="Email" class="w-full border p-2 rounded mb-3" />
    <input type="password" placeholder="Password" class="w-full border p-2 rounded mb-4" />
    <button class="w-full bg-green-600 text-white py-2 rounded">Create Account</button>
  </div>
</div>

<script>
  let currentStep = 1;
  function startForm() {
    document.getElementById('blurredBg').style.display = 'block';
    document.getElementById('formOverlay').style.display = 'flex';
    currentStep = 1;
    document.querySelectorAll('.step').forEach(step => step.classList.remove('active'));
    document.getElementById('step1').classList.add('active');
    document.getElementById('formTitle').innerText = "Step 1 of 3";
  }

  function nextStep() {
    if (currentStep === 1 && !document.getElementById('email').value) return alert("Email is required");
    if (currentStep === 2 && (!document.getElementById('fullName').value || !document.getElementById('company').value)) return alert("Name and Company are required");

    document.getElementById('step' + currentStep).classList.remove('active');
    currentStep++;
    if (currentStep <= 3) {
      document.getElementById('step' + currentStep).classList.add('active');
      document.getElementById('formTitle').innerText = "Step " + currentStep + " of 3";
    }
  }

  function submitForm() {
    alert("🎉 Thank you! We'll set up your account.");
    document.getElementById('blurredBg').style.display = 'none';
    document.getElementById('formOverlay').style.display = 'none';
  }

  document.querySelectorAll('button').forEach(btn => {
    if (btn.innerText.includes("Get Started")) {
      btn.addEventListener("click", e => {
        e.preventDefault();
        startForm();
      });
    }
  });

  function cancelForm() {
    if (confirm("Are you sure you want to cancel the setup?")) {
      document.getElementById('blurredBg').style.display = 'none';
      document.getElementById('formOverlay').style.display = 'none';
    }
  }

</script><button onclick="cancelForm()" style="margin-top:10px;background:#ccc;color:#333;">Cancel</button>

<?php if (isset($_SESSION['role'])): ?>
    <div class="alert alert-success text-center mt-3">
        <?php if ($_SESSION['role'] === 'admin'): ?>
            Hello Admin |
        <?php elseif ($_SESSION['role'] === 'user'): ?>
            Hello User |
        <?php endif; ?>
        <a href="logout.php">Log out</a>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['login_error'])): ?>
    <div class="alert alert-danger text-center mt-3">
        <?= $_SESSION['login_error']; unset($_SESSION['login_error']); ?>
    </div>
<?php endif; ?>
