var homePageModule = (function() {   

	var leftSideBarHover = function() {  
		
		$("#left_side_bar ul li").hover(function(){  
			/*console.log($(this).children().html());  
			$(this).children("a").css("color", "#FFFFFF");  
			$(this).children("i").css("color", "#FFFFFF");*/  
			
			//$(this).css("color", "#FFFFFF");
		});

	};      
	
	var seeMoreActivity = function() {  
		
		var $firstActivity = $(document).find(".wrap_recents").first();  
		
		$firstActivity.addClass("showedActivity").siblings(".wrap_recents").hide();    
		//console.log($(".showedActivity").next(".wrap_recents").length);
		
		
		
		$(document).find("#see_more_activity").on("click", function(e){  
			e.preventDefault();   
			
			$(document).find("#recent_activity_loading").fadeIn("slow", function(){  
				
				//console.log($(document).find(".showedActivity").next(".wrap_recents").length);
				
				//$(document).find(".showedActivity").next(".wrap_recents").fadeIn("slow").addClass("showedActivity").prev(".wrap_recents").removeClass("showedActivity");      
				
				if($(document).find(".showedActivity").next(".wrap_recents").next(".wrap_recents").next(".wrap_recents").length == 1) {  
					$(document).find(".showedActivity").next(".wrap_recents").fadeIn("slow");
					$(document).find(".showedActivity").next(".wrap_recents").next(".wrap_recents").fadeIn("slow");
					$(document).find(".showedActivity").removeClass("showedActivity").next(".wrap_recents").next(".wrap_recents").next(".wrap_recents").fadeIn("slow").addClass("showedActivity");    
					
				} else {
					
					if($(document).find(".showedActivity").next(".wrap_recents").next(".wrap_recents").length == 1) {  
						$(document).find(".showedActivity").next(".wrap_recents").fadeIn("slow");
						$(document).find(".showedActivity").removeClass("showedActivity").next(".wrap_recents").next(".wrap_recents").fadeIn("slow").addClass("showedActivity");  
					
					}  else {  
						if($(document).find(".showedActivity").next(".wrap_recents").length == 1) {  
							$(document).find(".showedActivity").removeClass("showedActivity").next(".wrap_recents").fadeIn("slow").addClass("showedActivity");  
						}  else {  
							$(document).find("#wrap_see_more_activity").fadeOut("fast");  
							$(document).find(".wrap_recents").removeClass("showedActivity");
						}
					}
					
					
				}
				
				if($(document).find(".showedActivity").next(".wrap_recents").length == 0) {  
					$(document).find("#wrap_see_more_activity").fadeOut("fast");  
					$(document).find(".wrap_recents").removeClass("showedActivity");
				}
				
				$(this).fadeOut("slow");
			
			});
		
		
		});
	
	
	
	};
	
	var reviewCommentClick = function() { 
		$(document).on("click", ".review_comment_button", function(){  
			var comment = $(this).attr("alt");   
			$(this).parent("p").next("div").children(".review_comment").val(comment);   
		});
	};
	
	return {  
		leftSideBarHover:		leftSideBarHover, 
		seeMoreActivity:		seeMoreActivity, 
		reviewCommentClick:		reviewCommentClick
	}

})()  

homePageModule.leftSideBarHover();  
homePageModule.seeMoreActivity();  
homePageModule.reviewCommentClick();

