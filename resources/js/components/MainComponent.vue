<template>
  <main>
    <SloganComponent />
    <router-view></router-view>
  </main>
</template>

<script>
import SloganComponent from "./SloganComponent.vue";
export default {
  name: "MainComponent",
  components: { SloganComponent },
  data() {
    return {
      cart: null,
    };
  },
  methods: {
    addToCart(prodotto, price = 5) {
      window.localStorage.setItem("nomeProdotto", prodotto);
      window.localStorage.setItem("prezzo", price);
      this.cart = { nomeProdotto: prodotto, prezzo: price };
    },
  },
  created() {
    this.cart = {
      nomeProdotto: window.localStorage.getItem("nomeProdotto"),
      prezzo: window.localStorage.getItem("prezzo"),
    };
  },
};
</script>

<style lang="scss" scoped>
</style>