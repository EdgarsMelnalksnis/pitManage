<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitManage – Your digital garage</title>
    <link href="/css/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-900">
<header class="sticky w-full sm:flex-row flex-col flex sm:px-6 py-4 space-y-4 shadow bg-white sm:space-y-0 items-center top-0 px-4 z-50 justify-between">
    <div>
        <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;">
            <img src="/images/pitManageLogo.png" alt="PitManage Logo" class="w-20 h-17 duration-300 hover:scale-105 hover:brightness-110 ease-in-out transition-transform">
        </a>
    </div>
    
    <!-- Mobile Menu Script -->
    <script>
      function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
      }
    </script>

    <!-- Desktop Nav (existing) -->
    <nav class="hidden sm:flex items-center ml-auto bg-white/70 backdrop-blur-md border border-gray-300 rounded-full px-6 py-2.5 shadow-sm space-x-3 h-[44px]">
      <div class="relative" id="featuresMenu">
  <button onclick="toggleFeaturesDropdown()" class="px-2 text-sm font-medium text-gray-700 hover:text-purple-600 focus:outline-none">
    Features ▾
  </button>
  <div id="featuresDropdown" class="hidden absolute bg-white border border-gray-200 shadow-lg rounded-xl mt-2 p-6 space-x-10 z-50 w-[1000px]">
    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Service Planning</h4>
      <ul class="space-y-1 text-sm text-gray-700">
        <li><a href="#">Customer Reservation</a></li>
        <li><a href="#">Operation Management</a></li>
        <li><a href="#">Technician Assignment</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Execution & Monitoring</h4>
      <ul class="space-y-1 text-sm text-gray-700">
        <li><a href="#">Live Service Tracking</a></li>
        <li><a href="#">Workflow Management</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Client Vehicle</h4>
      <ul class="space-y-1 text-sm text-gray-700">
        <li><a href="#">Vehicle Card</a></li>
        <li><a href="#">Repair History</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Workforce Management</h4>
      <ul class="space-y-1 text-sm text-gray-700">
        <li><a href="#">Employee Management</a></li>
        <li><a href="#">Work Zones</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Communications</h4>
      <ul class="space-y-1 text-sm text-gray-700">
        <li><a href="#">SMS Channels</a></li>
        <li><a href="#">Chat Channels</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Financial</h4>
      <ul class="space-y-1 text-sm text-gray-700">
        <li><a href="#">Invoicing</a></li>
        <li><a href="#">Payments</a></li>
      </ul>
    </div>
  </div>
</div>

<script>
  function toggleFeaturesDropdown() {
    const dropdown = document.getElementById('featuresDropdown');
    dropdown.classList.toggle('hidden');
  }

  document.addEventListener('click', function (e) {
    const menu = document.getElementById('featuresMenu');
    const dropdown = document.getElementById('featuresDropdown');
    if (!menu.contains(e.target)) {
      dropdown.classList.add('hidden');
    }
  });
</script>
      <div class="relative group">
        <button class="px-2 text-sm font-medium text-gray-700 hover:text-purple-600">Solutions ▾</button>
        <div class="absolute hidden group-hover:block bg-white border rounded-xl shadow-md mt-2 py-2 w-48 z-10">
          <a href="javascript:void(0)" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">For Car Shops</a>
          <a href="javascript:void(0)" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">For Clients</a>
          <a href="javascript:void(0)" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Custom Workflows</a>
        </div>
      </div>
      <a href="#pricing" class="px-2 text-sm font-medium text-gray-700 hover:text-purple-600">Pricing</a>
      <a href="javascript:void(0)" class="px-2 text-sm font-medium text-gray-700 hover:text-purple-600">Contacts</a>
    </nav>

    <!-- Mobile Hamburger -->
    <div class="sm:hidden flex justify-end w-full px-4">
      <button onclick="toggleMobileMenu()" class="text-gray-700 text-2xl">☰</button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="sm:hidden hidden flex flex-col space-y-2 mt-4 px-4">
      <a href="javascript:void(0)" class="text-gray-700 text-sm font-medium hover:text-purple-600">Overview</a>
      <a href="javascript:void(0)" class="text-gray-700 text-sm font-medium hover:text-purple-600">Booking Tools</a>
      <a href="javascript:void(0)" class="text-gray-700 text-sm font-medium hover:text-purple-600">Reminders</a>
      <a href="javascript:void(0)" class="text-gray-700 text-sm font-medium hover:text-purple-600">For Car Shops</a>
      <a href="javascript:void(0)" class="text-gray-700 text-sm font-medium hover:text-purple-600">For Clients</a>
      <a href="javascript:void(0)" class="text-gray-700 text-sm font-medium hover:text-purple-600">Custom Workflows</a>
      <a href="#pricing" class="text-gray-700 text-sm font-medium hover:text-purple-600">Pricing</a>
      <a href="javascript:void(0)" class="text-gray-700 text-sm font-medium hover:text-purple-600">Contacts</a>
    </div>

    <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-2 bg-gray-100 p-1 rounded-full border border-gray-300">
        <a href="javascript:void(0)"
           class="text-gray-700 px-4 py-2 rounded-full hover:bg-white transition-all duration-300 text-sm font-medium w-full text-center sm:w-auto" id="loginTrigger">Log In</a>
        <a href="javascript:void(0)"
           class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-4 py-2 rounded-full text-sm font-medium shadow-md transform hover:scale-105 transition-all duration-300 w-full text-center sm:w-auto" id="signupTrigger">Sign Up</a>
    </div>
</header>
