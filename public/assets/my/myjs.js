
$(document).ready(function () {
    function parseTimeStringToMillis(timeString) {
        // Create a Date object from the ISO 8601 string
        const date = new Date(timeString);
        // Return the time in milliseconds
        return date.getTime();
    }
    function parseTimeString(timeString) {
        // Check if timeString is already a valid timestamp (number)
        if (typeof timeString === "number") {
            return timeString; // Assuming it's already in milliseconds
        }

        // Ensure timeString is a string before proceeding
        if (typeof timeString !== "string") {
            return 0; // Return 0 or handle the error appropriately
        }

        // Split the time string into its components
        const timeParts = timeString.match(/(\d+):(\d+):(\d+)\s(AM|PM)/);
        if (!timeParts) {
            return 0; // Return 0 if the timeString doesn't match the expected format
        }

        let hours = parseInt(timeParts[1], 10);
        const minutes = parseInt(timeParts[2], 10);
        const seconds = parseInt(timeParts[3], 10);
        const period = timeParts[4];

        // Convert to 24-hour format
        if (period === "PM" && hours < 12) hours += 12;
        if (period === "AM" && hours === 12) hours = 0;

        // Create a Date object with today's date and the parsed time
        const today = new Date();
        const timeDate = new Date(
            today.getFullYear(),
            today.getMonth(),
            today.getDate(),
            hours,
            minutes,
            seconds
        );

        return timeDate.getTime();
    }

    function formatHours(totalHours) {
        const hours = Math.floor(totalHours);
        const minutes = Math.floor((totalHours - hours) * 60);
        const seconds = Math.round(((totalHours - hours) * 60 - minutes) * 60);
        return `${hours
            .toString()
            .padStart(
                2,
                "0"
            )}:${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`; // Format as H:m:s
    }


});

