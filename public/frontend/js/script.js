$(document).ready(function() {
$('.profile-pic').hide();
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
				$('.profile-pic').show();
				$('.upload-button').hide();
				
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
				 $('.profile-picture').attr('src', e.target.result);
				$('.profile-picture').show();
				$('.upload-buttondiv').show();
				
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
	   

    });
	    $(".upload-buttondiv").on('click', function() {
       $(this).show();
	   

    });
});