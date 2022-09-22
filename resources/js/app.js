/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
        NameCat: "",
        parent: "",
        del: "",
        items:[],
        cats:[],
        products:[],
        upn:"",
        upid:"",
        upc:"",
        imageid:"",
        pname:"",
        pprice:"",
        pcat:"",
        pwant:"",
        pimage:"",
        pwi:"",
        pdisc:"",
        psearch:"",
        pbrands:[],
        productid:"",
        productname:"",
        NameBrand:"",
        CountryBrand:"",
        brands:[],
        colors : [],
        numberbox:"",
        numberpackage:"",
        comments: [],
        comment:"",
        answer:"",
        images:[]
    },
    mounted(){
      this.getVueItems();
      this.getview();
      this.getcomments();
      this.searchprouducts();
      this.GetImages();

    },

    methods: {

        /***************************update category*************************/

        update: function() {
            upid: document.getElementById('recipient-name1').value;
            console.log(this.upid);
            axios.post('http://127.0.0.1:8000/home/update', {
                upid: document.getElementById('recipient-name1').value,
                upn: this.upn,
            })
                .then(function (response) {

                })
                .catch(function (error) {
                    console.log(error);
                });
            this.getVueItems();
        },

        /**************************update product***************************/

        updateproduct: function() {
            axios.post('http://127.0.0.1:8000/home/updateproduct', {
                upid: document.getElementById('recipient-name10').value,
                upn: this.upn,
                upc: this.upc,
            })
                .then(function (response) {
                    console.log(this.upid);
                })
                .catch(function (error) {
                    console.log(error);
                });
            this.searchprouducts();
        },

        /***************************delete in show************************/

        deletecat1: function(id){

            axios.post('/home/delcat', {
                id: id
            })
                .then(function (response) {

                })
                .catch(function (error) {
                    console.log(error);
                });
            this.getVueItems();
        },

        /***************************delete category***********************/

        DeleteCat: function () {
            let currentObj = this;
            axios.post('/home/delete', {
                del: this.del
            })
                .then(function (response) {
                    swal("success!", "category deleted!", "success");
                })
                .catch(function (error) {
                    console.log(error);
                });
            this.getVueItems();
        },

        /***************************add category**************************/

        AddCategory: function () {
            let currentObj = this;
            axios.post('/home/add', {
                name:this.NameCat,
                parent:this.parent,
            })
                .then(function (response) {
                    swal("success!", "category added!", "success");
                })
                .catch(function (error) {
                    console.log(error);
                });
            this.getVueItems();
        },

        /***************************add category**************************/

        addproduct: function () {
            var text = $("#editor").text();
            let currentObj = this;
            axios.post('/home/addproduct', {
                numberbox:this.numberbox,
                numberpackage:this.numberpackage,
                pname:this.pname,
                pprice:this.pprice,
                pcat:this.pcat,
                pwant:this.pwant,
                pdes:this.pdes,
                pdisc:this.pdisc,
                pbrands:this.pbrands,
                colors: this.colors,
                pimage:document.getElementById('image').value,
                text:text

            })
                .then(function (response) {
                    swal("success!", "product added!", "success");
                })
                .catch(function (error) {
                    console.log(error);
                    swal("خطا!", "لطفا فیلد های مربوطه را پر کنید!", "error");
                });
            this.searchprouducts();
        },

        /*****************************get value***************************/

        getVueItems: function(){

            axios.get('/vueitems').then(response => {

                this.items = response.data;
                console.log(this.items);

            });
        },

        /*****************************get cats****************************/

        getview: function(){

            axios.get('/viewcat').then(response => {

                this.cats = response.data;
                console.log(this.items);

            });
        },

        /****************************search products**********************/

        searchprouducts: function () {
            axios.get('/home/search')
                .then(response => {
                    this.products = response.data;
                });

        },

        /****************************get images**********************/

        GetImages: function () {
            axios.get('/home/getimages')
                .then(response => {
                    this.images = response.data;
                });

        },

        /****************************search products**********************/

        moreimage: function (productid) {

                productid: productid;
                document.getElementById("moreimage").value=productid;

        },

        /************************update products****************************/

        updateproducts: function(id){
            axios.post('/home/updateproducts', {
                id: id
            })
                .then(function (response) {

                })
                .catch(function (error) {
                    console.log(error);
                });
            this.searchprouducts();
        },

        /****************************delete products***********************/

        deletepro: function (id) {
            axios.post('/home/deletepro',{
                productid: id
            })
                .then(function (response) {
                swal("success!", "product deleted!", "success");
            })
                .catch(function (error) {
                    console.log(error);
                });
            this.searchprouducts();
            this.GetImages();
        },

        /************************update products****************************/

        updateimages: function(id){
            axios.post('/home/updateimages', {
                id: id
            })
                .then(function (response) {

                })
                .catch(function (error) {
                    console.log(error);
                });
            this.GetImages();
        },

        /****************************delete products***********************/

        deleteimg: function (id) {
            axios.post('/home/deleteimg',{
                imageid: id
            })
                .then(function (response) {
                    swal("success!", "product deleted!", "success");
                })
                .catch(function (error) {
                    console.log(error);
                });
            this.GetImages();
        },

        /*****************************add brands*****************************/

        AddBrands: function () {
            axios.post('/home/brands',{
                CountryBrand:this.CountryBrand,
                NameBrand:this.NameBrand,
                pimage:document.getElementById('image').value,
            })
                .then(function (response) {
                    swal("success!", "brand added!", "success");
                })
                .catch(function (error) {
                    console.log(error);
                });
            this.getbrands();
        },

        /*****************************delete brand*****************************/

        DeleteBrand:function () {
            axios.post('/home/deletebrands',{
                del: this.del
            })
                .then(function (response) {
                    swal("success!", "product deleted!", "success");
                })
                .catch(function (error) {
                    console.log(error);
                });
            this.getbrands();
        },

        /****************************select color*****************************/

        selectcolor: function (id) {
            var index = this.colors.indexOf(id);

            if (index == -1) {
                this.colors.push(id);
            } else {
                do {
                    this.colors.splice(index, 1);
                    index = this.colors.indexOf(id);
                } while (index != -1);
            }
        },

        /*************************** comments *********************************/

        submitcm: function (productid , userid) {
            axios.post('/home/postcm',{
                productid : productid ,
                userid : userid ,
                comment : this.comment ,

            })
                .then(function (response) {
                    swal("!موفق", "کامنت شما ارسال شد و پس از بررسی در سایت قرار داده خواهد شد", "success");
                    document.getElementById("review_comment").value = "";
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        /*************************** answer ************************************/

        submitanswer: function (productid , userid) {
            axios.post('/home/postanswer',{
                id: document.getElementById('recipient-name1').value,
                productid : productid ,
                userid : userid ,
                answer : this.answer ,

            })
                .then(function (response) {
                    document.getElementById('close').click();
                    swal("success!", "product deleted!", "success");
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        /************************* get comments *******************************/

        getcomments:function () {
            axios.get('/getcomments')
                .then(response => {
                    this.comments = response.data;
                });
        },

        /************************ delete comment *****************************/

        deletecomment: function(id){

            axios.post('/home/deletecomment', {
                id: id
            })
                .then(function (response) {

                })
                .catch(function (error) {
                    console.log(error);
                });
            this.getcomments();
        },

        /************************ update comments ****************************/

        updatecomments: function(id){
            axios.post('/home/updatecomments', {
                id: id
            })
                .then(function (response) {

                })
                .catch(function (error) {
                    console.log(error);
                });
            this.getcomments();
        },

        /************************ update count *******************************/

        updatecount: function(id){
            console.log(id);
            axios.post('/home/updatecount', {
                id: id
            })
                .then(function (response) {

                })
                .catch(function (error) {
                    console.log(error);
                });
            this.searchprouducts();
        },


    },

});


