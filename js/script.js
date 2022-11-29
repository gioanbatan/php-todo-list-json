const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            inputText: "",
        }
    },
    created() {
        axios.get("server.php")
            .then((resp) => {
                this.todoList = resp.data;
                console.log(this.todoList);
            });
    },
    methods: {
        addTodo() {
            const data = {
                newTodo: this.inputText,
            };

            axios
                .post("server.php", data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then((resp) => {
                    this.todoList = resp.data;
                    this.inputText = "";
                })
        }
    }
}).mount("#app");
