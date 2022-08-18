<template>
  <div class="container">
    <!-- MODAL -->
    <div>
      <div>&nbsp;</div>
      <div>
        <button
          class="btn btn_main btn_cart"
          data-toggle="modal"
          data-target="#cart"
        >
          <i class="fa-solid fa-cart-shopping"></i>
          <span class="badge badge-light">{{ badge }}</span>
        </button>
        <div class="modal fade" id="cart">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4>Il tuo carrello</h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="cart-body">
                <table class="table table-striped text-left">
                  <tbody>
                    <tr v-for="(cart, n) in carts" :key="n">
                      <td>{{ cart.name }}</td>
                      <td>
                        &euro;
                        {{ cart.subtotal.toFixed(2) }}
                      </td>
                      <td width="100">
                        <input
                          type="text"
                          readonly
                          class="form-control text-center"
                          v-model="cart.quantity"
                        />
                        <div class="d-flex justify-content-around">
                          <button
                            style="
                              font-size: 1.5rem !important;
                              position: relative;
                              top: -34px;
                              right: 36px;
                            "
                            @click="decreaseQuantity(cart)"
                          >
                            <i
                              style="font-size: 1.5rem !important"
                              class="fa-solid fa-minus text-muted"
                            ></i>
                          </button>
                          <button
                            style="position: relative; top: -34px; left: 36px"
                            @click="addQuantity(cart)"
                          >
                            <i
                              style="font-size: 1.5rem !important"
                              class="fa-solid fa-plus text-success"
                            ></i>
                          </button>
                        </div>
                      </td>
                      <td width="60">
                        <button
                          @click="removeCart(n)"
                          class="btn btn-danger btn-sm"
                          style="font-size: 0.5rem; margin-left: 2rem"
                        >
                          <i
                            class="fa-solid fa-xmark text-danger"
                            style="font-size: 1.5rem"
                          ></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                Total Price: &euro; {{ totalprice }} &nbsp;
                <a href="/orders/create" v-if="carts.length > 0">
                  <button type="submit" value="Checkout" class="btn btn_main">
                    Checkout
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Trigger/Open The Modal-2 -->
    <!-- <button id="myBtn">Open Modal-2</button> -->

    <!-- CONFIRM CHANGE CART MODAL-2 -->
    <!-- The Modal-2 -->
    <!-- <div id="myModal-2" class="modal-2"> -->
      <!-- Modal-2 content -->
      <!-- <div class="modal-2-content">
        <div class="modal-2-header">
          <span class="close" id="close">&times;</span>
          <h2>Attenzione!</h2>
        </div>
        <div class="modal-2-body">
          <p>Non puoi acquistare da 2 ristoranti contemporaneamente.</p>
          <p>
            Vuoi veramente svuotare il carrello per aggiungere questo prodotto
            alla tua lista?
          </p>
        </div>
        <div class="modal-2-footer">
          <button
            id="confirmDeleteButton"
            type="submit"
            value="Conferma"
            class="btn btn_main"
          >
            Conferma
          </button>
          <button
            type=""
            value="Annulla"
            id="annulla"
            class="btn btn-danger"
            style="background-color: red !important"
          >
            ANNULLA
          </button>
        </div>
      </div>
    </div> -->

    <!-- CARD PRODOTTI -->

    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- List group-->
          <ul class="list-group shadow">
            <!-- list group item-->
            <li
              class="list-group-item"
              v-for="product in products"
              :key="product.id"
            >
              <!-- Custom content-->
              <div
                class="media align-items-lg-center flex-column flex-lg-row p-3"
              >
                <div class="media-body order-2 order-lg-1">
                  <h5 class="mt-0 font-weight-bold mb-2">
                    {{ product.name }}
                  </h5>
                  <p
                    class="font-italic text-muted mb-0 small"
                    v-html="product.description"
                  >
                    <!-- {!! product.description !!} -->
                  </p>
                  <div
                    class="
                      d-flex
                      align-items-center
                      justify-content-between
                      mt-1
                    "
                  >
                    <h6 class="font-weight-bold my-2">
                      € {{ product.price.toFixed(2) }}
                    </h6>
                    <button @click="addToCart(product)" class="btn btn_main">
                      Aggiungi al carrello
                    </button>
                  </div>
                </div>
                <img
                  :src="'../storage/' + product.image"
                  alt=""
                  width="200"
                  class="ml-lg-5 order-1 order-lg-2"
                />
              </div>
              <!-- End -->
            </li>
            <!-- End -->
          </ul>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SingleRestaurantComponent",
  data() {
    return {
      restaurant: null,
      categories: [],
      products: [],
      // cart
      carts: [],
      cartadd: {
        id: "",
        name: "",
        price: "",
        amount: "",
        restaurant_id: "",
      },
      formattedTotal: null,
      badge: "0",
      quantity: "1",
      totalprice: "0",
      // count: 1,
    };
  },
  created() {
    this.viewCart();
  },
  methods: {
    // FUNZIONE PER VISUALIZZARE I DATI CORRETTI NEL CARRELLO
    viewCart() {
      if (localStorage.getItem("carts")) {
        this.carts = JSON.parse(localStorage.getItem("carts"));

        // FUNZIONE PER IL NUMERINO DEI PRODOTTI NEL BADGE
        this.badge = this.carts.reduce((total, item) => {
          return total + item.quantity;
        }, 0);

        // FUNZIONE PER VISUALIZZARE IL PREZZO TOTALE ALLA FINE DELL'ORDINE
        this.totalprice = this.carts.reduce((total, item) => {
          // console.log(total, "questo è total");
          // console.log(item, "questo è item");
          this.formattedTotal = (
            parseFloat(total) + parseFloat(item.subtotal)
          ).toFixed(2);
          return this.formattedTotal;
        }, 0);
      }
    },
    // FUNZIONE PER AGGIUNGERE PRODOTTI AL CARRELLO
    addToCart(pro) {
      let check = false;
      this.carts.forEach((element) => {
        if (element.restaurant_id != pro.restaurant_id) {
          check = true;
        }
      });
      if (check) {
        // ECCEZIONE, PRODOTTI DA RISTORANTI DIVERSI

        // APRI MODALE PER LA CONFERMA DEL CAMBIO CARRELLO
        // Get the modal
        // var modal = document.getElementById("myModal-2");

        // Get the <span> element that closes the modal
        // var span = document.getElementById("close");

        // When the user clicks on <span> (x), close the modal
        // span.onclick = function () {
        //   modal.style.display = "none";
        // };

        // Annulla chiude il modale
        // var annulla = document.getElementById("annulla");

        // When the user clicks on button ANNULLA, close the modal
        // annulla.onclick = function () {
        //   modal.style.display = "none";
        // };

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function (event) {
        //   if (event.target == modal) {
        //     modal.style.display = "none";
        //   }
        // };

        // modal.style.display = "block";
        let deleteCart = confirm(
          "Non puoi acquistare contemporanemante da più ristoranti. Vuoi veramente svuotare il carrello per inserire questo prodotto?"
        );

        // DICHIARAZIONE E EVENT LISTENER SUL BOTTONE DI CONFERMA DEL MODALE
        // var confirmDeleteButton = document.getElementById(
        //   "confirmDeleteButton"
        // );

        // confirmDeleteButton.addEventListener("click", function () {
        //   var deleteCart = true;
        //   console.log(deleteCart);
        // });

        // CANCELLAZIONE CARRELLO E AGGIUNTA PRODOTTO DI RISTORANTE DIVERSO

          if (deleteCart) {
            this.emptyCart();
            pro.quantity = 1;
            this.carts.push(pro);
            this.cartadd.id = pro.id;
            this.cartadd.name = pro.name;
            this.cartadd.price = pro.price;
            window.localStorage.setItem(
              `item${this.carts.length}`,
              JSON.stringify(pro)
            );
            this.storeCart();
          }

      } else {
        pro.quantity = 1;
        // QUA ENTRA SOLO SE IL CARRELLO E' VUOTO
        if (this.carts.length == 0) {
          this.carts.push(pro);
          // IN QUESTO ELSE ENTRA SOLO DOPO IL PRIMO ELEMENTO AGGIUNTO NEL CARRELLO
        } else {
          // this.carts.push(pro);
          let itemInCart = this.carts.filter((item) => item.id === pro.id);
          let isItemInCart = itemInCart.length > 0;

          if (isItemInCart === false) {
            this.carts.push(Vue.util.extend({}, pro));
          } else {
            itemInCart[0].quantity += pro.quantity;
          }
        }
        this.cartadd = {};
        this.storeCart();
        // console.log(this.carts);
      }
    },

    //FUNZIONE PER AUMENTARE LA QUANTITA' DEL PRODOTTO
    addQuantity(cart) {
      // cart.quantity = 1;
      // console.log(cart);
      let itemInCart = this.carts.filter((item) => item.id === cart.id);
      itemInCart[0].quantity += 1;
      this.cartadd = {};
      this.storeCart();
    },

    //FUNZIONE PER DIMINUIRE LA QUANTITA' DEL PRODOTTO
    decreaseQuantity(cart) {
      // cart.quantity = 1;
      // console.log(cart);
      let itemInCart = this.carts.filter((item) => item.id === cart.id);
      itemInCart[0].quantity -= 1;
      if (itemInCart[0].quantity == 0) {
        itemInCart[0].quantity += 1;
        // this.carts.splice(cart, 1);
        this.cartadd = {};
        this.storeCart();
      } else {
        this.cartadd = {};
        this.storeCart();
      }
    },

    // FUNZIONE PER RIMUOVERE TUTTA UNA LISTA DI PRODOTTI UGUALI DAL CARRELLO
    removeCart(pro) {
      this.carts.splice(pro, 1);
      this.storeCart();
    },

    // FUNZIONE PER SALVARE IL CARRELLO
    storeCart() {
      this.carts.forEach((el) => {
        // console.log(el);
        el.subtotal = el.price * el.quantity;
        el.restaurant_name = this.restaurant.restaurant.name;
      });
      let parsed = JSON.stringify(this.carts);
      localStorage.setItem("carts", parsed);
      this.viewCart();
    },

    // FUNZIONE PER SVUOTARE IL CARRELLO
    emptyCart() {
      window.localStorage.clear();
      this.carts = [];
    },
  },
  mounted() {
    const slug = this.$route.params.slug;

    axios
      .get(`/api/restaurants/${slug}`)
      .then((response) => {
        this.restaurant = response.data;
        this.products = response.data.products;
        // console.log(this.products);
        this.products.forEach((product) => {
          // console.log(product.description);
          if (
            product.description.charAt(product.description.length - 1) == ","
          ) {
            product.description = product.description.slice(0, -1);
            // console.log(product.description);
          }
        });
        // this.products.forEach((product) => {
        // product.quantity = 0;
        // });
        // console.log(this.products, "e poi", this.restaurant);
      })
      .catch((error) => {
        console.log(error);
      });

    axios
      .get("/api/categories")
      .then((res) => {
        this.categories = res.data;
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>

<style lang="scss" scoped>
.fa-cart-shopping {
  color: #005c53;
}

.btn_main:hover .fa-cart-shopping {
  color: white;
}

.btn_cart {
  position: fixed;
  top: 250px;
  right: 15px;
  z-index: 100;
}

/* The Modal (background) */
.modal-2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-2-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s;
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {
    top: -300px;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}

@keyframes animatetop {
  from {
    top: -300px;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-2-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-2-body {
  padding: 2px 16px;
}

.modal-2-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>
