const app = new Vue({
    el: '#app',
    data: {
        dischiElement: [
        ]
    },
    methods: {
        fas(){
            console.log("funzio");
        },
        getDischi(){
            axios.get('http://localhost/php-ajax-dischi/server.php')
            .then(result => {
                this.dischiElement = result.data;
                console.log(this.dischiElement);
            })
        },
    },
    created: function() {
        this.getDischi();
    }
})