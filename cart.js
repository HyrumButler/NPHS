// Initialize an empty shopping cart
let cart = [];

// Function to add a product to the cart
function addToCart(product) {
    // Check if the product is already in the cart
    const existingItem = cart.find(item => item.id === product.id);
    if (existingItem) {
        // If the product is already in the cart, increment its quantity
        existingItem.quantity++;
    } else {
        // If the product is not in the cart, add it
        cart.push({ ...product, quantity: 1 });
    }
    // Update the cart UI
    updateCartUI();
    // Save the cart state (optional, you can use localStorage or sessionStorage)
    saveCartState();
}

// Function to update the cart UI
function updateCartUI() {
    // Code to update the cart UI (e.g., display the cart contents)
    // This will depend on your website's design and structure
}

// Function to save the cart state
function saveCartState() {
    // Code to save the cart state (e.g., using localStorage)
}

// Initialize the cart when the page loads
window.addEventListener('load', () => {
    // Code to initialize the cart (e.g., load saved cart state)
});
