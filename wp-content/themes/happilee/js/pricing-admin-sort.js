jQuery(document).ready(function ($) {
	var $sortableList = $('tbody#the-list');

	$sortableList.sortable({
		items: 'tr',
		cursor: 'move',
		axis: 'y',
		handle: '.column-title', // Dragging enabled by title column
		update: function (event, ui) {
			var order = [];
			$sortableList.find('tr').each(function (index) {
				var post_id = $(this).attr('id').replace('post-', '');
				order.push({ id: post_id, position: index });
			});

			$.post(
				pricing_sorting.ajaxurl,
				{
					action: 'save_pricing_order',
					order: order,
					security: pricing_sorting.security,
				},
				function (response) {
					console.log(response);
				}
			);
		},
	});
});
