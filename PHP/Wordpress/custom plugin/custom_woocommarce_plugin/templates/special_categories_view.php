<div class="wrap nosubsub">
<h1 class="wp-heading-inline">Special Product categories</h1>


<hr class="" id="wp__notice-list-uncollapsed">

<div id="ajax-response"></div>

<form class="search-form wp-clearfix" method="get">
<input type="hidden" name="taxonomy" value="product_cat">
<input type="hidden" name="post_type" value="product">

<p class="search-box">
	<label class="screen-reader-text" for="tag-search-input">Search categories:</label>
	<input type="search" id="tag-search-input" name="s" value="">
		<input type="submit" id="search-submit" class="button" value="Search categories"></p>
		
</form>

<div id="col-container" class="wp-clearfix">

<div id="col-left">
<div class="col-wrap">

	<p>Special Product categories for your store can be managed here. To change the order of categories on the front-end you can drag and drop to sort them. To see more categories listed click the "screen options" link at the top-right of this page.</p>

<div class="form-wrap">
<h2>Add new Special category</h2>
<form id="addtag" method="post" action="edit-tags.php" class="validate">
<input type="hidden" name="action" value="add-tag">
<input type="hidden" name="screen" value="edit-product_cat">
<input type="hidden" name="taxonomy" value="product_cat">
<input type="hidden" name="post_type" value="product">
	<input type="hidden" id="_wpnonce_add-tag" name="_wpnonce_add-tag" value="e9579eae58"><input type="hidden" name="_wp_http_referer" value="/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product">
<div class="form-field form-required term-name-wrap">
	<label for="tag-name">Name</label>
	<input name="tag-name" id="tag-name" type="text" value="" size="40" aria-required="true">
	<p>The name is how it appears on your site.</p>
</div>
	<div class="form-field term-slug-wrap">
	<label for="tag-slug">Slug</label>
	<input name="slug" id="tag-slug" type="text" value="" size="40">
	<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
</div>
	<!--<div class="form-field term-parent-wrap">
	<label for="parent">Parent category</label>
		<select name="parent" id="parent" class="postform">
	<option value="-1">None</option>
	<option class="level-0" value="18">CAT1</option>
	<option class="level-0" value="15">Uncategorized</option>
</select>
				<p>Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.</p>
	</div>-->
	<div class="form-field term-description-wrap">
	<label for="tag-description">Description</label>
	<textarea name="description" id="tag-description" rows="5" cols="40"></textarea>
	<p>The description is not prominent by default; however, some themes may show it.</p>
</div>

			<!--<div class="form-field term-display-type-wrap">
			<label for="display_type">Display type</label>
			<select id="display_type" name="display_type" class="postform">
				<option value="">Default</option>
				<option value="products">Products</option>
				<option value="subcategories">Subcategories</option>
				<option value="both">Both</option>
			</select>
		</div>-->
		<div class="form-field term-thumbnail-wrap">
			<label>Thumbnail</label>
			<div id="product_cat_thumbnail" style="float: left; margin-right: 10px;"><img src="http://localhost/wc_add_menu/wp-content/uploads/woocommerce-placeholder.png" width="60px" height="60px"></div>
			<div style="line-height: 60px;">
				<input type="hidden" id="product_cat_thumbnail_id" name="product_cat_thumbnail_id">
				<button type="button" class="upload_image_button button">Upload/Add image</button>
				<button type="button" class="remove_image_button button" style="display: none;">Remove image</button>
			</div>
			<script type="text/javascript">
