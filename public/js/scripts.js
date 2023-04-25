
//  var selectDate = document.getElementById('selectDate');

//  var opts = document.getElementById('opt');

//  for(var i=0; i < opts.length; i++){
//     opts[i].addEventListener('click', ()=>{
//         var current = document.querySelector(".active");
//         current[0].className= current[0].className.replace(" active", "");
//         this.className +=" active";
//         // opts.style.display='none';
//     })
//  }


    function changePageSize(pageSize)
    {
        // Make an AJAX request to the server to change the page size

        $.ajax({
            url:'/change-page-size',
            type:'POST',
            data:{pageSize:pageSize},
            success:function(data)
            {
                 // Update the HTML with the new results
                 $('#results-container').html(data);
            }
        })
    }

    window.onload = function() {
        var element = document.getElementById("res");
        if (element) {
            element.scrollIntoView();
        }
    }
