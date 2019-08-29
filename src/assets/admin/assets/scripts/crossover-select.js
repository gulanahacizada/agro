(function ( $ ) {
    $.fn.crossoverSelect = function( options ) {
        const defaults = {
            data: [],
            className: 'crossover-select',
            height: null
        };

        const settings = $.extend({}, defaults, options);

        this.addClass(settings.className);
        this.css({height: settings.height});

        function populateOptions(arr, targetCrossoverSelect) {
            // arr.sort();
            generateFirstOptionElements(arr, targetCrossoverSelect);
            // pushFirstSelectedOptionElements(arr, targetCrossoverSelect);
        }

        populateOptions(settings.data, this);

        function generateFirstOptionElements(arr, targetCrossoverSelect) {
            for (var i = 0; i < arr.length; i++) {

                var option = document.createElement('OPTION');

                var text = document.createTextNode(arr[i].text);
                option.appendChild(text);

                option.setAttribute('value', arr[i].val);
                option.setAttribute('index', i);

                $(option).appendTo(targetCrossoverSelect);
            }
        }

        function generatePushedOptionElements(arr, targetCrossoverSelect) {
            for (var i = 0; i < arr.length; i++) {
                var option = document.createElement('OPTION');

                var text = document.createTextNode(arr[i].innerText);
                option.appendChild(text);

                option.setAttribute('value', arr[i].value);
                option.setAttribute('index', arr[i].getAttribute('index'));


                $(option).appendTo(targetCrossoverSelect);
            }
        }

        $(document).on('click', '[data-mcb]', function (e) {
            var mcbData = e.currentTarget.dataset['mcb'];
            var mcb = $('#' + mcbData);
            var tcbData = e.currentTarget.dataset['tcb'];


            var selectedOption = $('option:selected', mcb);

            var othCb = $('#' + tcbData);

            generatePushedOptionElements(selectedOption, othCb);

            othCb.html(othCb.find('option').sort((a, b) => {
                a = a.getAttribute('index');
                b = b.getAttribute('index');

                return a > b ? 1 : (b > a ? -1 : 0)
            }));

            selectedOption.remove();
        });

        $(document).on('click', '[data-all-mcb]', function (e) {
            var mcbData = e.currentTarget.dataset['allMcb'];
            var mcb = $('#' + mcbData);
            var tcbData = e.currentTarget.dataset['allTcb'];


            var selectedOption = $('option', mcb);

            var othCb = $('#' + tcbData);

            generatePushedOptionElements(selectedOption, othCb);

            othCb.html(othCb.find('option').sort((a, b) => {
                a = a.getAttribute('index');
                b = b.getAttribute('index');

                return a > b ? 1 : (b > a ? -1 : 0)
            }));

            selectedOption.remove();
        });
    };
}( jQuery ));



$('#cr-main').crossoverSelect({
    data:[
        {text: 'Chaperone', val: '1', selected: true},
        {text: 'Jade Rabbit', val: '2', selected: false},
        {text: 'Wardcliff Coil', val: '3', selected: false},
        {text: 'Tractor Cannon', val: '4', selected: false},
        {text: 'Sweet Business', val: '5', selected: false},
        {text: 'Thorn', val: '6', selected: false},
        {text: 'Graviton Lance', val: '7', selected: false},
        {text: 'Wavesplitter', val: '8', selected: false},
        {text: 'Telesto', val: '9', selected: false},
        {text: 'Black Splindle', val: '10', selected: false},
        {text: 'Polaris Lance', val: '11', selected: false},
        {text: 'Ace of Spades', val: '12', selected: false}
    ],
});
