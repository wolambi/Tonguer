$(document).ready(function(){

	function devDocsMove(x,y,z){
		$("#tuto"+z+"1, #tuto"+z+"2, #tuto"+z+"3, #tuto"+z+"4, #tuto"+z+"5").removeClass("actif");
		$("section.index"+y+" .content").css("-webkit-transform","translateX(-"+x+"%)").css("transform","translateX(-"+x+"%)").css("-moz-transform","translateX(-"+x+"%)").css("-ms-transform","translateX(-"+x+"%)");

	}
	function registerMove(transX){
		$(".registercontent ol li").css("opacity", ".2")
		if (transX == (0)) {
			$(".registercontent aside").css("display", "block");
			$(".navregister1").css("opacity", "1")
		}else if (transX == (20)){
			$(".registercontent aside").css("display", "none");
			$(".navregister2").css("opacity", "1")
		}else if (transX == (40)){
			$(".navregister3").css("opacity", "1")
		};
		$(".createacount").css("-webkit-transform","translateX(-"+transX+"%)").css("-moz-transform","translateX(-"+transX+"%)").css("-ms-transform","translateX(-"+transX+"%)").css("transform","translateX(-"+transX+"%");

	}
	function isValidInput(_required){
        var isValid = true;
        $.each(_required, function(index, input){
            if($(input).val() === "" || $(input).val() === "null" || $(input).val() === $(input).attr('placeholder')){
               $(this).addClass('inputerror');
                isValid = false;
            }else{
            	$(this).removeClass('inputerror');
            }
        });
        return isValid;
    }

	 $.fn.autogrow = function(opts) {
        var that = $(this).css({overflow: 'hidden', resize: 'none'}) //prevent scrollies
            , selector = that.selector
            , defaults = {
                context: $(document)
                , animate: true
                , speed: 200
                , fixMinHeight: true
                , cloneClass: 'autogrowclone'
            }
        ;
        opts = $.isPlainObject(opts) ? opts : {context: opts ? opts : $(document)};
        opts = $.extend({}, defaults, opts);
        that.each(function(i, elem){
            var min, clone;
            elem = $(elem);
            if (elem.is(':visible') || parseInt(elem.css('height'), 10) > 0) {
                min = parseInt(elem.css('height'), 10) || elem.innerHeight();
            } else {
                clone = elem.clone()
                    .addClass(opts.cloneClass)
                    .val(elem.val())
                    .css({
                        position: 'absolute'
                        , visibility: 'hidden'
                        , display: 'block'
                    })
                ;
                $('body').append(clone);
                min = clone.innerHeight();
                clone.remove();
            }
            if (opts.fixMinHeight) {
                elem.data('autogrow-start-height', min);
            }
            elem.css('height', min);
        });
        opts.context
            .on('keyup paste', selector, resize)
        ;

        function resize (e){
            var box = $(this)
                , oldHeight = box.innerHeight()
                , newHeight = this.scrollHeight
                , minHeight = box.data('autogrow-start-height') || 0
                , clone
            ;
            if (oldHeight < newHeight) {
                this.scrollTop = 0;
                opts.animate ? box.stop().animate({height: newHeight}, opts.speed) : box.innerHeight(newHeight);
            } else if (e.which == 8 || e.which == 46 || (e.ctrlKey && e.which == 88)) {
                if (oldHeight > minHeight) { //shrink!
                    clone = box.clone()
                        .addClass(opts.cloneClass)
                        .css({position: 'absolute', zIndex:-10})
                        .val(box.val())
                    ;
                    box.after(clone);
                    do {
                        newHeight = clone[0].scrollHeight - 1;
                        clone.innerHeight(newHeight);
                    } while (newHeight === clone[0].scrollHeight);
                    newHeight++;
                    clone.remove();
                    newHeight < minHeight && (newHeight = minHeight);
                    oldHeight > newHeight && opts.animate ? box.stop().animate({height: newHeight}, opts.speed) : box.innerHeight(newHeight);
                } else {
                    box.innerHeight(minHeight);
                }
            }
        }
    }
	var transX = 0;
	$('a[rel="_blank"]').each(function(){
		$(this).attr('target', '_blank');
	})
	$(".invitetonguerfriend, .invitetonguershear, .invitationadd, .createprojectaddtranslator, #tutotra1, #tutotra2, #tutotra3, #tutotra4, #tutotra5, #tutodev1, #tutodev2, #tutodev3, #tutodev4, #tutodev5, .registernext, .registeeprev, .add, .lienprojectintern1, .lienprojectintern2, .lienprojectintern3, .createprojectprev").click(function(e){
		e.preventDefault();
	})
	$("#tutodev1").click(function(e){
		devDocsMove(0,4,"dev");
		$(this).addClass("actif");
	})
	$("#tutodev2").click(function(e){
		devDocsMove(20,4,"dev");
		$(this).addClass("actif");
	})
	$("#tutodev3").click(function(e){
		devDocsMove(40,4,"dev");
		$(this).addClass("actif");
	})
	$("#tutodev4").click(function(e){
		devDocsMove(60,4,"dev");
		$(this).addClass("actif");
	})
	$("#tutodev5").click(function(e){
		devDocsMove(80,4,"dev");
		$(this).addClass("actif");
	})
	$("#tutotra1").click(function(e){
		devDocsMove(0,5,"tra");
		$(this).addClass("actif");
	})
	$("#tutotra2").click(function(e){
		devDocsMove(20,5,"tra");
		$(this).addClass("actif");
	})
	$("#tutotra3").click(function(e){
		devDocsMove(40,5,"tra");
		$(this).addClass("actif");
	})
	$("#tutotra4").click(function(e){
		devDocsMove(60,5,"tra");
		$(this).addClass("actif");
	})
	$("#tutotra5").click(function(e){
		devDocsMove(80,5,"tra");
		$(this).addClass("actif");
	})


	$(".registernext").click(function(){
		transX = transX + 20;
		registerMove(transX);
	})
	$(".registeeprev").click(function(){
		transX = transX - 20;
		registerMove(transX);
	})
	var i = 0 ;
	$(".selectspe .add").click(function(){
		i++;
		$(this).before('<select name="registerlanguageskill_1'+i+'" class="languageskill" id="registerlanguageskill_1'+i+'"><option value="nul">Languages Skills</option><option value="1">Arabic</option><option value="2">English</option><option value="3">French</option><option value="4">German</option><option value="5">Hindi</option><option value="6">Italian</option><option value="7">Mandarin</option><option value="8">Nederlands</option><option value="9">Portuguese</option><option value="10">Russian</option><option value="11">Spanish</option></select><input class="lvlspecificity" type="text" name="levelandspecificity'+i+'" placeholder="Level and Specificity" >');
	})

	$(".profilcontent .afternav .edit").click(function(){
		$(this).parent("div").css("display","none");
		$(this).parent("div").next("form").css("display","block");
	})
	$(".profilcontent .afternav .editval").click(function(){
		$(this).parent("form").css("display","none");
		$(this).parent("form").prev("div").css("display","block");
	})
	$(".profilcontent .afternav .editspecial").click(function(){
		$(this).parent("div").css("display","none");
		$(this).parent("div").next("form").css("display","block");
	})
	$(".profilcontent .afternav .editspecialval").click(function(){
		$(this).parent("form").css("display","none");
		$(this).parent("form").prev("div").css("display","block");
	})
	$(".profiladd").click(function(){
		i++;
		$(this).parent("li").before('<li><form class="displayblock" action="#" method="POST"><select name="accountlanguageskill'+i+'" class="accountlanguageskill" id="accountlanguageskill_'+i+'"><option selected value="null">Languages Skills</option><option value="1">Arabic</option><option value="2">English</option><option value="3">French</option><option value="4">German</option><option value="5">Hindi</option><option value="6">Italian</option><option value="7">Mandarin</option><option value="8">Nederlands</option><option value="9">Portuguese</option><option value="10">Russian</option><option value="11">Spanish</option></select><input class="accoutlvlspecificity" type="text" name="accoutlvlspecificity'+i+'" placeholder="Lvl and Specificity" ><label for="accoutlvlspecificity_send" class="editspecialval"></label><input id="accoutlvlspecificity_send" type="submit"></form></li>');
	})

	$(".tonguersave").click(function(e){
		e.preventDefault();
		$(".submitpo").click();
	})

	$(".fuckscroll li").click(function(e){
		e.preventDefault();
		$this = $(this);
		var invisibledata 	= $("#invisibledata").data("nombre"),
			navdata 		= $this.data("link"),
			cpt 			= 1;
		$(".contenttonguer li").css("display", "none");
		$(".fuckscroll li").css("opacity","0.6");
		$this.css("opacity","1");

		for (var i = 0; i<invisibledata; i++) {
			var theli = $(".contenttonguer li:nth-child("+cpt+")");
			var thetextarea = $(".contenttonguer li:nth-child("+cpt+") textarea");
			if (thetextarea.data("datanav") == navdata) {
				theli.css("display", "block");
			};
			cpt++;

		}
	})

	$(".submitpo").click(function(e) {
		e.preventDefault();
		var invisibledata = $("#invisibledata").data("nombre");
		var superx = 0;
		var	proj_id = $(".tonguersave").data("projectid_ajax");

		for (var i = 0; i<invisibledata; i++) {
			var	atraduire 	= $(".divclass"+superx+" .atraduire").text(),
				traduit 	= $(".divclass"+superx+" .traduit").val(),
				datanav 	= $(".divclass"+superx+" .traduit").data("datanav"),
				datapo 		= $(".divclass"+superx+" .traduit").data("datapo");
			$.ajax({
				type: "POST",
				url: "process/process_save_po.php?projectid="+proj_id+"",
				data: {atraduire: atraduire, traduit: traduit, datanav: datanav, datapo: datapo, superx: superx },
				success: function(data){
					data = JSON.parse(data);
					var dataMessage = (data["message"]);
					if(data && data.success == true){
						console.log(dataMessage);
					}else{
						console.log(dataMessage);
					}
				}
			})
			superx = superx+1;
		}
	})



	var proilall = $(".profil1, .profil2, .profil3");
	var navprofilall = $(".navprofil1, .navprofil2, .navprofil3");
	$(".navprofil1 a").click(function(e){
		e.preventDefault;
		navprofilall.removeClass("active");
		$(this).addClass("active");
		proilall.css("display", "none");
		$(".profil1").css("display","block");
		$("article.tonguerfriends").css("display","block");
	})
	$(".navprofil2 a").click(function(e){
		e.preventDefault;
		navprofilall.removeClass("active");
		$(this).addClass("active");
		proilall.css("display", "none");
		$(".profil2").css("display","block");
		$("article.tonguerfriends").css("display","none");
	})
	$(".navprofil3 a").click(function(e){
		e.preventDefault;
		navprofilall.removeClass("active");
		$(this).addClass("active");
		proilall.css("display", "none");
		$(".profil3").css("display","block");
		$("article.tonguerfriends").css("display","none");
	})

	$(".projectcontent .thisul li .projectarrow").click(function(){
		var theliselect = $(this).parents("li");
		theliselect.toggleClass("open");
		if (theliselect.hasClass("open")) {
			$(this).addClass("arrowrotate");
		}else{
			$(this).removeClass("arrowrotate");
		};
	})

	var navinternproject = $(".lienprojectintern1, .lienprojectintern2, .lienprojectintern3");

	$(".lienprojectintern1").click(function(){
		navinternproject.removeClass("active");
		$(this).addClass("active");
		$(".conainerinterne").css("-webkit-transform","translateX(0%)").css("-moz-transform","translateX(0%)").css("-ms-transform","translateX(0%)").css("transform","translateX(0%");

	})
	$(".lienprojectintern2").click(function(){
		navinternproject.removeClass("active");
		$(this).addClass("active");
		$(".conainerinterne").css("-webkit-transform","translateX(-20%)").css("-moz-transform","translateX(-20%)").css("-ms-transform","translateX(-20%)").css("transform","translateX(-20%");

	})
	$(".lienprojectintern3").click(function(){
		navinternproject.removeClass("active");
		$(this).addClass("active");
		$(".conainerinterne").css("-webkit-transform","translateX(-40%)").css("-moz-transform","translateX(-40%)").css("-ms-transform","translateX(-40%)").css("transform","translateX(-40%");

	})
	$("#iama").change(function(){
		var value = $(this).val();
		if (value == 2) {
			$(".sidevsup").css("display","none");
		}else{
			$(".sidevsup").css("display","block");
		};
	})
	$('#createprojectuploadbutton').click(function(e){
		e.preventDefault();
		$("#createprojectupload").click();
	})


	var winheight = $( window ).height();
	var tonguercontent = ( winheight - 341 );
	$(".contenttonguer").height(tonguercontent);

	$(".delet_windows").click(function(){
		$(".addtranslator").fadeOut(100);
		$(".addtranslatorcontent, .invitekediscontent, .evaluateandcommentcontent, .profilimagecontent").fadeOut(100);
	})
	$(".addtranslator").click(function(){
		$(this).fadeOut(100);
		$(".addtranslatorcontent, .invitekediscontent, .evaluateandcommentcontent, .profilimagecontent").fadeOut(100);
	})

	$(".sendinvitation").click(function(e){
		e.preventDefault();
		$(".invitekediscontent").fadeIn(100);

	})

	var nombredeli	= $(".fuckscroll li").length;
	cpt1  = 1;
	cpt2 = 2;

	for (var i = 0; i<nombredeli; i++) {

		var datali_1 	= $(".fuckscroll li:nth-child("+cpt1+")"),
			datali_2 	= $(".fuckscroll li:nth-child("+cpt2+")");
		if (datali_2.length == 1) {
			if (datali_1.data("link") == datali_2.data("link")) {
				datali_2.remove();
			}else{
				cpt1++;
				cpt2++;
			}
		}

	}


	$(".activeclass_addtranslatorcontent").click(function(e){
		e.preventDefault();
		$this = $(this);
		var	projectname = $this.data("projectname"),
			projectid	= $this.data("projectid");
		$(".addtranslator").fadeIn(100);
		$(".addtranslatorcontent").fadeIn(100);


		$(".sendinvitation").click(function(e){
			e.preventDefault();
			$this = $(this);
			var	username	= $this.data("username"),
				userid		= $this.data("userid"),
				deadline	= $("#invitationdeadline"),
				langue		= $("#traductionlanguage"),
				prix		= $("#pricestring");


			$(".invitekediscontent").fadeIn(100);
			$(".inviteusername").text("Invite "+username);

			$(".sendinvitationlast").click(function(e){
				e.preventDefault();
				var comment	= $("#invitationtextarea").val();
				if(isValidInput([deadline, langue, prix])){
					$.ajax({
						type: "POST",
						url: "process/process_sendinvitation.php",
						data: {deadline: deadline.val(), langue: langue.val(), prix: prix.val(), username: username, userid: userid, projectname: projectname, projectid: projectid , comment: comment },
						success: function(data){
							data = JSON.parse(data);
							var dataMessage = (data["message"]);
							if(data && data.success == true){
								$(".ajaxmessage_login").text("Send");
								document.location.href="project.php";
							}else{
								$(".ajaxmessage_login").text(dataMessage);
							}
						}
					});
				}else{
					$(".ajaxmessage_login").text("Please fill fields: deadline, Chose language and price22");
				}
			})
		})
	})

	$(".newprojectaccept").click(function(e){
		e.preventDefault();
		console.log("kedis");
		$this = $(this);
		var id_invitation = $this.data("id_invitation");

		$.ajax({
			type: "POST",
			url: "process/process_accept_invite.php",
			data: {id_invitation: id_invitation},
			success: function(){
				$this.parents("article").fadeOut(100);
			}
		});
	})
	$(".newprojectdecline").click(function(e){
		e.preventDefault();
		console.log("kedis");
		$this = $(this);
		var id_invitation = $this.data("id_invitation");

		$.ajax({
			type: "POST",
			url: "process/process_decline_invite.php",
			data: {id_invitation: id_invitation},
			success: function(){
				$this.parents("article").fadeOut(100);
			}
		});
	})





	$(".activeclass_invitekediscontent").click(function(){
		$(".addtranslator").fadeIn(100);
		$(".invitekediscontent").fadeIn(100);
	})
	$(".activeclass_evaluateandcommentcontent").click(function(){
		$(".addtranslator").fadeIn(100);
		$(".evaluateandcommentcontent").fadeIn(100);
	})
	$(".clickusername").click(function(){
		$(".addtranslator").fadeIn(100);
		$(".profilimagecontent").fadeIn(100);
	})
	$('textarea').autogrow();
	$(".tonguerflag").click(function(){
		if($(this).hasClass("actif1")){
			$(this).removeClass("actif1");
			$(this).addClass("actif2");
		}else if($(this).hasClass("actif2")){
			$(this).removeClass("actif2");
		}else{
			$(this).addClass("actif1");
		}
	})
	$(".invitetonguerfriend").click(function(){
		$(".addtransshare").addClass("displaynone");
		$(".addtransfriend").removeClass("displaynone");
	})
	$(".invitetonguershear").click(function(){
		$(".addtransshare").removeClass("displaynone");
		$(".addtransfriend").addClass("displaynone");
	})

	$("#submit_loginlogin, #submit_registerlogin").click(function(e) {
		e.preventDefault();
		var	username = $("#username"),
			password = $("#password");

		if(isValidInput([password, username])){
	        $.ajax({
                type: "POST",
                url: "process/process_login.php",
                data: {username: username.val(), password: password.val() },
                success: function(data){
					data = JSON.parse(data);
					var dataMessage = (data["message"]);
	     			if(data && data.success == true){
	    				document.location.href="project.php";
	                }else{
	                	$(".ajaxmessage_login").text(dataMessage);
	                }
	    		}
	        });
	    }else{
	    	$(".ajaxmessage_login").text("Please fill in all fields");
	    }
	});



	$("#submitregister").click(function(e) {
		e.preventDefault();
		var	iama 					 = $("#iama"),
			registerusername 		 = $("#registerusername"),
			registerpassword 		 = $("#registerpassword"),
			registeremail 	 		 = $("#registeremail"),
			registerfullname 		 = $("#registerfullname"),
			registerpostalcode  	 = $("#registerpostalcode"),
			registertown  			 = $("#registertown"),
			registernumber  		 = $("#registernumber"),
			registercountry  		 = $("#registercountry"),
			registeraddress     	 = $("#registeraddress"),
			registerphone			 = $("#registerphone"),
			registermaternellanguage = $("#registermaternellanguage"),
			presentationregister	 = $("#presentationregister"),
			registercompany 		 = $("#registercompany");
		if(isValidInput([iama, registerusername, registerpassword, registeremail, registerfullname, registerpostalcode, registertown, registernumber, registercountry, registeraddress, registerphone, registermaternellanguage, presentationregister, registercompany ])){
	        $.ajax({
                type: "POST",
                url: "process/process_register.php",
                data: {iama: iama.val(), registerusername: registerusername.val(), registerpassword: registerpassword.val(), registeremail: registeremail.val(), registerfullname: registerfullname.val(), registerpostalcode: registerpostalcode.val(), registertown: registertown.val(), registernumber: registernumber.val(), registercountry: registercountry.val(), registeraddress: registeraddress.val(), registerphone: registerphone.val(), registermaternellanguage: registermaternellanguage.val(), presentationregister: presentationregister.val(), registercompany: registercompany.val()},
				success: function(data){
					data = JSON.parse(data);
					var dataMessage = (data["message"]);
					if(data && data.success == true){
						document.location.href="login.php";
					}else{
						$(".ajaxmessage_register").text(dataMessage);
					}
				}
			});
	    }else{
	    	$(".ajaxmessage_register").text("Please fill in all fields");
	    }
	});






	// $(".invitationadd").click(function(){
	// 	i++;
	// 	$(this).parent("li").before('<li><p><select name="traductionlanguage'+i+'" id="traductionlanguage'+i+'"><option value="null">Chose language</option><option value="1">Arabic</option><option value="2">English</option><option value="3">French</option><option value="4">German</option><option value="5">Hindi</option><option value="6">Italian</option><option value="7">Mandarin</option><option value="8">Nederlands</option><option value="9">Portuguese</option><option value="10">Russian</option><option value="11">Spanish</option></select><select name="pricestring'+i+'" id="pricestring'+i+'"><option value="0.05">0.05 €</option><option value="0.06">0.06 €</option><option value="0.07">0.07 €</option><option value="0.08">0.08 €</option><option value="0.09">0.09 €</option><option value="0.10">0.10 €</option><option value="0.11">0.11 €</option><option value="0.12">0.12 €</option><option value="0.13">0.13 €</option><option value="0.14">0.14 €</option><option value="0.15">0.15 €</option><option value="0.16">0.16 €</option><option value="0.17">0.17 €</option><option value="0.18">0.18 €</option><option value="0.19">0.19 €</option><option value="0.20">0.20 €</option><option value="0.21">0.21 €</option><option value="0.22">0.22 €</option><option value="0.23">0.23 €</option><option value="0.24">0.24 €</option><option value="0.25">0.25 €</option></select></p></li>');
	// })


	// $(".createprojectnext").click(function(e){
	// 	e.preventDefault();
	// 	$(".createprojectlvl1").css("display", "none");
	// 	$(".createprojectlvl2").css("display", "block");
	// 	$(".createprojectlvl").text("2/3");
	// })

	// $(".createprojectnext2").click(function(e){
	// 	e.preventDefault();
	// 	var	createprojectname 	= $("#createprojectname"),
	// 		createprojectupload = $("#createprojectupload"),
	// 		createprojecturl 	= $("#createprojecturl");
	// 	if(isValidInput([createprojectname, createprojectupload])){

	// 		// var createprojectupload = new FormData($('#createprojectupload').get(0));
	//   	console.log(createprojectupload)
	//   	console.log(createprojectupload.val())

	//         $.ajax({
 //                type: "POST",
 //                url: "process/process_createproject.php",
 //                data: {createprojectname: createprojectname.val(), createprojectupload: createprojectupload.val(), createprojecturl: createprojecturl.val() },
 //                success: function(data){
	// 				data = JSON.parse(data);
	// 				var dataMessage = (data["message"]);
	//      			if(data && data.success == true){
	//    				  // $(".createprojectlvl1").css("display", "none");
	// 					// $(".createprojectlvl2").css("display", "block");
	// 					// $(".createprojectlvl").text("2/2");
	//                 }else{
	//                 	$(".ajaxmessage_login").text(dataMessage);
	//                 }
	//     		}
	//         });
	//     }else{
	//     	$(".ajaxmessage_login").text("Please fill fields: Project name and Upload the ZIP ");
	//     }
	// })




});

