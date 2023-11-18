function init(){
    new Vue({
        http: {
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector("#token")
                    .getAttribute("value"),
            },
        },

        el: "#entrenadores",
        data: {
            mensake:'Hola',

        },
        created: function () {
            
        },

        methods: {

        },

        });
}window.onload=init;