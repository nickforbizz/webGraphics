        
        if(localStorage.username==undefined){
            window.location="../folder_login/login.php"
          }

window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};

    function charOneToUpper(s){
        let y = s.charAt(0).toUpperCase();
        let z = s.replace(s.charAt(0), y)
        return z;
      }



 const user = charOneToUpper(localStorage.username);
 const user_email = localStorage.user_email;
 const user_image = localStorage.user_image;

// paste user at the session
 $("#Username").html(user);


 // date now 
 var now_date = new Date();
//  console.log(now_date);
 
//  call users data with ajax
function ajaxFunc(url_path, select_html) {
    $.ajax({
        url: url_path,
        method: 'post',
        type: 'json',
        success: function (data) {
            data = JSON.parse(data);
            // console.log(data);
            $.each(data, function (i, val) {
                $(select_html).html(val.id);
                // console.log(select_html, val.id);

                if (select_html == ".available_users_no") {
                     $(select_html).html(val.user_id);
                    
                }
                
                if (select_html == ".total_sms") {
                    val.posted_at = Date.parse(val.posted_at);
                    // time_passed = now_date - val.posted_at;
                    time_passed = new Date(now_date - val.posted_at);
                    if (i >= 5) {
                        $(select_html).html(5);                        
                    }
                    $("#ul_drop_sms").append(`
                    <li>
								<div class="dropdown-messages-box"><a href="profile.html" class="text-black">
                                    <div class="text-center p-2"><b class="contactcter_email">${val.email}</b></div>
                                    <span class="divider"></span>
									</a>
                                    <div class="message-body">
                                    
										<a href="#"><strong>${val.guest_name}</strong> left a <strong>Message On</strong>...</a>
									<br /><small class="text-muted">${time_passed.toDateString()}</small></div>
								</div>
							</li>
							<li class="divider"></li>
                    `);
                    // console.log(time_passed.toDateString());
                    
                }
            })
            $("#ul_drop_sms ").last().append(`<li>
            <div class="all-button"><a href="#">
                <em class="fa fa-inbox"></em> <strong>All Messages</strong>
            </a></div>
        </li>`)
            
        }, 
        error: function (data) {
            console.log(data);
            
        }
    })    
}  // ajax function

ajaxFunc('../get_data/users.php', ".available_users_no");
ajaxFunc('../get_data/contact.php', ".total_sms");