<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitManage – Your digital garage</title>
    <link href="/css/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-900">
<header class="w-full flex flex-col sm:flex-row justify-between items-center px-4 sm:px-6 py-4 space-y-4 sm:space-y-0">
    <div>
        <img src="/images/pitManageLogo.png" alt="PitManage Logo" class="h-20 md:h-24 lg:h-28 w-auto">
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
  <div class="relative group">
    <button class="px-2 text-sm font-medium text-gray-700 hover:text-purple-600">Product ▾</button>
    <div class="absolute hidden group-hover:block bg-white border rounded-xl shadow-md mt-2 py-2 w-48 z-10">
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Overview</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Booking Tools</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reminders</a>
    </div>
  </div>
  <div class="relative group">
    <button class="px-2 text-sm font-medium text-gray-700 hover:text-purple-600">Solutions ▾</button>
    <div class="absolute hidden group-hover:block bg-white border rounded-xl shadow-md mt-2 py-2 w-48 z-10">
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">For Car Shops</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">For Clients</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Custom Workflows</a>
    </div>
  </div>
  <a href="#pricing" class="px-2 text-sm font-medium text-gray-700 hover:text-purple-600">Pricing</a>
  <a href="#" class="px-2 text-sm font-medium text-gray-700 hover:text-purple-600">Enterprise</a>
</nav>

<!-- Mobile Hamburger -->
<div class="sm:hidden flex justify-end w-full px-4">
  <button onclick="toggleMobileMenu()" class="text-gray-700 text-2xl">☰</button>
</div>

<!-- Mobile Menu -->
<div id="mobileMenu" class="sm:hidden hidden flex flex-col space-y-2 mt-4 px-4">
  <a href="#" class="text-gray-700 text-sm font-medium hover:text-purple-600">Overview</a>
  <a href="#" class="text-gray-700 text-sm font-medium hover:text-purple-600">Booking Tools</a>
  <a href="#" class="text-gray-700 text-sm font-medium hover:text-purple-600">Reminders</a>
  <a href="#" class="text-gray-700 text-sm font-medium hover:text-purple-600">For Car Shops</a>
  <a href="#" class="text-gray-700 text-sm font-medium hover:text-purple-600">For Clients</a>
  <a href="#" class="text-gray-700 text-sm font-medium hover:text-purple-600">Custom Workflows</a>
  <a href="#pricing" class="text-gray-700 text-sm font-medium hover:text-purple-600">Pricing</a>
  <a href="#" class="text-gray-700 text-sm font-medium hover:text-purple-600">Enterprise</a>
</div>







<div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-2 bg-gray-100 p-1 rounded-full border border-gray-300">
        <a href="#"
           class="text-gray-700 px-4 py-2 rounded-full hover:bg-white transition-all duration-300 text-sm font-medium w-full text-center sm:w-auto">Log In</a>
        <a href="#"
           class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-4 py-2 rounded-full text-sm font-medium shadow-md transform hover:scale-105 transition-all duration-300 w-full text-center sm:w-auto">Sign Up</a>
    </div>
</header>
