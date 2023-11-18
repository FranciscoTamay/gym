function init(){
    let apiEntrenador="http://127.0.0.1:8000/apiEntrenador";
    new Vue({
//         http: {
//             headers: {
//                 "X-CSRF-TOKEN": document
//                     .querySelector("#token")
//                     .getAttribute("value"),
//             },
//         },

        el: "#entrenadores",
        data: {
            mensaje:'Hola',
            entrenadores:[],

        },
        created: function () {
            this.obtenerentrenadores();
        },

        methods: {
            obtenerentrenadores:function(){

            this.$http.get(apiEntrenador).then(function(json){
                this.entrenadores=json.data;
            });
            },


        },

        });
}window.onload=init;