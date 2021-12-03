
//boton para añadir productos al carrito
const botonAgregarAlCarro = document.querySelectorAll('.btn_buy');
botonAgregarAlCarro.forEach((agregarAlCarro) => {
    agregarAlCarro.addEventListener('click',agregarClick);
});

//boton para comprar los productos del carrito
const botonComprar = document.querySelector('.comprarButton');
botonComprar.addEventListener('click',botonComprarClick);



const contenedorCarrito = document.querySelector('.shoppingCartItemsContainer'
);

function  agregarClick(event){
    const button = event.target;
    const product = button.closest('.product');

    const text   = product.querySelector('.text-center').textContent;
    const precio = product.querySelector('.precio').textContent;
    const img = product.querySelector('.image').src;
   

  
    agregaProductoAlCarro(text,precio,img);
}

function   agregaProductoAlCarro(text, precio, img) {

    const elementsTitle = contenedorCarrito.getElementsByClassName('shoppingCartItemTitle');
    
   for(let i=0;i < elementsTitle.length;i++){
       if(elementsTitle[i].innerText === text){ 
       let cantidadProducto = elementsTitle[i].parentElement.parentElement.parentElement.querySelector('.shoppingCartItemQuantity');
       cantidadProducto.value++;
       actualizarCarrito();
       $('.toast').toast('show');
       return;
       
       
   }


   }

    const filaCarrito = document.createElement('div');
    const contenidoCompra = `
    <div class="row shoppingCartItem">
          <div class="col-6">
              <div class="shopping-cart-item d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                  <img src=${img} class="shopping-cart-image">
                  <h6 class="shopping-cart-item-title shoppingCartItemTitle text-truncate ml-3 mb-0">${text}</h6>
              </div>
          </div>
          <div class="col-2">
              <div class="shopping-cart-price d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                  <p class="item-price mb-0 shoppingCartItemPrice">${precio}</p>
              </div>
          </div>
          <div class="col-4">
              <div
                  class="shopping-cart-quantity d-flex justify-content-between align-items-center h-100 border-bottom pb-2 pt-3">
                  <input class="shopping-cart-quantity-input shoppingCartItemQuantity" type="number"
                      value="1">
                  <button class="btn btn-danger buttonDelete" type="button">X</button>
              </div>
          </div>
      </div>`;


      filaCarrito.innerHTML = contenidoCompra;
      contenedorCarrito.append(filaCarrito);
      
      filaCarrito.querySelector('.buttonDelete')
      .addEventListener('click',removerProducto);

      filaCarrito.querySelector('.shoppingCartItemQuantity')
      .addEventListener('change',cambiarCantidad);

      actualizarCarrito();

}

function actualizarCarrito(){
    let total = 0;
    const  shoppingCartTotal = document.querySelector('.shoppingCartTotal');

    const shoppingCartItems = document.querySelectorAll('.shoppingCartItem');

    shoppingCartItems.forEach((shoppingCartItem) => {
    const shoppingCartItemPriceElement =  shoppingCartItem.querySelector('.shoppingCartItemPrice');
    
    const shoppingCartItemPrice = Number(shoppingCartItemPriceElement.textContent.replace('$',''));

    const shoppingCartItemQuantityElement = shoppingCartItem.querySelector('.shoppingCartItemQuantity');

    const shoppingCartItemQuantity = Number(shoppingCartItemQuantityElement.value);
      
     total = total + shoppingCartItemPrice*shoppingCartItemQuantity;


     
    //console.log(':actualizarCarrito -> total',total);
    
});

shoppingCartTotal.innerHTML = `${total.toFixed(3)}$`;

}

function removerProducto(event){
    const buttonClicked = event.target;
    buttonClicked.closest('.shoppingCartItem').remove();
    actualizarCarrito();
}

function cambiarCantidad(event){
    const input =  event.target;
    input.value <= 0 ? (input.value = 1) : null;
    actualizarCarrito();
    }



function botonComprarClick(){
    contenedorCarrito.innerHTML = '';
    actualizarCarrito();

}



    

    


