module.exports = class ProductHandle {
  products = [];

  constructor(data) {
    this.products = data;
  }

  categorize() {
    const categorizedProducts = [];

    for(const index in this.products) {
      const productItem = this.products[index];

      const category = this.getProductCategory(productItem.product);

      if( !categorizedProducts[category] ) {
        categorizedProducts[category] = { products: [] }
      }

      categorizedProducts[category]["products"].push(productItem);

      categorizedProducts[category]["average"] = this.calculateAverage(categorizedProducts[category]["products"])
      categorizedProducts[category]["median"] = this.calculateMedian(categorizedProducts[category]["products"])
    }

    return categorizedProducts;
  }

  getProductCategory(productName) {
    const productObject = productName.split('-');
    return productObject[0].trim()
  }

  calculateAverage(categorizedProducts) {
    const numberOfProducts = categorizedProducts.length
    let totalValue = 0
    
    for(const index in categorizedProducts) {
      totalValue = totalValue + categorizedProducts[index].value
    }
    
    return totalValue / numberOfProducts
  }

  calculateMedian(categorizedProducts){
    const values = [];

    for(const index in categorizedProducts) {
      values.push(categorizedProducts[index].value)
    }
  
    values.sort(function(a, b){
      return a - b;
    });
  
    var half = Math.floor(values.length / 2);
    
    if ((values.length % 2) == 1) {
      return values[half];
    }

    return (values[half - 1] + values[half]) / 2.0;
  }
  
}