$(document).on('ready', function() {
    let button = $(".asgusloadercontainer").detach();
    $("#checkout input[name=vat_number]").parent().append(button);

    prestashop.on('thecheckout_updateCart', function() {
        if(button.length <= 0)
        {
            button = $(".asgusloadercontainer").detach();
        }
        if($(".asgusloadercontainer.gus-loaded").length <= 0)
        {
            let test = $(button).appendTo($(".form-group.vat_number"));
            console.log(test);
            test.removeClass("as-hidden").addClass("gus-loaded");
        }
    })

    $("body").on("click", "#asgusloaderbutton", function(e) {
        e.stopPropagation();
        e.preventDefault();
        $('.as-spinner').css({"display": "inline-block"});
        $("#asgusloaderbutton").prop("disabled", true);
        $(".asgusloader-notification").css("opacity", 0);
        $.ajax({
            url: loadGusUrl,
            method: "GET",
            data: {
                nip: $("input[name=vat_number]").val()
            },
            success: function(res) {
                let result = JSON.parse(res);
                if(result.error) {
                    $(".asgusloader-notification").html(result.error);
                    $(".asgusloader-notification").css("opacity", 1);
                }
                else {
                    $("input[name=company]").val(result.company);
                    console.log(result.address);
                    $("input[name=address1]").val(result.address);
                    $("input[name=postcode]").val(result.postcode);
                    $("input[name=city]").val(result.city);
                }

                $(".as-spinner").hide();
                $("#asgusloaderbutton").prop("disabled", false);
            }
        })
    })
})