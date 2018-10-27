
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../../resources/js/bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('../../../resources/js/components/ExampleComponent.vue'));
let CRYPTOCOMPARE_API_URI = "https://www.cryptocompare.com";
let COINMARKETCAP_API_URI = "https://api.coinmarketcap.com";
let UPDATE_INTERVAL = 60 * 1000;

const app = new Vue({
    el: '#app',
    data: {
        coins: [],
        coinData: {}
    },
    methods: {

        /**
         * Load up all cryptocurrency data.  This data is used to find what logos
         * each currency has, so we can display things in a friendly way.
         */
        getCoinData: function() {
            let self = this;

            axios.get(CRYPTOCOMPARE_API_URI + "/api/data/coinlist")
                .then((resp) => {
                    this.coinData = resp.data.Data;
                    this.getCoins();
                })
                .catch((err) => {
                    this.getCoins();
                    console.error(err);
                });
        },

        /**
         * Get the top 10 cryptocurrencies by value.  This data is refreshed each 5
         * minutes by the backing API service.
         */
        getCoins: function() {
            let self = this;

            axios.get(COINMARKETCAP_API_URI + "/v1/ticker/?limit=10")
                .then((resp) => {
                    this.coins = resp.data;
                })
                .catch((err) => {
                    console.error(err);
                });
        },

        /**
         * Given a cryptocurrency ticket symbol, return the currency's logo
         * image.
         */
        getCoinImage: function(symbol) {
            return CRYPTOCOMPARE_API_URI + this.coinData[symbol].ImageUrl;
        },
    },
    created: function() {
        this.getCoinData();
    },
});
