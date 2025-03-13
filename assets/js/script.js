const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item => {
    const li = item.parentElement;

    item.addEventListener('click', function () {
        allSideMenu.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');
const links = sidebar.querySelectorAll("a, button");

if (localStorage.getItem('sidebarState') === 'collapsed') {
    sidebar.classList.add('hide', 'preload'); 
}

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');

    localStorage.setItem('sidebarState', sidebar.classList.contains('hide') ? 'collapsed' : 'expanded');
});

links.forEach(link => {
    link.addEventListener("click", function (e) {
        if (sidebar.classList.contains("hide")) {
            e.stopPropagation();
        }
    });
});

window.addEventListener('load', function () {
    sidebar.classList.remove('preload');
});


const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle('show');
        if (searchForm.classList.contains('show')) {
            searchButtonIcon.classList.replace('bx-search', 'bx-x');
        } else {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
        }
    }
})

if (window.innerWidth < 768) {
    sidebar.classList.add('hide');
} else if (window.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-x', 'bx-search');
    searchForm.classList.remove('show');
}

window.addEventListener('resize', function () {
    if (this.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const switchMode = document.getElementById('switch-mode');

    if (localStorage.getItem('darkMode') === 'true') {
        document.body.classList.add('dark');
        switchMode.checked = true; 
    }

    switchMode.addEventListener('change', function () {
        if (this.checked) {
            document.body.classList.add('dark');
            localStorage.setItem('darkMode', 'true');  
        } else {
            document.body.classList.remove('dark');
            localStorage.setItem('darkMode', 'false'); 
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const restockForm = document.getElementById("restock-form");
    const restockModal = document.getElementById("restock-modal");
    const restockSubmit = document.getElementById("restock-submit");
    const confirmationModal = document.getElementById("confirmationModal");
    const confirmYesButton = confirmationModal.querySelector(".yes");
    const confirmNoButton = confirmationModal.querySelector(".no");
    const restockButtons = document.querySelectorAll(".restock-button");
    const restockInputs = restockForm.querySelectorAll("input[type='text']");
    let isConfirmed = false;

    // Function to open the restock modal
    function openRestockModal() {
        restockForm.reset(); // ✅ Clear all input fields
        isConfirmed = false; // Reset confirmation state
        restockSubmit.disabled = false; // Ensure submit button is enabled
        restockModal.style.display = "block";
    }

    // Function to close both modals
    function closeModals() {
        restockModal.style.display = "none";
        confirmationModal.style.display = "none";
        restockForm.reset(); // Clear inputs when modal is closed
        isConfirmed = false; // Reset confirmation flag
    }

    // Open restock modal when clicking "Restock" button
    document.querySelectorAll(".restock-button").forEach(button => {
        button.addEventListener("click", function () {
            openRestockModal();
        });
    });

    // Handle form submission (show confirmation modal)
    restockForm.addEventListener("submit", function (event) {
        if (!isConfirmed) {
            event.preventDefault();
            confirmationModal.style.display = "block"; // Show confirmation modal
        }
    });

    // Confirm and submit form when clicking "Yes"
    confirmYesButton.addEventListener("click", function () {
        isConfirmed = true;
        confirmationModal.style.display = "none"; // Close confirmation modal
        restockSubmit.disabled = true; // Temporarily disable button to prevent double submission

        // Submit the form after a small delay
        setTimeout(() => {
            restockForm.submit();
            closeModals(); // Close all modals after submission
        }, 100);
    });

    // If "No" is clicked, just close confirmation modal
    confirmNoButton.addEventListener("click", function () {
        confirmationModal.style.display = "none";
    });

    // Close modals when clicking outside of them
    window.addEventListener("click", function (event) {
        if (event.target === confirmationModal || event.target === restockModal) {
            closeModals();
        }
    });

    // Close modals when clicking close button
    document.querySelectorAll(".close-button a").forEach(closeButton => {
        closeButton.addEventListener("click", function (event) {
            event.preventDefault();
            closeModals();
        });
    });

    function openRestockModal() {
        restockForm.reset(); // Reset input fields
        isConfirmed = false; // Reset confirmation flag
        restockSubmit.disabled = false; // Enable submit button
        restockModal.style.display = "block";
    }

    function closeModals() {
        restockModal.style.display = "none";
        confirmationModal.style.display = "none";
        // Reset input fields when closing modals
        restockForm.reset();
        isConfirmed = false;
    }
});
