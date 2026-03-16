jQuery(function($){


    var mediaUploader;

      var mediaUploader;
      $('#client-img-one').click(function(e) {
          e.preventDefault();

          mediaUploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Select'
              },
              multiple: false
          });

          mediaUploader.on('select', function() {
              var attachment = mediaUploader.state().get('selection').first().toJSON();
              $('input[name="client-img-one"]').val(attachment.url);
          });

          mediaUploader.open();
      });

      var mediaUploader;
      $('#service-img').click(function(e) {
          e.preventDefault();

          mediaUploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Select'
              },
              multiple: false
          });

          mediaUploader.on('select', function() {
              var attachment = mediaUploader.state().get('selection').first().toJSON();
              $('input[name="service-img"]').val(attachment.url);
          });

          mediaUploader.open();
      });

      var mediaUploader;
      $('#cat-image-one').click(function(e) {
          e.preventDefault();

          mediaUploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Select'
              },
              multiple: false
          });

          mediaUploader.on('select', function() {
              var attachment = mediaUploader.state().get('selection').first().toJSON();
              $('input[name="category_image_one"]').val(attachment.url);
          });

          mediaUploader.open();
      });

      var mediaUploader;
      $('#cat-image-two').click(function(e) {
          e.preventDefault();

          mediaUploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Select'
              },
              multiple: false
          });

          mediaUploader.on('select', function() {
              var attachment = mediaUploader.state().get('selection').first().toJSON();
              $('input[name="category_image_two"]').val(attachment.url);
          });

          mediaUploader.open();
      });


        var mediaUploader;
        $('#shipping-img1').click(function(e) {
            e.preventDefault();

            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Image',
                button: {
                    text: 'Select'
                },
                multiple: false
            });

            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $('input[name="shipping-img1"]').val(attachment.url);
            });

            mediaUploader.open();
        });

      var mediaUploader;
      $('#shipping-img2').click(function(e) {
          e.preventDefault();

          mediaUploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Select'
              },
              multiple: false
          });

          mediaUploader.on('select', function() {
              var attachment = mediaUploader.state().get('selection').first().toJSON();
              $('input[name="shipping-img2"]').val(attachment.url);
          });

          mediaUploader.open();
      });

      var mediaUploader;
      $('#shipping-img3').click(function(e) {
          e.preventDefault();

          mediaUploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Select'
              },
              multiple: false
          });

          mediaUploader.on('select', function() {
              var attachment = mediaUploader.state().get('selection').first().toJSON();
              $('input[name="shipping-img3"]').val(attachment.url);
          });

          mediaUploader.open();
      });
      var mediaUploader;
      $('#shipping-img4').click(function(e) {
          e.preventDefault();

          mediaUploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Select'
              },
              multiple: false
          });

          mediaUploader.on('select', function() {
              var attachment = mediaUploader.state().get('selection').first().toJSON();
              $('input[name="shipping-img4"]').val(attachment.url);
          });

          mediaUploader.open();
      });


           var mediaUploader;
      $('#slider-meta-img').click(function(e) {
          e.preventDefault();

          mediaUploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Select'
              },
              multiple: false
          });

          mediaUploader.on('select', function() {
              var attachment = mediaUploader.state().get('selection').first().toJSON();
              $('input[name="slider-meta-img"]').val(attachment.url);
          });

          mediaUploader.open();
      });

});
