document.addEventListener("DOMContentLoaded", () => {
    
    const confirmButtons = document.querySelectorAll('.confirm-action');

    confirmButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            if (!confirm("Are you sure you want to proceed?")) {
                e.preventDefault();
            }
        });
    });
});
