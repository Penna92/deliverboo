<template>
  <section>
    <!-- <TypesSlider /> -->

    <div class="container my-5">
      <div class="row">
        <div
          v-for="(type, index) in types"
          :key="index"
          class="col-6 col-sm-6 col-md-3 col-lg-2 py-2 checkbox"
        >
          <input
            type="checkbox"
            name="type"
            id="type"
            :style="
              'background-image: url(/media/img/type_' +
              type.id +
              '.png);' +
              'background-color:' +
              type.background_color +
              ';'
            "
            :value="index + 1"
            v-model="selectValue"
            @change="searchType()"
          />
          <label
            class="text-uppercase font-weight-bold pt-2 label_text"
            for="type"
            >{{ type.name }}</label
          >
        </div>
      </div>
    </div>
    <h2 v-if="selectValue.length == 0" class="text-center">
      I più amati nella tua zona
    </h2>
    <div
      v-if="restaurants.length > 0"
      class="
        row
        d-flex
        justify-content-around
        my-5
        card-resturant-container
        container
        centratura
      "
    >
      <div
        v-for="restaurant in restaurants"
        :key="restaurant.index"
        class="
          d-flex
          justify-content-center
          col-lg-3 col-md-4 col-sm-6
          mb-4 mb-md-0
        "
      >
        <div class="card my-4" style="width: 18rem">
          <router-link
            class=""
            :to="{
              name: 'single-restaurant',
              params: { slug: restaurant.slug },
            }"
          >
            <img
              class="card-img-top img-fluid"
              :src="'storage/' + restaurant.image"
              :alt="'immagine di' + restaurant.name"
            />

            <div class="card-body">
              <h5 class="card-title text-dark">
                {{ restaurant.name }}
              </h5>
              <p class="card-text text-dark p_fixed">
                <i class="fa-solid fa-map-location-dot"></i> Springfield -
                {{ restaurant.address }}
              </p>
            </div>
          </router-link>
        </div>
      </div>
    </div>
    <!-- <div v-if="finalRestaurants.length == 0" class="container">
      <p>Non ci sono ristoranti che corrispondono a questa tipologia</p>
    </div> -->
  </section>
</template>

<script>
// import InputComponent from "./InputComponent.vue";
import TypesSlider from "./TypesSlider.vue";
export default {
  name: "RestaurantGridComponent",
  components: { TypesSlider },
  data() {
    return {
      types: [],
      restaurants: [],
      selectValue: [],
      apiPath: "api/restaurants",
    };
  },
  methods: {
    getApiTypes() {
      axios
        .get("api/types")
        .then((response) => {
          this.types = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    searchType() {
      if (this.selectValue.length > 0) {
        let finalQuery = "";
        this.selectValue.forEach((el) => {
          finalQuery += el + ",";
        });

        axios
          .get(`${this.apiPath}?type=${finalQuery}`)
          .then((response) => {
            this.restaurants = response.data;
          })
          .catch((error) => {
            console.log(error);
          });
      } else {
        axios
          .get(this.apiPath)
          .then((response) => {
            // console.log(response.data);
            this.restaurants = response.data;
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  },
  created() {
    this.getApiTypes();
    this.searchType();
  },
};
</script>

<style lang="scss" scoped>
// .label_text {
//     position: absolute;
//     top: 50%;
//     transform: translateY(-50%);
//     color: #005c53!important;
// text-shadow: 2px 0 #fff, -2px 0 #fff, 0 2px #fff, 0 -2px #fff,
//              1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;
// }

// .checkbox > span {
//     color: #005c53;
//     padding: 0.5rem 0.25rem;
// }

// .card-restaurant {
//     a {
//         text-decoration: none;
//         .card {

//             // text-align: center;
//             // color: black;
//             // border-radius: 10px;
//             // box-shadow: 0px 4px 13px 0px rgba(0, 0, 0, 0.52);
//             // transition: 0.3s;
//             // &:hover{
//             //   width: 380px;
//             //   margin-top: 10px;
//             //   transition: 0.3s;
//             // }
//             img {
//                 width: 100%;
//                 height: 170px;
//                 object-fit: cover;
//                 border-radius: 10px 10px 0 0;
//             }
//             .under-card {
//                 background-color: transparent;
//                 padding: 10px 0;
//             }
//         }
//     }
// }
.centratura {
  margin: 0 auto;
}

.card {
  padding: 0 !important;
  text-align: center;
  color: black;
  border-radius: 10px;
  box-shadow: 0px 4px 13px 0px rgba(0, 0, 0, 0.52);
  transition: transform 0.3s ease-in-out;
  img {
    width: 100% !important;
    height: 200px !important;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
  }
  &:hover {
    transform: scale(1.05);
    box-shadow: 0px 8px 13px 0px rgba(0, 0, 0, 0.7);
    transition: 0.5s;
  }
}

:hover a {
  text-decoration: none;
}
.checkbox {
  display: inline-flex;
  cursor: pointer;
  position: relative;
  flex-direction: column;
  align-items: center;
  transition: transform 0.3s ease-in-out;

  & > input {
    -webkit-appearance: none;
    -moz-appearance: none;
    -o-appearance: none;
    appearance: none;
    outline: none;
    height: 8rem;
    width: 8rem;
    // border: 1px solid #34495e;
    border-radius: 50%;
    transition-duration: 0.3s;
    background-size: 80%;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
  }

  & > input:checked {
    border: 0.5rem solid #dbf227;
    transform: scale(1.05);
    transition: 0.3s;
    box-shadow: 0px 8px 13px 0px rgba(0, 0, 0, 0.3);
  }

  & > input:hover {
    transform: scale(1.05);
    transition: 0.3s;
    box-shadow: 0px 8px 13px 0px rgba(0, 0, 0, 0.3);
  }

  & > input:active {
    border: 0.5rem solid #005c53;
  }
}
</style>
