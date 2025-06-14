<footer class="text-center text-sm text-gray-400 mt-20 mb-4">
    © 2025 PitManage. All rights reserved.
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const getStarted = document.getElementById("getStarted");
    const blurredBg = document.getElementById("blurredBg");
    const formOverlay = document.getElementById("formOverlay");

    if (getStarted && blurredBg && formOverlay) {
        getStarted.addEventListener("click", () => {
            blurredBg.style.display = 'block';
            formOverlay.style.display = 'flex';
            currentStep = 1;
            document.getElementById('formTitle').innerText = "Step 1 of 3";
            document.querySelectorAll('.step').forEach(step => {
                step.classList.remove('active');
            });
            document.getElementById('step1').classList.add('active');
        });
    }

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

    // Multi-step form logic
    let currentStep = 1;
    function nextStep() {
        if (currentStep === 1 && !document.getElementById('email').value) {
            return alert("Email is required");
        }
        if (currentStep === 2 && (!document.getElementById('fullName').value || !document.getElementById('company').value)) {
            return alert("Name and Company are required");
        }

        document.getElementById('step' + currentStep).classList.remove('active');
        currentStep++;
        document.getElementById('formTitle').innerText = "Step " + currentStep + " of 3";
        document.getElementById('step' + currentStep).classList.add('active');
    }

    function submitForm() {
        alert("🎉 Thank you! We'll set up your account.");
        document.getElementById('blurredBg').style.display = 'none';
        document.getElementById('formOverlay').style.display = 'none';
    }

    // Close when clicking outside
    document.querySelectorAll('[id$="Modal"]').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal(modal.id);
            }
        });
    });

    formOverlay.addEventListener('click', function(e) {
        if (e.target === formOverlay) {
            formOverlay.style.display = 'none';
            blurredBg.style.display = 'none';
        }
    });
});
</script>
</body>
</html>


<script>
  function showModal(id) {
    document.getElementById(id).classList.remove('hidden');
  }
  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
  }

  document.getElementById("loginTrigger")?.addEventListener("click", function(e) {
    e.preventDefault();
    showModal('loginModal');
  });
  document.getElementById("signupTrigger")?.addEventListener("click", function(e) {
    e.preventDefault();
    showModal('signupModal');
  });
</script>