$(document).ready(function () {

    $(".datepicker").flatpickr();

    $(".date-format").flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });
    $(".time-picker").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "Y-m-d H:i",
    });
    $(".date-time").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    $(".date-range").flatpickr({
        mode: "range",
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });
    $(".date-inline").flatpickr({
        inline: true,
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });

    $("#from_date").on("change", function () {
        var fromDate = $(this).val();
        $("#to_date").attr("min", fromDate);
    });




    $("html").attr(
        "class",
        "color-sidebar sidebarcolor4 color-header headercolor5"
    );
    var csrfToken = $("meta[name=csrf-token]").attr("content");
    var pageTitle = $(".page-title").text().trim();
    var pagenav = $("#active-nav").text().trim();
    $('nav div.menu-title:contains("' + pagenav + '")')
        .parents("a.nav-link")
        .addClass("active");
    $(".card-body .table.table-striped.table-bordered").addClass("table-hover");
    $("#datatable-model").addClass("table-hover");
    $("#example").DataTable();
    var table = $("#example2").DataTable({
        lengthChange: false,
        buttons: [
            {
                extend: "excel",
                text: "Excel",
                className: "btn btn-success me-4 rounded", // Green color and margin-right
                filename: pageTitle,
                exportOptions: {
                    columns: ":visible:not(.export-hide)",
                },
            },
            {
                extend: "pdf",
                text: "PDF",
                className: "btn btn-danger me-4 rounded",
                orientation: "landscape",
                pageSize: "A4",
                exportOptions: {
                    columns: ":visible:not(.export-hide)", // Exclude columns with the 'export-hidden' class
                },
                filename: pageTitle,
                title: pageTitle,
            },
        ],
    });
    table.buttons().container().appendTo("#example2_wrapper .col-md-6:eq(0)");

    $("#example5 thead tr")
        .clone(true)
        .addClass("filters")
        .appendTo("#example5 thead");
    var table = $("#example5").DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        lengthChange: false,
        buttons: [
            {
                extend: "excel",
                text: "Excel",
                className: "btn btn-success me-4 rounded",
                filename: pageTitle,
                title: pageTitle,
                exportOptions: {
                    columns: ":visible:not(.export-hide)",
                },
            },
            {
                extend: "colvis",
                text: "Column Visibility",
                className: "btn btn-info rounded text-dark",
            },
        ],
        initComplete: function () {
            var api = this.api();
            // For each column
            api.columns()
                .eq(0)
                .each(function (colIdx) {
                    var cell = $(".filters th").eq(
                        $(api.column(colIdx).header()).index()
                    );
                    $(cell).html('<input class="form-control" type="text"/>');
                    $(
                        "input",
                        $(".filters th").eq(
                            $(api.column(colIdx).header()).index()
                        )
                    )
                        .off("keyup change")
                        .on("change", function (e) {
                            $(this).attr("title", $(this).val());
                            var regexr = "({search})";
                            var cursorPosition = this.selectionStart;
                            api.column(colIdx)
                                .search(
                                    this.value != ""
                                        ? regexr.replace(
                                              "{search}",
                                              "(((" + this.value + ")))"
                                          )
                                        : "",
                                    this.value != "",
                                    this.value == ""
                                )
                                .draw();
                        })
                        .on("keyup", function (e) {
                            e.stopPropagation();
                            $(this).trigger("change");
                            $(this)
                                .focus()[0]
                                .setSelectionRange(
                                    cursorPosition,
                                    cursorPosition
                                );
                        });
                });
        },
    });
    table.buttons().container().appendTo("#example5_wrapper .col-md-6:eq(0)");

    $(document).on(
        "click",
        ".dt-button.dropdown-item.buttons-columnVisibility",
        function () {
            $(".fixedHeader-locked").hide();
            console.log("hii");
        }
    );

    if ($(".select2").length > 0) {
        $(".select2").each(function () {
            var isMultiSelect = $(this).prop("multiple"); // Check if it's a multi-select
            $(this).select2({
                dropdownParent: $(this).parent(),
                closeOnSelect: !isMultiSelect, // Close on select for single-select, not for multi-select
            });
        });
    }

    if ($(".myalert").find("#showsuccess").length) {
        let mytext = $(".myalert").find("#showsuccess").text();
        swal({
            title: "Successful",
            text: mytext,
            icon: "success",
            button: "Close",
        });
    }
    if ($(".myalert").find("#showerror").length) {
        let mytext = $(".myalert").find("#showerror").text();
        swal({
            title: "Error!",
            text: mytext,
            icon: "info",
            button: "Close",
        });
    }
    $(".counter-value").each(function () {
        $(this)
            .prop("Counter", 0)
            .animate(
                {
                    Counter: $(this).text(),
                },
                {
                    duration: 2000,
                    easing: "swing",
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    },
                }
            );
    });
    $('input[type="text"]:not(.email)').on("input", function () {
        var words = $(this).val().split(" ");
        for (var i = 0; i < words.length; i++) {
            words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
        }
        $(this).val(words.join(" "));
    });

    //added
    $(document).on("click", 'a:contains("Delete")', function (e) {
        e.preventDefault();
        swal({
            title: "Are you sure want to Delete?",
            icon: "assets/images/ques.png",
            buttons: {
                confirm: {
                    text: "Yes",
                    value: true,
                    visible: true,
                    className: "btn btn-danger btn-lg",
                    closeModal: true,
                },
                cancel: {
                    text: "No",
                    value: false,
                    visible: true,
                    className: "btn btn-success btn-lg",
                    closeModal: true,
                },
            },
            dangerMode: true,
        }).then((confirmed) => {
            if (confirmed) {
                window.location.href = $(this).attr("href");
            }
        });
    });


    $("form").submit(function (event) {
        var formid = $(this).attr("id");
        if (!formid) {
            $(this).attr("id", "test_form");
            formid = "test_form";
        }
        // Remove previous error styles
        $("#" + formid + " input").removeClass("formerror");
        $("#" + formid + " .select2-container").removeClass("formerror");
        // Check for empty required fields
        var isValid = true;
        // Validate input elements
        $("#" + formid + " input[required]").each(function () {
            if ($.trim($(this).val()) === "") {
                isValid = false;
                $(this).addClass("formerror");
                $(this)
                    .animate(
                        {
                            marginLeft: "-=10px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "+=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "-=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "+=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "-=10px",
                        },
                        50
                    );
            }
        });
        //Validate select elements
        $("#" + formid + " select[required][multiple]").each(function () {
            if ($(this).val().length === 0) {
                isValid = false;
                $(this).next("span.select2-container").addClass("formerror");
                $(this)
                    .next("span.select2-container")
                    .animate(
                        {
                            marginLeft: "-=10px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "+=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "-=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "+=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "-=10px",
                        },
                        50
                    );
                return false; // Exit the loop early if a required select is empty
            }
        });
        $("#" + formid + " select[required]").each(function () {
            $(this)
                .next("span.select2-container")
                .find(".select2-selection--single")
                .css("border", "1px solid #ced4da");
            if ($(this).val() === "") {
                isValid = false;
                $(this)
                    .next("span.select2-container")
                    .find(".select2-selection--single")
                    .css("border", "none");
                $(this).next("span.select2-container").addClass("formerror");
                $(this)
                    .next("span.select2-container")
                    .animate(
                        {
                            marginLeft: "-=10px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "+=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "-=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "+=20px",
                        },
                        50
                    )
                    .animate(
                        {
                            marginLeft: "-=10px",
                        },
                        50
                    );
                return false; // Exit the loop early if a required select is empty
            }
        });
        if (!isValid) {
            event.preventDefault();
        }
    });
    $("#show_hide_password a").on("click", function (event) {
        event.preventDefault();
        if ($("#show_hide_password input").attr("type") == "text") {
            $("#show_hide_password input").attr("type", "password");
            $("#show_hide_password i").addClass("bx-hide");
            $("#show_hide_password i").removeClass("bx-show");
        } else if ($("#show_hide_password input").attr("type") == "password") {
            $("#show_hide_password input").attr("type", "text");
            $("#show_hide_password i").removeClass("bx-hide");
            $("#show_hide_password i").addClass("bx-show");
        }
    });

    $("#searchbtn").on("click", function () {
        $(this).css("visibility", "hidden");
        setTimeout(() => {
            $(this).css("visibility", "visible");
        }, 5000);
    });
    const gstToState = {
        "01": 4029,
        "02": 4020,
        "03": 4015,
        "04": 4031,
        "05": 4016,
        "06": 4007,
        "07": 4021,
        "08": 4014,
        "09": 4022,
        10: 4037,
        11: 4034,
        12: 4024,
        13: 4018,
        14: 4010,
        15: 4036,
        16: 4038,
        17: 4006,
        18: 4027,
        19: 4853,
        20: 4025,
        21: 4013,
        22: 4031,
        23: 4039,
        24: 4030,
        26: 4033,
        27: 4008,
        29: 4026,
        30: 4009,
        31: 4019,
        32: 4028,
        33: 4035,
        34: 4011,
        35: 4023,
        36: 4012,
        37: 4017,
        38: 4852,
    };

  


 
    // ======================================================================


    $(document).on("click", "#view-pdf-btn", function () {
        var pdf = $(this).attr("data-src");
        $("#example-pdf-model iframe").attr("src", pdf);
    });
});


