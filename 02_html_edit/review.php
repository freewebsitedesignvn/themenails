<div class="groupcontent">
  <div class="content">
    <h2>Reviews</h2>
    <div class="groupreviews_bt">
      <div class="reviewsus">Review us on:</div><a class="review_bt yelp" href="http://www.yelp.com/biz/bella-nail-lounge-and-beauty-bar-newark" target="_blank"></a>
      <!-- <a href="#" class="review_bt yellowpages"></a>--><a class="review_bt gp_review" target="_blank" href="https://www.google.com/search?q=bella%20nail%20lounge%20newark&amp;rct=j#lrd=0x89c25379babb2235:0xd63cb4421f58753a,1,"></a><a class="review_bt fb_review" target="_blank" href="https://www.facebook.com/pg/bellanaillounge/?ref=page_internal"></a>
    </div>
    <div class="reviewsgroup">
      <div class="reviews">
        <div class="reviewsimg"><img src="images/Shaketa_Brown.jpg" alt=" "></div>
        <div class="reviewsname"><span>Shaketa Brown</span><br>9/5/2017</div>
        <div class="reviewsyelp"><a href="https://www.facebook.com/pg/bellanaillounge/?ref=page_internal" target="_blank"><img src="images/fb.png" alt=""></a></div>
      </div>
      <div class="reviewsstar"><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></div>
      <div class="reviewstxt">LOVED IT! The entire experience begs to be REPEATED</div>
    </div>
    <div class="reviewsgroup">
      <div class="reviews">
        <div class="reviewsimg"><img src="images/Sharronda_Wheeler.jpg" alt=" "></div>
        <div class="reviewsname"><span>Sharronda Wheeler</span><br>9/3/2017</div>
        <div class="reviewsyelp"><a href="https://www.facebook.com/pg/bellanaillounge/?ref=page_internal" target="_blank"><img src="images/fb.png" alt=""></a></div>
      </div>
      <div class="reviewsstar"><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></div>
      <div class="reviewstxt"></div>
    </div>
    <div class="reviewsgroup">
      <div class="reviews">
        <div class="reviewsimg"><img src="images/Ayodele_M_Okon.jpg" alt=" "></div>
        <div class="reviewsname"><span>Ayodele M. Okon</span><br>9/3/2017</div>
        <div class="reviewsyelp"><a href="https://www.facebook.com/pg/bellanaillounge/?ref=page_internal" target="_blank"><img src="images/fb.png" alt=""></a></div>
      </div>
      <div class="reviewsstar"><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></div>
      <div class="reviewstxt">I've been coming to Bella since December and I couldn't be happier.</div>
    </div>
     <div id="writereviews">
        	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
					<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
					<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
					<style type="text/css">
						 .animated {
						    -webkit-transition: height 0.2s;
						    -moz-transition: height 0.2s;
						    transition: height 0.2s;
						}

						.stars
						{
						    margin: 20px 0;
						    font-size: 24px;
						    color: #d17581;
						}
					</style>
					<!------ Include the above in your HEAD tag ---------->
					
					<div class="container">
						<div class="row" style="margin-top:40px;">
							<div class="col-xs-12 col-md-6">
					    	<div class="well well-sm">
					            <div class="text-right">
					                <a class="btn btn-success btn-green" id="open-review-box">Write a Review</a>
					            </div>
					            <div class="row" id="post-review-box" style="display: none;">
					                <div class="col-xs-12 col-md-12">
					                    <form accept-charset="UTF-8"  method="POST">
			
				                        <input id="" name="action" type="hidden" value="send-review"> 
				                        <input  name="pid" type="hidden" value="{{$place['id']}}"> 
				                        <div class="form-row">
					                        <div class="form-group">
					                        	<label for="" class="col-sm-12 control-label">Full Name:</label>
					                        	<div class="col-sm-12">
					                        		<input type="text" name="fullname" id="" class="form-control" value="" required="required"  title="" placeholder="Enter your full name here ...">
					                        	</div>
					                        </div>
				                        </div>
				                        <div class="form-row">
					                        <div class="form-group">
					                        	<label for="" class="col-sm-12 control-label">Phone:</label>
					                        	<div class="col-sm-12">
					                        		<input type="tel" name="phone" id="" class="form-control" value="" required="required"  pattern="[0-9]{9,}" title="" placeholder="Enter your phone here ...">
					                        	</div>
					                        </div>
				                        </div>
				                        <div class="form-row">
					                        <div class="form-group">
					                        	<label for="" class="col-sm-12 control-label">Email:</label>
					                        	<div class="col-sm-12">
					                        		<input type="mail" name="email" id="" class="form-control" value="" required="required"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="" placeholder="Enter your email here ...">
					                        	</div>
					                        </div>
				                        </div>
				                        <div class="form-row">
					                        <div class="form-group">
					                        	<label for="" class="col-sm-12 control-label">Review content:</label>
					                        	<div class="col-sm-12">
					                        		<textarea class="form-control animated" cols="50" id="new-review" name="description" required="required" placeholder="Enter your review here..." rows="5"></textarea>
					                        	</div>
					                        </div>
				                        </div>
				                        <div class="form-row">
					                        <div class="form-group">
					                        	<label for="" class="col-sm-2 control-label">Vote:</label>
					                        	<div class="col-sm-10">
					                        		<span class="stars starrr" data-rating="5"></span>

				                        			<span style="font-size: 20px;vertical-align: super;">(<input id="ratings-hidden" name="rating" type="text" style="width: 25px;text-align: center;border: none;background: inherit;" value="5">)</span> <span id="errorvote"></span>
					                        	</div>
					                        </div>
				                        </div>
					        
					                        <div class="text-right">
					                            <a class="btn btn-danger btn-lg" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
					                            <span class="glyphicon glyphicon-remove"></span> Cancel</a>
					                            <button class="btn btn-success btn-lg" type="submit" id="btnSubmit"><span class="glyphicon glyphicon-ok"></span> Save</button>
					                        </div>
					                    </form>
					                </div>
					            </div>
					        </div> 
					         
							</div>
						</div>
					</div>
      </div>
  </div>
</div>

<script type="text/javascript" id="formWriteReview">
		(function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

		var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

		$(function(){

		  $('#new-review').autosize({append: "\n"});

		  var reviewBox = $('#post-review-box');
		  var newReview = $('#new-review');
		  var openReviewBtn = $('#open-review-box');
		  var closeReviewBtn = $('#close-review-box');
		  var ratingsField = $('#ratings-hidden');

		  openReviewBtn.click(function(e)
		  {
		    reviewBox.slideDown(400, function()
		      {
		        $('#new-review').trigger('autosize.resize');
		        newReview.focus();
		      });
		    openReviewBtn.fadeOut(100);
		    closeReviewBtn.show();
		  });

		  closeReviewBtn.click(function(e)
		  {
		    e.preventDefault();
		    reviewBox.slideUp(300, function()
		      {
		        newReview.focus();
		        openReviewBtn.fadeIn(200);
		      });
		    closeReviewBtn.hide();
		    
		  });
		  $('.starrr').on('starrr:change', function(e, value){
		    ratingsField.val(value);
		    console.log(value);
		    if (typeof(value) == 'undefined'){
		    	console.log(value);
		    	ratingsField.val(0);
		    	$('button#btnSubmit').attr('disabled', 'disabled');
		    	$('span#errorvote').html('Please Vote!').css('color', 'red');
		    	
		    }
		    else{
		    	$('button#btnSubmit').removeAttr('disabled');
		    	$('span#errorvote').html('').css('color', 'red');
		    }

		  });
		});
	</script>