var reviewPageModule = (function() { 
	
	var hasHover = function() {  
		
		var str;  
		var rep;
		
		$(document).on("mouseenter", "a.has_hover img", function(e){  
			str = $(this).attr("src");  
			rep = str.replace("transparent.png", "bold.png");
			$(this).attr("src", rep);
		});    
		
		$(document).on("mouseleave", "a.has_hover img", function(e){  
			str = $(this).attr("src");  
			rep = str.replace("bold.png", "transparent.png");
			$(this).attr("src", rep);
		});
	
	};
	
	var thumbInteractive = function() {  
		
		$(document).find("#review_thumb_images .overlap img").css({ 
			"width": "300px", 
			"height": "300px"
		});
		
		$(document).on("mouseenter", "#review_thumb_images .behind", function(){  
			
			$(this).siblings(".overlap").removeClass("overlap").addClass("behind").children("img").animate({  
				width: "250px", 
				height: "250px"
			}, 800, function() {
				//console.log("complete");
			});
			
			$(this).removeClass("behind").addClass("overlap");  
			
			$(this).children('img').animate({  
				width: "300px", 
				height: "300px"
			}, 800, function() {
				//console.log("complete");
			}); 
			
		});     
	
	};  
	
	return {   
		hasHover:			hasHover,
		thumbInteractive: 	thumbInteractive
	}
	
})()    

reviewPageModule.hasHover();  
reviewPageModule.thumbInteractive();       

var writeAreviewFromHeaderModule = (function() { 
	
	var categoryValue;
	
	var categorySelect = function() { 
		$(document).on("click", "#review_search .category", function(){  
			categoryValue = $(this).val();    
			
			if(categoryValue == "Hotel") { 
				$(document).find("#review_search form p.search_descp").text("Enter Hotel name and city");
				$(document).find("#review_search form #search_category").val("Hotel");
			} else if(categoryValue == "Restaurant") {  
				$(document).find("#review_search form p.search_descp").text("Enter restaurant name and city");  
				$(document).find("#review_search form #search_category").val("Restaurant");
			} else if(categoryValue == "Attraction") { 
				$(document).find("#review_search form p.search_descp").text("Enter attraction name and city");  
				$(document).find("#review_search form #search_category").val("Attraction");
			} else if(categoryValue == "Business") {  
				$(document).find("#review_search form p.search_descp").text("Enter business name and city");  
				$(document).find("#review_search form #search_category").val("Business");
			} else if(categoryValue == "People") {  
				$(document).find("#review_search form p.search_descp").text("Enter people name and city");  
				$(document).find("#review_search form #search_category").val("People");
			} else if(categoryValue == "Website") {  
				$(document).find("#review_search form p.search_descp").text("Enter website name and city");  
				$(document).find("#review_search form #search_category").val("Website");
			} else if(categoryValue == "Others") {  
				$(document).find("#review_search form p.search_descp").text("Enter something and city");  
				$(document).find("#review_search form #search_category").val("Others");
			}     
			
			
		});  
	};  
	
	var searchAutoComplete = function() {  
		
		var findTags = [
			"Hotel del rio",
			"Restaurant de amor",
			"Manila Bay",
			"Facebook",
			"yahoo",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];  
		
		$("#find").autocomplete({
			source: findTags
		});   

		$(document).find(".ui-state-focus").css({  
			"background": "none"
		});		
		
		$(document).find(".ui-menu").css({  
			"border": "1px solid #CCCCC8", 
			"color": "#333333", 
			"font-size": "13px",  
			"border-radius": "0px"
		});         
		
		
		$(document).on("mouseenter", ".ui-menu-item", function(){ 
			$(this).removeClass("ui-state-focus");
		});
		
	};
	
	var writeAReviewSearchSubmit = function() {   
		$(document).on("click", "#write_review_search_button", function(e){ 
			e.preventDefault();  
			$(document).find("#write_review_search_form").trigger("submit");
		});
	};
	
	
	return { 
		categorySelect: 			categorySelect, 
		searchAutoComplete:			searchAutoComplete, 
		writeAReviewSearchSubmit:	writeAReviewSearchSubmit
	}

})()   

writeAreviewFromHeaderModule.categorySelect();  
writeAreviewFromHeaderModule.searchAutoComplete();  
writeAreviewFromHeaderModule.writeAReviewSearchSubmit();


