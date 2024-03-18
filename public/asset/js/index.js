$(document).ready(function() {
	$("#search-btn").click( function(){
		//alert("ok2");
		clear();
		display("#search");
		$(this).parent().css("border-bottom","2px solid var(--yellow)")
	
	});
	display("#detail");
	$("#found-btn").click( function(){
		//alert("ok2");
		clear();
		display("#found");
		$(this).parent().css("border-bottom","2px solid var(--teal)")
	});

$("#stats").click( function(){
		//alert("ok2");
		clear();
	});

	$("#icon").click( function(){
		//alert("ok2");
		clear();
	});

	$("#popup").click( function(){
		//load index.html 
		$(this).css("display","none");
	});


	$("#form").on("submit",function(e){
		e.preventDefault();
		//var dataString=$("#form").serialize();
		//document.getElementById("popup").innerHTML=dataString;
		fd= new FormData();
		files=document.getElementById("doc-img").files[0];

		fd.append('name',$("input[name='name']")[0].value);
		fd.append('type',$("input[name='type']:checked")[0].value);
		fd.append('surname',$("input[name='surname']")[0].value);
		fd.append('ref',$("input[name='ref']")[0].value);
		fd.append('tel',$("input[name='tel']")[0].value);
		fd.append('location',$("input[name='location']")[0].value);
		fd.append('img',files);
		//alert($("input[name='name']").value);
		
		$.ajax({ 
			type:'POST',
			url:'register.php',
			data:fd,//dataString,
			contentType:false,
			processData:false,
			success:function(l){
				if(l==1){
					clear();
					$('#form')[0].reset();
					$('#popup').fadeIn();
				}else{
					alert("Un problem a surgie lors de l'envoi de votre requête");
				}
				//clear();
			}
		})

	})


	$("#comment-form").on("submit",function(e){
		e.preventDefault();
		//var dataString=$("#form").serialize();
		//document.getElementById("popup").innerHTML=dataString;
		fd= new FormData();

		fd.append('mail',$("input[name='mail']")[0].value);
		fd.append('comment',$("textarea[name='comment']")[0].value);
		//alert($("input[name='name']").value);
		
		$.ajax({ 
			type:'POST',
			url:'comment.php',
			data:fd,
			contentType:false,
			processData:false,
			success:function(l){
				clear();
				if(l==1){
					$('#comment-form')[0].reset();
					alert('Comment Sent successfuly.')
				}
				//clear();
			}
		})

	})


})



function display(id) {
	$(id).fadeIn(800);
}

function clear(){
	$("#found").css("display","none");
	$("#popup").css("display","none");
	$("#search").css("display","none");
	$("#found-btn").parent().css("border-bottom","none")
	$("#search-btn").parent().css("border-bottom","none")
}

function notify(){
		//var dataString=$("#form").serialize();
		//document.getElementById("popup").innerHTML=dataString;
		fd= new FormData();

		fd.append('id',$("input[name='id']")[0].value);
		fd.append('table',$("input[name='table']")[0].value);
		
		$.ajax({ 
			type:'POST',
			url:'signal.php',
			data:fd,//dataString,
			contentType:false,
			processData:false,
			success:function(l){
				if(l==1){
					alert("Ce document a été signalé.Nous travaillons pour verifier sa veracité");
				}
				//clear();
			}
		})
}

function found(){$.ajax({ 
			type:'POST',
			url:'found.php',
			data:fd,//dataString,
			contentType:false,
			processData:false,
		})

}