/*
				// Only show the "remove image" button when needed
				if ( ! jQuery( '#product_cat_thumbnail_id' ).val() ) {
					jQuery( '.remove_image_button' ).hide();
				}

				// Uploading files
				var file_frame;

				jQuery( document ).on( 'click', '.upload_image_button', function( event ) {

					event.preventDefault();

					// If the media frame already exists, reopen it.
					if ( file_frame ) {
						file_frame.open();
						return;
					}

					// Create the media frame.
					file_frame = wp.media.frames.downloadable_file = wp.media({
						title: 'Choose an image',
						button: {
							text: 'Use image'
						},
						multiple: false
					});

					// When an image is selected, run a callback.
					file_frame.on( 'select', function() {
						var attachment           = file_frame.state().get( 'selection' ).first().toJSON();
						var attachment_thumbnail = attachment.sizes.thumbnail || attachment.sizes.full;

						jQuery( '#product_cat_thumbnail_id' ).val( attachment.id );
						jQuery( '#product_cat_thumbnail' ).find( 'img' ).attr( 'src', attachment_thumbnail.url );
						jQuery( '.remove_image_button' ).show();
					});

					// Finally, open the modal.
					file_frame.open();
				});

				jQuery( document ).on( 'click', '.remove_image_button', function() {
					jQuery( '#product_cat_thumbnail' ).find( 'img' ).attr( 'src', 'http://localhost/wc_add_menu/wp-content/uploads/woocommerce-placeholder.png' );
					jQuery( '#product_cat_thumbnail_id' ).val( '' );
					jQuery( '.remove_image_button' ).hide();
					return false;
				});

				jQuery( document ).ajaxComplete( function( event, request, options ) {
					if ( request && 4 === request.readyState && 200 === request.status
						&& options.data && 0 <= options.data.indexOf( 'action=add-tag' ) ) {

						var res = wpAjax.parseAjaxResponse( request.responseXML, 'ajax-response' );
						if ( ! res || res.errors ) {
							return;
						}
						// Clear Thumbnail fields on submit
						jQuery( '#product_cat_thumbnail' ).find( 'img' ).attr( 'src', 'http://localhost/wc_add_menu/wp-content/uploads/woocommerce-placeholder.png' );
						jQuery( '#product_cat_thumbnail_id' ).val( '' );
						jQuery( '.remove_image_button' ).hide();
						// Clear Display type field on submit
						jQuery( '#display_type' ).val( '' );
						return;
					}
				} );
*/
			</script>
			<div class="clear"></div>
		</div>
			<p class="submit">
		<input type="submit" name="submit" id="submit" class="button button-primary" value="Add New Special Category">		<span class="spinner"></span>
	</p>
	</form></div>
</div>
</div><!-- /col-left -->

<div id="col-right">
<div class="col-wrap">


<form id="posts-filter" method="post">
<input type="hidden" name="taxonomy" value="product_cat">
<input type="hidden" name="post_type" value="product">

<input type="hidden" id="_wpnonce" name="_wpnonce" value="7ca4265957"><input type="hidden" name="_wp_http_referer" value="/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product">	<div class="tablenav top">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-top" class="screen-reader-text">Select bulk action</label><select name="action" id="bulk-action-selector-top">
<option value="-1">Bulk Actions</option>
	<option value="delete">Delete</option>
</select>
<input type="submit" id="doaction" class="button action" value="Apply">
		</div>
			<div class="tablenav-pages one-page"><span class="displaying-num">2 items</span>
