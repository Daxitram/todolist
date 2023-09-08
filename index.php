<!DOCTYPE html>
<html>
<head>
    <title>Ma To-Do List</title>
</head>
<body>
    <h1>Ma To-Do List</h1>
    <input id="taskInput" type="text" placeholder="Ajouter une tâche">
    <button onclick="addTask()">Ajouter</button>
    <ul id="taskList"></ul>

    <script>
        // Fonction pour ajouter une tâche à la liste
        function addTask() {
            var taskInput = document.getElementById("taskInput");
            var taskList = document.getElementById("taskList");
            var taskText = taskInput.value;

            if (taskText !== "") {
                var listItem = document.createElement("li");
                listItem.appendChild(document.createTextNode(taskText));
                taskList.appendChild(listItem);
                taskInput.value = "";

                // Ajoute un gestionnaire d'événement pour marquer une tâche comme terminée
                listItem.addEventListener("click", function () {
                    listItem.classList.toggle("completed");
                });

                // Ajoute un bouton pour supprimer une tâche
                var deleteButton = document.createElement("button");
                deleteButton.appendChild(document.createTextNode("Supprimer"));
                listItem.appendChild(deleteButton);

                deleteButton.addEventListener("click", function () {
                    taskList.removeChild(listItem);
                });
            }}
        }
    </script>
</body>
</html>
