document.addEventListener("DOMContentLoaded", function () {
    let image = document.getElementById("image");
    let text = document.getElementById("text");

    image.addEventListener("mouseover", function () {
        image.src = "okbei.jpeg"; 
        text.innerText = "OK BYE";
    });

    image.addEventListener("mouseout", function () {
        image.src = "welcome.jpeg"; 
        text.innerText = "Welcome Home";
    });
});
