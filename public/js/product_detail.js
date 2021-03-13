
          $(function () {
            var sizeValue;
            var quantity;
            $('input.input-qty').each(function () {
                var $this = $(this),
                    qty = $this.parent().find('.is-form'),
                    min = Number($this.attr('min')),
                    max = Number($this.attr('max'))
                console.log(min)
                console.log(max)
                 
                var d = min;
                console.log(d)
                $(qty).on('click', function () {
                    if ($(this).hasClass('minus')) {
                        if (d > min) d += -1
                    } else if ($(this).hasClass('plus')) {
                        var x = Number($this.val()) + 1
                        if (x <= max) d += 1
                    }
                    $this.attr('value', d).val(d)
                })
            });
        });