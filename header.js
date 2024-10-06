
window.addEventListener('scroll', function() {
    const header = document.getElementById('parallax-header');
    let scrollPosition = window.pageYOffset;

    // Efek parallax sederhana
    header.style.backgroundPositionY = scrollPosition * 0.7 + 'px';

    // Efek fade out untuk konten header
    const headerContent = header.querySelector('.header-content');
    headerContent.style.opacity = 1 - scrollPosition / 500;
});

// Fungsi untuk mengubah gambar latar belakang secara acak
function changeBackgroundImage() {
    const header = document.getElementById('parallax-header');
    const imageUrl = 'https://source.unsplash.com/1600x900/?nature,landscape&' + new Date().getTime();
    
    // Pra-muat gambar
    const img = new Image();
    img
}