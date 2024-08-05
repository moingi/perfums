document.getElementById('searchButton').addEventListener('click', function() {
    const searchContainer = document.getElementById('searchContainer');
    if (searchContainer.classList.contains('show')) {
        searchContainer.classList.remove('show');
    } else {
        searchContainer.classList.add('show');
    }
});