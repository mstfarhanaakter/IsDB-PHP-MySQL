<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <a class="bo">Hi there, I am Farhana!</a>
    <h1>I am learning PHP</h1>
    <?php 
    echo "Hello, World!";
  
    echo date("\nm/d/y");
    ?>

    <script>
        let div = document.querySelector("h1");
        div.style.color = "red"
        let el = document.createElement("button")
        el.textContent = "Click here to learn PHP"
        let div0 = document.querySelector("h1")
        div0.after(el)
        el.style.backgroundColor = "yellow"
        document.write("<br>")
        
        let hey = document.querySelector("a")
        hey.style.fontSize = "18px";
        hey.style.textDecoration = "none";
        hey.style.fontWeight = "bold";
        hey.setAttribute("href", "http://github.com/mstfarhanaakter")
    </script>
</body>
</html>
