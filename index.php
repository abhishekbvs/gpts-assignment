<?php
	include 'header.php';
?>
     <script id="jsbin-javascript">
		(function (global) {
			if(typeof (global) === "undefined")
			{
				throw new Error("window is undefined");
			}
			var _hash = "!";
			var noBackPlease = function () {
				global.location.href += "#";
				// making sure we have the fruit available for juice....
				// 50 milliseconds for just once do not cost much (^__^)
				global.setTimeout(function () {
					global.location.href += "!";
				}, 50);
			};	
			// Earlier we had setInerval here....
			global.onhashchange = function () {
				if (global.location.hash !== _hash) {
					global.location.hash = _hash;
				}
			};
			global.onload = function () {        
				noBackPlease();
				// disables backspace on page except on input fields and textarea..
				document.body.onkeydown = function (e) {
					var elm = e.target.nodeName.toLowerCase();
					if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
						e.preventDefault();
					}
					// stopping event bubbling up the DOM tree..
					e.stopPropagation();
				};		
			};
		})(window);
	</script>
    
	<div class="main main-raised"> 
        
		<div class="section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-1"></div>
					<div id="aside" class="col-md-2">
						<div id="get_category">

				        </div>
						<div id="get_brand">

				        </div>
					</div>

					<div id="store" class="col-md-7">
			
						<div class="row" id="product-row">
						<div class="col-md-12 col-xs-12" id="product_msg">
					</div>

							<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
include "footer.php";
?>	
		