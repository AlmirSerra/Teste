const ProductHandle = require('./product-handle')
const products = require('./products.json')

const productHandle = new ProductHandle(products);

const categorizedProducts = productHandle.categorize();

console.log(categorizedProducts)