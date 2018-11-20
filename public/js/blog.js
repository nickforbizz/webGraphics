
$(document).on("click",".page-item",function () {
    $(".page-item").removeClass("active");
    $(this).addClass('active');
    
}) 


var noe;

$.ajax({
    url: '../../private/get_data/count.php',
    method: 'get',
    data: '',
    success: function (data) {

        noe=parseInt(data)
        var n=Math.round(noe/9)
        var a=0
        var c=1

        while(n>0){
            console.log(n)
            $("#pagination_links").append(`
            <li class="page-item blog_id_${n}" onclick=""><a class="page-link" data-id="${n}" onclick="fetch(${a+=9});">${c++}</a></li>
        `)

            n--
        }

    },error:function(e){
        console.error(e)
    }
})

// function addActive(list_id) {
//     // $(".page-item").click(function () {
//         $(".page-item").removeClass("active");
//         $(".blog_id_"+list_id).addClass('active');
        
//     // })           
//     console.log(list_id);
    
//     // if(!data.length){
//     // }else{
//     // }            
               
// }
            
function charOneToUpper(s){
    let y = s.charAt(0).toUpperCase();
    let z = s.replace(s.charAt(0), y)
    return z;
}
            
            
            
// const user = charOneToUpper(localStorage.username);
// const user_email = localStorage.user_email;
// const user_image = localStorage.user_image;
// const user_id = localStorage.user_id;
// $("#owner_id").val(user_id);
// // paste user at the session
// $("#Username").html(user);

function fetchFirst() {
    // fetch(0);
}

currentIndex = 0; 





    

function fetch(index) {

    currentIndex = index; 

    $.ajax({
        url: '../../private/get_data/edit_blog.php',
        method: 'get',
        data: 'index='+index,
        success: function (data) {
            console.log(data);
            data = JSON.parse(data);

            // check if data is empty 
            if (!data.length) {
                return false;            
            }
            $("#blog_cards").html("");
            
            // $("#pagination_links").html("");
            
            var items_count = 0;
            $.each(data, function (i, val) {
               
                $("#noContent").hide();

                $("#blog_cards").append(`
                <div class="card shadow col-sm-6 col-md-4 col-lg-3 a_blog_card"  id="">
                    <img class="card-img-top rounded" <img src="../../private/${val.img_link}" width="" height="180px" alt="NICKS Design">
                    <div class="card-body">
                    <div class="all-0"> 
                    <div class="m-2">
                    <h4>${charOneToUpper(val.title)}</h4>
                    <small> <b>By:</b> <i id="author_${val.blog_id}_${val.owner_id}"> Web Design</i></small> <br>
                    <div class="badge badge-pill badge-info mr-3" id="view_blog"> <a href="blogs_dir/fullBlog.php?blog_id=${val.blog_id}"> view blog </a> </div>
                    <div class="clearfix"></div>
                    </div>
                    <!-- m-2 end -->
                    </div>
                    <!-- all-0 ends -->
                    </div>
                    <!-- card-body end -->
                    <div class="card-footer" style="height: 50px; overflow-y:hidden;">${charOneToUpper(val.blog_description)}</div>
                    <!-- LikeBtn.com BEGIN -->
                    <span class="likebtn-wrapper" data-identifier="item_1"></span>
                    <script>
                    (function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");
                    </script>
                    <!-- LikeBtn.com END -->
                    </div>
                    <!-- card end -->
                    
                    `);
                    
                    // append pagination
                    
                    // if (i+1 / 9  == true) {
                    //     console.log(i+1);
                        items_count += 1;

                            if (i <= 5) {
                                i +=1;
                            }
                            
                            // $("#pagination_links").append(`
                            // <li class="page-item blog_id_${i}" onclick=""><a class="page-link" onclick="fetch(${i * 9}); addActive(${i})">${items_count}</a></li>
                        // `)
                    
                // }
                // end of append pagination
                
                
                // ajax request for users
                $.ajax({
                    url: '../../private/get_data/users.php',
                    method: 'post',
                    success: function (params) {
                        params = JSON.parse(params);                           
                        // console.log(params);
                        
                        $.each(params, function (j, j_val) {
                            if (j_val.user_id == val.owner_id) {
                                $("#author_"+val.blog_id+"_"+val.owner_id).html(j_val.username) 
                            //    console.log("#author_"+val.id+val.owner_id+"_ "+j_val.username); 
                            }
                        })
                    
                        
                    },
                    error: function (params){
                        alert("unable to get Users:> contact Developer");
                        }
                    })
                // ajax request for users ends here
            }) //end of each(data)

            
        },
        error: function (data) {
            console.log(data);
            
        }

    }) // end of ajax
}

fetch(0);
// $(".blog_id_1").addClass('active');
// console.log(whoisowner);


