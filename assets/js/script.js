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