$("#contactForm").submit(function (e) {
    e.preventDefault();
    
    $.ajax({
        url: '../../private/post_data/contact.php',
        method: 'post',
        processData: false,
        contentType: false,
        data: new FormData(this),
        success: function (data) {
            $("#contactForm")[0].reset();   
            console.log(data);
            
        },
        error: function (data) {
            console.log(data);
            
        }
    })

})