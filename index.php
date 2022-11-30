<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>PHP ToDo List JSON</title>
</head>

<body>
    <main id="app">
        <div class="container">
            <h1 class="text-center my-3">ToDo List</h1>

            <div class="row justify-content-center">
                <div class="col-6">
                    <ul>
                        <li v-for="todo, index in todoList">
                            <span :class="{'is-done': todo.done}" @click="doneToggle(index)">
                                {{ todo.text }}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="addingTodo d-flex justify-content-between">
                        <input type="text" id="add-todo" name="add-todo" placeholder="Add new ToDo" aria-label="Add new ToDo" v-model="inputText" @keyup.enter="addTodo">

                        <button class="btn btn-primary" @click="addTodo">ADD</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>

</html>