<span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
<span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Current Page</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> of <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span></div>
		<br class="clear">
	</div>
		<h2 class="screen-reader-text">Categories list</h2><table class="wp-list-table widefat fixed striped tags ui-sortable">
	<thead>
	<tr>
		<td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></td><th scope="col" id="thumb" class="manage-column column-thumb">Image</th><th scope="col" id="name" class="manage-column column-name column-primary sortable desc"><a href="http://localhost/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product&amp;orderby=name&amp;order=asc"><span>Name</span><span class="sorting-indicator"></span></a></th><th scope="col" id="description" class="manage-column column-description sortable desc"><a href="http://localhost/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product&amp;orderby=description&amp;order=asc"><span>Description</span><span class="sorting-indicator"></span></a></th><th scope="col" id="slug" class="manage-column column-slug sortable desc"><a href="http://localhost/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product&amp;orderby=slug&amp;order=asc"><span>Slug</span><span class="sorting-indicator"></span></a></th><th scope="col" id="posts" class="manage-column column-posts num sortable desc"><a href="http://localhost/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product&amp;orderby=count&amp;order=asc"><span>Count</span><span class="sorting-indicator"></span></a></th><th scope="col" id="handle" class="manage-column column-handle" style="display: table-cell;"></th>	</tr>
	</thead>

	<tbody id="the-list" data-wp-lists="list:tag">
			<tr id="tag-15" class="level-0"><th scope="row" class="check-column"><span class="woocommerce-help-tip"></span></th><td class="thumb column-thumb" data-colname="Image"><img src="http://localhost/wc_add_menu/wp-content/uploads/woocommerce-placeholder.png" alt="Thumbnail" class="wp-post-image" height="48" width="48"></td><td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="http://localhost/wc_add_menu/wp-admin/term.php?taxonomy=product_cat&amp;tag_ID=15&amp;post_type=product&amp;wp_http_referer=%2Fwc_add_menu%2Fwp-admin%2Fedit-tags.php%3Ftaxonomy%3Dproduct_cat%26post_type%3Dproduct" aria-label="“Uncategorized” (Edit)">Uncategorized</a></strong><br><div class="hidden" id="inline_15"><div class="name">Uncategorized</div><div class="slug">uncategorized</div><div class="parent">0</div></div><div class="row-actions"><span class="edit"><a href="http://localhost/wc_add_menu/wp-admin/term.php?taxonomy=product_cat&amp;tag_ID=15&amp;post_type=product&amp;wp_http_referer=%2Fwc_add_menu%2Fwp-admin%2Fedit-tags.php%3Ftaxonomy%3Dproduct_cat%26post_type%3Dproduct" aria-label="Edit “Uncategorized”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Uncategorized” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="view"><a href="http://localhost/wc_add_menu/product-category/uncategorized/" aria-label="View “Uncategorized” archive">View</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td><td class="slug column-slug" data-colname="Slug">uncategorized</td><td class="posts column-posts" data-colname="Count"><a href="edit.php?product_cat=uncategorized&amp;post_type=product">1</a></td><td class="handle column-handle ui-sortable-handle" data-colname="" style="display: table-cell;"><input type="hidden" name="term_id" value="15"></td></tr>	<tr id="tag-18" class="level-0"><th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-18">Select CAT1</label><input type="checkbox" name="delete_tags[]" value="18" id="cb-select-18"></th><td class="thumb column-thumb" data-colname="Image"><img src="http://localhost/wc_add_menu/wp-content/uploads/2019/12/&#8234;91-98981-71703&#8236;-20161111_153910-150x150.jpg" alt="Thumbnail" class="wp-post-image" height="48" width="48"></td><td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="http://localhost/wc_add_menu/wp-admin/term.php?taxonomy=product_cat&amp;tag_ID=18&amp;post_type=product&amp;wp_http_referer=%2Fwc_add_menu%2Fwp-admin%2Fedit-tags.php%3Ftaxonomy%3Dproduct_cat%26post_type%3Dproduct" aria-label="“CAT1” (Edit)">CAT1</a></strong><br><div class="hidden" id="inline_18"><div class="name">CAT1</div><div class="slug">cat</div><div class="parent">0</div></div><div class="row-actions"><span class="edit"><a href="http://localhost/wc_add_menu/wp-admin/term.php?taxonomy=product_cat&amp;tag_ID=18&amp;post_type=product&amp;wp_http_referer=%2Fwc_add_menu%2Fwp-admin%2Fedit-tags.php%3Ftaxonomy%3Dproduct_cat%26post_type%3Dproduct" aria-label="Edit “CAT1”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “CAT1” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="edit-tags.php?action=delete&amp;taxonomy=product_cat&amp;tag_ID=18&amp;_wpnonce=ae7e71935d" class="delete-tag aria-button-if-js" aria-label="Delete “CAT1”" role="button">Delete</a> | </span><span class="view"><a href="http://localhost/wc_add_menu/product-category/cat/" aria-label="View “CAT1” archive">View</a> | </span><span class="make_default"><a href="edit-tags.php?action=make_default&amp;taxonomy=product_cat&amp;post_type=product&amp;tag_ID=18&amp;_wpnonce=53e1dbcb62" aria-label="Make “CAT1” the default category">Make default</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="description column-description" data-colname="Description"><p>sdsaa</p>
</td><td class="slug column-slug" data-colname="Slug">cat</td><td class="posts column-posts" data-colname="Count"><a href="edit.php?product_cat=cat&amp;post_type=product">0</a></td><td class="handle column-handle ui-sortable-handle" data-colname="" style="display: table-cell;"><input type="hidden" name="term_id" value="18"></td></tr>	</tbody>

	<tfoot>
	<tr>
		<td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox"></td><th scope="col" class="manage-column column-thumb">Image</th><th scope="col" class="manage-column column-name column-primary sortable desc"><a href="http://localhost/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product&amp;orderby=name&amp;order=asc"><span>Name</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-description sortable desc"><a href="http://localhost/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product&amp;orderby=description&amp;order=asc"><span>Description</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-slug sortable desc"><a href="http://localhost/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product&amp;orderby=slug&amp;order=asc"><span>Slug</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-posts num sortable desc"><a href="http://localhost/wc_add_menu/wp-admin/edit-tags.php?taxonomy=product_cat&amp;post_type=product&amp;orderby=count&amp;order=asc"><span>Count</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-handle" style="display: table-cell;"></th>	</tr>
	</tfoot>

</table>
			<div class="tablenav bottom">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-bottom" class="screen-reader-text">Select bulk action</label><select name="action2" id="bulk-action-selector-bottom">
<option value="-1">Bulk Actions</option>
	<option value="delete">Delete</option>
</select>
<input type="submit" id="doaction2" class="button action" value="Apply">
		</div>
			<div class="tablenav-pages one-page"><span class="displaying-num">2 items</span>
<span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
<span class="screen-reader-text">Current Page</span><span id="table-paging" class="paging-input"><span class="tablenav-paging-text">1 of <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span></div>
		<br class="clear">
	</div>
		
</form>

		<div class="form-wrap edit-term-notes">
			<p>
				<strong>Note:</strong><br>
				Deleting a category does not delete the products in that category. Instead, products that were only assigned to the deleted category are set to the category <strong>Uncategorized</strong>.			</p>
		</div>
		</div>
</div><!-- /col-right -->

</div><!-- /col-container -->

</div>