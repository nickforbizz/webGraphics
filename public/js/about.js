// $.ajax({
//     url: '../../private/get_data/about.php',
//     method: 'post',
//     // data: $(`# `).serialize(),
//     success: function(data){
//         data = JSON.parse(data);
//         console.log(data);

//         $.each(data, function(i,val){
//             $("#about_content.").append(
//                 ` <ul>
//                  <h3><li> Items </li></h3>
//                 </ul>
//                 <div id="about_message">the message of or about that item</div>`
//             )
//         })
//     },error: function(data){console.log(data);}

// })



$(document).on("click", "#btn-preview", function () {
    $(".more-info").addClass('animate-right');
    $("#img_coming_soon").animate({
        width: '40%',
    },"medium");
});

$(document).on("click", "#close_btn", function () {
    $(".more-info").addClass('w3-animate-left');
    $("#img_coming_soon").animate({
        width: '100%',
    },"medium")
    $(".more-info").removeClass('w3-animate-left');
    $(".more-info").removeClass('animate-right');
    
})