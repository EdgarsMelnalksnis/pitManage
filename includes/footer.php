<footer class="text-center text-sm text-gray-400 mt-20 mb-4">
    © 2025 PitManage. All rights reserved.
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const getStarted = document.getElementById("getStarted");
    const starterModal = document.getElementById("starterModal");

    if (getStarted && starterModal) {
        getStarted.addEventListener("click", () => {
            starterModal.classList.remove("hidden");
        });
    }

    // Optional: handle form submission
    document.getElementById("starterForm").addEventListener("submit", function(e) {
        e.preventDefault();
        alert("Thank you! We’ll use this info to personalize your experience.");
        starterModal.classList.add("hidden");
    });
});
</script>

<script>
    // Modal functions
    function showModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.style.overflow = '';
    }

    function showSignupModal() {
        closeModal('loginModal');
        showModal('signupModal');
    }

    function showLoginModal() {
        closeModal('signupModal');
        showModal('loginModal');
    }

    // Event listeners
    document.addEventListener('DOMContentLoaded', function() {
    // Get Started button triggers the same Sign Up modal
	    
	  
        // Signup trigger
        document.getElementById('signupTrigger')?.addEventListener('click', function(e) {
            e.preventDefault();
            showModal('signupModal');
        });

        // Login trigger (if you have one)
        document.getElementById('loginTrigger')?.addEventListener('click', function(e) {
            e.preventDefault();
            showModal('loginModal');
        });

        // Close when clicking outside
        document.querySelectorAll('[id$="Modal"]').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal(modal.id);
                }
            });
        });
    });
</script>
</body>
</html>
