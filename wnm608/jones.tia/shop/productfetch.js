// Example of fetching products using AJAX
fetch('shop.php')
    .then(response => response.json())
    .then(data => {
        const gallery = document.querySelector('.gallery');
        data.products.forEach(product => {
            const productDiv = document.createElement('div');
            productDiv.className = 'product';
            productDiv.innerHTML = `
                <img src="${product.image}" alt="${product.name}">
                <h2>${product.name}</h2>
                <p>Price: $${product.price}</p>
            `;
            gallery.appendChild(productDiv);
        });
    })
    .catch(error => console.error('Error fetching products:', error));
