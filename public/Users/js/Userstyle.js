

function loadMoreProducts() {
    page++;
    let url = '?page=' + page;

    fetch(url, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.html) {
            document.getElementById('product-container').innerHTML += data.html;
        } else {
            document.getElementById('load-more').style.display = 'none';
        }
    })
    .catch(error => console.error('Error loading more products:', error));
}
