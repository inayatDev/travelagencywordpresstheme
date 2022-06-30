jQuery(function ($) {
  console.log("jquery is called now");
  $("body").on("click", ".aw_upload_image_button", function (e) {
    e.preventDefault();
    aw_uploader = wp
      .media({
        title: "Custom image",
        button: {
          text: "Use this image",
        },
        multiple: false,
      })
      .on("select", function () {
        var attachment = aw_uploader.state().get("selection").first().toJSON();
        $("#aw_custom_image").val(attachment.url);
      })
      .open();
  });
});
