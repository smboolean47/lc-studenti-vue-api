const app = new Vue({
    el: "#app",
    data: {
        students: []
    },
    created() {
        axios.get("http://localhost/php-ajax-dischi/backend.php")
        .then( (response) => {
            this.students = response.data;
        });
    }
});