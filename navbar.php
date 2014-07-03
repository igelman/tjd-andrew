<header>
	<img src="<?php bloginfo('template_directory') ?>/assets/images/tipjardaily.png" title="TipJar Daily" alt="Logo">
	<div id='searchBox'>
		<div class='searchField'>
			<table>
				<tr>
					<td>
						<label class='sr-only' for='searchMerchants'>Search Merchants</label>
						<input type="text" class="form-control f11" id="searchMerchants" placeholder="Search merchants by name (eq.sephora hp)">
					</td>
					<td class="ml10">
						<button title="Browse Coupons" class="btn">Browse Coupons</button>
					</td>
				</tr>
				<tr>
					<td class="pt3">
						<label class="sr-only" for="subscribeEmail">Search Merchants</label>
						<input type="text" class="form-control" id="subscribeEmail" placeholder="Subscribe via Email">
					</td>
					<td class="pt3">
						<button id='subscribe-button' title="Browse Coupons" class="btn">Subscribe</button>
					</td>
				</tr>
			</table>
		</div> <!-- .searchField -->
	</div> <!-- #searchBox -->
</header>

<div class='navbar navbar-inverse' role='navigation'>
	<div class='container-fluid'>
		<div class='navbar-header'>
			<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
				<span class='sr-only'>Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse">
			<?php
			// Insert menu.php
			get_template_part(menu);
			?>
        </div>
    </div>
</div>   
