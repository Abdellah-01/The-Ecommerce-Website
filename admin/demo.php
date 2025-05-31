<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag-and-Drop Website Builder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        #editor {
            min-height: 300px;
            background-color: #f8f9fa;
            padding: 10px;
            border: 2px dashed #ccc;
        }
        .draggable {
            cursor: grab;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Drag-and-Drop Website Builder</h2>
        <div class="row">
            <div class="col-md-3">
                <h4>Components</h4>
                <div class="list-group" id="components">
                    <div class="list-group-item draggable" draggable="true" data-type="text">Text</div>
                    <div class="list-group-item draggable" draggable="true" data-type="image">Image</div>
                    <div class="list-group-item draggable" draggable="true" data-type="button">Button</div>
                </div>
            </div>
            <div class="col-md-9">
                <h4>Live Editor</h4>
                <div id="editor" class="border p-3" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <p>Drag elements here</p>
                </div>
            </div>
        </div>
        <button id="save" class="btn btn-primary mt-3">Save</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let components = document.querySelectorAll(".draggable");
            components.forEach(comp => {
                comp.addEventListener("dragstart", function(event) {
                    event.dataTransfer.setData("component", event.target.dataset.type);
                });
            });
        });

        function allowDrop(event) {
            event.preventDefault();
        }

        function drop(event) {
            event.preventDefault();
            let componentType = event.dataTransfer.getData("component");
            let newElement;
            if (componentType === "text") {
                newElement = document.createElement("p");
                newElement.textContent = "Editable Text";
                newElement.contentEditable = "true";
            } else if (componentType === "image") {
                newElement = document.createElement("img");
                newElement.src = "https://via.placeholder.com/150";
                newElement.classList.add("img-fluid");
            } else if (componentType === "button") {
                newElement = document.createElement("button");
                newElement.textContent = "Click Me";
                newElement.classList.add("btn", "btn-primary");
            }
            event.target.appendChild(newElement);
        }
    </script>
</body>
</html>
