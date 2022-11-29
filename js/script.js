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
            });
    },
    methods: {
        addTodo() {
            const data = {
                text: this.inputText,
                done: false
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
