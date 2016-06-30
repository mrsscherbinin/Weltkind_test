$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        var id = '#photo_' + $(this).attr('id');
        e.preventDefault();

        var controlForm = $(id),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('Удалить');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});

$(document).on('click', '.show_upphoto', function(e){
        var id = '#for_' + $(this).attr('id'); //for_field_id
                if ($(id).hasClass('active')) {
                    $(id).hide('slow', 'linear');
                    $(id).removeClass('active');
                }else{
                    $(id).show('slow', 'linear');
                    $(id).addClass('active');
                }
            });

var $container = $('.masonry-container');
$container.imagesLoaded( function () {
  $container.masonry({
    columnWidth: '.item',
    itemSelector: '.item'
  });   
});