var addAReviewModule = (function() { 

	var formButtonAnswerClick = function() { 
		
		var answerValue;
		
		/* below are for add review hotel */
		$(document).on("click", ".sort_of_trip", function() { 
			$(document).find(".sort_of_trip").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     	
			$(document).find("#sort_of_trip_value").val(answerValue);
		});     
		
		$(document).on("click", ".room_great_view", function() { 
			$(document).find(".room_great_view").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#room_great_views").val(answerValue);
		});    
		
		
		$(document).on("click", ".have_indoor_pool", function() { 
			$(document).find(".have_indoor_pool").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#have_indoor_pools").val(answerValue);
		});  
		
		
		$(document).on("click", ".a_budget_hotel", function() { 
			$(document).find(".a_budget_hotel").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#a_budget_hotels").val(answerValue);
		});    
		
		$(document).on("click", ".a_luxury_hotel", function() { 
			$(document).find(".a_luxury_hotel").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#a_luxury_hotels").val(answerValue);
		});  
		
		$(document).on("click", ".a_romantic_hotel", function() { 
			$(document).find(".a_romantic_hotel").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#a_romantic_hotels").val(answerValue);
		});       
		
		$(document).on("click", ".a_trendy_hotel", function() { 
			$(document).find(".a_trendy_hotel").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#a_trendy_hotels").val(answerValue);
		});     
		
		
		$(document).on("click", ".neighbourhood_known", function() { 
			$(document).find(".neighbourhood_known").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#neighbourhood_knowns").val(answerValue);
		});        
		
		$(document).on("click", ".indoor_wifi", function() { 
			$(document).find(".indoor_wifi").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#indoor_wifis").val(answerValue);
		});    

		/* below are for add review restaurant */   
		
		$(document).on("click", ".sort_of_visit", function() { 
			$(document).find(".sort_of_visit").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#sort_of_visits").val(answerValue);
		});       
		
		$(document).on("click", ".good_for_breakfast", function() { 
			$(document).find(".good_for_breakfast").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#good_for_breakfasts").val(answerValue);
		});     

		$(document).on("click", ".good_for_brunch", function() { 
			$(document).find(".good_for_brunch").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#good_for_brunchs").val(answerValue);
		});      

		$(document).on("click", ".is_family_friend", function() { 
			$(document).find(".is_family_friend").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#is_family_friendly").val(answerValue);
		});    	   

		$(document).on("click", ".take_out_or_food_to_go", function() { 
			$(document).find(".take_out_or_food_to_go").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#take_out_or_food_to_gos").val(answerValue);
		});    	         
		
		$(document).on("click", ".offer_free_wifi", function() { 
			$(document).find(".offer_free_wifi").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#offer_free_wifis").val(answerValue);
		});    	       
		
		$(document).on("click", ".offer_delivery", function() { 
			$(document).find(".offer_delivery").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#offer_deliveries").val(answerValue);
		});      

		$(document).on("click", ".how_expensive", function() { 
			$(document).find(".how_expensive").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#how_expensives").val(answerValue);
		});      

		/* below are for add review attraction */   

		$(document).on("click", ".free_to_public", function() { 
			$(document).find(".free_to_public").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#free_to_publics").val(answerValue);
		});    	  

		$(document).on("click", ".gratuity_suggested", function() { 
			$(document).find(".gratuity_suggested").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#gratuity_suggesteds").val(answerValue);
		});    	     
		
		$(document).on("click", ".good_rainy_day_activity", function() { 
			$(document).find(".good_rainy_day_activity").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#good_rainy_day_activities").val(answerValue);
		});    	   

		$(document).on("click", ".food_available", function() { 
			$(document).find(".food_available").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#food_availables").val(answerValue);
		});    	   

		$(document).on("click", ".car_required", function() { 
			$(document).find(".car_required").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#car_requireds").val(answerValue);
		});    	    

		$(document).on("click", ".access_public_transport", function() { 
			$(document).find(".access_public_transport").css("background-color", "#FFFFFF");
			$(this).css({ 
				"background-color": "#E6E6E6"
			});  
			answerValue = $(this).val();     
			$(document).find("#access_public_transports").val(answerValue);
		});    	   
	
	
	
	};  
	
	return { 
		formButtonAnswerClick:	formButtonAnswerClick
	}  

})()   

addAReviewModule.formButtonAnswerClick();   
































