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
    console.log("Sidebar classes: ", sidebar.classList);

    localStorage.setItem('sidebarState', sidebar.classList.contains('hide') ? 'collapsed' : 'expanded');
});

links.forEach(link => {
    link.addEventListener("click", function (e) {
        if (sidebar.classList.contains("hide")) {
            sidebar.style.transition = "none";
            setTimeout(() => {
                sidebar.style.transition = "";
            }, 50);
            e.stopPropagation();
        }
    });
});

window.addEventListener('load', function () {
    setTimeout(() => {
        sidebar.classList.remove('preload');
    }, 100);
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
    const confirmationModal = document.getElementById("confirmationModal");
    const confirmYesBtn = document.getElementById("confirmAction");
    const confirmNoBtn = document.getElementById("closeModal");
    let activeForm = null; // Store the form being submitted

    // Find modals for Order and Restock
    const orderModal = document.getElementById("order-modal");
    const restockModal = document.getElementById("restock-modal");
    const productModal = document.getElementById("enlistProductModal");

    if (!confirmationModal || !confirmYesBtn || !confirmNoBtn) {
        console.error("Confirmation modal elements not found!");
        return;
    }

    // Function to handle modal + confirmation
    function handleConfirmation(buttonId, formSelector, modal) {
        const button = document.getElementById(buttonId);
        const form = document.querySelector(formSelector);

        if (!button || !form) {
            console.error(`Button or form not found: ${buttonId}, ${formSelector}`);
            return;
        }

        button.addEventListener("click", function (event) {
            if (form.checkValidity()) {
                event.preventDefault(); // Stop form from submitting immediately
                activeForm = form; // Set active form
                confirmationModal.style.display = "block"; // Show confirmation modal
                // if (modal) modal.style.display = "none"; // Hide only the relevant modal
            } else {
                form.reportValidity(); // Show built-in validation messages
            }
        });
    }

    // Attach event listeners to the correct buttons
    handleConfirmation("restock-modal-submit", "#restock-form", restockModal); // Restock modal button
    handleConfirmation("order-modal-submit", "#order-modal-form", orderModal); // Order modal button
    handleConfirmation("product-modal-submit", productModal); // Order modal button

    // If "Yes" is clicked, submit the active form & close all modals
    confirmYesBtn.addEventListener("click", function () {
        if (activeForm) {
            activeForm.submit();
        }

        confirmationModal.style.display = "none"; // Close confirmation modal
    });

    // If "No" is clicked, only close the confirmation modal
    confirmNoBtn.addEventListener("click", function () {
        confirmationModal.style.display = "none"; // Only hide confirmation modal
        // If the restock modal was opened before, reopen it
        if (activeForm && activeForm.id === "restock-form") {
            restockModal.style.display = "block";
        }
        if (activeForm && activeForm.id === "order-modal-form") {
            orderModal.style.display = "block";
        }
    });

    // Close confirmation modal when clicking outside
    window.addEventListener("click", function (event) {
        if (event.target === confirmationModal) {
            confirmationModal.style.display = "none";
            if (activeForm && activeForm.id === "restock-form") {
                restockModal.style.display = "block";
            }
            if (activeForm && activeForm.id === "order-modal-form") {
                orderModal.style.display = "block";
            }
        }
    });
});
