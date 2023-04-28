// Data
var ProductList = [
  {
      productImage: './images/product-7.jpg',
      productDiscount: '40%',
      productTitle: "MEN'S CLOTHES",
      productDes: "oncepts Solid Pink Men’s Polo",
      productPrice: "$150 USD"

  },
  {
      productImage: './images/product-2.jpg',
      productDiscount: '40%',
      productTitle: "MEN'S CLOTHES",
      productDes: "oncepts Solid Pink Men’s Polo",
      productPrice: "$200 USD"
  },
  {
      productImage: './images/product-3.jpg',
      productDiscount: '30%',
      productTitle: "Women's CLOTHES",
      productDes: "ladies Where clothes",
      productPrice: "$150 USD"
  },
  {
      productImage: './images/product-4.jpg',
      productDiscount: '30%',
      productTitle: "Men Shoes",
      productDes: "oncepts Solid Pink Men’s Polo",
      productPrice: "$200 USD"
  } ,
  {
    productImage: './images/product-5.jpg',
    productDiscount: '40%',
    productTitle: "Women Shoes",
    productDes: "oncepts Solid Pink Men’s Polo",
    productPrice: "$150 USD"
} ,
{
  productImage: './images/product-6.jpg',
  productDiscount: '30%',
  productTitle: "Men Shoes",
  productDes: "oncepts Solid Pink Men’s Polo",
  productPrice: "$200 USD"
},
{
  productImage: './images/product-7.jpg',
  productDiscount: '40%',
  productTitle: "MEN'S CLOTHES",
  productDes: "oncepts Solid Pink Men’s Polo",
  productPrice: "$150 USD"

},
{
  productImage: './images/product-5.jpg',
  productDiscount: '40%',
  productTitle: "Women Shoes",
  productDes: "oncepts Solid Pink Men’s Polo",
  productPrice: "$150 USD"
} ,
]

const hamburer = document.querySelector(".hamburger");
const navList = document.querySelector(".nav-list");

if (hamburer) {
  hamburer.addEventListener("click", () => {
    navList.classList.toggle("open");
  });
}

// Popup
const popup = document.querySelector(".popup");
const closePopup = document.querySelector(".popup-close");

if (popup) {
  closePopup.addEventListener("click", () => {
    popup.classList.add("hide-popup");
  });

  window.addEventListener("load", () => {
    setTimeout(() => {
      popup.classList.remove("hide-popup");
    }, 1000);
  });
}




const ProductContainer = document.querySelector('.product-center')
const ProductWrapper =ProductList.map((product)=>{
  return(
    ` <div class="product-item">
        <div class="overlay">
          <a href="productDetails.html" class="product-thumb">
            <img class="ProductImage" src=${product.productImage} alt="" />
          </a>
          <span class="discount">${product.productDiscount}</span>
        </div> 
        <div class="product-info">
          <span class="productTitle">${product.productTitle}</span>
          <a href="productDetails.html" class="description"></a>
          <h4 class="productPrice">${product.productPrice}</h4>
        </div> 
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>`
  )
}).join('');

ProductContainer.innerHTML = ProductWrapper;













  
















// Filter by Price












 




 

  




