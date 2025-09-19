// only for devs
$(".filter-button").on("click", function () {
    $("#search").val("").trigger();
});
$("#search").on("input", function () {
    let keyword = $(this).val().toLowerCase();
    var selected_category = $(".filter-button.active").data("filter");
    if (selected_category == "*") {
        selected_category = ".all-products .col";
        $(".all-products .col").show();
    } else {
        $(selected_category).show();
    }

    $(selected_category).each(function () {
        if (keyword != "") {
            let title = $(this).find("h2").text().toLowerCase();
            if (title.includes(keyword)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        }
    });
});

$(".validation-form").submit(function (e) {
    e.preventDefault();
    var form = $(this);
    var formid = $(this).attr("id");
    console.log(formid);
    $(".btn").prop("disabled", true);
    $(".error-msg").remove();
    var recaptcha = $("#recaptcha").val();

    let fd = new FormData(this);
    fd.append("recaptcha", recaptcha);
    $.ajax({
        type: "post",
        url: form.attr("action"),
        processData: false,
        contentType: false,
        data: fd,
        success: function (res) {
            $(".btn").prop("disabled", false);
            if (res.response == 2) {
                Swal.fire({
                    title: res.title,
                    text: res.message,
                    icon: "error",
                });
                return false;
            } else if (res.response == 1) {
                Swal.fire({
                    title: "Thank You",
                    text: res.message,
                    icon: "success",
                }).then(function () {
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                });
            } else {
                for (var key in res.error) {
                    if (res.error.hasOwnProperty(key)) {
                        if ($(`#${formid} .${key}-error`).length > 0) {
                            $(
                                "<span class='error-msg text-danger small'>" +
                                    res.error[key][0] +
                                    "</span>"
                            ).insertAfter($(`#${formid} .${key}-error`));
                        } else {
                            $(
                                "<span class='error-msg text-danger small'>" +
                                    res.error[key][0] +
                                    "</span>"
                            ).insertAfter(
                                $(
                                    "#" +
                                        formid +
                                        ' .form-control[name="' +
                                        key +
                                        '"]'
                                )
                            );
                        }
                    }
                }
                $("#submit").removeAttr("disabled");
            }
        },
        error: function (err) {
            console.log(err);
        },
    });
});
