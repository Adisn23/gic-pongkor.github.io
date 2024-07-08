// Mendapatkan pathname dari URL jendela saat ini
const windowPathName = window.location.pathname;

// Mendapatkan elemen tautan navigasi
const navLinkEls = document.querySelectorAll('a.nav-link'); // Ubah selector sesuai dengan elemen navigasi di HTML Anda

// Iterasi setiap elemen tautan navigasi
navLinkEls.forEach(navLinkEl => {
    // Mengambil pathname dari href tautan navigasi
    const navLinkPathName = new URL(navLinkEl.href).pathname;

    // Menambahkan kelas 'active' jika pathname cocok
    if (windowPathName === navLinkPathName || 
        (windowPathName === '/index.php' && navLinkPathName === '/')) {
        navLinkEl.classList.add('active');
    }
});


