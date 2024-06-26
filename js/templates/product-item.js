export const item = (product) => {

  return `
 
    
    <li class="product__block js_product" id="${product.id}">
    <div class="image__box">
    <img src="${product.image}" alt="image" class="image"/>
    </div>
    <div class="sb-description">
    <p class="product__name js_product-name">${product.name}</p>
    <span class="product__price">$${(product.price).toFixed(2)}</span>
  
    <div class="product__btn-block">
     <a href="product-page.html?id=${product.id}" class="btn btn--first" style="margin: ${product.type == "ring" || product.type == "clothing" || product.type == "shoes" ? 'auto' : ''}">details</a>
      ${
        product.type == "ring" || product.type == "clothing" || product.type == "shoes" ? '' : '<button class="btn js_add-to-cart">buy</button>'
      }
  </div>
    </div>
  </li>
  
    `
}


