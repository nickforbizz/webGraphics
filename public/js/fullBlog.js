// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}


function likeFunction(x) {
    x.style.fontWeight = "bold";
    x.innerHTML = "&#10003; Liked";
}

$("#hcb_form").on("submit", function (event) {
    event.preventDefault();

    $.ajax({
        url: '../../private/post_data/postComments.php',
        method: 'post',
        success: function (data) {
            console.log(data);
            
        },
        error: function (data) {
            alert("Something went wrong!");
        }
    })
})