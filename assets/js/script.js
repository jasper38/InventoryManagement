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
    const restockSubmitBtn = document.getElementById("modal-submit");
    const restockForm = document.getElementById("restock-form");
    const restockModal = document.getElementById("restock-modal");
    const confirmationModal = document.getElementById("confirmationModal");
    const confirmYesBtn = document.getElementById("confirmAction");
    const confirmNoBtn = document.getElementById("closeModal");
    const closeButton = document.querySelector(".close-button");

    if (!restockSubmitBtn || !restockForm || !restockModal || !confirmationModal || !confirmYesBtn || !confirmNoBtn) {
        console.error("One or more elements not found!");
        return;
    }

    // Show confirmation modal only if form is valid
    restockSubmitBtn.addEventListener("click", function (event) {
        if (restockForm.checkValidity()) {
            event.preventDefault(); // Stop form from submitting immediately
            confirmationModal.style.display = "block"; // Show confirmation modal
        } else {
            restockForm.reportValidity(); // Show built-in validation messages
        }
    });

    // If "Yes" is clicked, submit form and close both modals
    confirmYesBtn.addEventListener("click", function () {
        restockForm.submit(); // Submit the form
        closeModals(); // Ensure both modals are closed
    });

    // If "No" is clicked, close only the confirmation modal
    confirmNoBtn.addEventListener("click", function () {
        confirmationModal.style.display = "none";
    });

    closeButton.addEventListener("click", function () {
        restockModal.style.display = "none"; // Hide modal
    });
    // Close modals when clicking outside them
    window.addEventListener("click", function (event) {
        if (event.target === restockModal || event.target === confirmationModal) {
            closeModals();
        }
    });

    // Handle opening restock modal
    document.querySelectorAll(".restock-button").forEach(button => {
        button.addEventListener("click", function () {
            closeModals(); // Close any open modals before opening a new one
            restockForm.reset(); // Clear form inputs for fresh entry
            restockModal.style.display = "block"; // Open the restock modal
        });
    });

    function closeModals() {
        restockModal.style.display = "none";
        confirmationModal.style.display = "none";
        restockForm.reset(); // Clear input fields for the next submission
    }
});
