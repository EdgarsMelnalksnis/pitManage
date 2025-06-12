<footer class="text-center text-sm text-gray-400 mt-20 mb-4">
    © 2025 PitManage. All rights reserved.
</footer>
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
