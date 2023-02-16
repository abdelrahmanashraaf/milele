(function ($) {
    $(document).ready(function () {
        $('.body1 select').first().change(function () {
            $('div.sub').css("display", "flex");
        });
        $('div.sub').change(function () {
            $('div.sub-sub').css("display", "flex");
        });


        $('.body2 select').first().change(function () {
            $('div.sub1').css("display", "flex");
        });
        $('div.sub1').change(function () {
            $('div.sub1-sub').css("display", "flex");
        });
        $('div.sub1-sub').change(function () {
            $('div.sub1-sub-sub').css("display", "flex");
        });


        const indicator = document.querySelectorAll('.indicator');

        let step = 1;

        function handleSubmit(event) {
            let stepClass = `.step-${step}`;
            console.log(stepClass);
            let stepElm = document.querySelector(stepClass);
            console.log(stepElm);
            stepElm.classList.remove('visible__no-animation');
            stepElm.classList.add('slide-out');
            indicator[step - 1].classList.remove('active');
            setTimeout(() => {
                step += 1;
                if (step > 3) {
                    step = 1;
                }
                console.log(step);
                indicator[step - 1].classList.add('active');
                stepClass = `.step-${step}`;
                stepElm = document.querySelector(stepClass);
                stepElm.classList.remove('slide-out');
                stepElm.classList.add('slide-in');
            }, 100)
        }

        document.querySelector('#button-1').addEventListener('click', handleSubmit);

        $('#button-2').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'milele-controller.php',
                dataType: "text",
                data: {
                    update: 0,
                    supplier: $('select[name="supplier"]').val(),
                    whole_seller: $('select[name="whole_seller"]').val(),
                    steering_type: $('select[name="steering_type"]').val(),
                    model: $('select[name="model"]').val(),
                    sfx: $('select[name="sfx"]').val(),
                    variant: $('select[name="variant"]').val(),
                    color: $('select[name="color"]').val()
                },
                success: function (response) {
                    $('.container').after(response);
                    $('.container').css("display", "none");
                }
            });
        });


        function handler_quantity(selectedObject) {
            $.ajax({
                type: "POST",
                url: 'milele-controller.php',
                dataType: "text",
                data: {
                    update: 1,
                    supplier: selectedObject.getAttribute("supplier"),
                    whole_seller: selectedObject.getAttribute("whole_seller"),
                    steering_type: selectedObject.getAttribute("steering_type"),
                    model: selectedObject.getAttribute("model"),
                    sfx: selectedObject.getAttribute("sfx"),
                    variant: selectedObject.getAttribute("variant"),
                    color: selectedObject.getAttribute("color"),
                    year: selectedObject.getAttribute("year"),
                    month: selectedObject.getAttribute("month"),
                    quantity: selectedObject.value,
                },
                success: function (response) {
                    alert(response);
                }
            });
        }

        function addColumn(selectedObject) {
            let foo = prompt('Input month name');
            $('.results-table').find('thead tr').each(function () {
                $(this).find('td').eq(-1).after('<td>' + foo + '</td>');
            });
            $('.results-table').find('tbody tr').each(function () {
                $(this).find('td').eq(-1).after("<td class='input'><input onchange='handler_quantity(this);' supplier='" + $('select[name="supplier"]').val() + "' whole_seller='" + $('select[name="whole_seller"]').val() + "' steering_type='" + $('select[name="steering_type"]').val() + "' model='" + $('select[name="model"]').val() + "' sfx='" + $('select[name="sfx"]').val() + "' variant='" + $('select[name="variant"]').val() + "' color='" + $('select[name="color"]').val() + "' month=" + foo + " year='2023'></td>");
            });

        }

    });
})(jQuery);